<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me - Tuly's Portfolio</title>
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
            margin-bottom: 30px;
            color: #667eea;
            text-align: center;
        }

        p {
            margin-bottom: 20px;
            color: #666;
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
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
                <li><a href="/aboutme}}" class="active">About</a></li>
                <li><a href="/education">Education</a></li>
                <li><a href="/skill">Skills</a></li>
                <li><a href="/contact">Contact</a></li>

            </ul>
        </nav>

        <div id="about" class="section">
            <h2>About Me</h2>
            <p>I'm a dedicated web developer with a passion for creating innovative digital solutions.
               My journey in technology has been driven by curiosity and a desire to build meaningful applications
               that make a difference.</p>

            <p>I believe in the power of clean, efficient code and user-centered design. Every project I work on
               is an opportunity to learn something new and create something valuable.</p>
        </div>
    </div>
</body>
</html>
