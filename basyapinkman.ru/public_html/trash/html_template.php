<?php

$article_container = '<div class="article container">';
$div_end = '</div>';

//$title="Произведения";

class page 
{
	public $title, $name, $source;
	
	function __construct($p1, $p2, $p3)
	{
		$this -> title = $p1;
		$this -> name = $p2;
		$this -> source = $p3;
	}
	function createpage(){
		$this -> name .= ".php";
		$fh = fopen("./auto/{$this -> name}", 'w'); //создаём файл стиха
		//Начало
		fwrite($fh, $this -> html_template_begin) or die("Сбой записи файла: не найден файл html_template_begin.php ");
		//Меню
		fwrite($fh, $this -> nav_bar_menu) or die("Сбой записи файла: не найден файл nav-bar-menu.php ");
		
		//Название
		fwrite($fh, "<h2 class = 'h2 page-header'>{$this -> title}</h2>") or die("Сбой записи файла: не найден элемент $title ");
		$this -> source = nl2br($this -> source);
		
		echo $this -> source;	//дебаг в окно браузера
		fwrite($fh, $this -> source) or die("Сбой записи файла $fh");
	
		//Конец
		fwrite($fh, $this -> html_template_end) or die("Сбой записи файла: не найден файл html_template_end.php ");

		fclose($fh);
	}
}

$html_template_begin = <<<_HERE

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{$title}</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    #pad {
      padding-top: 25px;
      padding-bottom: 25px;
      padding-right: 50px;
      padding-left: 50px;
   }
   
   #author {
		padding-bottom: 30px;
   }
</style>

</head>
<body id="pad">
_HERE;

$html_template_end = <<<_HERE

<footer>
<div class="container">
Consequatur, vel illum, qui in culpa, qui dolorem.
</div>
</footer>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
_HERE;

$nav_bar_menu = <<<_HERE

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
        <li ><a href="index.php">Главная</a></li>
        <li><a href="#">Избранные</a></li>
        <li><a href="archive.php">Архив</a></li>
        <li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Произведения <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					            <li><a href="#">Стихотворения</a></li>
					            <li><a href="#">Малая проза</a></li>
					            <li><a href="#">Что-то ещё</a></li>
					        </ul>
		</li>
        
        <li class="dropdown">
			<a href="#" class="dropdown-toggle active" data-toggle="dropdown">Об авторах<b class="caret"></b></a>	
			<ul class="dropdown-menu">
					            <li><a href="elena.php">Елена Далина</a></li>
								<li class="divider"></li>
					            <li><a href="eugene.php">Евгений Андреев</a></li>
					        </ul>
		</li>	
    </ul>
   </div>
   </div>
</div>	<!--nav-bar-end-->
_HERE;
