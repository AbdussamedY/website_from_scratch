<?php
session_start();
include 'config.php';

if($_SESSION['role'] === 'Admin'){
    $invitationCode = bin2hex(random_bytes(8));
    $username = $_SESSION['username'];

    $insertCode = $bdd->prepare("INSERT INTO invitations(code, created_by) VALUES(?, ?)");
    $insertCode->execute(array($invitationCode, $username));

    // echo "Code d'invitation généré : " . $invitationCode;
    $error_message = 'Inexistant invitation code';
    header('Location: ../admin.php?invitationCode=' . urlencode($invitationCode));
} else {
    header('Location: ..' . DIRECTORY_SEPARATOR . 'index.php');
    exit();
}
?>
