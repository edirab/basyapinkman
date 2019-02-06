<!DOCTYPE html>
<html lang="ru">
<head>
	<!--http://localhost/basyapinkman/index.php-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Стыдно</title>
  
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
	 <li><a href="#">Стыдно</a></li></ol>	<div class="row">
		<h1 class="h2 page-header" style="margin-left: 20px">Стыдно</h1>
		<div class="col-xs-12 col-sm-12 col-md-12">
	
		<p class = "prose">
		Еду с учёбы. Метро в этот час полупустое, и я прислонился к противоположным дверям, вопреки предупреждающей надписи. Левее меня сидела девушка. Вернее, не так – деваха. Скосив взгляд, я рассматривал её.  Красная куртка и чёрные лосины, в руках телефон, наушники, в носу колечко, в ушах тоже колечки и небольшие туннельчики. Напротив неё – какой контраст! – сидела женщина лет сорока. Она была похожа на учительницу начальных классов, прибывшую из Советского Союза 60-х годов: короткие коричневые кудри, очки с круглой роговой оправой, зелёный вязаный свитер с длинными рукавами, и коричневая юбка в пол с крупной клеткой, под цвет волос. На коленях у неё плашмя лежала деревянная разделочная доска. Она была вся иссечена ножом, когда-то давно у бабушки была такая же. 
		</p>
		<p class = "prose">
		Женщина в упор смотрела на деваху. Та – ноль внимания, вся в телефоне. Вагон ритмично покачивался вместе с пассажирами. Я никак не мог понять ни тайной цели этого вперения взгляда, ни того, являются ли они родственниками, или нет. Тут учительница, не отрывая взгляда, поставила доску на торец, обнажив оборотную сторону. На ней был нарисован христианский крест. Он был той же фактуры, что и сама доска. Сначала мне показалось, что это акварель. Чуть позже я понял, что крест был нарисован маслом. Деваха бросила безразличный взгляд на учительницу с её перформансом и продолжила заниматься своим делом. 
		</p>
		
		<p class = "prose">
		Ради эксперимента снял очки. Деревья вокруг мгновенно превратились в коричневатые столбы, тонущие в какой-то колышущейся зелёной каше. Через несколько минут ствол клёна, растущего метрах в шести прямо от меня, приобрёл более чёткие очертания. 
		</p>
		
		<p class = "prose">
		Поезд подъезжал к станции, люди поднимались со своих мест. Вместе с ними и учительница с девахой. Я стоял примерно в метре от них, учительница пристроилась за спиной своей воспитанницы и что-то говорила ей, но я ничего не расслышал. Успел разобрать только последнее слово: «Стыдно?» 
		</p>
				
		<p class = "prose">
		Тут же двери раскрылись, люди начали вываливаться из вагона. Необычная парочка разошлась в разные стороны. «Слава богу, -подумал я, - не родственники. Хоть что-то стало ясно!»
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
		<ul class="pagination"><li><a href="human.php">&laquo;</a></li><li class = "active"><a href="#">Страница 6 из 6</a></li></ul>
	</div>
</div>

<?php 
require_once '../footer.php';
echo $footer;
?>

</body>
</html>
