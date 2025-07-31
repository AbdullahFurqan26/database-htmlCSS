<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PulseWear - Elegant Smart Bracelets</title>
    <link rel="stylesheet" href="pulsewear.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
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

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Experience the Future of
                    <span class="gradient-text">Wearable Technology</span>
                </h1>
                <p class="hero-description">
                    Discover our premium collection of smart bracelets that seamlessly blend
                    cutting-edge technology with elegant design. Monitor your health, stay connected,
                    and express your style with PulseWear.
                </p>
                <div class="hero-buttons">
                    <a href="products.php" class="btn btn-primary">
                        <i class="fas fa-shopping-bag"></i>
                        Shop Now
                    </a>
                    <a href="#features" class="btn btn-secondary">
                        <i class="fas fa-play"></i>
                        Learn More
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="bracelet-showcase">
                    <div class="bracelet-item bracelet-1">
                        <div class="bracelet-glow"></div>
                    </div>
                    <div class="bracelet-item bracelet-2">
                        <div class="bracelet-glow"></div>
                    </div>
                    <div class="bracelet-item bracelet-3">
                        <div class="bracelet-glow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2 class="section-title">Why Choose PulseWear?</h2>
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Health Monitoring</h3>
                    <p>Advanced sensors track your heart rate, sleep patterns, and daily activity with medical-grade precision.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>Smart Connectivity</h3>
                    <p>Seamlessly sync with your smartphone for notifications, calls, and app integration.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Premium Design</h3>
                    <p>Crafted with premium materials and elegant aesthetics that complement any style.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fas fa-battery-full"></i>
                    </div>
                    <h3>Long Battery Life</h3>
                    <p>Up to 7 days of continuous use with fast wireless charging capabilities.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Waterproof</h3>
                    <p>IP68 rating ensures your bracelet withstands swimming, showering, and extreme conditions.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Smart App</h3>
                    <p>Comprehensive mobile app with detailed analytics, goals, and personalized insights.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase -->
    <section class="showcase">
        <div class="container">
            <h2 class="section-title">Our Latest Collection</h2>
            <div class="showcase-grid">
                <div class="showcase-item" data-aos="fade-right">
                    <div class="showcase-image">
                        <div class="product-preview pulse-elite">
                            <div class="product-glow"></div>
                        </div>
                    </div>
                    <div class="showcase-content">
                        <h3>PulseWear Elite</h3>
                        <p>Our flagship model featuring advanced health monitoring, GPS tracking, and premium titanium construction.</p>
                        <div class="price">$299</div>
                        <a href="products.php#elite" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="showcase-item" data-aos="fade-left">
                    <div class="showcase-content">
                        <h3>PulseWear Sport</h3>
                        <p>Designed for active lifestyles with enhanced fitness tracking, workout modes, and rugged durability.</p>
                        <div class="price">$199</div>
                        <a href="products.php#sport" class="btn btn-outline">View Details</a>
                    </div>
                    <div class="showcase-image">
                        <div class="product-preview pulse-sport">
                            <div class="product-glow"></div>
                        </div>
                    </div>
                </div>
                <div class="showcase-item" data-aos="fade-right">
                    <div class="showcase-image">
                        <div class="product-preview pulse-classic">
                            <div class="product-glow"></div>
                        </div>
                    </div>
                    <div class="showcase-content">
                        <h3>PulseWear Classic</h3>
                        <p>Timeless elegance meets modern technology. Perfect for everyday wear with essential smart features.</p>
                        <div class="price">$149</div>
                        <a href="products.php#classic" class="btn btn-outline">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Lifestyle?</h2>
                <p>Join thousands of satisfied customers who have upgraded their daily routine with PulseWear smart bracelets.</p>
                <div class="cta-stats">
                    <div class="stat">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">4.8</div>
                        <div class="stat-label">Average Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">99%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                </div>
                <a href="products.php" class="btn btn-cta">
                    <i class="fas fa-rocket"></i>
                    Start Your Journey
                </a>
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

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
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

        // Parallax effect for hero particles
        window.addEventListener('scroll', () => {
            const particles = document.querySelectorAll('.particle');
            const scrolled = window.pageYOffset;
            
            particles.forEach((particle, index) => {
                const speed = 0.5 + (index * 0.1);
                particle.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    </script>
</body>
</html>