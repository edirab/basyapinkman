<?php
require_once 'login_mysql.php';

	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	$conn -> set_charset("utf8");	
  
	$query  = "SELECT * FROM poetry";
	$result = $conn->query($query);
	if (!$result) die($conn->error);
	
	$rows = $result->num_rows;
	$id = 8;
	
if ($id == 1) {
	$out = "Страница $id  ";
	
	$result->data_seek($id+1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$out .= "<a><href = \"$name\" > &gt;&gt;&gt; </a>";
	echo $out;
}

if ($id > 1 && $id < $rows) {
	$result->data_seek($id-1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$out = "<a><href src = \"$name\" > &lt;&lt;&;lt; </href></a>";
	
	$out .= "Страница $id  ";
	
	$result->data_seek($id+1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$out .= "<a><href src = \"$name\" > &gt;&gt;&gt; </href></a>";
	echo $out;
}

if ($id == $rows) {
	$result->data_seek($id-1);
	$name = $result->fetch_assoc()['name'];
	$name .= ".php";
	
	$out = "<a><href src = \"$name\" > &lt;&lt;&lt; </href></a>";
	
	$out .= "Страница $id  ";
	
	echo $out;
}


