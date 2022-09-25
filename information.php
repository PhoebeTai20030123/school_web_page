<?php
	session_start();//開啟session
  include_once("conn_mysql.php");
  $num=$_SESSION['Web_Account'];
	if(isset($_SESSION['Web_Islogin'])){
    $find_id="SELECT * FROM `studentid` WHERE `num`='$num'";
		$result=mysqli_query($db_link,$find_id) or die("查詢失敗");//查詢帳密
		while($row=mysqli_fetch_array($result)){
        $name=$row['name'];
        $status=$row['Status'];
        $dep=$row['Dep'];
        $mail=$row['mail'];
        $phone=$row['phone'];
		}
  }else
		echo"<script  language=\"JavaScript\">alert('請先登入');location.href=\"index.php\";</script>";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 |  教室借用系統</title>
    <link href="a_top.css" rel="stylesheet">
    <link href="a_left.css" rel="stylesheet">
    <link href="a_right.css" rel="stylesheet">
    <link href="information.css" rel="stylesheet">
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
            <a href="index.html" style="text-decoration:none;"><font color="black">sign out</font></a>
          </li>
        </ul>
    </div>
    <center>
    <div class="headpicture">
        <div class="pict">
        </div>
    </div>
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
        <a >基本資訊</a>
      </div>
      <hr>
      <br>
      <br>
      <div class="data">
          <b>&emsp;&emsp;姓名&emsp;&emsp;<?php echo $name?></b><br><br>
          <b>&emsp;&emsp;學號&emsp;&emsp;<?php echo $num?></b><br><br>
      </div>
      <br>
      <div class="personal-mybuluo-head">
        <div class="personal-mybuluo-wording">帳號資訊</div>
        <div class="personal-border jmu-border-1px border-bottom"></div>
      </div>
      <br>
      <br>
      <div class="data">
        <b>&emsp;&emsp;帳號&emsp;&emsp;<?php echo $num?></b><br><br>
        <b>&emsp;&emsp;單位&emsp;&emsp;<?php echo $dep?></b><br><br>
        <b>&emsp;&emsp;身份&emsp;&emsp;<?php if($status==1){
                  echo "學生"; 
              }else{
                echo "老師";
              }
              ?></b><br><br>
        <b>&emsp;&emsp;學制&emsp;&emsp;<?php 
              if($status==1){
                  echo "學士班"; 
              }else if($status==2){
                echo "碩士班";
              }else{
                echo "教授";
              }
              ?></b><br><br>
      </div>
      <br>
      <br>
      <div class="personal-mybuluo-head">
        <div class="personal-mybuluo-wording">聯絡資訊</div>
        <div class="personal-border jmu-border-1px border-bottom"></div>
      </div>
      <br>
      <br>
      <div class="data">
        <b>電子郵件&emsp;&emsp;<?php echo $mail?></b><br><br>
        <b>&emsp;&emsp;電話&emsp;&emsp;<?php echo $phone?></b><br><br>
      </div>
    </div>  
    </div>  
  </body>
</html>
