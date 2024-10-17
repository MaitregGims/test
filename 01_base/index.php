<!DOCTYPE html>

<html lang="fr">
<head>
    <meta name="" description="" content="">
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <title>Document</title>
    <style>
        h1 {
            color: red;
            background-color: black;
            padding-left: 5vw;
        }

        h2 {
            color: red;
            background-color: black;
            padding-left: 5vw;
        }
    </style>
</head>

<body>
<header></header>
<main></main>
<footer></footer>

<script src="./assets/js/app.js"></script>
</body>
</html>

<?php
echo '<h1>yey</h1>';
?>

<?php
    $HOUDY = 'houdy';
    print_r($HOUDY . ' grand manitou' . '<br>');
?>

<?php
    echo  '<a href="./04_SESSION.php">go to 4</a>';
    echo '</br>';
    echo  '<a href="./02_GET.php">got to profile card</a>';
    echo '</br>';



    if (isset($_POST['pseudo'])) {
        session_start();
        $_SESSION = array(
            'username' => $_POST['pseudo'],
            'email' => $_POST['email'],
            'pdp' => '',
        );
        echo '<p>welcome back '. $_SESSION['username'] .'</p>';
        echo "</br>";
        echo '<a href="04_SESSION.php?logout=yes">logout ?</a>';
    } else {
        echo '<a href="./04_SESSION.php">pas de compte ?</a>';
    }
?>

