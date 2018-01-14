<?php
ob_start();

session_start();
include "db_connect.php";

    if(isset($_COOKIE['username'])) 
    {
              $_SESSION['username']=$_COOKIE['username'];
                 header('Location: loggedin.php');
    } 

    if (isset($_SESSION['username'])) 
    {
        header('Location: loggedin.php'); 
    }

 if (isset($_POST['commit']))
    {
            $username=$_POST['username'];
            $password=$_POST['password'];

            $query = mysql_query("SELECT * FROM `user` WHERE `password`='$password' AND `username`='$username'");
            
            $user=mysql_fetch_array($query);

            $rows = mysql_num_rows($query);

            if ($rows == 1) 
            {
			        $_SESSION['username']=$username;
					
					if(isset($_POST['remember_me']))
					{
                        setcookie('username', $username, time()+15);
					}
					
                    header("location:loggedin.php");
              
            }
            else 
            {
               
            }
			
    }


 ?>

<!DOCTYPE html>
<html>
<head>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <img src="Images/hi.png" alt="Note" style="height:100px;width:120px">

<div class="container">

<div class="login">

    <form action="login.php" method="POST">
      <p><input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" placeholder="Username"></p>
      <p><input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" placeholder="Password"></p>
      <p class="remember_me">
        <label>
         <label>
          <input type="checkbox" name="remember_me" id="remember_me"><?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?>
          Keep Me Logged In
        </label>
        </label>
      </p>
      <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
  </div>
 
  <div class="login-help">
    <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
    <br>
    <br>
    <br>
    <p>Don't have an account?</p>
    <a href="signup.php">Click to sign up</a>
  </div>
  

</body>