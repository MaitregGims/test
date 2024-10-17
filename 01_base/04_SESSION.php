<?php
    if (isset($_GET['logout'])) {
        var_dump($_GET);
        session_destroy();
        header('Location: ./index.php');
    }

    if (empty($_POST)) {
        echo "<p></p>";
    } else {
        session_start();
        $_SESSION = array(
            'username' => $_POST['pseudo'],
            'email' => $_POST['email'],
            'pdp' => '',
        );
    }
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta name="" content="">
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>
</head>

<body>

<main>
    <form action="./index.php" method="post">
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo" placeholder="pseudo" id="pseudo" required>
        <label for="email">mail</label>
        <input name="email" type="email" id="email" placeholder="your mail" required>;

        <input type="submit" value="soumettre">
    </form>
</main>

</body>
</html>