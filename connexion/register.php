<?php 
session_start();

include 'config.php';



if(isset($_POST['envoi'])){
    if(!empty($_POST['username']) AND !empty($_POST['password'])){
        $invitationCode = htmlspecialchars($_POST['invitation_code']);

        $checkCode = $bdd->prepare("SELECT * FROM invitations WHERE code = ? AND created_at > DATE_SUB(NOW(), INTERVAL 1 HOUR)");
        $checkCode->execute(array($invitationCode));

        if($checkCode->rowCount() > 0){
            $invitation = $checkCode->fetch();
            $creation_time = $invitation['created_at'];


            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $position = htmlspecialchars($_POST['position']);
            $role = "Member";
            $profile_picture = "images/avatar/mouse.jpg";
            $password = sha1($_POST['password']);

            $insertUser = $bdd->prepare("INSERT INTO users(firstname, lastname, username, email, position, role, profile_picture, password) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
            $insertUser->execute(array($firstname, $lastname, $username, $email, $position, $role, $profile_picture, $password));


            // Supprimer le code d'invitation après utilisation
            $deleteCode = $bdd->prepare("DELETE FROM invitations WHERE code = ?");
            $deleteCode->execute(array($invitationCode));

            header ('Location: ..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'signin.php');
            exit();
        } else {
            $checkValidity = $bdd->prepare("SELECT * FROM invitations WHERE code = ?");
            $checkValidity->execute(array($invitationCode));
            if($checkValidity->rowCount() > 0){
                $error_message = 'Expired invitation code';
                header('Location: ../includes/signin.php?error=' . urlencode($error_message));
            }else{
                $error_message = 'Inexistant invitation code';
                header('Location: ../includes/signin.php?error=' . urlencode($error_message));
            }
            
        }
        
    }else{
        echo "Veuillez remplir tous les champs";
    }
    }
?>