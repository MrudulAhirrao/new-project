<?php
// --- Page-specific variables for SEO ---
$pageTitle = "Counselling Packages | V4Edu Solution";
$metaDescription = "Explore our NEET UG and PG counselling packages. From free rank predictors to premium, dedicated counsellor support, choose the plan that fits your needs.";

// --- Include the master header ---
include __DIR__ . '/../includes/header.php';
?>

<style>
    .pricing-container {
        position: relative;
        margin-top: 2.5rem;
        /* Make space for the badge */
        height: 100%;
    }

    .best-seller-badge {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        background-color: #00CF7B;
        color: white;
        font-weight: 600;
        padding: 0.6rem 1.5rem;
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0, 207, 123, 0.4);
        white-space: nowrap;
    }

    .pricing-card {
        border: none;
        border-radius: 2rem !important;
        padding-top: 3rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .pricing-card .card-body {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .plan-title {
        font-size: 2.75rem;
        font-weight: 500;
    }

    .price-value {
        font-size: 15px;
        font-weight: 700;
        color: #2563eb;
        background-color: #eff6ff;
        border-radius: 1rem;
        padding: 0.75rem 1.5rem;
        display: inline-flex;
        align-items: center;
    }

    .feature-list-item .bi {
        color: #00CF7B;
    }

    .btn-purchase {
        background-color: #0d6efd;
        border-color: #0d6efd;
        font-weight: 600;
        padding: 1rem 0;
        font-size: 1.25rem;
        border-radius: 1rem;
        margin-top: auto;
    }

    /* Toggle Buttons Style */
    .toggle-buttons .btn {
        border-radius: 50px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .toggle-buttons .btn.active {
        background-color: #0d6efd;
        color: white;
        box-shadow: 0 4px 15px rgba(13, 110, 253, 0.4);
    }

    .custom-hover {
        transition: all 0.3s ease-in-out;
    }

    .custom-hover:hover {
        background-color: #f8f9fa;
        color: #00CF7B;
        transform: scale(1.05);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    /* Responsive Styles */
    @media (max-width: 767.98px) {
        .plan-title {
            font-size: 2rem;
        }

        .price-value {
            font-size: 1.75rem;
            padding: 0.5rem 1rem;
        }

        .best-seller-badge {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">


<main class="flex-grow">
    <section class="container py-5 mb-5">
        <div class="text-center mb-5 mt-4">
            <h1 class="display-5 fw-bold text-dark mb-2">Explore Our Counselling Packages</h1>
            <p class="text-secondary fs-5 mx-auto" style="max-width: 40rem;">Unlock premium tools and personalized insights designed to make your college prediction and planning journey smooth and accurate.</p>
        </div>

        <div class="d-flex justify-content-center mb-4 py-4 gap-3">
            <button id="ug-btn" class="btn btn-outline-secondary rounded-pill px-4 py-2 d-flex align-items-center gap-2 custom-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                    <path d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"></path>
                </svg>
                <span>UG</span>
            </button>

            <button id="pg-btn" class="btn btn-outline-secondary rounded-pill px-4 py-2 d-flex align-items-center gap-2 custom-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                    <path d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"></path>
                </svg>
                <span>PG</span>
            </button>
        </div>


        <div id="ug-section">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
                <?php
                $ug_json_path = __DIR__ . '/../data/UG_data.json';
                if (file_exists($ug_json_path)) {
                    $ug_data = json_decode(file_get_contents($ug_json_path), true);
                    foreach ($ug_data as $card) {
                ?>
                        <div class="col">
                            <div class="pricing-container">
                                <div class="best-seller-badge"><?php echo htmlspecialchars($card['Badge']); ?></div>
                                <div class="card pricing-card shadow-lg">
                                    <div class="card-body p-4 p-md-4">
                                        <div class="d-flex align-items-center mb-4 justify-content-between">
                                            <div>

                                                <?php
                                                $title = htmlspecialchars($card['Title']); // e.g., "Rank Predictor"
                                                $parts = explode(' ', $title, 2); // split into two parts, max 2
                                                $firstWord = $parts[0]; // "Rank"
                                                $rest = $parts[1] ?? ''; // "Predictor", if exists
                                                ?>
                                                <h2 class="plan-title mb-1"><?php echo $firstWord; ?></h2>
                                                <div class="text-muted" style="font-size: 1rem;"><?php echo $rest; ?></div>
                                            </div>
                                            <div class="price-value ms-3">
                                                <span><?php echo htmlspecialchars($card['Price']); ?></span>
                                                <span class="text-muted text-decoration-line-through ms-2"><?php echo htmlspecialchars($card['Old_Price']); ?></span>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <ul class="list-unstyled mb-3 d-grid gap-3">
                                            <?php
                                            $features = explode(';', $card['Features']);
                                            foreach ($features as $feature) {
                                            ?>
                                                <li class="d-flex align-items-center feature-list-item">

                                                    <svg class="me-3" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="21" height="21" rx="10.5" fill="#00CF7B" />
                                                        <path d="M15.6 7L9 13.6L6 10.6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <span><?php echo htmlspecialchars(trim($feature)); ?></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <a href="<?php echo htmlspecialchars($card['Purchase_Link']); ?>" class="btn btn-primary btn-purchase w-100">
                                            <?php echo htmlspecialchars($card['Purchase_Text']); ?> <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo '<p class="text-center text-danger">UG data not available.</p>';
                }
                ?>
            </div>
        </div>

        <div id="pg-section" style="display: none;">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
                <?php
                $pg_json_path = __DIR__ . '/../data/PG_data.json';
                if (file_exists($pg_json_path)) {
                    $pg_data = json_decode(file_get_contents($pg_json_path), true);
                    foreach ($pg_data as $card) {
                ?>
                        <div class="col">
                            <div class="pricing-container">
                                <div class="best-seller-badge"><?php echo htmlspecialchars($card['Badge']); ?></div>
                                <div class="card pricing-card shadow-lg">
                                    <div class="card-body p-4 p-md-4">
                                        <div class="d-flex align-items-center mb-4 justify-content-between">
                                            <div>

                                                <?php
                                                $title = htmlspecialchars($card['Title']); // e.g., "Rank Predictor"
                                                $parts = explode(' ', $title, 2); // split into two parts, max 2
                                                $firstWord = $parts[0]; // "Rank"
                                                $rest = $parts[1] ?? ''; // "Predictor", if exists
                                                ?>
                                                <h2 class="plan-title mb-1"><?php echo $firstWord; ?></h2>
                                                <div class="text-muted" style="font-size: 1rem;"><?php echo $rest; ?></div>
                                            </div>
                                            <div class="price-value ms-3">
                                                <span><?php echo htmlspecialchars($card['Price']); ?></span>
                                                <span class="text-muted text-decoration-line-through ms-2"><?php echo htmlspecialchars($card['Old_Price']); ?></span>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <ul class="list-unstyled mb-3 d-grid gap-3">
                                            <?php
                                            $features = explode(';', $card['Features']);
                                            foreach ($features as $feature) {
                                            ?>
                                                <li class="d-flex align-items-center feature-list-item">

                                                    <svg class="me-3" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="21" height="21" rx="10.5" fill="#00CF7B" />
                                                        <path d="M15.6 7L9 13.6L6 10.6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <span><?php echo htmlspecialchars(trim($feature)); ?></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                        <a href="<?php echo htmlspecialchars($card['Purchase_Link']); ?>" class="btn btn-primary btn-purchase w-100">
                                            <?php echo htmlspecialchars($card['Purchase_Text']); ?> <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo '<p class="text-center text-danger">PG data not available.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #C6F9E7;">
        <div class="container">
            <h2 class="text-center text-2xl md:text-3xl font-normal text-black mb-5 flex items-center justify-center gap-2">
                <span class="text-secondary">✴</span>What We Offer With Your Subscription<span
                    class="text-secondary">✴</span>
            </h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-16 h-16 text-green-600" color="#16a34a">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <h3 class="fs-4 fw-semibold text-dark my-3">Expert Guidance at Every Step</h3>
                            <p class="text-secondary">Gain access to professional support to help you make confident, informed decisions throughout your journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap w-16 h-16 text-orange-500" color="#f97316">
                                <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                </path>
                                <path d="M22 10v6"></path>
                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                            </svg>
                            <h3 class="fs-4 fw-semibold text-dark my-3">Tailored Recommendations</h3>
                            <p class="text-secondary">Receive personalized insights and suggestions based on your preferences, goals, and performance data.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-16 h-16 text-yellow-500" color="#eab308">
                                <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                </path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg>
                            <h3 class="fs-4 fw-semibold text-dark my-3">In-Depth Insights &amp; Analysis</h3>
                            <p class="text-secondary">Stay ahead with accurate, up-to-date data on opportunities, trends, eligibility, and key decision factors.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-16 h-16 text-blue-500" color="#3b82f6">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <h3 class="fs-4 fw-semibold text-dark my-3">End-to-End Support</h3>
                            <p class="text-secondary">Get assistance with everything from planning to execution, ensuring a smooth and stress-free experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="../assets/js/pack.js"></script>

<?php
// --- Include the master footer ---
include __DIR__ . '/../includes/footer.php';
?>