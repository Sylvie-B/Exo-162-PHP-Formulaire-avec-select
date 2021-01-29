<?php

if(isset($_GET['userName1'], $_GET['userSurname1'])){
    echo $_GET['userName1']." ".$_GET['userSurname1'];
}
elseif (isset($_POST['userName2'], $_POST['userSurname2'])){
    echo $_POST['userName2']." ".$_POST['userSurname2'];
}
elseif (isset($_POST['civ_5'], $_POST['userName5'], $_POST['userSurname5'])){
    echo $_POST['civ_5']." ".$_POST['userName5']." ".$_POST['userSurname5'];
}
else {
    header('location: index.php?error=1');
}
