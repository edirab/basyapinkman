<?php
//$relative_path = '';

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
        <li ><a href="{$relative_path}index.php">Главная</a></li>
        <li><a href="{$relative_path}archive.php">Архив</a></li>
		<li><a href="{$relative_path}media.php">Медиа</a></li>
        <li class="dropdown">
			<a href="#" class="dropdown-toggle active" data-toggle="dropdown">О команде<b class="caret"></b></a>	
			<ul class="dropdown-menu">
					            <li><a href="{$relative_path}about/elena.php">Елена Далина</a></li>
								<li class="divider"></li>
					            <li><a href="{$relative_path}about/eugene.php">Евгений Андреев</a></li>
					            <li><a href="{$relative_path}about/maria.php">Мария Герина</a></li>
					            <li><a href="{$relative_path}about/sergy.php">Сергей Морозов</a></li>
			</ul>
		</li>	
    </ul>
   </div>
   </div>
</div>	<!--nav-bar-end-->
_HERE;
