<?php
// Later: hier komt het opslaan van de nieuwe gebruiker in de database
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren - Virtual Currency</title>

    <!-- Zelfde stylesheet als login: opmaak hergebruiken -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- Phone-kader (de mockup) -->
    <div class="phone">

        <!-- Het registratiebox -->
        <div class="login-box">
            <form action="" method="post">

                <h2 class="login-title">Registreren</h2>

                <!-- Veld: naam -->
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" name="name" id="name">
                </div>

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

                <!-- Button om te registreren -->
                <div class="form-group">
                    <input type="submit" value="Registreren" class="button button-primary">
                </div>

            </form>
        </div>

    </div>
</body>
</html>