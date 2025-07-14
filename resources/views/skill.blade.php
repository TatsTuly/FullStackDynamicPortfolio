<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills - Tuly's Portfolio</title>
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
        .skills-hero {
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
            font-family: 'Playfair Display', serif;
            animation: fadeInUp 0.8s ease-out;
        }

        .page-subtitle {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 800px;
            margin: 0 auto 2rem;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        /* Skills Grid */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-bottom: 4rem;
        }

        .skill-category {
            background: var(--surface);
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .skill-category:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--secondary-color);
        }

        .category-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .frontend .category-icon {
            background: var(--gradient);
        }

        .backend .category-icon {
            background: var(--gradient-warm);
        }

        .tools .category-icon {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--tertiary-color) 100%);
        }

        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }

        .category-subtitle {
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        .skills-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .skill-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            background: var(--accent-color);
            border-radius: 0.75rem;
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .skill-item:hover {
            background: rgba(0, 109, 119, 0.1);
            transform: translateX(5px);
        }

        .skill-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex: 1;
        }

        .skill-icon {
            color: var(--primary-color);
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }

        .skill-name {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 1rem;
        }

        .skill-level {
            background: var(--gradient);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 600;
            min-width: 80px;
            text-align: center;
        }

        .skill-level.expert {
            background: var(--gradient);
        }

        .skill-level.intermediate {
            background: var(--gradient-warm);
            color: var(--text-primary);
        }

        .skill-level.beginner {
            background: var(--secondary-color);
            color: var(--text-primary);
        }

        /* Additional Skills Section */
        .additional-skills {
            margin-top: 4rem;
            padding: 3rem 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 600;
            color: var(--text-primary);
            text-align: center;
            margin-bottom: 3rem;
            font-family: 'Playfair Display', serif;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .skill-tag {
            background: var(--surface);
            color: var(--text-primary);
            padding: 0.75rem 1.5rem;
            border-radius: 2rem;
            font-weight: 500;
            border: 2px solid var(--border);
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .skill-tag:hover {
            border-color: var(--primary-color);
            background: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Learning Goals */
        .learning-goals {
            margin-top: 4rem;
            background: var(--gradient-soft);
            padding: 3rem;
            border-radius: 1.5rem;
            border: 1px solid var(--border);
        }

        .goals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .goal-item {
            background: var(--surface);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border);
            text-align: center;
            transition: all 0.3s ease;
        }

        .goal-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .goal-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            margin: 0 auto 1rem;
        }

        .goal-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .goal-description {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.5;
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

            .skills-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .skill-category {
                padding: 2rem;
            }

            .page-title {
                font-size: 2.5rem;
            }

            .goals-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }

            .additional-skills,
            .learning-goals {
                padding: 2rem;
            }

            .tags-container {
                gap: 0.75rem;
            }

            .skill-tag {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 480px) {
            .nav-menu {
                gap: 0.5rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .goals-grid {
                grid-template-columns: 1fr;
            }

            .skill-category {
                padding: 1.5rem;
            }

            .skill-item {
                padding: 0.75rem 1rem;
            }

            .category-icon {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }

            .category-title {
                font-size: 1.25rem;
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
                <li><a href="/education" class="nav-link">Education</a></li>
                <li><a href="/skill" class="nav-link active">Skills</a></li>
                <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            <!-- Hero Section -->
            <div class="skills-hero">
                <h1 class="page-title">Technical Skills</h1>
                <p class="page-subtitle">
                    Technologies and tools I use to build amazing digital experiences
                </p>
            </div>

            <!-- Skills Grid -->
            <div class="skills-grid">
                <div class="skill-category frontend">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div>
                            <h3 class="category-title">Frontend</h3>
                            <p class="category-subtitle">Client-side technologies</p>
                        </div>
                    </div>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fab fa-html5 skill-icon"></i>
                                <span class="skill-name">HTML5 & CSS3</span>
                            </div>
                            <span class="skill-level expert">Expert</span>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fab fa-js-square skill-icon"></i>
                                <span class="skill-name">JavaScript</span>
                            </div>
                            <span class="skill-level intermediate">Intermediate</span>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fab fa-bootstrap skill-icon"></i>
                                <span class="skill-name">Bootstrap</span>
                            </div>
                            <span class="skill-level expert">Expert</span>
                        </div>
                    </div>
                </div>

                <div class="skill-category backend">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div>
                            <h3 class="category-title">Backend</h3>
                            <p class="category-subtitle">Server-side technologies</p>
                        </div>
                    </div>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fab fa-laravel skill-icon"></i>
                                <span class="skill-name">PHP & Laravel</span>
                            </div>
                            <span class="skill-level expert">Expert</span>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fas fa-database skill-icon"></i>
                                <span class="skill-name">MySQL</span>
                            </div>
                            <span class="skill-level intermediate">Intermediate</span>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fas fa-exchange-alt skill-icon"></i>
                                <span class="skill-name">REST APIs</span>
                            </div>
                            <span class="skill-level intermediate">Intermediate</span>
                        </div>
                    </div>
                </div>

                <div class="skill-category tools">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div>
                            <h3 class="category-title">Tools</h3>
                            <p class="category-subtitle">Development environment</p>
                        </div>
                    </div>
                    <div class="skills-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fab fa-git-alt skill-icon"></i>
                                <span class="skill-name">Git & VS Code</span>
                            </div>
                            <span class="skill-level expert">Expert</span>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <i class="fab fa-figma skill-icon"></i>
                                <span class="skill-name">Figma</span>
                            </div>
                            <span class="skill-level intermediate">Intermediate</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Skills -->
            <div class="additional-skills">
                <h2 class="section-title">Additional Technologies</h2>
                <div class="tags-container">
                    <span class="skill-tag">Python</span>
                    <span class="skill-tag">Computer Vision</span>
                    <span class="skill-tag">Machine Learning</span>
                    <span class="skill-tag">OpenCV</span>
                    <span class="skill-tag">Fuzzy Logic</span>
                    <span class="skill-tag">Algorithm Design</span>
                    <span class="skill-tag">Data Structures</span>
                    <span class="skill-tag">Problem Solving</span>
                </div>
            </div>

            <!-- Learning Goals -->
            <div class="learning-goals">
                <h2 class="section-title">Currently Learning</h2>
                <div class="goals-grid">
                    <div class="goal-item">
                        <div class="goal-icon">
                            <i class="fab fa-react"></i>
                        </div>
                        <h4 class="goal-title">React.js</h4>
                        <p class="goal-description">Modern frontend framework for building interactive user interfaces</p>
                    </div>
                    <div class="goal-item">
                        <div class="goal-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4 class="goal-title">Deep Learning</h4>
                        <p class="goal-description">Advanced neural networks and AI model architectures</p>
                    </div>
                    <div class="goal-item">
                        <div class="goal-icon">
                            <i class="fab fa-docker"></i>
                        </div>
                        <h4 class="goal-title">DevOps</h4>
                        <p class="goal-description">Containerization and deployment automation tools</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
