<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <style>
        .testimonials-container {
            width: 100%;
            margin: 0 auto;
            text-align: center;
            background: radial-gradient(ellipse at top, #e0f2fe, #f4f7fa 80%);
            
        }

        .testimonials-badge {
            color: #00CF7B;
            font-weight: 400;
            font-size: 16px;
            padding: 10px 32px;
            background: rgb(0 159 94 / 10%);
            border-radius: 36px;
            margin-bottom: 30px;
            display: inline-block;
        }

        h1 {
            font-size: 32px;
            font-weight: 600;
            color: #000;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .subtitle {
            font-size: 13px;
            color: #666;
            margin-bottom: 50px;
        }

        .carousel-section {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .nav-button {
            width: 60px;
            /* Wider than height for pill shape */
            height: 40px;
            min-width: 60px;
            border-radius: 20px;
            /* Half of height for perfect curve */
            background: #00CF7B;
            ;
            border: none;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.2s;
            box-shadow: 0 2px 8px rgba(0, 207, 123, 0.3);
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 20;
        }

        .nav-button.prev-button {
            left: -28px;
        }

        .nav-button.next-button {
            right: -28px;
        }

        .nav-button:hover {
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 4px 12px rgba(0, 207, 123, 0.4);
        }

        .nav-button svg {
            width: 18px;
            height: 18px;
        }

        .testimonial-card-wrapper {
            position: relative;
            width: 100%;
            max-width: 900px;
        }

        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 50px 60px 40px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            transition: opacity 0.3s ease-in-out;
        }

        .testimonial-card.fading {
            opacity: 0;
        }
        /* --- Sliding Animation --- */
.testimonial-card.slide-left {
  animation: slideLeft 0.5s ease forwards;
}
.testimonial-card.slide-right {
  animation: slideRight 0.5s ease forwards;
}

@keyframes slideLeft {
  0% {
    transform: translateX(100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slideRight {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}


        .stars-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .stars-badge img {
            width: 140px;
            height: auto;
            display: block;
            filter:
                contrast(1.2) brightness(0.85) sepia(3%) saturate(5249%) hue-rotate(169deg) brightness(1.05)
        }

        .testimonial-text {
            font-size: 15px;
            line-height: 1.7;
            color: #333;
            margin-bottom: 30px;
            font-weight: 500;
            min-height: 110px;
            /* Set a min-height to avoid layout shifts */
            padding: 0 70px;
            /* Add padding to prevent text from overlapping buttons */
        }

        .highlight {
            color: #00CF7B;
            ;
            font-weight: 700;
        }

        .user-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .user-icon {
            width: 60px;
            height: 60px;
            background: #00CF7B;
            ;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-icon svg {
            width: 30px;
            height: 30px;
            fill: white;
        }

        .user-name {
            font-size: 13px;
            font-weight: 600;
            color: #333;
        }

        .dots {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #ccc;
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: #00CF7B;
            ;
            width: 24px;
            border-radius: 4px;
        }

        @media (max-width: 960px) {
            .testimonial-text {
                padding: 0 50px;
            }

            .nav-button.prev-button {
                left: -28px;
            }

            .nav-button.next-button {
                right: -28px;
            }
        }
.half-box {
    position: absolute;
    top: 0;
    width: 120px;       /* Adjust width as needed for design */
    height: 100%;
    background: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    z-index: 5;         /* Below testimonial card & buttons */
    pointer-events: none; /* Prevent from interfering with buttons */
}
.half-box.left {
    left: 0;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
.half-box.right {
    right: 0;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
@media (max-width: 768px) {
    .half-box {
        display: none;  /* Make smaller on mobile */
    }
}


        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .testimonial-card {
                padding: 45px 30px 30px;
            }

            .carousel-section {
                gap: 15px;
            }

            .nav-button {
                width: 50px;
                height: 38px;
                min-width: 50px;
                border-radius: 19px;
            }

            .testimonial-text {
                font-size: 14px;
                min-height: 150px;
                padding: 0;
            }

            .nav-button.prev-button {
                left: -28px;
            }

            .nav-button.next-button {
                right: -28px;
            }

            .nav-button:hover {
                transform: translateY(-50%) scale(1.1);
                box-shadow: 0 4px 12px rgba(0, 207, 123, 0.4);
            }
        }
    </style>
</head>

<body>
    <div class="testimonials-container" >

        <div class="text-center mb-5">
            <div class="testimonials-badge mt-5">Testimonials</div>
            <h2 class="text-[36px] font-semibold leading-[36px] text-center font-inter" style="font-size: 48px;margin-bottom: 2.5rem;">Hear From Our Happy Students
                &amp; Tutors</h2>
            <p class="text-sm text-gray-600 mt-2">Real Experiences, Real Success!
                Hear from our students and parents as they share their NEET UG & PG
                counselling journey with V4Edu — trusted guidance, transparent process, and successful admissions.</p>
        </div>

        <div class="carousel-section">
            <div class="half-box left"></div>
            <div class="testimonial-card-wrapper">
                <div class="testimonial-card">
                    <div class="stars-badge">
                        <img alt="5 stars" src="../assets/img/stars.webp" style="width: 140px; height: auto; margin-top: 15px; color: #10b981;">
                    </div>
                    <p id="testimonial-text" class="testimonial-text"></p>
                    <div id="testimonial-author" class="user-section">
                        <div class="user-icon">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path>
                            </svg>
                        </div>
                        <span id="author-name" class="user-name"></span>
                    </div>
                </div>

                <button class="nav-button prev-button" onclick="previousSlide()" aria-label="Previous">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                    </svg>
                </button>
                <button class="nav-button next-button" onclick="nextSlide()" aria-label="Next">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                    </svg>
                </button>
            </div>
            <div class="half-box right"></div>
        </div>

        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>


   <script>
  const testimonials = [
    {
      text: 'I joined as an <span class="highlight">online tutor</span> for Science, and I am really impressed with the platform. The process is simple, and I get to teach motivated students. The website ensures only verified tutors, which builds trust for both tutors and students.',
      author: 'Neha Gupta (Science Tutor)'
    },
    {
      text: 'I was looking for the <span class="highlight">best home tuition near me</span> for Maths. Through this website, I found a very experienced home tutor who explained concepts clearly and patiently. My grades improved within a few months. Highly recommended!',
      author: 'Riya (Class 10, Jaipur)'
    },
    {
      text: 'As a tutor, this website gave me an opportunity to connect with students easily. I registered as a <span class="highlight">home tutor</span> and within a week, I had multiple requests. It’s a great platform for teachers to share knowledge and earn at the same time.',
      author: 'Ankit Sharma (Maths Tutor)'
    },
    {
      text: 'The quality of tutors is excellent. My daughter\'s confidence in <span class="highlight">Physics</span> has grown immensely. The platform is user-friendly and very reliable for finding the right educational support.',
      author: 'Mr. Prakash (Parent)'
    },
    {
      text: 'Finding verified students was always a challenge. This platform has a great verification process which helped me find a stable income as an <span class="highlight">English Tutor</span>. Highly recommended for fellow tutors.',
      author: 'Sunita Rao (English Tutor)'
    }
  ];

  let currentSlide = 0;
  const totalSlides = testimonials.length;
  const testimonialTextEl = document.getElementById('testimonial-text');
  const authorNameEl = document.getElementById('author-name');
  const cardEl = document.querySelector('.testimonial-card');

  function updateDots() {
    document.querySelectorAll('.dot').forEach((dot, index) => {
      dot.classList.toggle('active', index === currentSlide);
    });
  }

  function updateSlide(direction = 'left') {
    // Remove existing animations
    cardEl.classList.remove('slide-right', 'slide-left');

    // Trigger reflow to restart animation
    void cardEl.offsetWidth;

    // Apply direction-based animation
    cardEl.classList.add(direction === 'right' ? 'slide-left' : 'slide-right');

    // Change testimonial content slightly after animation starts
    setTimeout(() => {
      const current = testimonials[currentSlide];
      testimonialTextEl.innerHTML = current.text;
      authorNameEl.textContent = current.author;
    }, 100);

    updateDots();
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlide('left');
  }

  function previousSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlide('right');
  }

  document.querySelectorAll('.dot').forEach((dot, index) => {
    dot.addEventListener('click', () => {
      const direction = index > currentSlide ? 'left' : 'right';
      currentSlide = index;
      updateSlide(direction);
    });
  });

  // Initialize on page load
  document.addEventListener('DOMContentLoaded', () => {
    updateSlide();
  });
</script>

</body>

</html>