<?php
	header("Content-Type:text/html;charset=utf-8");//設定編碼
	session_start();//開啟session
	if(isset($_POST['LoginSys']))//如果是由post進入
	{
		$Account = $_POST['acc'];
		$Password = $_POST['pwd'];
		if(($Account=='')||($Password==''))//空白帳密
			echo"<script  language=\"JavaScript\">alert('使用者名稱或密碼不能為空');location.href=\"index.php\";</script>";
		include_once("conn_mysql.php");
		$sql_query_login="SELECT * FROM `stdaccount` WHERE `account`='$Account'";
		//echo $sql_query_login;
		$Pwd_result=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");//查詢帳密
		$IsLogin=0;
		while($row_login=mysqli_fetch_array($Pwd_result)){
			if($row_login['account']===$Account&&$row_login['password']===$Password){#登入成功
				$_SESSION['Web_Account']=$row_login['account'];//登入成功將資訊儲存到session中
				$_SESSION['Web_Islogin']=1;
				$IsLogin=1;
				echo"<script  language=\"JavaScript\">alert('登入成功');location.href=\"homepage.php\";</script>";

				break;
			}
			if($row_login['account']===$Account&&$row_login['password']!=$Password){#登入成功
				echo"<script  language=\"JavaScript\">alert('密碼錯誤');location.href=\"index.php\";</script>";
			}	
		}
		if($IsLogin==0){
			echo"<script  language=\"JavaScript\">alert('密碼錯誤');location.href=\"index.php\";</script>";
		}
	}
	else//不當路徑進入
		echo"<script  language=\"JavaScript\">alert('請由正確路徑進入');location.href=\"index.php\";</script>";
		
?>