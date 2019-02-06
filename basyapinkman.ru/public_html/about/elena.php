<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Елена Далина</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../css/custom/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/custom/center.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body id="pad">

<?php //Menu!!!!
	$relative_path = '../';
	require_once "../nav_bar_menu.php";
	echo $nav_bar_menu;
?>

<div class="article container">
	<div class="row">
		<div class = " col-xs-12 col-sm-3 col-md-2">
			<img class="img-responsive img-blockquote" src="../img/pen.jpg">
		</div>
		<div class="col-xs-12 col-sm-9 col-md-10">
			<blockquote>
				<p>
				Кто идет к вратам поэзии, не вдохновленный музами, 
				воображая, что одно искусство сделает его поэтом, 
				тот и сам несовершенен, и поэзия его — ничто в сравнении 
				с поэзией вдохновленного.
				</p>
				<small><cite title="Source Title">Платон</cite></small>
			</blockquote>
		</div>
	</div> <!--row-end-->

	<div class="row">
	<ol class="breadcrumb">
		<li><a href="../index.php">Главная</a></li>
		<li><a href="#">О команде</a></li>
		<li><a href="#">Елена Далина</a></li>
	</ol>
		<h1 class="h2 page-header" style = "margin-left: 3%">Елена Юрьевна Далина</h1>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img class="img-responsive" src="../img/elena.jpg" id = "author">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-8">
	
		<p class = "prose">
		Бася Пинкман (она же Елена Далина) родилась в 1983 году в Москве и как помнит 
		сама с третьего класса начала сочинять стихи, сначала писала их в классе на доске, 
		потом в блокноте с изображением тройки лошадей. В более сознательном возрасте 
		продолжила это творчество в блоге livejournal с 2007 года, так как надо же 
		было где-то хранить и набирать тексты, рождавшиеся где-то внутри. Окончила МПГУ 
		по специальности "Лингвистика" и как дипломированный специалист продолжила с 
		интересом играть словами. Читает свои стихи и выступает с 2016 года.
		</p>
	</div>
	
<?php
require_once '../bottombar.php';
echo $bottombar;
?>
	
</div><!--row-end-->
</div> <!--article-container-end-->

<?php 
require_once '../footer.php';
echo $footer;
?>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>