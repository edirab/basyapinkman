<!DOCTYPE html>
<html lang="ru">
<head>
	<!--http://localhost/basyapinkman/index.php-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Человек</title>
  
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="../css/custom/footer.css">
 <link rel="stylesheet" type="text/css" href="../css/custom/center.css">
 <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.js"></script>  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body id="pad">

<?php
	$relative_path = '../';
	require_once '../nav_bar_menu.php';
	echo $nav_bar_menu;
?>

<div class="article container">
	<div class="row">
		<div class = " col-xs-5 col-sm-3 col-md-2">
			<img class="img-responsive img-blockquote" src="../img/pen.jpg">
		</div>
		<div class="col-xs-12 col-sm-9 col-md-10">
			<blockquote>
				<p class = "text-blockquote">
				Историк и поэт отличаются друг от друга не речью, 
				рифмованной или нерифмованной; их отличает то, что один 
				говорит о случившемся, другой же о том, что могло бы случиться. 
				Поэтому в поэзии больше философского, серьезного, чем в истории: 
				ибо она показывает общее, тогда как история только единичное.</p>
				<small><cite title="Source Title">Аристотель</cite></small>
			</blockquote>
		</div>
	</div> <!--row-end-->
	
	<ol class="breadcrumb">
	 <li><a href="../index.php">Главная</a></li>
	 <li><a href="../archive.php">Архив</a></li>
	 <li><a href="#">Человек</a></li></ol>	<div class="row">
		<h1 class="h2 page-header" style="margin-left: 20px">Человек</h1>
		<div class="col-xs-12 col-sm-12 col-md-12">
	
		<p class = "prose">
		После трёхчасовых попыток запрограммировать микроконтроллер, я решил выйти в парк пройтись, проветрится. Хожу я очень быстро, а потому всегда выбираю маршруты подлиннее. Хотя всё равно подобные прогулки коротки. 
		</p>
		<p class = "prose">
		До дома оставалось не более полукилометра, и я решил пристроиться на ближайшей лавочке. За десять минут мимо меня пронеслось шесть колясок. 
		</p>
		
		<p class = "prose">
		Ради эксперимента снял очки. Деревья вокруг мгновенно превратились в коричневатые столбы, тонущие в какой-то колышущейся зелёной каше. Через несколько минут ствол клёна, растущего метрах в шести прямо от меня, приобрёл более чёткие очертания. 
		</p>
		
		<p class = "prose">
		По аллее ко мне приближался на самокате мальчик лет семи. Следом за ним шла полноватая женщина. Полы обоих существ я определил по их телосложениям. Поравнявшись со мной, мальчик посмотрел на меня. Я поймал его взгляд. Не увидел, но почувствовал - он мне улыбается. Я улыбнулся в ответ. Безмолвный диалог произошёл за доли секунды, мальчик продолжал катиться вперёд по инерции. Через несколько метров спиленное дерево заставило его остановиться. Он обернулся ещё раз – чёрное пятно головы сменилось светлым. И снова улыбка. 
		</p>
		
		
		<p class = "prose">
		- Тёть Марин, - в этот момент женщина только-только миновала меня, - тёть Марин, гляди, человек! – мальчик кивнул в мою сторону.
		</p>
		
		<p class = "prose">
		- Где? – удивилась тётя Марина, обернувшись и поводя взглядом по сторонам.
		</p>
		
		<p class = "prose">
		-Да вон, гляди, человек! – мальчик снова указал в сторону лавочки, где я сидел.
		</p>
		
		<p class = "prose">
		Тётя Марина уставилась на меня как на привидение: «Вы пообщались, что ли?» Овладевшие мною эмоции позволили только дважды коротко кивнуть в ответ. 
		</p>
		
		<p class = "prose">
		Спустя секунду прерванное шествие возобновилось.
		</p>
		</div>
		
<?php
require_once '../bottombar.php';
echo $bottombar;
?>

	</div><!--row-end-->
</div> <!--article-container-end-->
<!--pagination-1-->
<div class="container">
    <div class="row text-center">
					<ul class="pagination"><li><a href="gandma.php">&laquo;</a></li><li class = "active"><a href="#">Страница 5 из 6</a></li><li><a href="shame.php">&raquo;</a></li></ul>
	</div>
</div>

<?php 
require_once '../footer.php';
echo $footer;
?>

</body>
</html>
