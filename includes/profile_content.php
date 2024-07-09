<div class="profile_content">
    <div class="profile">
        <div class="profile_details">
            <a href="account.php">
                <img src=<?php echo $_SESSION['profile_picture']?> alt="Profile picture" class="profile_picture">
            </a>
            <div class="name_job">
                <div class="name">
                    <?php 
                        echo $_SESSION['firstname']; 
                    ?>
                </div>
                <div class="job">
                    <?php 
                        echo $_SESSION['position']; 
                    ?>
                </div>
            </div>
        </div>
        <form method="post" action="connexion/logout.php">
            <button type="submit"><i class="material-icons icon">logout</i></button>
        </form>
    </div>
</div>