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
        <p>Exo 1</p>
        <form method="get" action="user.php">

            <div>
                <label for="nameEx1">nom :</label>
                <input type="text" name="userName1" id="nameEx1">
            </div>
            <div>
                <label for="surnameEx1">prénom :</label>
                <input type="text" name="userSurname1" id="surnameEx1">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
    <div>
        <p>Exo 2</p>
        <form method="post" action="user.php">
            <div>
                <label for="nameEx2">nom :</label>
                <input type="text" name="userName2" id="nameEx2">
            </div>
            <div>
                <label for="surnameEx2">prénom :</label>
                <input type="text" name="userSurname2" id="surnameEx2">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
    <div>
        <p>Exo 5</p>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <div>
                <label for="civ">civilité :</label>
                <select name="civ_5" id="civ">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>

            </div>
            <div>
                <label for="nameEx5">nom :</label>
                <input type="text" name="userName5" id="nameEx5">
            </div>
            <div>
                <label for="surnameEx5">prénom :</label>
                <input type="text" name="userSurname5" id="surnameEx5">
            </div>
            <div>
                <label for="file">Fichier</label>
                <input type="file" name="userFile" id="file">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>

    </div>
</body>
</html>

<?php
