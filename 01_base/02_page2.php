<?php

function debugV($param) {
    echo '<pre style = "background-color: #ebd4cb;">';
    echo '<strong>var_dump()</strong><br>';
    var_dump($param);
    echo '</pre>';
}

debugV($_GET);

if (isset($_GET['article']) && isset($_GET['color']) && isset($_GET['price'])) {
    echo '<h1>Details du produits</h1>';
    echo '<h1>Article: '.$_GET['article'].' </h1>';
    echo '<h1>Article: '.$_GET['color'].' </h1>';
    echo '<h1>Article: '.$_GET['price'].' </h1>';
} else {
    echo '<p>Ce produit n\'existe pas</p>';
}
?>
