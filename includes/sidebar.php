<div class="sidebar">
    <div class="logo-and-navbar">
        <div class="logo_content">
            <div class="logo">
                <img src="images/sensomotion_logo_only.svg" alt="">
                <div class="logo_name">
                    <div class="team">Team</div>
                    <div class="team_name">SENSOMOTION</div>
                </div>
            </div>
            <i class="material-icons" id="btn">menu_open</i>
        </div>
        
        <?php include 'includes' . DIRECTORY_SEPARATOR . 'nav_list_public.php'; ?>

        <?php
            if (isset($_SESSION['username'])) {
                include 'includes' . DIRECTORY_SEPARATOR . 'nav_list_private.php';
            }
        ?>

        
    </div>
    
    <?php
        if (isset($_SESSION['username'])) {
            include 'includes' . DIRECTORY_SEPARATOR . 'profile_content.php';
        }else{
            include 'includes' . DIRECTORY_SEPARATOR . 'signin_content.php';
        }
    ?>
        
</div>