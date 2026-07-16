<?php
// Later: hier komt de controle of email + wachtwoord kloppen
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

            </form>
        </div>
    </div>
</body>
</html>