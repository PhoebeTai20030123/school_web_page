<!DOCTYPE html>
<html>
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
        <a >預約情形</a>
      </div>
      <hr>
      <br>
      <br>
      <button class="tablink" onclick="openPage('_2F', this, '#35c7bf')">2F</button>
      <button class="tablink" onclick="openPage('_3F', this, '#35c7bf')" id="defaultOpen">3F</button>
      <button class="tablink" onclick="openPage('_4F', this, '#35c7bf')">4F</button>
      <button class="tablink" onclick="openPage('_5F', this, '#35c7bf')">5F</button>

      <div id="_2F" class="tabcontent">
        <h1>2F</h1>
        <table>
          <tr>
            <th>教室</th>
            <th>剩餘</th>
            <th>Points</th>
          </tr>
          <tr>
            <td>教室放這裡</td>
            <td>剩餘</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
          </tr>
          <tr>
            <td>Adam</td>
            <td>Johnson</td>
            <td>67</td>
          </tr>
        </table>
      </div>

      <div id="_3F" class="tabcontent">
        <h1>3F</h1>
        <p>Some news this fine day!</p> 
      </div>

      <div id="_4F" class="tabcontent">
        <h1>4F</h1>
        <p>Get in touch, or swing by for a cup of coffee.</p>
      </div>

      <div id="_5F" class="tabcontent">
        <h1>5F</h1>
        <p>Who we are and what we do.</p>
      </div>

      <script>
      function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
      </script>
    </div>  
  </body>
</html>
