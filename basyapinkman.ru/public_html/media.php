<!DOCTYPE html>
<html lang="ru">
<head>
	<!--http://localhost/basyapinkman/index.php-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content = "авторские стихотворения, авторские стихи, стихи современников, социальные стихи, острые стихи,
авторская поэзия, малая проза, современная проза, социум и лирика, интересные стихотворения, интересные стихи, бася пинкман, 
стихи социальной направленности, философия о жизни">
	<meta name = "description" content = "Сайт о стихотворениях социальной направленности">
	<meta name="yandex-verification" content="feb6268467f6c1b1" />

  <title>Медиа</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom/center.css">
  <link rel="stylesheet" type="text/css" href="css/custom/footer.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body id="pad">

<?php //Menu!!!!
	$relative_path = '';
	require_once "nav_bar_menu.php";
	echo $nav_bar_menu;
?>

<div class="article container">

<div class="row">
	<ol class="breadcrumb">
		<li><a href="index.php">Главная</a></li>
		<li><a href="#">Медиа</a></li>
	</ol>
	<div class="col-xs-12 col-sm-12 col-md-8">
			<h3>YouTube</h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/FphKjn1lNUw" frameborder="0" allowfullscreen></iframe>
	</div>
	
<?php
$basya_relative_path = './';
require_once 'sidebar.php';
echo $sidebar;
?>
</div><!--row-end-->

<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-8">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/oDeRwP9Q5Oc" frameborder="0" allowfullscreen></iframe>
		</div>
</div><!--row-end-->

</div> <!--article-container-end-->


<!--footer-1-->
<?php 
require_once 'footer.php';
echo $footer;
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>

