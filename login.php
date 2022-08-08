<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
</head>
 <body>
  <form method="post" action="check_login.php" class="loginForm">
     <h2>Login</h2>
    
	 
     <input type="text" name="id" class="id" placeholder="Username"> </br>
     
	 <input type="text" name="pw" class="pw" placeholder="Password"> </br>
     
	<input type="SUBMIT" /> </br>

   </form>

        <button type="button" class="btn" onclick="location.href='register.php'">
            Register
        </button>
 </body>
</html>