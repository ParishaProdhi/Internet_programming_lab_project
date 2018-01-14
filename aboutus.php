<?php session_start();?>
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
	  <div class="dropdown">
  <button class="dropbtn"><style="border-radius:10px"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?></style></button>
  <div class="dropdown-content">
    <a href="logout.php">Log Out</a>
    
  </div>
</div>
  </th>
</tr>
</table>

  
  <div class="nav">
    <nav style="font-size:150%"><pre style="font-family:cursive"><a href="loggedin.php">            HOME        </a><a href="halls.php">       HALLS        </a><a href="showtimes.php">       SHOW TIMES        </a><a href="booktickets.php">     BOOK TICKETS    </a><a href="trailer.php">    TRAILERS   </a><a href="aboutus.php">    ABOUT US   </a></pre></nav>
  </div>
  <br><br>
  <br>
  <h1>I've made contact with the best cinema halls of the city and hence built this website for your comfort.
  <br>
  Bless me with your pleasure
  <br>
  find me at <a href="https://web.facebook.com/parisha.prodhi"><style="background-color:white">my facebook page</style></a></h1>
  
 <footer>
     <h1>Buy movie tickets anytime,anywhere! </h1><h1>You can book movie tickets of the best cinema halls of the city from here!</h1>
</footer>
</body>
</html>