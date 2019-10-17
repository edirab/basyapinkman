<!DOCTYPE html>
<html lang="ru">
<head>
	<!--http://localhost/basyapinkman/index.php-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Евгений Андреев</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../css/custom/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/custom/center.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body id="pad">

<?php 
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
				<p>Историк и поэт отличаются друг от друга не речью — 
				рифмованной или нерифмованной; их отличает то, что один 
				говорит о случившемся, другой же о том, что могло бы случиться. 
				Поэтому в поэзии больше философского, серьезного, чем в истории: 
				ибо она показывает общее, тогда как история только единичное.</p>
				<small><cite title="Source Title">Аристотель</cite></small>
			</blockquote>
		</div>
	</div> <!--row-end-->

<div class="row">
	<ol class="breadcrumb">
		<li><a href="../index.php">Главная</a></li>
		<li><a href="#">О команде</a></li>
		<li><a href="#">Евгений Андреев</a></li>
	</ol>
		<h1 class="h2 page-header" style = "margin-left: 3%" >Евгений Викторович Андреев</h1>
	
	<div class="col-xs-12 col-sm-6 col-md-4">
				<img class="img-responsive" src="../img/eugene.jpg" id = "author">
	</div>
	
	<div class="col-xs-12 col-sm-6 col-md-8">
		<p class = "prose">
		Евгений (aka Edirab) Андреев, студент МГТУ им. Н.Э.Баумана. Жизнерадостный молодой человек, который в свободное от учёбы время занимается инженерным творчеством, веб-разработкой и микроэлектроникой. Пробует свои силы в жанре миниатюры. 
		Разработчик и администратор сайта. Подробнее можно узнать в<a href = "http://www.enblo.ru"> блоге </a>автора.
		</p>
		<p class = "prose">
		По заявлению Евгения, "Наблюдалки" не претендуют на звание нравоучений и не несут в себе каких-либо назиданий. Это лишь эмоции, пережитые автором и нашедшие отражение на бумаге.
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