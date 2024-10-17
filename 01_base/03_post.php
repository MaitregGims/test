<?php
if (!empty($_POST)) {
    if (isset($_POST['pseudo'])) {
        if ($_POST['pseudo'] == "") {
            return null;
        } else {
            $old_pseudo = $_POST['pseudo'];
            echo '<p>pseudo : '. $_POST['pseudo'] .'</p>';
        }

    }

    if (isset($_POST['age'])) {
        if (empty($_POST['age'])) {
            return null;
        } else {
            $old_age = $_POST['age'];
            echo '<p>age : '. $_POST['age'] .'</p>';
        }

    }

    if (isset($_POST['description'])) {
        if ($_POST['description'] == "") {
            return null;
        } else {
            $old_description = $_POST['description'];
            echo '<p>description : '. $_POST['description'] .'</p>';
        }

    }

    if (isset($_POST['pdp'])) {
        if ($_POST['pdp'] == "") {
            return null;
        } else {
            $old_pdp = $_POST['pdp'];
            echo '<p>pdp : '. $_POST['pdp'] .'</p>';
        }

    }
}
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta name="" description="" content="">
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>
</head>

<body>

<main>
    <form action="./02_GET.php" method="post">
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo" placeholder="pseudo" id="pseudo" required>
        <label for="age">age</label>
        <input type="number" name="age" id="age" placeholder="age" required>
        <label for="description">description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label for="pdp">pdp</label>
        <input type="text" name="pdp" id="pdp" required>

        <input type="submit" value="soumettre">
    </form>
</main>

</body>
</html>