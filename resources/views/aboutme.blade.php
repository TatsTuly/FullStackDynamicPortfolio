<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me - Tuly's Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
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
            border-bottom: 1px solid var(--border);
            box-shadow: var(--shadow-md);
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
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-color);
            background: rgba(0, 109, 119, 0.1);
        }

        /* Main Content */
        .main-content {
            padding-top: 6rem;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Hero Section */
        .about-hero {
            text-align: center;
            margin-bottom: 4rem;
            padding: 2rem 0;
        }

        .page-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 0.8s ease-out;
        }

        .page-subtitle {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 800px;
            margin: 0 auto 2rem;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .hero-details {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 1.5rem;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .hero-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .hero-item i {
            color: var(--primary-color);
        }

        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
            align-items: start;
        }

        .profile-section {
            position: sticky;
            top: 6rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeInLeft 0.8s ease-out 0.4s both;
        }

        .profile-image {
            width: 300px;
            height: 300px;
            border-radius: 1rem;
            object-fit: cover;
            box-shadow: var(--shadow-xl);
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.05);
        }

        .profile-stats {
            background: var(--surface);
            padding: 1.5rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            width: 100%;
        }

        .stat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid var(--border);
        }

        .stat-item:last-child {
            border-bottom: none;
        }

        .stat-label {
            font-weight: 500;
            color: var(--text-secondary);
        }

        .stat-value {
            font-weight: 600;
            color: var(--text-primary);
        }

        .main-content-area {
            animation: fadeInRight 0.8s ease-out 0.6s both;
        }

        .content-section {
            background: var(--surface);
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .content-section:hover {
            box-shadow: var(--shadow-lg);
            border-color: var(--accent-color);
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-icon {
            color: var(--primary-color);
        }

        .section-text {
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 1rem;
        }

        /* Simple Achievements */
        .simple-achievements {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .achievement-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .achievement-item:hover {
            border-color: var(--primary-color);
            box-shadow: var(--shadow-sm);
        }

        .achievement-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 600;
            min-width: 80px;
            text-align: center;
        }

        .achievement-badge.champion {
            background: var(--gradient);
            color: white;
        }

        .achievement-badge.published {
            background: var(--gradient-warm);
            color: var(--text-primary);
        }

        .achievement-badge.scholar {
            background: var(--secondary-color);
            color: var(--text-primary);
        }

        /* Simple Projects */
        .simple-projects {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .project-item {
            padding: 1.5rem;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 0.75rem;
            transition: all 0.3s ease;
        }

        .project-item:hover {
            border-color: var(--primary-color);
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .project-item h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .project-item p {
            color: var(--text-secondary);
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
        }

        .tech-tag {
            display: inline-block;
            background: var(--accent-color);
            color: var(--primary-color);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 500;
            margin-right: 0.5rem;
            margin-bottom: 0.25rem;
        }

        /* Research Interests */
        .research-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .research-card {
            background: var(--surface);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-out 0.8s both;
        }

        .research-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .research-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient);
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .research-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }

        .research-description {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Achievements Section */
        .achievements-section {
            background: var(--gradient-soft);
            border-left: 4px solid var(--accent-color);
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .achievement-card {
            background: var(--surface);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            border: 2px solid transparent;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .achievement-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .achievement-card.champion {
            border-color: #006d77;
        }

        .achievement-card.scholarship {
            border-color: var(--primary-color);
        }

        .achievement-card.competition {
            border-color: var(--secondary-color);
        }

        .achievement-card.academic {
            border-color: var(--quaternary-color);
        }

        .achievement-card.growing {
            border-color: var(--warning-color);
        }

        .achievement-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .champion .achievement-icon { background: linear-gradient(135deg, #006d77 0%, #83c5be 100%); }
        .scholarship .achievement-icon { background: var(--gradient); }
        .competition .achievement-icon { background: linear-gradient(135deg, var(--secondary-color) 0%, var(--tertiary-color) 100%); }
        .academic .achievement-icon { background: linear-gradient(135deg, var(--quaternary-color) 0%, var(--warning-color) 100%); }
        .growing .achievement-icon { background: linear-gradient(135deg, var(--warning-color) 0%, var(--danger-color) 100%); }

        .achievement-card h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .achievement-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .achievement-badge {
            display: inline-block;
            background: var(--gradient-warm);
            color: var(--text-primary);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Research Publications - Simplified */
        .research-publications {
            margin-top: 4rem;
        }

        .simple-publication-card {
            background: var(--surface);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            border-left: 4px solid var(--primary-color);
            position: relative;
            animation: fadeInUp 0.8s ease-out 1s both;
        }

        .publication-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--gradient);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .publication-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
            line-height: 1.4;
            margin-right: 100px;
        }

        .publication-details {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .publication-journal {
            font-weight: 600;
            color: var(--primary-color);
        }

        .publication-year {
            font-weight: 500;
        }

        .publication-summary {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }

        .publication-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .tag {
            background: rgba(0, 109, 119, 0.1);
            color: var(--primary-color);
            padding: 0.25rem 0.75rem;
            border-radius: 0.5rem;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .publication-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-primary, .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .btn-secondary:hover {
            background: var(--primary-color);
            color: white;
        }

        /* GitHub Projects - Simplified */
        .github-projects {
            margin-top: 4rem;
        }

        .simple-projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .simple-project-card {
            background: var(--surface);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-out 1.2s both;
        }

        .simple-project-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-color);
        }

        .project-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .project-icon {
            width: 50px;
            height: 50px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .project-icon.laravel { background: linear-gradient(135deg, #006d77 0%, #83c5be 100%); }
        .project-icon.ai { background: linear-gradient(135deg, #83c5be 0%, #006d77 100%); }
        .project-icon.calculator { background: linear-gradient(135deg, #e29578 0%, #ffddd2 100%); }
        .project-icon.medical { background: linear-gradient(135deg, #9e2a2b 0%, #e29578 100%); }
        .project-icon.pets { background: linear-gradient(135deg, #ffddd2 0%, #e29578 100%); }
        .project-icon.cv { background: linear-gradient(135deg, #006d77 0%, #83c5be 100%); }

        .project-info h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .project-tech {
            color: var(--text-secondary);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .project-description {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .project-links {
            display: flex;
            gap: 1rem;
        }

        .project-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }

        .project-link:hover {
            color: var(--primary-color);
            background: rgba(0, 109, 119, 0.1);
            border-color: var(--primary-color);
        }

        /* GitHub CTA */
        .github-cta {
            background: var(--gradient);
            color: white;
            padding: 3rem;
            border-radius: 1rem;
            text-align: center;
            animation: fadeInUp 0.8s ease-out 1.4s both;
        }

        .github-cta-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .github-cta-info h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .github-cta-info p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .github-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            display: block;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .github-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .github-btn:hover {
            background: rgba(255, 255, 255, 0.3);
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

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 300px 1fr;
                gap: 3rem;
            }
        }

        @media (max-width: 768px) {
            .nav-container {
                padding: 0 1rem;
            }

            .nav-menu {
                gap: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }

            .container {
                padding: 1rem;
            }

            .content-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .profile-section {
                position: static;
            }

            .profile-image {
                width: 250px;
                height: 250px;
            }

            .page-title {
                font-size: 2.5rem;
            }

            .research-grid {
                grid-template-columns: 1fr;
            }

            .simple-projects-grid {
                grid-template-columns: 1fr;
            }

            .achievements-grid {
                grid-template-columns: 1fr;
            }

            .hero-details {
                flex-direction: column;
                gap: 1rem;
            }

            .publication-title {
                margin-right: 0;
                font-size: 1.25rem;
            }

            .publication-badge {
                position: static;
                margin-bottom: 1rem;
                width: fit-content;
            }

            .publication-actions {
                flex-direction: column;
            }

            .btn-primary, .btn-secondary {
                justify-content: center;
            }

            .github-stats {
                gap: 2rem;
            }

            .stat-number {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .nav-menu {
                gap: 0.5rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .profile-image {
                width: 200px;
                height: 200px;
            }

            .content-section {
                padding: 1.5rem;
            }

            .simple-publication-card,
            .simple-project-card {
                padding: 1.5rem;
            }

            .github-cta {
                padding: 2rem;
            }

            .github-stats {
                flex-direction: column;
                gap: 1rem;
            }

            .github-cta-info h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <ul class="nav-menu">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/aboutme" class="nav-link active">About</a></li>
                <li><a href="/education" class="nav-link">Education</a></li>
                <li><a href="/skill" class="nav-link">Skills</a></li>
                <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <!-- Hero Section -->
            <div class="about-hero">
                <h1 class="page-title">About Me</h1>
                <p class="page-subtitle">
                    Computer Science Student focused on Computer Vision and Machine Learning
                </p>
            </div>

            <!-- Content Grid -->
            <div class="content-grid">
                <div class="profile-section">
                    <img src="{{ asset('assets/images/portfolio.jpg') }}" alt="Tanjina Ahmed Tuly" class="profile-image">

                    <div class="profile-stats">
                        <div class="stat-item">
                            <span class="stat-label">University</span>
                            <span class="stat-value">Daffodil International</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">CGPA</span>
                            <span class="stat-value">3.95/4.00</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Focus</span>
                            <span class="stat-value">Computer Vision</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Location</span>
                            <span class="stat-value">Narayanganj, BD</span>
                        </div>
                    </div>
                </div>

                <div class="main-content-area">
                    <div class="content-section">
                        <h2 class="section-title">
                            <i class="fas fa-user section-icon"></i>
                            Introduction
                        </h2>
                        <p class="section-text">
                            I'm a computer science student at Daffodil International University with a passion for computer vision and machine learning. Currently maintaining a CGPA of 3.95/4.00 while working on research projects involving image processing and AI algorithms.
                        </p>
                    </div>

                    <div class="content-section">
                        <h2 class="section-title">
                            <i class="fas fa-trophy section-icon"></i>
                            Key Achievements
                        </h2>
                        <div class="simple-achievements">
                            <div class="achievement-item">
                                <span class="achievement-badge champion">Champion</span>
                                <span>Take Off Competition - Girls Champion</span>
                            </div>
                            <div class="achievement-item">
                                <span class="achievement-badge published">Published</span>
                                <span>Research on Diabetes Risk Assessment using Fuzzy Logic</span>
                            </div>
                            <div class="achievement-item">
                                <span class="achievement-badge scholar">Scholar</span>
                                <span>Government Scholarship recipient for SSC</span>
                            </div>
                        </div>
                    </div>

                    <div class="content-section">
                        <h2 class="section-title">
                            <i class="fas fa-code section-icon"></i>
                            Featured Projects
                        </h2>
                        <div class="simple-projects">
                            <div class="project-item">
                                <h4>Diabetes Risk Assessment System</h4>
                                <p>Fuzzy inference system for medical diagnosis</p>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">Fuzzy Logic</span>
                            </div>
                            <div class="project-item">
                                <h4>AI 8-Puzzle Solver</h4>
                                <p>AI algorithms for puzzle solving</p>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">AI</span>
                            </div>
                            <div class="project-item">
                                <h4>Dynamic Portfolio Website</h4>
                                <p>Full-stack web application</p>
                                <span class="tech-tag">Laravel</span>
                                <span class="tech-tag">PHP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
