<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanjina Ahmed Tuly | Computer Vision Researcher</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-c            <div class="hero-image">
                <img src="{{ asset('assets/imagees/portfolio.jpg') }}" alt="Tanjina Ahmed Tuly" class="profile-image">
            </div>r: #006d77;
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
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
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

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 6rem 2rem 4rem;
            background: var(--background);
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-content {
            animation: fadeInLeft 1s ease-out;
        }

        .hero-image {
            text-align: center;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .profile-image {
            width: 350px;
            height: 350px;
            border-radius: 2rem;
            object-fit: cover;
            box-shadow: var(--shadow-xl);
            border: 4px solid var(--tertiary-color);
        }

        .hero-greeting {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
            font-weight: 400;
            letter-spacing: 0.5px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .hero-name {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
            line-height: 1.2;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .hero-title {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 500;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .hero-description {
            font-size: 1.1rem;
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 3rem;
            max-width: 500px;
            animation: fadeInUp 0.8s ease-out 0.8s both;
        }

        .hero-actions {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 0.8s ease-out 1s both;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary-color);
            padding: 1rem 2.5rem;
            border: 2px solid var(--primary-color);
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Research Interests */
        .research-interests {
            padding: 6rem 2rem;
            background: var(--surface);
        }

        .research-container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .research-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 3rem;
            font-family: 'Playfair Display', serif;
        }

        .research-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .research-card {
            padding: 2rem;
            border-radius: 1rem;
            background: var(--gradient-soft);
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }

        .research-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .research-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient);
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin: 0 auto 1.5rem;
        }

        .research-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
        }

        .research-card p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Featured Work */
        .featured-work {
            padding: 6rem 2rem;
            background: var(--background);
        }

        .work-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        .work-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .work-card {
            background: var(--surface);
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }

        .work-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--secondary-color);
        }

        .work-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient);
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .work-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }

        .work-card p {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .work-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .work-link:hover {
            color: var(--secondary-color);
            transform: translateX(5px);
        }

        /* Contact CTA */
        .contact-cta {
            padding: 6rem 2rem;
            background: var(--gradient);
            color: white;
            text-align: center;
        }

        .cta-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .cta-subtitle {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        .cta-button {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 1.25rem 3rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .cta-button:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                gap: 1rem;
            }

            .hero-container {
                grid-template-columns: 1fr;
                gap: 3rem;
                text-align: center;
            }

            .hero-actions {
                flex-direction: column;
                gap: 1rem;
            }

            .research-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .work-grid {
                grid-template-columns: 1fr;
            }

            .nav-container {
                padding: 0 1rem;
            }

            .research-interests,
            .featured-work,
            .contact-cta {
                padding: 4rem 1rem;
            }

            .profile-image {
                width: 280px;
                height: 280px;
            }
        }

        @media (max-width: 480px) {
            .research-grid {
                grid-template-columns: 1fr;
            }

            .hero-name {
                font-size: 2.5rem;
            }

            .research-icon {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }

            .profile-image {
                width: 250px;
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <ul class="nav-menu">
                <li><a href="/" class="nav-link active">Home</a></li>
                <li><a href="/aboutme" class="nav-link">About</a></li>
                <li><a href="/education" class="nav-link">Education</a></li>
                <li><a href="/skill" class="nav-link">Skills</a></li>
                <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <p class="hero-greeting">Hello, I'm</p>
                <h1 class="hero-name">Tanjina Ahmed Tuly</h1>
                <h2 class="hero-title">Computer Science Student & Research Enthusiast</h2>
                <p class="hero-description">
                    I'm passionate about computer vision and machine learning, focusing on developing algorithms that can understand and interpret visual information. Currently pursuing my studies while exploring the fascinating world of AI research and its practical applications.
                </p>
                <div class="hero-actions">
                    <a href="/aboutme" class="btn-primary">
                        <i class="fas fa-user"></i>
                        About Me
                    </a>
                    <a href="/contact" class="btn-secondary">
                        <i class="fas fa-envelope"></i>
                        Contact
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/images/portfolio.jpg') }}" alt="Tanjina Ahmed Tuly" class="profile-image">
            </div>
        </div>
    </section>

    <!-- Research Interests -->
    <section class="research-interests">
        <div class="research-container">
            <h2 class="research-title">Research Interests</h2>
            <div class="research-grid">
                <div class="research-card">
                    <div class="research-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Computer Vision</h3>
                    <p>Developing algorithms for image processing, object detection, and visual recognition systems.</p>
                </div>
                <div class="research-card">
                    <div class="research-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Machine Learning</h3>
                    <p>Exploring neural networks, deep learning architectures, and AI model optimization.</p>
                </div>
                <div class="research-card">
                    <div class="research-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>AI in Healthcare</h3>
                    <p>Applying fuzzy logic and ML techniques for medical diagnosis and risk assessment.</p>
                </div>
                <div class="research-card">
                    <div class="research-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Algorithm Design</h3>
                    <p>Creating efficient algorithms for computational problems and optimization challenges.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Work -->
    <section class="featured-work">
        <div class="work-container">
            <div class="section-header">
                <h2 class="section-title">Featured Work</h2>
                <p class="section-subtitle">
                    Exploring the intersection of computer vision, machine learning, and practical applications
                </p>
            </div>
            <div class="work-grid">
                <div class="work-card">
                    <div class="work-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Diabetes Risk Assessment</h3>
                    <p>Published research on fuzzy inference systems for comprehensive diabetes risk evaluation, demonstrating practical applications of AI in healthcare.</p>
                    <a href="/aboutme" class="work-link">
                        View Details <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="work-card">
                    <div class="work-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Computer Vision Research</h3>
                    <p>Developing advanced algorithms for image processing, object detection, and visual recognition systems using modern deep learning frameworks.</p>
                    <a href="/skill" class="work-link">
                        Explore Skills <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="work-card">
                    <div class="work-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Competitive Programming</h3>
                    <p>Girls Champion in Take Off Competition, demonstrating strong algorithmic problem-solving skills and programming excellence.</p>
                    <a href="/education" class="work-link">
                        See Achievements <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta">
        <div class="cta-container">
            <h2 class="cta-title">Let's Work Together</h2>
            <p class="cta-subtitle">
                Interested in collaborating on computer vision projects or discussing research opportunities?
                I'd love to hear from you!
            </p>
            <a href="/contact" class="cta-button">
                <i class="fas fa-paper-plane"></i>
                Get In Touch
            </a>
        </div>
    </section>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.research-card, .work-card').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
