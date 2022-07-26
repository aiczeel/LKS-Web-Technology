<?php
    $pages_dir = "../pages";
    if(!empty($_GET['menu'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
    
    $menu = $_GET['menu'];
    if(in_array($menu.'.php', $pages)) {
        include($pages_dir.'/'.$menu.'.php');
    } else { echo '404 Page Not Found!'; }
    } else { include($pages_dir.'/data_pelamar.php'); }
?>