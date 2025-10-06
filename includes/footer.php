</main>
<footer class="footer_wrapper">
    <a href="javascript:void(0)" id="top-button" class="back_top">
        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" fill="none"><mask id="mask0_511_55" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25"><rect x="0.5" y="0.25" width="24" height="24" fill="currentColor" /></mask><g mask="url(#mask0_511_55)"><path d="M11.5 22.25V6.075L6.9 10.65L5.5 9.25L12.5 2.25L19.5 9.25L18.1 10.675L13.5 6.075V22.25H11.5Z" fill="currentColor" /></g></svg></span>
    </a>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <img src="../assets/images/newlogo.png" alt="V4Edu Solution Footer Logo" class="mb-3">
                <p class="footerAbout">V4Edu Solution is a trusted NEET counselling and career guidance platform with 23+ years of experience. We specialize in helping students secure admissions to MBBS, BDS, AYUSH, BVSc & AH, BSc Nursing and PG medical programs across India and abroad.</p>
                <ul class="social-box list-unstyled d-flex mt-4">
                    <li class="social-box-list me-3"><a href="https://www.instagram.com/v4education?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a></li>
                    <li class="social-box-list me-3"><a href="https://www.facebook.com/V4Edu2000"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-box-list me-3"><a href="https://wa.me/919462363646"><i class="fab fa-whatsapp"></i></a></li>
                    <li class="social-box-list"><a href="https://t.me/NEET_UG_COUNSELING_SUPPORT"><i class="fab fa-telegram-plane"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-4 col-6 mb-4 mb-md-0">
                        <h6>Visit</h6>
                        <ul class="list-unstyled footer-links">
                            <li><a href="../views/index.php">Home</a></li>
                            <li><a href="../views/instute.php">Institute</a></li>
                            <li><a href="../views/index.php#Service">Service</a></li>
                            <li><a href="../views/packages.php">Package</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-6 mb-4 mb-md-0">
                        <h6>Tools</h6>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">UG Rank Predictor</a></li>
                            <li><a href="#">PG Rank Predictor</a></li>
                            <li><a href="#">UG College Predictor</a></li>
                            <li><a href="#">PG College Predictor</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-12">
                        <h6>Contact</h6>
                        <ul class="list-unstyled footer-links">
                            <li><a href="tel:+919414363646">+91-9414363646</a></li>
                            <li><a href="mailto:info@v4edu.in">info@v4edu.in</a></li>
                            <li><p>Available Pan India</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="copyright py-3" style="background-color: #f8f9fa; color: #6c757d;">
    <div class="container text-center">
        <span>
            Copyright © <span id="copyright-year"></span>. All Rights Reserved.
        </span>
    </div>
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../assets/js/script.js"></script>


<script>
    // Initialize Swiper for sliders
    const swiper = new Swiper('.counselling-slider', {
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: { delay: 2000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: { 320:{slidesPerView:1}, 640:{slidesPerView:2}, 768:{slidesPerView:2.5}, 1024:{slidesPerView:3} },
    });

    // Animate counter function for stats
    function animateCounter(id, target, suffix = "", duration = 2000) {
        const element = document.getElementById(id);
        if (element) {
            let start = 0;
            const end = parseInt(target);
            if (isNaN(end)) return;
            const stepTime = Math.abs(Math.floor(duration / end));
            const timer = setInterval(() => {
                start++;
                element.textContent = start + suffix;
                if (start >= end) {
                    clearInterval(timer);
                    element.textContent = target + suffix;
                }
            }, stepTime);
        }
    }

    // Run counters when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        animateCounter("users", '153', "k");
        animateCounter("experience", '23', "+");
        const accuracyEl = document.getElementById("accuracy");
        if (accuracyEl) {
            animateCounter("accuracy", 99, "");
            setTimeout(() => { accuracyEl.textContent = "100%"; }, 2100);
        }
    });
</script>

</body>
</html>