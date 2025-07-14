<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Tanjina Ahmed Tuly | Computer Vision Researcher</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #006d77;
            --secondary-color: #83c5be;
            --accent-color: #edf6f9;
            --tertiary-color: #ffddd2;
            --quaternary-color: #e29578;
            --danger-color: #9e2a2b;
            --success-color: #006d77;
            --warning-color: #e29578;
            --text-primary: #1a202c;
            --text-secondary: #4a5568;
            --text-light: #718096;
            --background: #edf6f9;
            --surface: #ffffff;
            --border: #e2e8f0;
            --gradient: linear-gradient(135deg, #006d77 0%, #83c5be 100%);
            --gradient-soft: linear-gradient(135deg, #edf6f9 0%, #ffddd2 100%);
            --gradient-warm: linear-gradient(135deg, #ffddd2 0%, #e29578 100%);
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--background);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            border-bottom: 1px solid var(--border);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-color);
            background: rgba(0, 109, 119, 0.1);
        }

        /* Contact Section */
        .contact-section {
            min-height: 100vh;
            padding: 8rem 2rem 6rem;
            background: var(--background);
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .contact-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-subtitle {
            font-size: 1.2rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        /* Contact Info */
        .contact-info {
            background: var(--surface);
            padding: 3rem;
            border-radius: 1.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border);
        }

        .contact-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--text-primary);
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: var(--accent-color);
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .contact-details p {
            color: var(--text-secondary);
            margin: 0;
        }

        .contact-details a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-details a:hover {
            color: var(--secondary-color);
        }

        /* Contact Form */
        .contact-form {
            background: var(--surface);
            padding: 3rem;
            border-radius: 1.5rem;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border);
        }

        .contact-form h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--text-primary);
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid var(--border);
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--surface);
            color: var(--text-primary);
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 109, 119, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            width: 100%;
            justify-content: center;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Social Links */
        .social-section {
            margin-top: 3rem;
            text-align: center;
        }

        .social-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }

        .social-link {
            width: 60px;
            height: 60px;
            background: var(--surface);
            border: 2px solid var(--border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 1.4rem;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .social-link.linkedin:hover {
            background: #0077b5;
            border-color: #0077b5;
        }

        .social-link.github:hover {
            background: #333;
            border-color: #333;
        }

        .social-link.twitter:hover {
            background: #1da1f2;
            border-color: #1da1f2;
        }

        .social-link.email:hover {
            background: var(--danger-color);
            border-color: var(--danger-color);
        }

        /* Success Message */
        .success-message {
            background: var(--accent-color);
            border: 2px solid var(--success-color);
            color: var(--success-color);
            padding: 1rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            text-align: center;
            display: none;
            font-weight: 500;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .contact-info {
            animation: fadeInLeft 0.8s ease-out;
        }

        .contact-form {
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                gap: 1rem;
            }

            .nav-link {
                padding: 0.5rem;
                font-size: 0.9rem;
            }

            .contact-section {
                padding: 6rem 1rem 4rem;
            }

            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-info,
            .contact-form {
                padding: 2rem;
            }

            .contact-title {
                font-size: 2.5rem;
            }

            .social-links {
                gap: 1rem;
            }

            .social-link {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .nav-container {
                padding: 0 1rem;
            }

            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <ul class="nav-menu">
                <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li><a href="{{ url('/aboutme') }}" class="nav-link">About</a></li>
                <li><a href="{{ url('/education') }}" class="nav-link">Education</a></li>
                <li><a href="{{ url('/skill') }}" class="nav-link">Skills</a></li>
                <li><a href="{{ url('/contact') }}" class="nav-link active">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-header">
                <h1 class="contact-title">Let's Connect</h1>
                <p class="contact-subtitle">
                    I'm always interested in discussing research opportunities, collaborations,
                    or just having a conversation about computer vision and AI. Feel free to reach out!
                </p>
            </div>

            <div class="contact-content">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h3>Get in Touch</h3>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p><a href="mailto:tanjina.tuly@example.com">tanjinaahmedtuly@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p>017945677XX</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>Research Lab,Daffodil International University <br>Ashulia, Savar, Bangladesh</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Research Areas</h4>
                            <p>Computer Vision, Deep Learning<br>Image Processing, AI</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h3>Send a Message</h3>

                    <div class="success-message" id="successMessage">
                        Thank you for your message! I will get back to you soon.
                    </div>

                    <form action="#" method="POST" id="contactForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Social Links -->
            <div class="social-section">
                <h3 class="social-title">Connect on Social Media</h3>
                <div class="social-links">
                    <a href="#" class="social-link linkedin" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link github" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-link twitter" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:tanjina.tuly@example.com" class="social-link email" title="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Form validation and submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');

            // Simple validation
            if (!name || !email || !subject || !message) {
                alert('Please fill in all fields.');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Show success message
            const successMessage = document.getElementById('successMessage');
            successMessage.style.display = 'block';
            this.reset();

            // Scroll to top of form
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    </script>
</body>
</html>
