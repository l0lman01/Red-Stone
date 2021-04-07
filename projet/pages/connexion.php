<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | connexion</title>
    </head>
    <body>
        <?php require "../composant/Menu.php" ?>

        <form action="../actions/login.php" method="post">
            <div>
                <label for="">email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">password</label>
                <input type="password" name="password">
            </div>
            <input type="submit">
        </form>

    </body>
</html>