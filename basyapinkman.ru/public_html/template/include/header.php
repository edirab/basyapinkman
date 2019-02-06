<?php


$header_out = <<<'_NOWDOC'

<?php

$basya_relative_path = '../';

?>
_NOWDOC;

$header_out .= <<<_HERE

<!DOCTYPE html>
<html lang="ru">
<head>
	<!--http://localhost/basyapinkman/index.php-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="$center_title, Бася Пинкман, $announce">
  <meta name="description" content="$center_title, $firststr">

  <title> $header_title </title>
  
_HERE;
  
  foreach ($header_styles as $item)
	{
	$header_out .= "\r\n <link rel=\"stylesheet\" type=\"text/css\" href=\"$item\">";
	}
	
  	foreach ($header_scripts as $item)
	{
	$header_out .= "\r\n <script src=\"$item\"></script>";
	}
	
$header_out .= <<<_HERE
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    #pad {
      padding-top: 25px;
      padding-bottom: 25px;
   }
</style>

</head>
<body id="pad">

_HERE;
