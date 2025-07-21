<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Tuly's Portfolio</title>
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
        .education-hero {
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
            margin: 0 auto;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        /* Education Timeline */
        .education-timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            padding-left: 3rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: -3rem;
            width: 2px;
            background: var(--gradient);
        }

        .timeline-item:last-child::before {
            bottom: 0;
        }

        .timeline-marker {
            position: absolute;
            left: -8px;
            top: 0;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: var(--gradient);
            box-shadow: 0 0 0 4px var(--surface);
        }

        .education-card {
            background: var(--surface);
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            transition: all 0.3s ease;
            position: relative;
            animation: fadeInRight 0.8s ease-out;
        }

        .education-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-color);
        }

        .education-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .education-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .education-institution {
            font-size: 1.1rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        .education-period {
            background: var(--gradient);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .education-description {
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .education-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            background: var(--accent-color);
            border-radius: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        .detail-icon {
            color: var(--primary-color);
            width: 20px;
        }

        .achievement-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .achievement-tag {
            background: var(--gradient-warm);
            color: var(--text-primary);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Certifications & Courses */
        .certifications-section {
            margin-top: 4rem;
            padding: 3rem 0;
            background: var(--surface);
            border-radius: 1.5rem;
            box-shadow: var(--shadow-md);
        }

        .section-title {
            font-size: 2rem;
            font-weight: 600;
            color: var(--text-primary);
            text-align: center;
            margin-bottom: 3rem;
        }

        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
        }

        .certification-card {
            background: var(--surface);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .certification-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
            border-color: var(--secondary-color);
        }

        .cert-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .cert-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient);
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
        }

        .cert-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .cert-provider {
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .cert-description {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }

        .cert-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tag {
            background: var(--accent-color);
            color: var(--primary-color);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
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

            .timeline-item {
                padding-left: 2rem;
            }

            .timeline-marker {
                left: -6px;
                width: 14px;
                height: 14px;
            }

            .education-card {
                padding: 1.5rem;
            }

            .education-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .page-title {
                font-size: 2.5rem;
            }

            .education-details {
                grid-template-columns: 1fr;
            }

            .certifications-grid {
                grid-template-columns: 1fr;
                padding: 0 1rem;
            }

            .certification-card {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .nav-menu {
                gap: 0.5rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .timeline-item {
                padding-left: 1.5rem;
            }

            .education-card {
                padding: 1rem;
            }

            .certifications-section {
                padding: 2rem 0;
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
                <li><a href="/aboutme" class="nav-link">About</a></li>
                <li><a href="/education" class="nav-link active">Education</a></li>
                <li><a href="/skill" class="nav-link">Skills</a></li>
                <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <!-- Hero Section -->
            <div class="education-hero">
                <h1 class="page-title">Educational Journey</h1>
                <p class="page-subtitle">
                    Academic achievements and learning milestones that shaped my career in computer science and research
                </p>
            </div>

            <!-- Education Timeline -->
            <div class="education-timeline">
                <!-- University Education -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="education-card">
                        <div class="education-header">
                            <div>
                                <h3 class="education-title">Bachelor of Science in Computer Science</h3>
                                <div class="education-institution">Daffodil International University</div>
                            </div>
                            <div class="education-period">2022 - 2025</div>
                        </div>
                        <p class="education-description">
                            Currently pursuing undergraduate degree in Computer Science with specialization in Computer Vision and Machine Learning.
                            Maintaining an excellent CGPA of 3.95/4.00 while actively engaging in research projects and competitive programming.
                            Focus areas include artificial intelligence, deep learning, image processing, and software engineering principles.
                        </p>
                        <div class="education-details">
                            <div class="detail-item">
                                <i class="fas fa-graduation-cap detail-icon"></i>
                                <span>Current CGPA: 3.95/4.00</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-eye detail-icon"></i>
                                <span>Specialization: Computer Vision & ML</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-trophy detail-icon"></i>
                                <span>Take Off Competition - Girls Champion</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-code detail-icon"></i>
                                <span>Competitive Programming Participant</span>
                            </div>
                        </div>
                        <div class="achievement-tags">
                            <span class="achievement-tag">Dean's List</span>
                            <span class="achievement-tag">Research Publications</span>
                            <span class="achievement-tag">Programming Champion</span>
                            <span class="achievement-tag">AI/ML Research</span>
                            <span class="achievement-tag">Academic Excellence</span>
                        </div>
                    </div>
                </div>

                <!-- HSC Education -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="education-card">
                        <div class="education-header">
                            <div>
                                <h3 class="education-title">Higher Secondary Certificate (HSC)</h3>
                                <div class="education-institution">Narayanganj Govt Womens College</div>
                            </div>
                            <div class="education-period">2020 - 2022</div>
                        </div>
                        <p class="education-description">
                            Completed Higher Secondary Certificate in Science group with perfect GPA of 5.00, focusing on Mathematics,
                            Physics, Chemistry, and Biology. This strong foundation in analytical sciences and mathematics provided
                            the essential groundwork for pursuing computer science and developing computational thinking skills.
                        </p>
                        <div class="education-details">
                            <div class="detail-item">
                                <i class="fas fa-star detail-icon"></i>
                                <span>GPA: 5.00/5.00 (Perfect Score)</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-book detail-icon"></i>
                                <span>Group: Science (Math, Physics, Chemistry, Biology)</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-calculator detail-icon"></i>
                                <span>Mathematics Excellence</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-atom detail-icon"></i>
                                <span>Strong Science Foundation</span>
                            </div>
                        </div>
                        <div class="achievement-tags">
                            <span class="achievement-tag">Perfect GPA 5.00</span>
                            <span class="achievement-tag">Science Excellence</span>
                            <span class="achievement-tag">Mathematics Expert</span>
                            <span class="achievement-tag">Analytical Thinking</span>
                            <span class="achievement-tag">Academic Leadership</span>
                        </div>
                    </div>
                </div>

                <!-- SSC Education -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="education-card">
                        <div class="education-header">
                            <div>
                                <h3 class="education-title">Secondary School Certificate (SSC)</h3>
                                <div class="education-institution">Narayanganj Government Girls High School</div>
                            </div>
                            <div class="education-period">2018 - 2020</div>
                        </div>
                        <p class="education-description">
                            Achieved perfect GPA of 5.00 in SSC examination from Narayanganj Government Girls High School,
                            demonstrating consistent academic excellence from early education. Recipient of General Government Scholarship
                            for outstanding performance, setting the foundation for future academic achievements.
                        </p>
                        <div class="education-details">
                            <div class="detail-item">
                                <i class="fas fa-book detail-icon"></i>
                                <span>Group: Science (Mathematics, Physics, Chemistry, Biology)</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-star detail-icon"></i>
                                <span>GPA: 5.00/5.00 (Perfect Score)</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-graduation-cap detail-icon"></i>
                                <span>General Government Scholarship Recipient</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-laptop detail-icon"></i>
                                <span>Early Computer Science Introduction</span>
                            </div>
                        </div>
                        <div class="achievement-tags">
                            <span class="achievement-tag">Perfect GPA 5.00</span>
                            <span class="achievement-tag">Government Scholar</span>
                            <span class="achievement-tag">Mathematics Excellence</span>
                            <span class="achievement-tag">Science Foundation</span>
                            <span class="achievement-tag">Academic Leadership</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certifications & Online Courses -->
            <div class="certifications-section">
                <h2 class="section-title">Certifications & Professional Development</h2>

                <div class="certifications-grid">
                    <div class="certification-card">
                        <div class="cert-header">
                            <div class="cert-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div>
                                <h3 class="cert-title">Machine Learning Specialization</h3>
                                <div class="cert-provider">Stanford University (Coursera)</div>
                            </div>
                        </div>
                        <p class="cert-description">
                            Comprehensive course covering supervised learning, unsupervised learning, and reinforcement learning.
                            Includes hands-on projects with real-world datasets and implementation of ML algorithms from scratch.
                        </p>
                        <div class="cert-skills">
                            <span class="skill-tag">Python</span>
                            <span class="skill-tag">TensorFlow</span>
                            <span class="skill-tag">Neural Networks</span>
                            <span class="skill-tag">Deep Learning</span>
                        </div>
                    </div>

                    <div class="certification-card">
                        <div class="cert-header">
                            <div class="cert-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div>
                                <h3 class="cert-title">Computer Vision Fundamentals</h3>
                                <div class="cert-provider">OpenCV University</div>
                            </div>
                        </div>
                        <p class="cert-description">
                            Specialized certification in computer vision techniques including image processing, object detection,
                            feature extraction, and modern deep learning approaches to visual recognition.
                        </p>
                        <div class="cert-skills">
                            <span class="skill-tag">OpenCV</span>
                            <span class="skill-tag">Image Processing</span>
                            <span class="skill-tag">Object Detection</span>
                            <span class="skill-tag">CNN</span>
                        </div>
                    </div>

                    <div class="certification-card">
                        <div class="cert-header">
                            <div class="cert-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div>
                                <h3 class="cert-title">Full Stack Web Development</h3>
                                <div class="cert-provider">freeCodeCamp</div>
                            </div>
                        </div>
                        <p class="cert-description">
                            Complete full-stack development certification covering frontend and backend technologies,
                            databases, and modern web development practices with emphasis on responsive design.
                        </p>
                        <div class="cert-skills">
                            <span class="skill-tag">HTML/CSS</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">React</span>
                            <span class="skill-tag">Node.js</span>
                        </div>
                    </div>

                    <div class="certification-card">
                        <div class="cert-header">
                            <div class="cert-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div>
                                <h3 class="cert-title">Data Science with Python</h3>
                                <div class="cert-provider">IBM (edX)</div>
                            </div>
                        </div>
                        <p class="cert-description">
                            Professional certificate in data science covering data analysis, visualization, statistical modeling,
                            and machine learning using Python and its scientific computing libraries.
                        </p>
                        <div class="cert-skills">
                            <span class="skill-tag">Python</span>
                            <span class="skill-tag">Pandas</span>
                            <span class="skill-tag">NumPy</span>
                            <span class="skill-tag">Matplotlib</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
