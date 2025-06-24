<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Tuly's Portfolio</title>
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
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
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
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #667eea;
            text-align: center;
        }

        p {
            margin-bottom: 30px;
            color: #666;
            font-size: 1.1rem;
            text-align: center;
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

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            display: none;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .nav ul {
                flex-wrap: wrap;
                gap: 10px;
            }

            .section {
                padding: 25px;
            }

            h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <nav class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/aboutme">About</a></li>
                <li><a href="/education">Education</a></li>
                <li><a href="/skill">Skills</a></li>
                <li><a href="/contact" class="active">Contact</a></li>
            </ul>
        </nav>

        <div class="section">
            <h2>Get In Touch</h2>
            <p>I'd love to hear from you! </p>

            <div class="success-message" id="successMessage">
                Thank you for your message! I'll get back to you soon.
            </div>

            <form class="contact-form" id="contactForm">
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

        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const successMessage = document.getElementById('successMessage');
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                successMessage.style.display = 'block';
                contactForm.reset();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
