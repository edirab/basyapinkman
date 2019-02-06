<?php
$relative_path = '';

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
        <li ><a href="./index.php">Главная</a></li>
        <li><a href="./archive.php">Архив</a></li>
        <li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Произведения <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					            <li><a href="#">Стихотворения</a></li>
					            <li><a href="#">Малая проза</a></li>
					            <li><a href="#">Что-то ещё</a></li>
					        </ul>
		</li>
		<li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Медиа <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					            <li><a href="#">Аудио</a></li>
					            <li><a href="#">Видео</a></li>
					        </ul>
		</li>
		<li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Выступления <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					            <li><a href="#">Стихи</a></li>
					            <li><a href="#">Лекции</a></li>
					            <li><a href="#">Благотворительные вечера</a></li>
					        </ul>
		</li>
		<li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Магазин <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					            <li><a href="#">Книги</a></li>
					            <li><a href="#">Сувениры</a></li>
					        </ul>
		</li>
        
        <li class="dropdown">
			<a href="#" class="dropdown-toggle active" data-toggle="dropdown">О команде<b class="caret"></b></a>	
			<ul class="dropdown-menu">
					            <li><a href="./about/elena.php">Елена Далина</a></li>
								<li class="divider"></li>
					            <li><a href="./about/eugene.php">Евгений Андреев</a></li>
					            <li><a href="#">художница Мария</a></li>
								<li><a href="#">Контакты</a></li>
					        </ul>
		</li>	
    </ul>
   </div>
   </div>
</div>	<!--nav-bar-end-->
_HERE;
