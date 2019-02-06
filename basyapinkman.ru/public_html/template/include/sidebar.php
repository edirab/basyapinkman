<?php 


$sidebar = <<<'_NOWDOC'
	<?php
	$basya_relative_path = '../';
	require_once "{$basya_relative_path}sidebar.php";
	echo $sidebar;
	?>
_NOWDOC;

/*
$sidebar.= 'require_once\'{$basya_relative_path}signin_form.php\'; \r\n';
$sidebar.= 'require_once \'{$basya_relative_path}sidebar.php\'; \r\n';
$sidebar.= 'echo $sidebar; \r\n';
$sidebar.= '?>';


$sidebar = '<?php \\r\\n';
$sidebar.= 'require_once\'{$basya_relative_path}signin_form.php\'; \r\n';
$sidebar.= 'require_once \'{$basya_relative_path}sidebar.php\'; \r\n';
$sidebar.= 'echo $sidebar; \r\n';
$sidebar.= '?>';
*/