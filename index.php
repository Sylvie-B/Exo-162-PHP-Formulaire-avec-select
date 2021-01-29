<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 162</title>
</head>
<body>
    <div>
        <form method="get" action="user.php">
            <div>
                <label for="name">nom :</label>
                <input type="text" name="userName" id="name">
            </div>
            <div>
                <label for="surname">prénom :</label>
                <input type="text" name="userSurname" id="surname">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>

        <form method="post" action="user.php">
            <div>
                <label for="name">nom :</label>
                <input type="text" name="userName" id="name">
            </div>
            <div>
                <label for="surname">prénom :</label>
                <input type="text" name="userSurname" id="surname">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>

    </div>
</body>
</html>

<?php
