<?php 
include_once './vars/header_vars.php';
include_once './vars/blockquote_vars.php';
include_once './vars/sidebar_vars.php';
include_once './vars/breadcrumbs_vars.php';
include_once './vars/center_vars.php';
include_once './vars/footer_vars.php';

include_once './include/header.php';
$header_title = 'Образец';

require_once './include/nav_bar_menu.php';

include_once './include/blockquote.php';

include_once './include/breadcrumbs.php';

include_once './include/center.php';

include_once './include/sidebar.php'; 

include_once './include/pagination.php'; 

include_once './include/footer.php'; 
/*
echo $header;
echo $nav_bar_menu;
echo $blockquote;
echo $breadcrumbs;
echo $center;
echo $sidebar;
echo $footer;
*/
//Цитата и хлебные крошки опциональны
$out = $header.$nav_bar_menu.$blockquote.$breadcrumbs.$center.$sidebar.$pagination.$footer;
echo $out;
?> 