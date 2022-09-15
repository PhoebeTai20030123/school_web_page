<?php
	$db_link=@mysqli_connect("210.240.163.28","Reserve","ReserveNTTUCSIE");
	if(!$db_link)
		die("資料庫連線失敗<br>");
	else{
		mysqli_query($db_link, 'SET NAMES utf8');
		$seldb=@mysqli_select_db($db_link,"Reserve");
		if(!$seldb)
			die("資料庫選擇失敗<br>");
	}
?>
