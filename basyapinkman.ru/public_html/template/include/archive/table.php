<?php
/*$archive_table = <<<_HERE
	<tr class="active">
      <td> <a href = $link1 > $title1 </a> </td> 
      <td> <a href = $link2 > $title2 </a> </td> 
    </tr>
_HERE;*/

$archive_left_col = <<<_HERE
	<tr class="active">
		<td> <a href = $link > $title </a> </td> 
_HERE;

$archive_right_col = <<< _HERE
		<td> <a href = $link > $title </a> </td> 
    </tr>
_HERE;

$eugene = <<<_HERE

       <h4 class="page-header">Евгений Андреев</h4>	
<table class="table table-bordered table-stripped table-hover table-condensed">
	<tbody>	
	<tr class="warning">
		<td> <a href = "./prose/blueeyes.php" > Голубоглазка </a> </td> 		
		<td> <a href = "./prose/display.php" > Отображение </a> </td> 
	</tr>	 
	<tr class="warning">
		<td> <a href = "./prose/elevator.php" > Эскалатор </a> </td> 		
		<td> <a href = "./prose/grandma.php" > Бабушка </a> </td> 
	</tr>
	<tr class="warning">
		<td> <a href = "./prose/human.php" > Человек </a> </td> 		
		<td> <a href = "./prose/shame.php" > Стыдно </a> </td> 
	</tr>
	</tbody>
</table>

	</div> <!--col-xs-12 col-sm-12 col-md-8 col-lg-8-->
_HERE;
