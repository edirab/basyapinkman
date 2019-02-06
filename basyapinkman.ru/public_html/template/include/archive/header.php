<?php

$archive_header1 = <<<_HERE
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Архив</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/custom/footer.css">
  <link rel="stylesheet" type="text/css" href="./css/custom/archive.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

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

_HERE;

//Menu!!!!
	
	$archive_header2 = <<<_HERE
<div class="article container">

	<div class="row">
	<ol class="breadcrumb">
		<li><a href="index.php">Главная</a></li>
		<li><a href="archive.php">Архив</a></li>
	</ol>
		<h1 class="h2 page-header" style = "margin-left: 3%">Все произведения</h1>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<img class="img-responsive" src="./img/archive2.jpg">
		</div>
	</div><!--row-end-->
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
       <h4 class="page-header">Бася Пинкман</h4>	
	   <table class="table table-bordered table-stripped table-hover table-condensed">
	   <tbody>
_HERE;
