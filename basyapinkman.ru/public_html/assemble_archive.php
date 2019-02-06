<?php // сборка страниц
  require_once 'login_mysql.php';

//include_once './template/vars/footer_vars.php'; 
include_once './template/include/archive/header.php';

include_once './footer.php';   

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
  $conn -> set_charset("utf8");	
  
	$query  = "SELECT * FROM poetry";
	$result = $conn->query($query);
	if (!$result) die($conn->error);

	$rows = $result->num_rows;
	$farch = fopen("./archive.php", 'w'); //Создаём файл архива
	
	$out = $archive_header1;
	$relative_path = './';
	require_once './nav_bar_menu.php';
	$out .= $nav_bar_menu;
	$out .= $archive_header2;

	for ($j = 0 ; $j < $rows ; ++$j)
  {
	$result->data_seek($j);
	$id = $result->fetch_assoc()['id'];
	
	$result->data_seek($j);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$result->data_seek($j);
	$title = $result->fetch_assoc()['title'];
	
	if ($j % 2 == 0) {
		$link = "./poetry/$name";
		include './template/include/archive/table.php';
		$out .= $archive_left_col;
	}
	else {
		$link = "./poetry/$name";
		include './template/include/archive/table.php';
		$out .= $archive_right_col;
	}
  }
  
  $result->close();
  $conn->close();
  
  $out .= <<<_HERE
 </tbody>
</table>
_HERE;
  $out .= $eugene;
  
	$basya_relative_path = './';
	include_once './sidebar.php';
	$out .= $sidebar;
	$out .= <<<_HERE
	</div><!--row-end-->
</div> <!--article-container-end-->
_HERE;
	$out .= $footer;
	$out .= '</body>';
	$out .= '</html>';
	
	fwrite($farch, $out) or die("Сбой записи файла: $farch ");  
	fclose($farch);
	