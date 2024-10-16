<?php
session_start();

$server_ip = $_SERVER['SERVER_ADDR'];
if (!isset($_SESSION['visited_ips'])) {
    $_SESSION['visited_ips'] = [];
}
$_SESSION['visited_ips'][] = $server_ip;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
        }
        .ip-list {
            margin-top: 20px;
            padding: 0;
            list-style-type: none;
        }
        .ip-list li {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .ip-list li:last-child {
            border-bottom: none;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Server Information</h1>
        <P>Server 3 oi</P>
        <p>Dimuat dari IP: <strong><?php echo htmlspecialchars($server_ip); ?></strong></p>
        <p>IP yang pernah diakses:</p>
        <ul class="ip-list">
            <?php foreach ($_SESSION['visited_ips'] as $ip): ?>
                <li><?php echo htmlspecialchars($ip); ?></li>
            <?php endforeach; ?>
        </ul>
        <div class="footer">
        </div>
    </div>
</body>
</html>
