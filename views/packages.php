<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="NEET Counsellor MBBS Admissions" />
    <meta property="og:description"
        content="With over 23 years of expertise, our team of 50+ experienced NEET counsellors." />
    <meta property="og:image" content="https://v4edusolution.com/img/logo.png" />
    <meta property="og:url" content="https://v4edusolution.com/" />
    <meta property="og:url" content="https://v4edusolution.com" />
    <meta property="og:type" content="website" />
    <title>NEET Counsellor MBBS Admissions</title>
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


</head>

<body>
    <!-- loader  -->
    <div class="loader-wrapper" style="display: none;">
        <div class="loader">
            <img src="img/logo.png" alt="">
        </div>
    </div>

    <?php include('include/header.php'); ?>
    <link rel="stylesheet" href="pack.css">
    <script src="pack.js"></script>
    <!--UG Page-->
    <main id="ug-main" class="flex-grow">
        <section class="max-w-6xl mx-auto px-p sm:px-6 lg:px-8 py-10 mb-5">
            <div class="text-center mb-8 my-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Explore Our Counselling Packages</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Unlock premium tools and personalized insights designed to
                    make your college prediction and planning journey smooth and accurate.</p>
            </div>
            <div class="flex justify-center mb-6 space-x-6 py-5">
                <button id="ug-btn"
                    class="flex items-center space-x-2 px-8 py-3 text-lg font-medium rounded-full transition-all duration-300 ease-in-out transform bg-transparent text-gray-600 hover:bg-gray-100 hover:text-primarys hover:scale-105 hover:shadow-md border-2 border-transparent">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z">
                        </path>
                    </svg><span>UG</span>
                </button>
                <button id="pg-btn"
                    class="flex items-center space-x-2 px-8 py-3 text-lg font-medium rounded-full transition-all duration-300 ease-in-out transform bg-transparent text-gray-600 hover:bg-gray-100 hover:text-primarys hover:scale-105 hover:shadow-md border-2 border-transparent">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z">
                        </path>
                    </svg><span>PG</span>
                </button>
            </div>
            <div id="ug-section" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-6">
                <?php
                // Load UG data from JSON file updated via webhook
                $ug_json_path = 'UG_data.json';
                if (file_exists($ug_json_path)) {
                    $ug_data = json_decode(file_get_contents($ug_json_path), true);
                    foreach ($ug_data as $card) {
                        $features = explode(';', $card['Features']);
                ?>
                <!-- Dynamic UG Card -->
                <div class="pricing-card">
                    <div class="badge-wrapper">
                        <span class="pack-badge"><?php echo htmlspecialchars($card['Badge']); ?></span>
                    </div>
                    <div class="main-card">
                        <div class="card-tital">
                            <h2><?php echo htmlspecialchars($card['Title']); ?></h2>
                            <div class="price-section">
                                <span class="price"><?php echo htmlspecialchars($card['Price']); ?></span>
                                <span class="period line-through"><?php echo htmlspecialchars($card['Old_Price']); ?></span>
                            </div>
                        </div>
                        <hr class="divider">
                        <ul class="features">
                            <?php foreach ($features as $feature) { ?>
                            <li class="feature">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.5" cy="10.5" r="10.5" fill="#00CF7B" />
                                    <path d="M6 11.5L9 14.5L15 8.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg><?php echo htmlspecialchars(trim($feature)); ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <a href="<?php echo htmlspecialchars($card['Purchase_Link']); ?>" class="purchase-btn">
                            <?php echo htmlspecialchars($card['Purchase_Text']); ?> <img src="/img/arrow-right.png" alt="Arrow">
                        </a>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo '<p class="text-center text-red-500">UG data not available. Please check webhook setup.</p>';
                }
                ?>
            </div>
            <div id="pg-section" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-6"
                style="display: none;">
                <?php
                // Load PG data from JSON file updated via webhook
                $pg_json_path = 'PG_data.json';
                if (file_exists($pg_json_path)) {
                    $pg_data = json_decode(file_get_contents($pg_json_path), true);
                    foreach ($pg_data as $card) {
                        $features = explode(';', $card['Features']);
                ?>
                <!-- Dynamic PG Card -->
                <div class="pricing-card">
                    <div class="badge-wrapper">
                        <span class="pack-badge"><?php echo htmlspecialchars($card['Badge']); ?></span>
                    </div>
                    <div class="main-card">
                        <div class="card-tital">
                            <h2><?php echo htmlspecialchars($card['Title']); ?></h2>
                            <div class="price-section">
                                <span class="price"><?php echo htmlspecialchars($card['Price']); ?></span>
                                <span class="period line-through"><?php echo htmlspecialchars($card['Old_Price']); ?></span>
                            </div>
                        </div>
                        <hr class="divider">
                        <ul class="features">
                            <?php foreach ($features as $feature) { ?>
                            <li class="feature">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <circle cx="10.5" cy="10.5" r="10.5" fill="#00CF7B" />
                                    <path d="M6 11.5L9 14.5L15 8.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg><?php echo htmlspecialchars(trim($feature)); ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <a href="<?php echo htmlspecialchars($card['Purchase_Link']); ?>" class="purchase-btn">
                            <?php echo htmlspecialchars($card['Purchase_Text']); ?> <img src="/img/arrow-right.png" alt="Arrow">
                        </a>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo '<p class="text-center text-red-500">PG data not available. Please check webhook setup.</p>';
                }
                ?>
            </div>
        </section>
        <section class="bg-[#C6F9E7] py-14 px-p md:px-10 lg:px-24">
            <h2
                class="text-center text-2xl md:text-3xl font-bold text-black mb-12 flex items-center justify-center gap-2">
                <span class="animate-pulse text-gray-500">✴</span>What We Offer With Your Subscription<span
                    class="animate-pulse text-gray-500">✴</span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 max-w-6xl mx-auto">
                <div
                    class="bg-white rounded-2xl shadow-xl px-10 py-12 flex flex-col items-start gap-6 transition-all hover:shadow-2xl">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-user w-16 h-16 text-green-600">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg></div>
                    <div>
                        <h3 class="text-xl font-semibold text-black mb-2">Expert Guidance at Every Step</h3>
                        <p class="text-base text-gray-800 leading-relaxed">Gain access to professional support to help
                            you make confident, informed decisions throughout your journey.</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-xl px-10 py-12 flex flex-col items-start gap-6 transition-all hover:shadow-2xl">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-graduation-cap w-16 h-16 text-orange-500">
                            <path
                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                            </path>
                            <path d="M22 10v6"></path>
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                        </svg></div>
                    <div>
                        <h3 class="text-xl font-semibold text-black mb-2">Tailored Recommendations</h3>
                        <p class="text-base text-gray-800 leading-relaxed">Receive personalized insights and suggestions
                            based on your preferences, goals, and performance data.</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-xl px-10 py-12 flex flex-col items-start gap-6 transition-all hover:shadow-2xl">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-lightbulb w-16 h-16 text-yellow-500">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                            </path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg></div>
                    <div>
                        <h3 class="text-xl font-semibold text-black mb-2">In-Depth Insights &amp; Analysis</h3>
                        <p class="text-base text-gray-800 leading-relaxed">Stay ahead with accurate, up-to-date data on
                            opportunities, trends, eligibility, and key decision factors.</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-xl px-10 py-12 flex flex-col items-start gap-6 transition-all hover:shadow-2xl">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-clock w-16 h-16 text-blue-500">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg></div>
                    <div>
                        <h3 class="text-xl font-semibold text-black mb-2">End-to-End Support</h3>
                        <p class="text-base text-gray-800 leading-relaxed">Get assistance with everything from planning
                            to execution, ensuring a smooth and stress-free experience.</p>
                    </div>
                </div>
            </div>
        </section>
    </main><!--/$-->
    </div>

    <!-- ======= Footer ======= -->
    <?php include('include/footer.php'); ?>
</body>

</html>