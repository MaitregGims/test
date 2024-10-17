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
    <!-- <a href="02_page2.php?article=jean&color=rouge&price=5">article</a>  -->
    <!-- <a href="02_page2.php?article=jean&color=rouge&price=5">article</a>  -->
    <!-- <a href="02_page2.php?article=jean&color=rouge&price=5">article</a>  -->

    <style>
        img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            border: 2px solid white;
            margin-right: 25px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: black;
            color: white;
            border-radius: 10px;
            padding: 5px;
        }
    </style>

    <div class="container">
        <?php
        session_start();
        if ($_SESSION['pdp'] == '') {
            echo '<img src="./img/solo-leveling-statue-of-god.gif" alt="">';
        } else {
            echo '<img src="'. $_SESSION['pdp'] .' " alt="">';
        }
        ?>
        <div>
            <?php
            echo '<p id="name">'. $_SESSION['username'] .'</p>';
            echo '<p id="mail">'. $_SESSION['email'] .'</p>';
            ?>

        </div>
    </div>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choisissez une image :</label>
        <input type="file" name="file" id="file" accept="image/*" required>
        <input type="submit" value="Uploader">
    </form>
</main>


</body>
</html>