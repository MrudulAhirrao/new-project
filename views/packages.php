<?php
    // --- Page-specific variables for SEO ---
    $pageTitle = "Counselling Packages | V4Edu Solution";
    $metaDescription = "Explore our NEET UG and PG counselling packages. From free rank predictors to premium, dedicated counsellor support, choose the plan that fits your needs.";

    // --- Include the master header ---
    include __DIR__ . '/../includes/header.php';
?>

<style>
    body {
        font-family: 'Inter', sans-serif;
    }
    .pricing-container {
        position: relative;
        margin-top: 2.5rem; /* Make space for the badge */
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
    font-weight: 700;
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
        margin-top: auto; /* Pushes the button to the bottom */
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
    /* Responsive Styles */
    @media (max-width: 767.98px) {
        .plan-title { font-size: 2rem; }
        .price-value { font-size: 1.75rem; padding: 0.5rem 1rem; }
        .best-seller-badge { padding: 0.5rem 1rem; font-size: 0.9rem; }
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

        <div class="d-flex justify-content-center mb-5 toggle-buttons">
            <button id="ug-btn" class="btn btn-light active mx-2">
                <i class="bi bi-mortarboard-fill me-2"></i>UG
            </button>
            <button id="pg-btn" class="btn btn-light mx-2">
                <i class="bi bi-mortarboard-fill me-2"></i>PG
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
                            <div class="card-body p-4 p-md-5">
                                <div class="d-flex align-items-center mb-4 justify-content-between">
                                    <div>
                                        <h2 class="plan-title mb-1"><?php echo htmlspecialchars($card['Title']); ?></h2>
                                        <div class="text-muted" style="font-size: 1rem;">Per Month</div>
                                    </div>
                                    <div class="price-value ms-3">
                                        <span><?php echo htmlspecialchars($card['Price']); ?></span>
                                        <span class="text-muted text-decoration-line-through ms-2"><?php echo htmlspecialchars($card['Old_Price']); ?></span>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="list-unstyled mb-5 d-grid gap-3">
                                    <?php
                                        $features = explode(';', $card['Features']);
                                        foreach ($features as $feature) {
                                    ?>
                                    <li class="d-flex align-items-center feature-list-item">
                                        <i class="bi bi-check-circle-fill fs-5 me-3"></i>
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
                            <div class="card-body p-4 p-md-5">
                                <div class="d-flex align-items-center mb-4 justify-content-between">
                                    <div>
                                        <h2 class="plan-title mb-1"><?php echo htmlspecialchars($card['Title']); ?></h2>
                                        <div class="text-muted" style="font-size: 1rem;">Per Month</div>
                                    </div>
                                    <div class="price-value ms-3">
                                        <span><?php echo htmlspecialchars($card['Price']); ?></span>
                                        <span class="text-muted text-decoration-line-through  ms-2"><?php echo htmlspecialchars($card['Old_Price']); ?></span>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="list-unstyled mb-5 d-grid gap-3">
                                    <?php
                                        $features = explode(';', $card['Features']);
                                        foreach ($features as $feature) {
                                    ?>
                                    <li class="d-flex align-items-center feature-list-item">
                                        <i class="bi bi-check-circle-fill fs-5 me-3"></i>
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
            <h2 class="text-center display-6 fw-bold text-dark mb-5">
                What We Offer With Your Subscription
            </h2>
            <div class="row row-cols-1 row-cols-md-2 g-4 mx-auto" style="max-width: 60rem;">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <i class="bi bi-people-fill text-success" style="font-size: 3rem;"></i>
                            <h3 class="fs-4 fw-semibold text-dark my-3">Expert Guidance at Every Step</h3>
                            <p class="text-secondary">Gain access to professional support to help you make confident, informed decisions throughout your journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <i class="bi bi-mortarboard-fill text-warning" style="font-size: 3rem;"></i>
                            <h3 class="fs-4 fw-semibold text-dark my-3">Tailored Recommendations</h3>
                            <p class="text-secondary">Receive personalized insights and suggestions based on your preferences, goals, and performance data.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <i class="bi bi-lightbulb-fill text-info" style="font-size: 3rem;"></i>
                            <h3 class="fs-4 fw-semibold text-dark my-3">In-Depth Insights &amp; Analysis</h3>
                            <p class="text-secondary">Stay ahead with accurate, up-to-date data on opportunities, trends, eligibility, and key decision factors.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100" style="border-radius: 1.5rem;">
                        <div class="card-body p-5">
                            <i class="bi bi-clock-fill text-primary" style="font-size: 3rem;"></i>
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