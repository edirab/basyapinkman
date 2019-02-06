<?php
$blockquote = <<<_HERE
<div class="article container">
	<div class="row">
		<div class = " col-xs-5 col-sm-3 col-md-2">
			<img class="img-responsive img-blockquote" src="$blockquote_img">
		</div>
		<div class="col-xs-12 col-sm-9 col-md-10">
			<blockquote>
				<p class = "text-blockquote">$blockquote_source</p>
				<small><cite title="Source Title">$blockquote_author</cite></small>
			</blockquote>
		</div>
	</div> <!--row-end-->
_HERE;
