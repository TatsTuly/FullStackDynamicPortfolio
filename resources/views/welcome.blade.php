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
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
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
            margin-left: auto;
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Hi, I am Tuly.</h1>
            <button class="menu-button">≡</button>
        </div>

        <div class="profile-section">
            <div>
                <img src="{{ asset('assets/images/tuly.jpg') }}" alt="Tuly's Photo" class="profile-img">
                <p class="label">Picture</p>
            </div>

            <div class="about-me-section">
                <div class="about-me-button">About me</div>
                <div class="about-me-content">
                    <p>Hello! I'm Tuly, a professional web developer with expertise in creating dynamic, responsive web applications. I specialize in full-stack development using modern technologies and frameworks to deliver high-quality digital solutions.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
