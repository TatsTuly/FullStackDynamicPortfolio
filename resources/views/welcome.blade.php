<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuly's Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: white;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
            border: 1px solid #e0e0e0;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .header {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            border-bottom: 1px solid #e0e0e0;
        }

        .header-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        /* Navigation menu styles */
        .nav-menu {
            display: flex;
            justify-content: center;
            border-top: 1px solid #f0f0f0;
            padding-top: 1rem;
            width: 100%;
        }

        .menu-item {
            margin: 0 1.5rem;
        }

        .menu-item h3 {
            font-size: 1.1rem;
            font-weight: 500;
            color: #555;
            cursor: pointer;
            transition: color 0.2s;
            padding: 0.3rem 0;
        }

        .menu-item h3:hover {
            color: #000;
        }

        .menu-item h3.active {
            color: #000;
            border-bottom: 2px solid #000;
        }

        .profile-section {
            display: flex;
            padding: 2rem;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .label {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 0.5rem;
        }

        .about-me-section {
            flex-grow: 1;
            padding: 0 1rem;
        }

        .about-me-content {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            padding: 1.5rem;
            border-radius: 4px;
        }

        .about-me-button {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 4px;
            margin-bottom: 1rem;
            display: inline-block;
        }

        h1 {
            font-size: 1.8rem;
            font-weight: normal;
            font-style: italic;
        }

        .menu-button {
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
            display: none;
        }

        /* Content sections */
        .content-section {
            padding: 2rem;
            display: none;
        }

        .content-section.active {
            display: block;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                align-items: center;
            }

            .menu-item {
                margin: 0.5rem 0;
            }

            .menu-button {
                display: block;
            }

            .nav-menu.hidden {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-title">
                <h1>Hi, I am Tuly.</h1>
                <button class="menu-button" id="menuToggle">≡</button>
            </div>

            <div class="nav-menu" id="navMenu">
                <div class="menu-item"><h3 id="menuHome" class="active">Home</h3></div>
                <div class="menu-item"><h3 id="menuEducation">Education</h3></div>
                <div class="menu-item"><h3 id="menuAbout">About Me</h3></div>
                <div class="menu-item"><h3 id="menuContact">Contact</h3></div>
            </div>
        </div>

        <!-- Home Section -->
        <div id="home" class="content-section active">
            <div class="profile-section">
                <div>
                    <img src="{{ asset('assets/images/tuly.jpg') }}" alt="Tuly's Photo" class="profile-img">
                    <p class="label">Picture</p>
                </div>

                <div class="about-me-section">
                    <div class="about-me-button">About me</div>
                    <div class="about-me-content">
                        <p>
                            Text 1
                        </p>
                        <p>
                            Text 2
                        </p>
                        <p>
                            Text 3
                        </p>
                        <p>Hello! I'm Tuly, a professional web developer with expertise in creating dynamic, responsive web applications. I specialize in full-stack development using modern technologies and frameworks to deliver high-quality digital solutions.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Education Section -->
        <div id="education" class="content-section">
            <h2>My Education</h2>
            <div style="margin-top: 1.5rem;">
                <div style="margin-bottom: 2rem;">
                    <h3>Master of Computer Science</h3>
                    <p style="color: #666;">University of Technology (2022-2024)</p>
                    <p>Specialized in Web Technologies and Cloud Computing with focus on modern application development.</p>
                </div>
                <div style="margin-bottom: 2rem;">
                    <h3>Bachelor of Computer Science</h3>
                    <p style="color: #666;">State University (2018-2022)</p>
                    <p>Graduated with honors, focused on software engineering and database systems.</p>
                </div>
            </div>
        </div>

        <!-- About Me Section -->
        <div id="about" class="content-section">
            <h2>About Me</h2>
            <div style="margin-top: 1.5rem;">
                <p>I am a passionate full-stack developer with over 5 years of experience building web applications. My expertise includes Laravel, Vue.js, React, and various other modern technologies.</p>
                <p style="margin-top: 1rem;">I enjoy solving complex problems and creating efficient, scalable solutions for my clients. My approach focuses on clean code, performance optimization, and intuitive user experiences.</p>
                <p style="margin-top: 1rem;">When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or enjoying outdoor activities.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="content-section">
            <h2>Contact Me</h2>
            <div style="margin-top: 1.5rem;">
                <p><strong>Email:</strong> tuly@example.com</p>
                <p><strong>Phone:</strong> (123) 456-7890</p>
                <p style="margin-top: 1rem;">Connect with me on social media:</p>
                <div style="margin-top: 0.5rem; display: flex; gap: 1rem;">
                    <a href="#" style="text-decoration: none; color: #333;">LinkedIn</a>
                    <a href="#" style="text-decoration: none; color: #333;">GitHub</a>
                    <a href="#" style="text-decoration: none; color: #333;">Twitter</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const navMenu = document.getElementById('navMenu');
            const menuItems = document.querySelectorAll('.menu-item h3');
            const contentSections = document.querySelectorAll('.content-section');

            // Toggle menu visibility on mobile
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('hidden');
                });
            }

            // Handle menu item clicks
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Set active menu item
                    menuItems.forEach(mi => mi.classList.remove('active'));
                    this.classList.add('active');

                    // Show corresponding section
                    const sectionId = this.getAttribute('data-section');
                    contentSections.forEach(section => {
                        section.classList.remove('active');
                    });
                    document.getElementById(sectionId).classList.add('active');

                    // Hide mobile menu after selection
                    if (window.innerWidth <= 768) {
                        navMenu.classList.add('hidden');
                    }
                });
            });
        });
    </script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
