<?php
session_start();
$relative_path = ''; // Variable pour stocker le chemin relatif

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérifiez si le fichier a été uploadé sans erreur
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Définir des variables
        $file = $_FILES['file'];
        $uploads_dir = 'uploads'; // Dossier où vous voulez stocker les images
        $new_filename = 'pdp.' . pathinfo($file['name'], PATHINFO_EXTENSION);
        $relative_path = $uploads_dir . '/' . $new_filename; // Chemin relatif

        // Vérifiez que le dossier existe
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0777, true);
        }

        // Vérifiez le type de fichier (par exemple, pour les images)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($file['type'], $allowed_types)) {
            // Supprimer l'ancienne image si elle existe
            if (file_exists($relative_path)) {
                unlink($relative_path);
            }

            // Déplacez le fichier téléchargé
            if (move_uploaded_file($file['tmp_name'], $relative_path)) {
                echo "L'image a été uploadée avec succès : " . htmlspecialchars($relative_path);
                $_SESSION['pdp'] = $relative_path;
                header('Location: ./02_GET.php');
                exit(); // Important d'ajouter exit() après header()
            } else {
                echo "Erreur lors de l'upload de l'image.";
            }
        } else {
            echo "Type de fichier non autorisé.";
        }
    } else {
        echo "Erreur lors de l'upload du fichier.";
    }
} else {
    echo "Aucune donnée soumise.";
}
?>
