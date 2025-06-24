<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills - Tuly's Portfolio</title>
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

        h3 {
            font-size: 1.5rem;
            margin: 30px 0 15px 0;
            color: #667eea;
            border-bottom: 2px solid #667eea;
            padding-bottom: 5px;
        }

        .skills-list {
            list-style: none;
            padding-left: 0;
        }

        .skills-list li {
            background-color: #f8f9ff;
            margin: 8px 0;
            padding: 12px 20px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .skills-list li:hover {
            background-color: #e8ebff;
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

            h3 {
                font-size: 1.3rem;
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
                <li><a href="/skill" class="active">Skills</a></li>
                <li><a href="/contact">Contact</a></li>

            </ul>
        </nav>

        <div class="section">
            <h2>Skills</h2>

            <h3>Frontend Technologies</h3>
            <ul class="skills-list">
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>Bootstrap</li>
            </ul>

            <h3>Backend Technologies</h3>
            <ul class="skills-list">
                <li>PHP</li>
                <li>Laravel</li>
                <li>Node.js</li>
                <li>MySQL</li>
                <li>MongoDB</li>
                <li>REST APIs</li>
            </ul>

            <h3>Tools & Others</h3>
            <ul class="skills-list">
                <li>Git</li>
                <li>VS Code</li>
                <li>Figma</li>

            </ul>
        </div>
    </div>
</body>
</html>
