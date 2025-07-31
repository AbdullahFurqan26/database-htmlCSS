<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - PulseWear Smart Bracelets</title>
    <link rel="stylesheet" href="pulsewear.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .products-hero {
            background: var(--gradient-dark);
            color: var(--white);
            padding: 8rem 0 4rem;
            text-align: center;
        }

        .products-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .products-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            padding: 5rem 0;
        }

        .product-card {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .product-header {
            padding: 2rem;
            text-align: center;
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--gradient-secondary);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-image {
            width: 200px;
            height: 200px;
            margin: 0 auto 2rem;
            position: relative;
        }

        .product-visual {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            position: relative;
            animation: productRotate 10s linear infinite;
        }

        .product-visual.elite {
            background: var(--gradient-primary);
        }

        .product-visual.sport {
            background: var(--gradient-secondary);
        }

        .product-visual.classic {
            background: var(--gradient-dark);
        }

        .product-screen {
            position: absolute;
            top: 30%;
            left: 30%;
            right: 30%;
            bottom: 30%;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-color);
            animation: screenPulse 2s ease-in-out infinite;
        }

        @keyframes productRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes screenPulse {
            0%, 100% { opacity: 0.7; }
            50% { opacity: 1; }
        }

        .product-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .product-subtitle {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .product-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 2rem;
        }

        .product-features {
            padding: 0 2rem 2rem;
        }

        .features-list {
            list-style: none;
            margin-bottom: 2rem;
        }

        .features-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0.5rem 0;
            color: var(--text-color);
        }

        .features-list li i {
            color: var(--primary-color);
            width: 16px;
        }

        .specs-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .spec-item {
            background: var(--light-color);
            padding: 1rem;
            border-radius: var(--border-radius-sm);
            text-align: center;
        }

        .spec-label {
            font-size: 0.8rem;
            color: var(--text-light);
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .spec-value {
            font-weight: 600;
            color: var(--dark-color);
        }

        .product-actions {
            padding: 0 2rem 2rem;
            display: flex;
            gap: 1rem;
        }

        .btn-full {
            flex: 1;
        }

        .comparison-section {
            background: var(--light-color);
            padding: 5rem 0;
        }

        .comparison-table {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        .comparison-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .comparison-table th,
        .comparison-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #f3f4f6;
        }

        .comparison-table th {
            background: var(--gradient-primary);
            color: var(--white);
            font-weight: 600;
        }

        .comparison-table tr:hover {
            background: var(--light-color);
        }

        .check-icon {
            color: var(--primary-color);
        }

        .accessories-section {
            padding: 5rem 0;
        }

        .accessories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .accessory-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow-sm);
            border: 1px solid #f3f4f6;
            transition: var(--transition);
        }

        .accessory-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .accessory-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .products-hero h1 {
                font-size: 2.5rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
                padding: 3rem 0;
            }

            .product-actions {
                flex-direction: column;
            }

            .specs-grid {
                grid-template-columns: 1fr;
            }

            .comparison-table {
                overflow-x: auto;
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

    <!-- Products Hero -->
    <section class="products-hero">
        <div class="container">
            <h1>Our Product Collection</h1>
            <p>Discover the perfect smart bracelet that fits your lifestyle. Each PulseWear model is crafted with precision and designed to enhance your daily routine.</p>
        </div>
    </section>

    <!-- Main Products -->
    <section class="container">
        <div class="products-grid">
            <!-- PulseWear Elite -->
            <div class="product-card" id="elite" data-aos="fade-up" data-aos-delay="100">
                <div class="product-header">
                    <div class="product-badge">Premium</div>
                    <div class="product-image">
                        <div class="product-visual elite">
                            <div class="product-screen">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title">PulseWear Elite</h3>
                    <p class="product-subtitle">Professional Health Monitoring</p>
                    <div class="product-price">$299</div>
                </div>
                <div class="product-features">
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> Advanced ECG monitoring</li>
                        <li><i class="fas fa-check"></i> Blood oxygen tracking</li>
                        <li><i class="fas fa-check"></i> GPS with offline maps</li>
                        <li><i class="fas fa-check"></i> 7-day battery life</li>
                        <li><i class="fas fa-check"></i> Titanium construction</li>
                        <li><i class="fas fa-check"></i> 50m water resistance</li>
                    </ul>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <div class="spec-label">Display</div>
                            <div class="spec-value">1.4" AMOLED</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Memory</div>
                            <div class="spec-value">32GB</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Weight</div>
                            <div class="spec-value">45g</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Connectivity</div>
                            <div class="spec-value">LTE + WiFi</div>
                        </div>
                    </div>
                </div>
                <div class="product-actions">
                    <a href="#order" class="btn btn-primary btn-full">
                        <i class="fas fa-shopping-cart"></i>
                        Add to Cart
                    </a>
                    <a href="#details" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        Details
                    </a>
                </div>
            </div>

            <!-- PulseWear Sport -->
            <div class="product-card" id="sport" data-aos="fade-up" data-aos-delay="200">
                <div class="product-header">
                    <div class="product-badge">Popular</div>
                    <div class="product-image">
                        <div class="product-visual sport">
                            <div class="product-screen">
                                <i class="fas fa-running"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title">PulseWear Sport</h3>
                    <p class="product-subtitle">Active Lifestyle Companion</p>
                    <div class="product-price">$199</div>
                </div>
                <div class="product-features">
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> 40+ workout modes</li>
                        <li><i class="fas fa-check"></i> Real-time coaching</li>
                        <li><i class="fas fa-check"></i> Built-in GPS</li>
                        <li><i class="fas fa-check"></i> 5-day battery life</li>
                        <li><i class="fas fa-check"></i> Rugged design</li>
                        <li><i class="fas fa-check"></i> Sweat resistant</li>
                    </ul>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <div class="spec-label">Display</div>
                            <div class="spec-value">1.3" LCD</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Memory</div>
                            <div class="spec-value">16GB</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Weight</div>
                            <div class="spec-value">38g</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Connectivity</div>
                            <div class="spec-value">Bluetooth 5.0</div>
                        </div>
                    </div>
                </div>
                <div class="product-actions">
                    <a href="#order" class="btn btn-primary btn-full">
                        <i class="fas fa-shopping-cart"></i>
                        Add to Cart
                    </a>
                    <a href="#details" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        Details
                    </a>
                </div>
            </div>

            <!-- PulseWear Classic -->
            <div class="product-card" id="classic" data-aos="fade-up" data-aos-delay="300">
                <div class="product-header">
                    <div class="product-badge">Essential</div>
                    <div class="product-image">
                        <div class="product-visual classic">
                            <div class="product-screen">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title">PulseWear Classic</h3>
                    <p class="product-subtitle">Everyday Elegance</p>
                    <div class="product-price">$149</div>
                </div>
                <div class="product-features">
                    <ul class="features-list">
                        <li><i class="fas fa-check"></i> Heart rate monitoring</li>
                        <li><i class="fas fa-check"></i> Sleep tracking</li>
                        <li><i class="fas fa-check"></i> Smart notifications</li>
                        <li><i class="fas fa-check"></i> 10-day battery life</li>
                        <li><i class="fas fa-check"></i> Classic design</li>
                        <li><i class="fas fa-check"></i> Multiple watch faces</li>
                    </ul>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <div class="spec-label">Display</div>
                            <div class="spec-value">1.2" E-ink</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Memory</div>
                            <div class="spec-value">8GB</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Weight</div>
                            <div class="spec-value">32g</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Connectivity</div>
                            <div class="spec-value">Bluetooth 4.2</div>
                        </div>
                    </div>
                </div>
                <div class="product-actions">
                    <a href="#order" class="btn btn-primary btn-full">
                        <i class="fas fa-shopping-cart"></i>
                        Add to Cart
                    </a>
                    <a href="#details" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        Details
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="comparison-section">
        <div class="container">
            <h2 class="section-title">Compare Models</h2>
            <div class="comparison-table">
                <table>
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Elite</th>
                            <th>Sport</th>
                            <th>Classic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Heart Rate Monitoring</td>
                            <td><i class="fas fa-check check-icon"></i> Advanced ECG</td>
                            <td><i class="fas fa-check check-icon"></i> Optical</td>
                            <td><i class="fas fa-check check-icon"></i> Basic</td>
                        </tr>
                        <tr>
                            <td>GPS Tracking</td>
                            <td><i class="fas fa-check check-icon"></i> Multi-band</td>
                            <td><i class="fas fa-check check-icon"></i> Built-in</td>
                            <td><i class="fas fa-times"></i> Phone GPS</td>
                        </tr>
                        <tr>
                            <td>Battery Life</td>
                            <td>7 days</td>
                            <td>5 days</td>
                            <td>10 days</td>
                        </tr>
                        <tr>
                            <td>Water Resistance</td>
                            <td>50m</td>
                            <td>30m</td>
                            <td>20m</td>
                        </tr>
                        <tr>
                            <td>Display Type</td>
                            <td>AMOLED</td>
                            <td>LCD</td>
                            <td>E-ink</td>
                        </tr>
                        <tr>
                            <td>Music Storage</td>
                            <td><i class="fas fa-check check-icon"></i> 1000+ songs</td>
                            <td><i class="fas fa-check check-icon"></i> 500+ songs</td>
                            <td><i class="fas fa-times"></i> Control only</td>
                        </tr>
                        <tr>
                            <td>LTE Connectivity</td>
                            <td><i class="fas fa-check check-icon"></i></td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-times"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Accessories Section -->
    <section id="accessories" class="accessories-section">
        <div class="container">
            <h2 class="section-title">Accessories</h2>
            <div class="accessories-grid">
                <div class="accessory-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-charging-station accessory-icon"></i>
                    <h4>Wireless Charger</h4>
                    <p>Fast wireless charging dock with premium design</p>
                    <div class="price">$49</div>
                </div>
                <div class="accessory-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-link accessory-icon"></i>
                    <h4>Sport Bands</h4>
                    <p>Silicone bands in multiple colors for active use</p>
                    <div class="price">$29</div>
                </div>
                <div class="accessory-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-gem accessory-icon"></i>
                    <h4>Leather Bands</h4>
                    <p>Premium leather bands for professional occasions</p>
                    <div class="price">$79</div>
                </div>
                <div class="accessory-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-shield-alt accessory-icon"></i>
                    <h4>Screen Protector</h4>
                    <p>Tempered glass protection with crystal clarity</p>
                    <div class="price">$19</div>
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
    </script>
</body>
</html>