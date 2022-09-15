<!DOCTYPE html>
<html>
  <?php
	session_start();//開啟session
    include_once("conn_mysql.php");
    $num=$_SESSION['Web_Account'];
    $classroom=$_GET['classname'];
	if(isset($_SESSION['Web_Islogin'])){
    
  }else
		echo"<script  language=\"JavaScript\">alert('請先登入');location.href=\"index.php\";</script>";
?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 |  教室借用系統</title>
    <link href="a_top.css" rel="stylesheet">
    <link href="a_left.css" rel="stylesheet">
    <link href="homepage.css" rel="stylesheet">
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
            <a href="logout.php" style="text-decoration:none;"><font color="black">sign out</font></a>
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
            <a href="homepage.php">&emsp;基本資訊&emsp;</a>
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
        <a ><?php echo $classroom ?></a>
      </div>
      <hr>
      <br>
      <br>
      <?php	
        $Choosedate="2022-09-15";
        $Begin="08:00";
        $End="12:00";
        $LastsWeeks=18;
        for($i=0;$i<$LastsWeeks;$i++){
          //strtotime("+$i week",strtotime($Choosedate))日期加減
          $LastsDay=date("Y-m-d",strtotime("+$i week",strtotime($Choosedate)));
          $sql_query_borrow="INSERT INTO `classroom`(`classname`, `date`, `begin`, `end`, `lendaccount`) VALUES ('".$classroom."','".$LastsDay."','".$Begin."','".$End."','".$_SESSION['Web_Account']."')";
          $borrow_result=mysqli_query($db_link,$sql_query_borrow) or die("borrow查詢失敗");//查詢帳密
          echo $sql_query_borrow."<br>";        
        }
        
        $IsLogin=0;
      ?>
      
      </div>
    </div>  
  </body>
</html>
