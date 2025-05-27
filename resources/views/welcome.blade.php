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
        }

        nav {
            border-bottom: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .nav-title {
            font-size: 20px;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            overflow: hidden;
        }

        .left-side {
            width: 30%;
            float: left;
            padding: 10px;
            text-align: center;
        }

        .profile-img {
            width: 100%;
            max-width: 250px;
        }

        .right-side {
            width: 70%;
            float: left;
            padding: 10px;
        }

        .about-me {
            margin-bottom: 15px;
        }

        .about-title {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .details {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-title">Hi, I am Tuly</div>
    </nav>


    <div class="container">

        <div class="left-side">
            <img src="{{ asset('assets/images/tuly.jpg') }}" alt="Tuly's Photo" class="profile-img">
        </div>


        <div class="right-side">

            <div class="about-me">
                <h2 class="about-title">About Me</h2>
                <p>Hello! I'm Tuly, a web developer passionate about creating websites.</p>
            </div>


        </div>
    </div>
</body>
</html>
