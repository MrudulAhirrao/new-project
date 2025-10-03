<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$post = file_get_contents('php://input');
error_log("Received POST data: " . $post);
$json = json_decode($post, true);
error_log("Decoded JSON: " . print_r($json, true));

if ($json && isset($json['sheet']) && isset($json['data']) && is_array($json['data'])) {
    $sheet = $json['sheet'];
    $data = $json['data'];
    usort($data, function($a, $b) {
        return $a['Card_ID'] <=> $b['Card_ID'];
    });
    $json_file = $sheet . '_data.json';
    $directory = dirname($json_file);
    if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
        error_log("Failed to create directory: $directory");
    }
    if (file_put_contents($json_file, json_encode($data))) {
        echo 'Data updated successfully';
    } else {
        error_log("Failed to write $json_file. Check permissions.");
        echo 'Failed to write JSON file';
    }
} else {
    error_log("Invalid payload: " . $post);
    echo 'Invalid payload';
}
?>