
<?php

$basya_relative_path = '../';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<!--http://localhost/basyapinkman/index.php-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Первый съест, Бася Пинкман, авторские стихотворения, авторские стихи, стихи современников, социальные стихи, острые стихи,
авторская поэзия, малая проза, современная проза, социум и лирика, интересные стихотворения, интересные стихи, бася пинкман, 
стихи социальной направленности, философия о жизни">
  <meta name="description" content="Первый съест, Я так играю, как будто последний на этом острове.
Словно корабль на мель напоролся зате�">

  <title> Первый съест </title>
  
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="../css/custom/footer.css">
 <link rel="stylesheet" type="text/css" href="../css/custom/center.css">
 <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.js"></script>  <!--[if lt IE 9]>
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

<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle"
         data-toggle="collapse" data-target="#nav-content">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Бася Пинкман</a>
    </div>
    
    <div class="collapse navbar-collapse" id="nav-content">
      <ul class="nav navbar-nav">
        <li ><a href="../index.php">Главная</a></li>
        <li><a href="../archive.php">Архив</a></li>
		<li><a href="../media.php">Медиа</a></li>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle active" data-toggle="dropdown">О команде<b class="caret"></b></a>	
			<ul class="dropdown-menu">
					            <li><a href="../about/elena.php">Елена Далина</a></li>
								<li class="divider"></li>
					            <li><a href="../about/eugene.php">Евгений Андреев</a></li>
					            <li><a href="../about/maria.php">Мария Герина</a></li>
					            <li><a href="../about/sergy.php">Сергей Морозов</a></li>
			</ul>
		</li>	
    </ul>
   </div>
   </div>
</div>	<!--nav-bar-end--><div class="article container">
	<div class="row">
		<div class = " col-xs-5 col-sm-3 col-md-2">
			<img class="img-responsive img-blockquote" src="../img/pen.jpg">
		</div>
		<div class="col-xs-12 col-sm-9 col-md-10">
			<blockquote>
				<p class = "text-blockquote">Историк и поэт отличаются друг от друга не речью, 
				рифмованной или нерифмованной; их отличает то, что один 
				говорит о случившемся, другой же о том, что могло бы случиться. 
				Поэтому в поэзии больше философского, серьезного, чем в истории: 
				ибо она показывает общее, тогда как история только единичное.</p>
				<small><cite title="Source Title">Аристотель</cite></small>
			</blockquote>
		</div>
	</div> <!--row-end--><ol class="breadcrumb">
	 <li><a href="../index.php">Главная</a></li>
	 <li><a href="../archive.php">Архив</a></li>
	 <li><a href="#">Первый съест</a></li></ol>	<div class="row">
		<h1 class="h2 page-header" style="margin-left: 30px">Первый съест</h1>
		<div class="col-xs-12 col-sm-6 col-md-4">
				<img class="img-responsive" style="margin-bottom: 20px" src=" ../img/firstwilleat.jpg">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
	
		<p style="margin-left: 5%; font-size: 1.2em">
		Я так играю, как будто последний на этом острове.<br />
Словно корабль на мель напоролся затемно.<br />
Не замечать остальных вокруг так непросто мне.<br />
Хоть я глазаст и верю в высшую математику.<br />
<br />
Буду лечить цингу я профилактически:<br />
Съем я лимон на глазах изумленной публики.<br />
Я новоявленный Кук, хоть и истерический.<br />
Я Пржевальского лошадь, реланиум впрысни пять кубиков.<br />
<br />
Я открыватель земель, моряк и редактор атласа.<br />
Я словно Майкл Джордан по части глобуса.<br />
Я морской волк, хоть больше все же похож на пса.<br />
Я обойду галеон на две трети корпуса.<br />
<br />
Я дивный новый мир начерчу на ватмане<br />
Свяжутся и развяжутся узы с вечностью.<br />
Сдвинутся и раздвинутся стены ватные.<br />
Я не сойду, корабль идет до конечной.
		</p>
		</div>	<?php
	$basya_relative_path = '../';
	require_once "{$basya_relative_path}sidebar.php";
	echo $sidebar;
	?>
<!--pagination-1-->
<div class="container">
    <div class="row text-center">
		<ul class="pagination"><li><a href="ilove.php">&laquo;</a></li><li class = "active"><a href="#">Страница 13 из 46</a></li><li><a href="quarrel.php">&raquo;</a></li>		</ul>
	</div>
</div>
<div class="container" id = "footer1">
    <div class="row">
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>Почитать<li>
                    <li><a href="https://vk.com/written_by">Серёжа Морозов</a></li>
                    <li><a href="https://itunes.apple.com/ru/artist/renro/id994868498">Рома Ren Ro</a></li>
                    <li><a href="https://m.vk.com/bobstihi">Боб Ромашов</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <ul class="list-unstyled">
                    <li>Посетить<li>
                    <li><a href="https://vk.com/club118528507">Неограниченное искусство</a></li>
					<li><a href="https://muzeimayakovskogo.ru">Музей Маяковского</a></li>
                    <li><a href="https://irsu.info/">ШПР ИРСУ</a></li>
                </ul>
            </div>
            <div class="col-xs-5">
                <ul class="list-unstyled">
                    <li>Поучаствовать<li>
                    <li><a href="https://vk.com/event119796061">"Петербургский ангел"</a></li>
                    <li><a href="https://vk.com/poetrychemp">Чемпионат поэзии им. В. Маяковского</a></li>
                    <li><a href="https://vk.com/mziri">Фестиваль молодых поэтов "Мцыри"</a></li>
                </ul>
            </div>
    </div>
    <hr id = "footer1hr">
    <div class="row">
            <div class="col-xs-6">
                <p class="text-muted pull-left">Copyright &copy; Далина Елена Юрьевна, 2017 г.</p>
            </div>
			<div class="col-xs-6">
                <ul class="list-unstyled list-inline pull-right">
                    <li>Все права защищены.</li>
                </ul>
            </div>
        </div>
</div>

</body>
</html>