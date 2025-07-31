<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PulseWear Smart Bracelets</title>
    <link rel="stylesheet" href="pulsewear.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .about-hero {
            background: var(--gradient-primary);
            color: var(--white);
            padding: 8rem 0 4rem;
            text-align: center;
        }

        .about-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .story-section {
            padding: 5rem 0;
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .story-text h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 2rem;
        }

        .story-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-color);
            margin-bottom: 1.5rem;
        }

        .story-image {
            text-align: center;
        }

        .innovation-visual {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient-secondary);
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--white);
            animation: innovationFloat 4s ease-in-out infinite;
        }

        @keyframes innovationFloat {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }

        .values-section {
            background: var(--light-color);
            padding: 5rem 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .value-card {
            background: var(--white);
            padding: 2.5rem;
            border-radius: var(--border-radius);
            text-align: center;
            box-shadow: var(--shadow-sm);
            border: 1px solid #f3f4f6;
            transition: var(--transition);
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--white);
        }

        .value-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        .team-section {
            padding: 5rem 0;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .team-card {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .team-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: var(--gradient-primary);
            margin: 2rem auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--white);
        }

        .team-info {
            padding: 0 2rem 2rem;
            text-align: center;
        }

        .team-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .team-role {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .team-bio {
            color: var(--text-light);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .team-social a {
            width: 35px;
            height: 35px;
            background: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .team-social a:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        .timeline-section {
            background: var(--gradient-dark);
            color: var(--white);
            padding: 5rem 0;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background-color: var(--secondary-color);
            border: 4px solid var(--secondary-color);
            top: 20px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-item:nth-child(even)::after {
            left: -10px;
        }

        .timeline-content {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px 30px;
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
        }

        .timeline-year {
            color: var(--secondary-color);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .timeline-content h3 {
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .about-hero h1 {
                font-size: 2.5rem;
            }

            .story-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .innovation-visual {
                width: 250px;
                height: 250px;
                font-size: 3rem;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 21px;
            }

            .timeline-item:nth-child(even) {
                left: 0%;
            }

            .timeline-item:nth-child(even)::after {
                left: 21px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <i class="fas fa-heartbeat pulse-icon"></i>
                <span>PulseWear</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- About Hero -->
    <section class="about-hero">
        <div class="container">
            <h1>About PulseWear</h1>
            <p>Pioneering the future of wearable technology with passion, innovation, and elegance.</p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="story-content" data-aos="fade-up">
                <div class="story-text">
                    <h2>Our Story</h2>
                    <p>
                        Founded in 2020 by a team of passionate engineers and designers, PulseWear emerged from a simple yet powerful vision: to create wearable technology that seamlessly blends cutting-edge functionality with elegant design.
                    </p>
                    <p>
                        We recognized that existing smart devices often compromised on either performance or aesthetics. Our mission became clear - develop smart bracelets that not only monitor your health with medical-grade precision but also complement your personal style.
                    </p>
                    <p>
                        Today, PulseWear is trusted by over 50,000 customers worldwide, from fitness enthusiasts to healthcare professionals, all united by their commitment to living healthier, more connected lives.
                    </p>
                </div>
                <div class="story-image">
                    <div class="innovation-visual">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title">Our Values</h2>
            <div class="values-grid">
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Health First</h3>
                    <p>We believe technology should enhance your wellbeing. Every feature we develop is designed with your health and safety as the top priority.</p>
                </div>
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We push the boundaries of what's possible in wearable technology, constantly researching and implementing the latest breakthroughs.</p>
                </div>
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Design Excellence</h3>
                    <p>Beautiful design isn't just about looks - it's about creating intuitive, comfortable experiences that fit seamlessly into your life.</p>
                </div>
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Privacy & Security</h3>
                    <p>Your personal health data is sacred. We implement industry-leading security measures to protect your information.</p>
                </div>
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainability</h3>
                    <p>We're committed to environmental responsibility, using eco-friendly materials and sustainable manufacturing practices.</p>
                </div>
                <div class="value-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community</h3>
                    <p>We build products that bring people together, fostering healthy habits and meaningful connections.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="section-title">Meet Our Team</h2>
            <div class="team-grid">
                <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-photo">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">Sarah Chen</div>
                        <div class="team-role">CEO & Co-Founder</div>
                        <div class="team-bio">Former Apple engineer with 10+ years in wearable tech. Passionate about creating technology that improves lives.</div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-photo">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">Marcus Rodriguez</div>
                        <div class="team-role">CTO & Co-Founder</div>
                        <div class="team-bio">AI and machine learning expert specializing in health analytics and predictive algorithms for wearable devices.</div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-photo">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">Dr. Emily Watson</div>
                        <div class="team-role">Chief Medical Officer</div>
                        <div class="team-bio">Cardiologist and digital health researcher ensuring our technology meets the highest medical standards.</div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-photo">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">Alex Kim</div>
                        <div class="team-role">Head of Design</div>
                        <div class="team-bio">Award-winning industrial designer focused on creating beautiful, functional products that users love to wear.</div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <h2 class="section-title" style="color: white;">Our Journey</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2020</div>
                        <h3>The Beginning</h3>
                        <p>PulseWear was founded with the vision of creating elegant, health-focused wearable technology.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <h3>First Prototype</h3>
                        <p>Completed our first working prototype and secured initial funding from leading tech investors.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2022</div>
                        <h3>Product Launch</h3>
                        <p>Launched the PulseWear Classic, our first commercial product, to overwhelming positive response.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h3>Global Expansion</h3>
                        <p>Expanded internationally and launched PulseWear Sport, reaching 25,000 customers worldwide.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <h3>Premium Innovation</h3>
                        <p>Introduced PulseWear Elite with advanced health monitoring and achieved 50,000+ satisfied customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-heartbeat pulse-icon"></i>
                        <span>PulseWear</span>
                    </div>
                    <p>Revolutionizing wearable technology with elegant design and cutting-edge innovation.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="products.php#elite">PulseWear Elite</a></li>
                        <li><a href="products.php#sport">PulseWear Sport</a></li>
                        <li><a href="products.php#classic">PulseWear Classic</a></li>
                        <li><a href="products.php#accessories">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#warranty">Warranty</a></li>
                        <li><a href="#shipping">Shipping Info</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="#careers">Careers</a></li>
                        <li><a href="#press">Press</a></li>
                        <li><a href="#privacy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 PulseWear. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>