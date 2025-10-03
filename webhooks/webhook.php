<?php
// Secret token for validation
$secretToken = '1N9pSWds7koEr9fosYEyD795k4j2pv6T1ERaRTS0XYoM'; // Same as in Apps Script

// Log function
function logMessage($message) {
    file_put_contents(__DIR__ . '/Instute data/webhook.log', date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL, FILE_APPEND);
}

// Read incoming webhook data
$input = file_get_contents('php://input');
logMessage('Received input: ' . $input);
$data = json_decode($input, true);

// Validate token
if (!isset($data['token']) || $data['token'] !== $secretToken) {
    logMessage('Invalid token');
    http_response_code(403);
    echo json_encode(['error' => 'Invalid token']);
    exit;
}

// Validate data and sheet name
if (!isset($data['data']) || !is_array($data['data']) || !isset($data['sheetName'])) {
    logMessage('Invalid data or sheet name');
    http_response_code(400);
    echo json_encode(['error' => 'Invalid data or sheet name']);
    exit;
}

// Sanitize sheet name to create a safe cache file name
$sheetName = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($data['sheetName']));
$cacheFile = __DIR__ . '/Instute data/' . $sheetName . '.json'; // Save to Instute data folder
logMessage('Saving to cache file: ' . $cacheFile);
logMessage('Data rows: ' . count($data['data']));

// Sanitize and prepare data
$cleanData = [];
foreach ($data['data'] as $row) {
    if (count($row) >= 6) {
        $cleanRow = array_map('htmlspecialchars', array_slice($row, 0, 6));
        $cleanData[] = $cleanRow;
    }
}
logMessage('Cleaned data rows: ' . count($cleanData));

// Check if data is empty
if (empty($cleanData)) {
    logMessage('No valid data to save');
    http_response_code(400);
    echo json_encode(['error' => 'No valid data to save']);
    exit;
}

// Save to cache file
if (file_put_contents($cacheFile, json_encode($cleanData, JSON_PRETTY_PRINT))) {
    logMessage('Successfully saved to ' . $cacheFile);
    http_response_code(200);
    echo json_encode(['status' => 'success']);
} else {
    logMessage('Failed to save to ' . $cacheFile);
    http_response_code(500);
    echo json_encode(['error' => 'Failed to save data']);
}
?>