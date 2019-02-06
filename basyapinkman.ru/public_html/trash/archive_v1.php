<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Главная</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom/footer.css">
  <link rel="stylesheet" type="text/css" href="../css/custom/archive.css">

  <!--[if lt IE 9]>
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
<body id = "pad">

<?php //Menu!!!!
	require_once "nav_bar_menu.php";
	echo $nav_bar_menu;
?>

<div class="article container">

	<div class="row">
	<ol class="breadcrumb">
		<li><a href="index.php">Главная</a></li>
		<li><a href="archive.php">Архив</a></li>
	</ol>
		<h1 class="h2 page-header">Все произведения</h1>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<img class="img-responsive" src="../img/archive2.jpg">
		</div>
	</div><!--row-end-->
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
       <h4 class="page-header">Бася Пинкман</h4>	
	<table class="table table-bordered table-stripped table-hover table-condensed">
  <tbody>
    <tr class="active">
      <td> <a href ="poetry/crocodile.html"> О ящерицах </a> </td> 
	  <td> <a href ="poetry/crocodile.html"> О ящерицах </a> </td>
    </tr>
    <tr class="success">
		<td> <a href ="poetry/envelope.html"> Конверт </a> </td>
		<td> <a href ="poetry/envelope.html"> Конверт </a> </td>
    </tr>
    <tr class="danger">
		<td> <a href ="poetry/fragile.html"> Хрупкие </a> </td>
		<td> <a href ="poetry/fragile.html"> Хрупкие </a> </td>
    </tr>
    <tr class="info">
		<td> <a href ="poetry/impromptu.html"> Экспромт ЧП </a> </td>
		<td> <a href ="poetry/impromptu.html"> Экспромт ЧП </a> </td>
    </tr>  
    <tr class="warning">
      <td>5108</td>
      <td>880</td>
    </tr>       
  </tbody>
</table>
		</div>		
		
	 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
       <h4 class="page-header">Cupiditate non</h4>
       <ul class="list-group">
         <a href="#" class="list-group-item list-group-item-success">Ut labore et quasi architecto beatae vitae dicta sunt explicabo. Non numquam eius modi tempora incidunt, ut aliquid.</a>
         <a href="#" class="list-group-item list-group-item-success">Ut labore et quasi architecto beatae vitae dicta sunt explicabo. Non numquam eius modi tempora incidunt, ut aliquid.</a>
         <a href="#" class="list-group-item list-group-item-success">Ut labore et quasi architecto beatae vitae dicta sunt explicabo. Non numquam eius modi tempora incidunt, ut aliquid.</a>		 
       </ul>
	</div>
	
	</div><!--row-end-->
</div> <!--article-container-end-->

<!--footer-1-->
<div class="container" id = "footer1">
    <div class="row">
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>GitHub<li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact & support</a></li>
                    <li><a href="#">Enterprise</a></li>
                    <li><a href="#">Site status</a></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>Applications<li>
                    <li><a href="#">Product for Mac</a></li>
                    <li><a href="#">Product for Windows</a></li>
                    <li><a href="#">Product for Eclipse</a></li>
                    <li><a href="#">Product mobile apps</a></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>Services<li>
                    <li><a href="#">Web analytics</a></li>
                    <li><a href="#">Presentations</a></li>
                    <li><a href="#">Code snippets</a></li>
                    <li><a href="#">Job board</a></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>Documentation<li>
                    <li><a href="#">Product Help</a></li>
                    <li><a href="#">Developer API</a></li>
                    <li><a href="#">Product Markdown</a></li>
                    <li><a href="#">Product Pages</a></li>
                </ul>
            </div>
    </div>
    <hr id = "footer1hr">
    <div class="row">
            <div class="col-xs-8">
                <ul class="list-unstyled list-inline pull-left">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <p class="text-muted pull-right">© 2015 Company Name. All rights reserved</p>
            </div>
        </div>
</div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>