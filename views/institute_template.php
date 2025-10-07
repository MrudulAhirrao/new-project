<?php
// institute_template.php
// Expected variables: $sheetName, $pageTitle, $instituteLabel, $fallbackRow
$cacheFile = __DIR__ . '/../Instute_data/' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($sheetName)) . '.json';
file_put_contents(__DIR__ . '/../Instute_data/template.log', date('Y-m-d H:i:s') . ' - Cache file: ' . $cacheFile . ' Exists: ' . (file_exists($cacheFile) ? 'Yes' : 'No') . PHP_EOL, FILE_APPEND);

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
    
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../in/in.css">

    <style>
        .filter-bar {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif;
            color: #212529;
        }
        .sort-control, .show-control {
            font-size: 1rem;
        }
        .filter-box {
        background-color: #e7f1ff;
        border-radius: 0.5rem;
        font-weight: 500;
        border: none;
        outline: none;
    }
        .sort-arrows {
            line-height: 0.7;
            font-size: 0.8rem;
            color: #0d6efd;
        }
        .dropdown-toggle.btn-filter {
            background-color: #e7f1ff;
            border: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
        }
        .dropdown-toggle.btn-filter:hover, .dropdown-toggle.btn-filter:focus {
            background-color: #cfe2ff;
            box-shadow: none;
        }
        .dropdown-toggle.btn-filter::after {
            color: #0d6efd;
        }
 #institutes-count {
        width: 75px; /* A bit of space for arrows */
        text-align: center;
        padding: 0.5rem;
    }
    #institutes-count::-webkit-inner-spin-button,
    #institutes-count::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    #institutes-count {
        -moz-appearance: textfield; /* For Firefox */
    }

    /* Styles for the custom arrow buttons */
    .arrow-control {
        display: flex;
        flex-direction: column;
        margin-left: 0.5rem; /* Space between input and arrows */
    }
    .arrow-btn {
        padding: 0;
        line-height: 0.7; /* Brings arrows closer together */
        font-size: 1.25rem; /* Makes icons bigger */
        color: #0a2342; /* Dark blue color from image */
        cursor: pointer;
    }
    .arrow-btn:hover {
        color: #0056b3; /* A slightly lighter blue for hover effect */
    }
        
    </style>
</head>

<body>
    <div class="loader-wrapper" style="display: none;">
        <div class="loader">
            <img src="../assets/img/logo.png" alt="">
        </div>
    </div>
    
    <?php include(__DIR__ . '/../includes/header.php'); ?>
    
    <div class="institutes">
        
       <section class="container my-4">
    <div class="d-flex justify-content-between align-items-center">

        <h1 class="h2 fw-bold mb-0">All India Quota Government Medical Institution 2024</h1>

        <div class="d-flex align-items-center">

            <div class="d-flex align-items-center me-4">
                <span>State Govt. Inst.</span>
                <?php
                    $instituteCount = file_exists($cacheFile) ? count(json_decode(file_get_contents($cacheFile), true)) : 0;
                ?>
                
                <input type="number" id="institutes-count" class="filter-box ms-2" value="<?php echo $instituteCount; ?>">
                
                <div class="arrow-control">
                    <i id="increase-btn" class="bi bi-caret-up-fill arrow-btn"></i>
                    <i id="decrease-btn" class="bi bi-caret-down-fill arrow-btn"></i>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <span>Showing</span>
                <select id="items-per-page" class="filter-box ms-2" style="padding: 0.5rem 1rem;">
                    <option value="10">10</option>
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



        <div class="table-container">
            <div class="table-header">
                <div class="header-cell state-col">State / UT</div>
                <div class="header-cell name-col">College Name and Address</div>
                <div class="header-cell university-col">Affiliated University Name</div>
                <div class="header-cell year-col">Establishment Year</div>
                <div class="header-cell seats-col">MBBS Seats</div>
            </div>

            <?php
            if (file_exists($cacheFile)) {
                $data = json_decode(file_get_contents($cacheFile), true);
                if ($data === null) {
                    file_put_contents(__DIR__ . '/../instute_data/template.log', date('Y-m-d H:i:s') . ' - JSON decode failed for ' . $cacheFile . ': ' . json_last_error_msg() . PHP_EOL, FILE_APPEND);
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
                file_put_contents(__DIR__ . '/../Instute_data/template.log', date('Y-m-d H:i:s') . ' - Cache file not found: ' . $cacheFile . PHP_EOL, FILE_APPEND);
                // Fallback static row
                echo '<div class="table-row" data-row="1">';
                foreach ($fallbackRow as $cell) {
                    echo '<div class="table-cell">' . htmlspecialchars($cell) . '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>

        <?php include(__DIR__ . "/../includes/footer.php"); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../in/script.js"></script>
    <script>
        // You may need to add this to your script.js file to make the dropdown functional
        document.addEventListener('DOMContentLoaded', function () {
            const itemsPerPageBtn = document.getElementById('items-per-page-btn');
            const itemsPerPageMenu = document.getElementById('items-per-page-menu');
            
            if(itemsPerPageMenu && itemsPerPageBtn) {
                itemsPerPageMenu.addEventListener('click', function (e) {
                    if (e.target.classList.contains('dropdown-item')) {
                        const selectedValue = e.target.getAttribute('data-value');
                        itemsPerPageBtn.textContent = selectedValue;
                        // From here, you can trigger your table filtering/pagination logic
                        console.log('Selected items per page:', selectedValue);
                    }
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
    const numberInput = document.getElementById('institutes-count');
    const increaseBtn = document.getElementById('increase-btn');
    const decreaseBtn = document.getElementById('decrease-btn');

    // Increase the number when the up arrow is clicked
    increaseBtn.addEventListener('click', function() {
        numberInput.stepUp();
    });

    // Decrease the number when the down arrow is clicked
    decreaseBtn.addEventListener('click', function() {
        numberInput.stepDown();
    });
});
    </script>
</body>
</html>