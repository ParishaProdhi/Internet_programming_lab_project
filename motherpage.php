﻿<?php session_start();

  if(isset($_COOKIE['username'])) 
    {
              $_SESSION['username']=$_COOKIE['username'];
                 header('Location: loggedin.php');
    } 

    if (isset($_SESSION['username'])) 
    {
        header('Location: loggedin.php'); 
    }


?>

<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>

<table class="startmovie">
<tr>
  <th>
    <img src="Images/hi.png" alt="Note" style="height:100px;width:120px">
  </th>
  <td>
    <h1 style="color:white";"text-align:center">
      Movie tickets online
    </h1>
  </td>
  <th>
       <!--pre style="font-size:350%";"border-radius:10px";"background-color:transparent"></a></pre-->
	  <!--div class="dropdown">
  <button class="dropbtn"><a href="login.html">LOGIN</a><!--/style--><!--/button>
  <div class="dropdown-content">
    <a href="logout.php">Log Out</a-->
	<pre style="font-size:350%";"border-radius:10px"><a href="login.php">Log In</a></pre>
    
  </div>
</div>
  </th>
</tr>
</table>

  
  <div class="nav">
    <nav style="font-size:150%"><pre style="font-family:cursive"><a href="motherpage.php">            HOME        </a><a href="login.php">       HALLS        </a><a href="login.php">       SHOW TIMES        </a><a href="login.php">     BOOK TICKETS    </a><a href="login.php">    TRAILERS   </a><a href="login.php">    ABOUT US   </a></pre></nav>
  </div>

<br>
<br>
<br>
<br>

<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/everest.jpg" alt="EVEREST" title="EVEREST" id="wows1_0"/></li>
		<li><img src="data1/images/hotel_transilvania_2.jpg" alt="HOTEL TRANSILVANIA 2" title="HOTEL TRANSILVANIA 2" id="wows1_1"/></li>
		<li><img src="data1/images/in_the_heart_of_the_sea.jpg" alt="IN THE HEART OF THE SEA" title="IN THE HEART OF THE SEA" id="wows1_2"/></li>
		<li><img src="data1/images/pan.jpg" alt="PAN" title="PAN" id="wows1_3"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/sicario.jpg" alt="wow slider" title="SICARIO" id="wows1_4"/></a></li>
		<li><img src="data1/images/victor_frankenstein.png" alt="VICTOR FRANKENSTEIN" title="VICTOR FRANKENSTEIN" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="EVEREST"><span><img src="data1/tooltips/everest.jpg" alt="EVEREST"/>1</span></a>
		<a href="#" title="HOTEL TRANSILVANIA 2"><span><img src="data1/tooltips/hotel_transilvania_2.jpg" alt="HOTEL TRANSILVANIA 2"/>2</span></a>
		<a href="#" title="IN THE HEART OF THE SEA"><span><img src="data1/tooltips/in_the_heart_of_the_sea.jpg" alt="IN THE HEART OF THE SEA"/>3</span></a>
		<a href="#" title="PAN"><span><img src="data1/tooltips/pan.jpg" alt="PAN"/>4</span></a>
		<a href="#" title="SICARIO"><span><img src="data1/tooltips/sicario.jpg" alt="SICARIO"/>5</span></a>
		<a href="#" title="VICTOR FRANKENSTEIN"><span><img src="data1/tooltips/victor_frankenstein.png" alt="VICTOR FRANKENSTEIN"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap slider</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<br><br>
<br>
<br>
<br>

	<div class="b">
     <b style="font-family:cursive">
<pre style="font-family:cursive">
<h1 style="font-color:white">
     If you don't have have an account,sign up for free!!!
</h1>
</pre></b></div>
  <div class="sign-up">
     <sign-up style="font-size:500%";"border-radius:10px">
     <pre>
      <a href="signup.php">       SIGN UP      </a>
     </pre>
     </sign-up>
  </div>
 
   
 <footer>

</footer>
</body>
</html>