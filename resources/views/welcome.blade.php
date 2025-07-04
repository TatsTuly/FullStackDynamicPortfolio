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
                <li><a href="/contact">Contact</a></li>

            </ul>
        </nav>


        <div id="home" class="section active">
            <img src="{{ asset('assets/images/tuly.jpg') }}" alt="Tuly's Profile Picture" class="profile-img">
            <h1> Hi,Tuly Here </h1>
            <p class="intro">Researcher and Developer</p>
            <p>Welcome to my portfolio! I'm passionate about creating beautiful and functional web experiences.
               </p>
        </div>


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
</body>
</html>
