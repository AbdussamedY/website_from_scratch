<?php include 'common' . DIRECTORY_SEPARATOR . 'header.php';?>

    <style>
        .invite{
            display: flex;
            flex-direction: row;
        }
        .invite .create-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            text-decoration: none;
            border: 1px solid;
            border-radius: 40% 0 0 40%;
        }
        .invite .create-btn button {
            display: flex;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        .invite .create-btn button i {
            font-size: 15px;
        }
        .invite .show-code{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30px;
            width: 200px;
            font-size: 15px;
            border: 1px solid;
        }
        .invite button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            text-decoration: none;
            border: 1px solid black;
            border-radius: 0 40% 40% 0;
            display: flex;
            background-color: transparent;
            cursor: pointer;
        }
        .invite button i {
            font-size: 15px;
        }
    </style>

    <div class="main_content">
        <div class="text">ADMIN</div>
        
        <div class="invite">
            <form method="" action="connexion/create_invitation.php" class="create-btn">
                <button type="submit"><i class="material-icons icon">share</i></button>
            </form>
            <div class="show-code" id="to-copy">
                <?php
                    if (isset($_GET['invitationCode'])){
                        echo htmlspecialchars($_GET['invitationCode']);
                    }else{
                        echo 'No invitation code';
                    }
                ?>
            </div>
            
            <button id="copy-btn">
                <i class="material-icons icon">content_copy</i>
            </button>
        </div>

        
    </div>

<script src="js/copy.js"></script>
<?php include 'common' . DIRECTORY_SEPARATOR . 'footer.php';?>