<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 |  教室借用系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="a_top.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="index.css"></head>
  <body style="background-color: white"> 
    <div class="nav">
        <ul class="nav__list">
          <li class="nav__listlogo">
            <a href="index.html"><img src="school_logo.jpg" alt=""></a>
          </li>
        </ul>
    </div>

    <div class="box-form" >
      <form class="form" name="LoginSys" method="post" action="logincheck.php">
							
        <div class="right" style="width:100%; height:100%">
          <h5 style="color: #2BE23D;">Login</h5>
          <div class="inputs">
          <input type="text" placeholder="學生請以學號為帳號" name="acc">
          <br>
          <input type="password" placeholder="預設密碼為西元生日8碼" name="pwd">
        </div>
          <br>
          <div class="checkbox-container">
            <input type="checkbox" id="cb"  >
            <label for="cb">remember me.</label>
          </div>
          <br>
          <h3 ><a href="forget.html"style="color:#d195b3">forget password?</a></h3>
          <br>
          <input type="submit" value="登入" name="LoginSys" id="submitButton" class="btn-light-bg" title="點此登入!" />
        </div>
      </form>
    </div>
  </body>
</html>
