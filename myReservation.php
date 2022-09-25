<?php
	session_start();//開啟session
  include_once("conn_mysql.php");
  $num=$_SESSION['Web_Account'];
	if(isset($_SESSION['Web_Islogin'])){
    $find_id="SELECT * FROM `classroom` WHERE `lendaccount`='$num'";
		$result=mysqli_query($db_link,$find_id) or die("查詢失敗");//查詢帳密
		
  }else
		echo"<script  language=\"JavaScript\">alert('請先登入');location.href=\"index.php\";</script>";
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="ReservationTable.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 |  教室借用系統</title>
    <link href="a_top.css" rel="stylesheet">
    <link href="a_left.css" rel="stylesheet">
    <link href="a_right.css" rel="stylesheet">
    <!-- The style.css file allows you to change the look of your web pages.
    If you include the next line in all your web pages, they will all share the same look.
    This makes it easier to make new pages for your site. -->
    
  </head>
  <body style="background-color: white"> 

    <div class="nav">
        <ul class="nav__list">
          <li class="nav__listlogo">
            <a href="homepage.php"><img src="school_logo.jpg" alt=""></a>
          </li>

          <li class="nav__listitem">
            <a href="homepage.php" style="text-decoration:none;"><font color="black">我的首頁</font></a>
          </li>
          <li class="nav__listitem">
            <font color="black">預約教室</font>
            <ul class="nav__listitemdrop">
              <center>
              <li><a href="apoimt_3F.html">3F</a></li>
              <li><a href="apoimt_4F.html">4F</a></li>
              <li><a href="apoimt_5F.html">5F</a></li>
              </center>
            </ul>
          </li>
          <li class="nav__listitem">
            <a href="logout.php" style="text-decoration:none;"><font color="black">登出</font></a>
          </li>
        </ul>
    </div>
    <center>
    </center>
        <div class="WordsUnder">
            <center>
            <div class="WordUndersitem">
              <a href="myReservation.php">&emsp;我的預約&emsp;</a>
              <br>
            </div>
            <hr>
            <div class="WordUndersitem">
                <a href="information.php">&emsp;基本資訊&emsp;</a>
                <br>
            </div>
            <hr>
            <div class="WordUndersitem">
                <a href="https://www.nttu.edu.tw/">&emsp;台東大學首頁&emsp;</a>
                <br>
            </div>
            <hr>
            <div class="WordUndersitem">
                <a href="https://eclass2.nttu.edu.tw/">&emsp;網路學園3.0&emsp;</a>
                <br>
            </div>
            <hr>
            <div class="WordUndersitem">
                <a href="https://infosys.nttu.edu.tw/">&emsp;教務系統&emsp;</a>
                <br>
            </div>
            <hr>
        </center>
      <div class="midline"></div>
      </div>
      <div class="rightData">
          <div class="bigWords">
            <a >我的預約</a>
          </div>
          <hr>
          <br>
          <main>
            <table>
              <thead>
                <tr>
                  <th>教室</th>
                  <th>時間</th>
                  <th>時間</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$classname=$row['classname'];
                    echo "<td>".$begin=$row['begin'];
                    echo "<td>".$end=$row['end'];
                    echo "<td>"."<a href=lend_delete.php?classid=$row[classid]>取消</a>";
                    }
                ?>
              </tbody>
            </table>
          </main>
  </body>
</html>
