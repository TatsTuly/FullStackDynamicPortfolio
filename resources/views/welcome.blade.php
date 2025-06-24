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
        }


        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fafafa;
            color: #333;
            line-height: 1.6;
        }


        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }


        .nav {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
            margin-bottom: 40px;
            border-radius: 10px;
        }

        .nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .nav a {
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav a:hover,
        .nav a.active {
            background-color: #667eea;
            color: white;
        }


        .section {
            display: none;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .section.active {
            display: block;
        }


        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 30px auto;
            object-fit: cover;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }


        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 10px;
            color: #667eea;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #667eea;
            text-align: center;
        }

        h3 {
            font-size: 1.3rem;
            margin: 20px 0 10px 0;
            color: #333;
        }

        p {
            margin-bottom: 15px;
            color: #666;
            text-align: center;
        }

        .intro {
            font-size: 1.2rem;
            text-align: center;
            color: #667eea;
            margin-bottom: 30px;
        }


        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .skill-item {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-weight: 500;
            transition: transform 0.3s ease;
        }

        .skill-item:hover {
            transform: translateY(-5px);
        }


        .education-item {
            background-color: #f8f9ff;
            padding: 20px;
            margin: 15px 0;
            border-radius: 10px;
            border-left: 4px solid #667eea;
        }

        .education-item h4 {
            color: #667eea;
            margin-bottom: 5px;
        }

        .education-item .year {
            color: #999;
            font-style: italic;
            margin-bottom: 10px;
        }


        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        /* Button */
        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: transform 0.3s ease;
            display: block;
            margin: 0 auto;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .nav ul {
                flex-wrap: wrap;
                gap: 10px;
            }

            .profile-img {
                width: 150px;
                height: 150px;
            }

            h1 {
                font-size: 2rem;
            }

            .section {
                padding: 25px;
            }

            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <nav class="nav">
            <ul>
                <li><a href="#" class="nav-link active" data-section="home">Home</a></li>
                <li><a href="{{route('aboutme')}}">About</a></li>
                <li><a href="#" class="nav-link" data-section="education">Education</a></li>
                <li><a href="#" class="nav-link" data-section="skills">Skills</a></li>
                <li><a href="#" class="nav-link" data-section="contact">Contact</a></li>
                <li><a href="{{route('home')}}">Index</a></li>
            </ul>
        </nav>


        <div id="home" class="section active">
            <img src="{{ asset('assets/images/tuly.jpg') }}" alt="Tuly's Profile Picture" class="profile-img">
            <h1> Hi,Tuly Here </h1>
            <p class="intro">Researcher and Developer</p>
            <p>Welcome to my portfolio! I'm passionate about creating beautiful and functional web experiences.
               </p>
        </div>


        <div id="about" class="section">
            <h2>About Me</h2>
            <p>I'm a dedicated web developer with a passion for creating innovative digital solutions.
               My journey in technology has been driven by curiosity and a desire to build meaningful applications
               that make a difference.</p>


            <p>I believe in the power of clean, efficient code and user-centered design. Every project I work on
               is an opportunity to learn something new and create something valuable.</p>
        </div>


        <div id="education" class="section">
            <h2>Education</h2>

            <div class="education-item">
                <h4>Bachelor of Science in Computer Science</h4>
                <div class="year">2022 - 2025</div>
                <p>Daffodil International University - Major in Computer Engineering </p>
            </div>

            <div class="education-item">
                <h4>Full Stack Web Development Certification</h4>
                <div class="year">2023</div>
                <p>Completed comprehensive certification covering HTML, CSS, JavaScript, PHP, Laravel,
                   and modern web development practices.</p>
            </div>

            <div class="education-item">
                <h4>Advanced JavaScript & Frameworks</h4>
                <div class="year">2024</div>
                <p>Specialized training in React, Vue.js, and Node.js development with emphasis on
                   building scalable web applications.</p>
            </div>
        </div>

        <!-- Skills Section -->
        <div id="skills" class="section">
            <h2>Skills</h2>

            <h3>Frontend Technologies</h3>
            <div class="skills-grid">
                <div class="skill-item">HTML5</div>
                <div class="skill-item">CSS3</div>
                <div class="skill-item">JavaScript</div>
                <div class="skill-item">React</div>
                <div class="skill-item">Vue.js</div>
                <div class="skill-item">Bootstrap</div>
            </div>

            <h3>Backend Technologies</h3>
            <div class="skills-grid">
                <div class="skill-item">PHP</div>
                <div class="skill-item">Laravel</div>
                <div class="skill-item">Node.js</div>
                <div class="skill-item">MySQL</div>
                <div class="skill-item">MongoDB</div>
                <div class="skill-item">REST APIs</div>
            </div>

            <h3>Tools & Others</h3>
            <div class="skills-grid">
                <div class="skill-item">Git</div>
                <div class="skill-item">VS Code</div>
                <div class="skill-item">Figma</div>
                <div class="skill-item">Docker</div>
                <div class="skill-item">AWS</div>
                <div class="skill-item">Agile</div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="section">
            <h2>Get In Touch</h2>
            <p>I'd love to hear from you! Whether you have a project in mind, want to collaborate,
               or just want to say hello, feel free to reach out.</p>

            <form class="contact-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>

                <div class="form-group">
                    <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                </div>

                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>

    <script>
        // JavaScript for Navigation
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.classList.remove('active');
            });

            // Remove active class from all nav links
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Show the selected section
            document.getElementById(sectionId).classList.add('active');
        }

        // Add click event listeners to navigation links
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));

                    // Add active class to clicked link
                    this.classList.add('active');

                    // Get the section to show
                    const sectionId = this.getAttribute('data-section');
                    showSection(sectionId);
                });
            });

            // Contact form submission
            const contactForm = document.querySelector('.contact-form');
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your message! I\'ll get back to you soon.');
                contactForm.reset();
            });
        });
    </script>
</body>
</html>
