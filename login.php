<?php
// Email moet eindigen op @student.thomasmore.be
// Password
// Hash dit veilig met bcrypt
// Moet minstens 5 karakters lang zijn

session_start();

$error = "";

function canLogin($p_email, $p_password) {
    return ($p_email === "zineb@shop.com" && $p_password === "12345isnotsecure");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (canLogin($email, $password)) {

        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        header("Location: index.php");
        exit;

    } else {

        $error = "Ongeldige inloggegevens.";

    }
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen - Virtual Currency</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <!-- Phone-kader (de mockup) -->
    <div class="phone">

         <!-- Het inlogbox (auth = authenticatie)-->
        <div class="auth-box">
            <form action="" method="post">

                <h2 class="auth-title">Inloggen</h2>

                <?php if($error): ?>
                    <p class="error"><?= $error ?></p>
                <?php endif; ?>

                <!-- Veld: e-mailadres -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>

                <!-- Veld: wachtwoord -->
                <div class="form-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password">
                </div>

                <!-- button om in te loggen -->
                <div class="form-group">
                    <input type="submit" value="Inloggen" class="button button-primary">
                </div>

                <!-- switch naar registeer pagina -->
                <p class="auth-switch">Nog geen account? <a href="register.php">Registreer hier</a></p>

            </form>
        </div>
    </div>
</body>
</html>