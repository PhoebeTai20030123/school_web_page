
<?php
    session_start();//開啟session
    include_once("conn_mysql.php");
    $num=$_SESSION['Web_Account'];
    $delete_id=$_GET['classid'];
	if(isset($_SESSION['Web_Islogin'])){
        $find_id="delete from classroom where classid='$delete_id'";
		$result=mysqli_query($db_link,$find_id) or die("查詢失敗");//查詢帳密
		if($result !== false){
            echo "<script>alert('取消成功');window.history.back(-1);</script>";
        }else{
            echo "<script>alert('取消失敗');window.history.back(-1);</script>";
        }
  }else
		echo"<script  language=\"JavaScript\">alert('請先登入');location.href=\"index.php\";</script>";
?>