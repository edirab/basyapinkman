<?php
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
