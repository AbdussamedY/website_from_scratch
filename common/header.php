<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SensoMotion</title>

    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
</head>
<body>
    <?php
        // Afficher le message d'erreur s'il existe
        if (isset($_GET['error'])) {
            echo '<div class="error-banner">' . htmlspecialchars($_GET['error']) . '</div>';
        }
    ?>

    <?php include 'includes' . DIRECTORY_SEPARATOR . 'loader.php';?>

    <?php include 'includes' . DIRECTORY_SEPARATOR . 'sidebar.php';?>