<?php // сборка страниц
  require_once 'login_mysql.php';
//  require_once 'html_template.php';
//  require_once 'nav-bar-menu.php';
  
include_once './template/vars/header_vars.php';
include_once './template/vars/blockquote_vars.php';
include_once './template/vars/sidebar_vars.php';
include_once './template/vars/breadcrumbs_vars.php';
include_once './template/vars/center_vars.php';
include_once './template/vars/footer_vars.php';
  
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
  $conn -> set_charset("utf8");	
  
	$query  = "SELECT * FROM poetry";
	$result = $conn->query($query);
	if (!$result) die($conn->error);

	$rows = $result->num_rows;
  	
//Основной цикл
  for ($j = 0 ; $j < $rows ; ++$j)
  {
	$result->data_seek($j);
	$id = $result->fetch_assoc()['id'];
	//echo "ID: $id <br/>";
	
	//создаём файл стиха
	$result->data_seek($j);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	$fh = fopen("./poetry/$name", 'w'); 
	
	$result->data_seek($j);
	$header_title = $result->fetch_assoc()['title'];
	
	$relative_path = '../';
	
	$breadcrumbs_items = array(
	'Главная' => '../index.php',
	'Архив' => '../archive.php',
	 "$header_title" => '#');

	$result->data_seek($j);
	$center_title = $result->fetch_assoc()['title'];
	
	$result->data_seek($j);
	$center_img = $result->fetch_assoc()['img'];
	
	$result->data_seek($j);
	$source = $result->fetch_assoc()['source'];
	
		$firststr = "";
		for ($k = 0; $k < 160; ++$k) $firststr .= $source[$k];
	
	$center_source = nl2br($source);
	
	$result->data_seek($j);
	include './pagination.php';
	$result->data_seek($j);
	
	//$archive = array("$header_title" => "/poetry/$name");
	
	include './template/include/header.php';
	include './nav_bar_menu.php';
	include './template/include/blockquote.php';
	include './template/include/breadcrumbs.php';
	include './template/include/center.php';
	include './template/include/sidebar.php'; 
	include './template/include/footer.php';   
	
	$out = $header_out.$nav_bar_menu.$blockquote.$breadcrumbs.$center.$sidebar.$pagination.$footer;
	
	//Запись в файл
	fwrite($fh, $out) or die("Сбой записи файла: не найден файл $name.php ");

	fclose($fh);
  }
  $result->close();
  $conn->close();
  