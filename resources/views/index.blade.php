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
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }


        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }


        .header {
            text-align: center;
            background-color: #4285f4;
            color: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 16px;
        }

        /* Simple sections */
        .section {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            border-left: 4px solid #4285f4;
        }

        .section h2 {
            color: #4285f4;
            margin-bottom: 15px;
            font-size: 22px;
        }

        .section p {
            margin-bottom: 10px;
            color: #555;
            font-size: 15px;
        }


        ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        li {
            margin-bottom: 5px;
            color: #666;
        }


        .contact-info {
            text-align: center;
            background-color: #e8f4fd;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #4285f4;
        }

        .contact-info p {
            margin-bottom: 8px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="header">
            <h1><strong>Welcome to Tuly's Portfolio</strong></h1>
            <p>Learning Web Development One Step at a Time</p>
        </div>

        <!-- About Me Section -->
        <div class="section">
            <h2>About Me</h2>
            <p>Hi! I'm Tuly, and I'm learning web development. I'm a beginner but I'm excited about coding and building websites.</p>
            <p>I started learning a few months ago and I practice every day. This portfolio shows what I've learned so far.</p>
        </div>

        <!-- Skills Section -->
        <div class="section">
            <h2>What I'm Learning</h2>
            <p>Here are the technologies I'm studying:</p>
            <ul>
                <li><strong>HTML</strong> - Building web page structure</li>
                <li><strong>CSS</strong> - Making websites look good</li>
                <li><strong>JavaScript</strong> - Adding interactivity (just started!)</li>
                <li><strong>Git</strong> - Saving and tracking my code</li>
            </ul>
            <p>I'm taking it slow and focusing on understanding the basics really well.</p>
        </div>

        <!-- Projects Section -->
        <div class="section">
            <h2>My Simple Projects</h2>
            <p>These are small projects I built while learning:</p>
            <ul>
                <li><strong>My First HTML Page</strong> - Just text and basic formatting</li>
                <li><strong>CSS Practice Page</strong> - Learning colors and layouts</li>
                <li><strong>This Portfolio</strong> - Putting everything together</li>
            </ul>
            <p>They're simple but I'm proud of them because I built them myself!</p>
        </div>

        <!-- Goals Section -->
        <div class="section">
            <h2>My Learning Goals</h2>
            <p>What I want to learn next:</p>
            <ul>
                <li>Get better at CSS layouts</li>
                <li>Learn more JavaScript</li>
                <li>Build a calculator with JavaScript</li>
                <li>Maybe learn a framework later</li>
            </ul>
            <p>I'm not in a hurry - I want to understand each thing well before moving on.</p>
        </div>

        <!-- Contact Section -->
        <div class="contact-info">
            <h2 style="color: #4285f4; margin-bottom: 15px;">Let's Connect!</h2>
            <p><strong>Email:</strong> tuly.learning@example.com</p>
            <p><strong>GitHub:</strong> github.com/tuly-learning</p>
            <p>I'd love to connect with other beginners who are learning too!</p>
        </div>
    </div>
</body>
</html>
