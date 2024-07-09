<?php 
session_start();

include 'config.php';

if(isset($_POST['envoi'])){
    if(!empty($_POST['username']) AND !empty($_POST['password'])){
        $username = htmlspecialchars($_POST['username']);
        $password = sha1($_POST['password']);

        $recupUser = $bdd->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $recupUser->execute(array($username, $password));

        if($recupUser->rowCount() > 0){
            $user = $recupUser->fetch();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['position'] = $user['position'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['profile_picture'] = $user['profile_picture'];

            header('Location: ..'.DIRECTORY_SEPARATOR.'index.php');
            exit();
        }else{
            $error_message = 'Connexion failed';
            header('Location: ../includes/signin.php?error=' . urlencode($error_message));
        }
    }else{
        $error_message = 'Empty input(s)';
        header('Location: ../includes/signin.php?error=' . urlencode($error_message));
    }
}else{
    echo "envoi empty";
}
?>