<?php 

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Currency</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Phone-kader (de mockup) -->
    <div class="phone"></div>
</body>
</html>