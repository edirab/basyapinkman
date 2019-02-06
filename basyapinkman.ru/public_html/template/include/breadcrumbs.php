<?php
$breadcrumbs = '<ol class="breadcrumb">';
	foreach ($breadcrumbs_items as $item => $href)
	{
		$breadcrumbs .= "\r\n\t <li><a href=\"$href\">$item</a></li>";
	}
$breadcrumbs .= '</ol>';
