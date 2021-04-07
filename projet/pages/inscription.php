<html lang="fr">
    <head>
        <?php require "../composant/head.php" ?>
        <title>Red Stone | inscription</title>
    </head>
    <body>
        <?php require "../composant/Menu.php" ?>

        <form action="../actions/register.php" method="post">
            <div>
                <label for="">email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="">password</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for="">re-password</label>
                <input type="password" name="rePassword">
            </div>
            <input type="submit">
        </form>

    </body>
</html>