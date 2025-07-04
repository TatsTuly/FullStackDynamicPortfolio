<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Tuly's Portfolio</title>
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
            max-width: 900px;
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
            margin-bottom: 40px;
            color: #667eea;
            text-align: center;
        }

        .education-item {
            background-color: #f8f9ff;
            padding: 25px;
            margin: 20px 0;
            border-radius: 12px;
            border-left: 4px solid #667eea;
            transition: transform 0.3s ease;
        }

        .education-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.15);
        }

        .education-item h4 {
            color: #667eea;
            margin-bottom: 8px;
            font-size: 1.3rem;
        }

        .education-item .year {
            color: #999;
            font-style: italic;
            margin-bottom: 12px;
            font-weight: 500;
        }

        .education-item p {
            color: #666;
            line-height: 1.7;
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

            .education-item {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation -->
        <nav class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/aboutme">About</a></li>
                <li><a href="/education" class="active">Education</a></li>
                <li><a href="/skill">Skills</a></li>
                <li><a href="/contact">Contact</a></li>

            </ul>
        </nav>

        <div id="education" class="section">
            <h2>Education</h2>

            <div class="education-item">
                <h4>Bachelor of Science in Computer Science</h4>
                <div class="year">2022 - 2025</div>
                <p>Daffodil International University - Major in Computer Engineering</p>
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
    </div>
</body>
</html>
