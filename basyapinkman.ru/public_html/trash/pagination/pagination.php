<?php
/*require_once 'login_mysql.php';

	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	$conn -> set_charset("utf8");	
  
	$query  = "SELECT * FROM poetry";
	$result = $conn->query($query);
	if (!$result) die($conn->error);
	
	$rows = $result->num_rows;
	$id = 8;*/

$pagination = <<<_HERE

<!--pagination-1-->
<div class="container">
    <div class="row text-center">
		<ul class="pagination">
_HERE;

	
if ($id == 1) {
	$result->data_seek($id+1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$pagination .= "<li><a href=\"#\">Страница $id из $rows</a></li>";
	$pagination .= "<li class = \"active\"><a href=\"$name\">&raquo;</a></li>";
}

if ($id > 1 && $id < $rows) {
	$result->data_seek($id-1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$pagination .= "<li class = \"active\"><a href=\"$name\">&laquo;</a></li>";
	$pagination .= "<li><a href=\"#\">Страница $id из $rows</a></li>";
	
	$result->data_seek($id+1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$pagination .= "<li class = \"active\"><a href=\"$name\">&raquo;</a></li>";
}

if ($id == $rows) {
	$pagination .= "<li><a href=\"#\">Страница $id из $rows</a></li>";
	
	$result->data_seek($id-1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$pagination .= "<li class = \"active\"><a href=\"$name\">&raquo;</a></li>";
}
			
$pagination .= <<<_HERE
		</ul>
	</div>
</div>
_HERE;
