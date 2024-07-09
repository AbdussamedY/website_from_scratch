<div class="private">
    <div class="separation"></div>

    <ul class="nav_list_private">
        <li>
            <a href="tools.php">
                <i class="material-icons">construction</i>
                <span class="links_name">Tools</span>
            </a>
            <?php
                if ($_SESSION['role'] == 'Admin') {
                    echo '
                        <a href="admin.php">
                            <i class="material-icons">admin_panel_settings</i>
                            <span class="links_name">Admin</span>
                        </a>
                    ';
                }
            ?>
        </li>
    </ul>
</div>