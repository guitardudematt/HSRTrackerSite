<?php


function site_header ($title) {
	$page_header = '<head><title>Hamilton Transit Helper - ' . $title . '</title></head>';
	$page_title = '<div align="center">
				   <font size=7><b>Hamilton Transit Helper</b></font><br>
				   <font size=6><b>' . $title . '</b></font>
				   </div>';
	$page_menubar = '<div align="center">
					<table cellpadding=8><tr>
					<td>
						<a href="?page=bus">
						Find a Bus
						</a>
					</td>
					<td>
						<a href="?page=taxi">
						Find a Taxi
						</a>
					</td>
					<td>
						<a href="?page=plan">
						Plan your Trip
						</a>
					</td>
					</tr></table>
					</div>';
	return ($page_header
	      . $page_title
		  . $page_menubar);
}


?>