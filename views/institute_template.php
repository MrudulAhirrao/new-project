<?php
// institute_template.php
// Expected variables: $sheetName, $pageTitle, $instituteLabel, $fallbackRow
$cacheFile = __DIR__ . '/Instute data/' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($sheetName)) . '.json';
file_put_contents(__DIR__ . '/Instute data/template.log', date('Y-m-d H:i:s') . ' - Cache file: ' . $cacheFile . ' Exists: ' . (file_exists($cacheFile) ? 'Yes' : 'No') . PHP_EOL, FILE_APPEND);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>" />
    <meta property="og:description" content="With over 23 years of expertise, our team of 50+ experienced NEET counsellors." />
    <meta property="og:image" content="https://v4edusolution.com/img/logo.png" />
    <meta property="og:url" content="https://v4edusolution.com/" />
    <meta property="og:type" content="website" />
    <title>NEET Counsellor - <?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="stylesheet" href="../in/in.css">
</head>

<body>
    <!-- loader -->
    <div class="loader-wrapper" style="display: none;">
        <div class="loader">
            <img src="img/logo.png" alt="">
        </div>
    </div>
    
    <?php include(__DIR__ . '/include/header.php'); ?>
    
    <!-- Main Container -->
    <div class="institutes">
        <!-- Filter Section -->
        <section class="filter-section">
            <div class="filter-container">
                <h1 class="page-title"><?php echo htmlspecialchars($pageTitle); ?></h1>
                <div class="filter-controls">
                    <div class="filter-group">
                        <label for="institutes-count" style="font-size: x-large;"><?php echo htmlspecialchars($instituteLabel); ?></label>
                        <?php
                        $instituteCount = file_exists($cacheFile) ? count(json_decode(file_get_contents($cacheFile), true)) : 0;
                        file_put_contents(__DIR__ . '/Instute data/template.log', date('Y-m-d H:i:s') . ' - JSON decode result: ' . (file_exists($cacheFile) ? (json_last_error() === JSON_ERROR_NONE ? 'Valid' : 'Invalid') : 'File not found') . PHP_EOL, FILE_APPEND);
                        ?>
                        <input type="number" id="institutes-count" value="<?php echo $instituteCount; ?>" class="number-input">
                    </div>
                    <div class="filter-group">
                        <label for="items-per-page" style="font-size: x-large;">Showing</label>
                        <select id="items-per-page" class="dropdown-select">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="all">All</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- Data Table Container -->
        <div class="table-container">
            <!-- Table Header -->
            <div class="table-header">
                <div class="header-cell state-col">State / UT</div>
                <div class="header-cell name-col">College Name and Address</div>
                <div class="header-cell university-col">Affiliated University Name</div>
                <div class="header-cell year-col">Establishment Year</div>
                <div class="header-cell seats-col">MBBS Seats</div>
            </div>

            <!-- Table Rows (Dynamic from Cache) -->
            <?php
            if (file_exists($cacheFile)) {
                $data = json_decode(file_get_contents($cacheFile), true);
                if ($data === null) {
                    file_put_contents(__DIR__ . '/template.log', date('Y-m-d H:i:s') . ' - JSON decode failed for ' . $cacheFile . ': ' . json_last_error_msg() . PHP_EOL, FILE_APPEND);
                } else {
                    foreach ($data as $index => $row) {
                        echo '<div class="table-row" data-row="' . ($index + 1) . '">';
                        echo '<div class="table-cell state-col">' . htmlspecialchars($row[0]) . '</div>';
                        echo '<div class="table-cell name-col">' . htmlspecialchars($row[1]) . '</div>';
                        echo '<div class="table-cell university-col">' . htmlspecialchars($row[2]) . '</div>';
                        echo '<div class="table-cell year-col">' . htmlspecialchars($row[4]) . '</div>';
                        echo '<div class="table-cell seats-col">' . htmlspecialchars($row[5]) . '</div>';
                        echo '</div>';
                    }
                }
            } else {
                file_put_contents(__DIR__ . '/template.log', date('Y-m-d H:i:s') . ' - Cache file not found: ' . $cacheFile . PHP_EOL, FILE_APPEND);
                // Fallback static row
                echo '<div class="table-row" data-row="1">';
                foreach ($fallbackRow as $cell) {
                    echo '<div class="table-cell">' . htmlspecialchars($cell) . '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>

        <!-- Footer Section -->
        <?php include(__DIR__ . "/include/footer.php"); ?>
    </div>

    <!-- JavaScript for Mobile Menu -->
    <script src="../in/script.js"></script>
</body>

</html>