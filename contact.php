<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PulseWear Smart Bracelets</title>
    <link rel="stylesheet" href="pulsewear.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .contact-hero {
            background: var(--gradient-secondary);
            color: var(--white);
            padding: 8rem 0 4rem;
            text-align: center;
        }

        .contact-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .contact-section {
            padding: 5rem 0;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .contact-info {
            background: var(--white);
            padding: 3rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
        }

        .contact-info h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.2rem;
        }

        .contact-details h3 {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .contact-details p {
            color: var(--text-light);
            margin: 0;
        }

        .contact-form {
            background: var(--white);
            padding: 3rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
        }

        .contact-form h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group label {
            display: block;
            color: var(--dark-color);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: var(--border-radius-sm);
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
            background: var(--white);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-submit {
            text-align: center;
            margin-top: 2rem;
        }

        .map-section {
            background: var(--light-color);
            padding: 5rem 0;
        }

        .map-container {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--white);
            font-size: 1.2rem;
        }

        .office-locations {
            padding: 5rem 0;
        }

        .locations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .location-card {
            background: var(--white);
            padding: 2rem;
            border-radius: var(--border-radius);
            text-align: center;
            box-shadow: var(--shadow-sm);
            border: 1px solid #f3f4f6;
            transition: var(--transition);
        }

        .location-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .location-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .location-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        .location-card p {
            color: var(--text-light);
            line-height: 1.6;
            margin-bottom: 0.5rem;
        }

        .social-contact {
            background: var(--gradient-dark);
            color: var(--white);
            padding: 3rem 0;
            text-align: center;
        }

        .social-contact h2 {
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .social-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .social-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .social-item a {
            width: 60px;
            height: 60px;
            background: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-decoration: none;
            font-size: 1.5rem;
            transition: var(--transition);
        }

        .social-item a:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .social-item span {
            font-weight: 500;
        }

        .success-message,
        .error-message {
            padding: 1rem;
            border-radius: var(--border-radius-sm);
            margin-bottom: 1rem;
            display: none;
        }

        .success-message {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        .error-message {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.5rem;
            }

            .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .contact-info,
            .contact-form {
                padding: 2rem;
            }

            .social-grid {
                grid-template-columns: repeat(2, 1fr);
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

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get in Touch</h1>
            <p>We're here to help you on your journey to better health and wellness.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <!-- Contact Information -->
                <div class="contact-info" data-aos="fade-right">
                    <h2>Contact Information</h2>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Visit Our Headquarters</h3>
                            <p>123 Innovation Drive<br>San Francisco, CA 94105</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Call Us</h3>
                            <p>+1 (555) 123-PULSE<br>Mon-Fri 9AM-6PM PST</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email Support</h3>
                            <p>support@pulsewear.com<br>Response within 24 hours</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Live Chat</h3>
                            <p>Available on our website<br>Mon-Fri 9AM-9PM PST</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form" data-aos="fade-left">
                    <h2>Send us a Message</h2>
                    
                    <div id="success-message" class="success-message">
                        <i class="fas fa-check-circle"></i> Thank you! Your message has been sent successfully.
                    </div>
                    
                    <div id="error-message" class="error-message">
                        <i class="fas fa-exclamation-circle"></i> Please fill in all required fields.
                    </div>

                    <form id="contact-form" method="POST" action="">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first-name">First Name *</label>
                                <input type="text" id="first-name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name *</label>
                                <input type="text" id="last-name" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="product-inquiry">Product Inquiry</option>
                                <option value="technical-support">Technical Support</option>
                                <option value="warranty">Warranty & Returns</option>
                                <option value="partnership">Partnership Opportunities</option>
                                <option value="media">Media & Press</option>
                                <option value="feedback">Feedback & Suggestions</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" placeholder="Tell us how we can help you..." required></textarea>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Find Us</h2>
            <div class="map-container">
                <div style="text-align: center;">
                    <i class="fas fa-map-marked-alt" style="font-size: 4rem; margin-bottom: 1rem;"></i>
                    <div>Interactive Map Coming Soon</div>
                    <div style="opacity: 0.8; margin-top: 0.5rem;">123 Innovation Drive, San Francisco, CA 94105</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Locations -->
    <section class="office-locations">
        <div class="container">
            <h2 class="section-title">Global Offices</h2>
            <div class="locations-grid">
                <div class="location-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-building location-icon"></i>
                    <h3>San Francisco Headquarters</h3>
                    <p>123 Innovation Drive</p>
                    <p>San Francisco, CA 94105</p>
                    <p><strong>Phone:</strong> +1 (555) 123-PULSE</p>
                </div>
                <div class="location-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-building location-icon"></i>
                    <h3>New York Office</h3>
                    <p>456 Tech Avenue</p>
                    <p>New York, NY 10001</p>
                    <p><strong>Phone:</strong> +1 (555) 456-PULSE</p>
                </div>
                <div class="location-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-building location-icon"></i>
                    <h3>London Office</h3>
                    <p>789 Innovation Street</p>
                    <p>London, UK EC1A 1BB</p>
                    <p><strong>Phone:</strong> +44 20 1234 5678</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Contact -->
    <section class="social-contact">
        <div class="container">
            <h2>Connect With Us</h2>
            <div class="social-grid">
                <div class="social-item">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <span>Facebook</span>
                </div>
                <div class="social-item">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <span>Twitter</span>
                </div>
                <div class="social-item">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <span>Instagram</span>
                </div>
                <div class="social-item">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <span>LinkedIn</span>
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

        // Contact form handling
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const firstName = formData.get('first_name');
            const lastName = formData.get('last_name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');
            
            // Simple validation
            if (!firstName || !lastName || !email || !subject || !message) {
                document.getElementById('error-message').style.display = 'block';
                document.getElementById('success-message').style.display = 'none';
                return;
            }
            
            // Simulate form submission
            setTimeout(() => {
                document.getElementById('success-message').style.display = 'block';
                document.getElementById('error-message').style.display = 'none';
                this.reset();
            }, 500);
        });
    </script>

    <?php
    // PHP form processing
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = htmlspecialchars($_POST['first_name'] ?? '');
        $lastName = htmlspecialchars($_POST['last_name'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $phone = htmlspecialchars($_POST['phone'] ?? '');
        $subject = htmlspecialchars($_POST['subject'] ?? '');
        $message = htmlspecialchars($_POST['message'] ?? '');
        
        // Basic validation
        if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($subject) && !empty($message)) {
            // In a real application, you would:
            // 1. Validate the email format
            // 2. Send an email notification
            // 3. Store in database
            // 4. Send confirmation email to user
            
            // For demo purposes, we'll just log the form data
            error_log("Contact form submission: $firstName $lastName ($email) - $subject");
            
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('success-message').style.display = 'block';
                });
            </script>";
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('error-message').style.display = 'block';
                });
            </script>";
        }
    }
    ?>
</body>
</html>