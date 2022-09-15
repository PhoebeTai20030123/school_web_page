<?php
	header("Content-Type:text/html;charset=utf-8");//設定編碼
	session_start();//開啟session
	session_destroy();//銷毀session
	header("Location:index.php"); 
	//確保重定向後,後續程式碼不會被執行 
	exit;
?>