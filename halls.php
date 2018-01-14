<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>table {
    width:100%;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    font-size:150%;
	font-family:cursive;
    background-color: #f2e5ff;
}
table#t01 tr:nth-child(odd) {
   font-size:150%;
   font-family:cursive;
   background-color: #e5ccff;
}
table#t01 th	{
    font-size:160%;
	font-family:cursive;
    background-color: black;
    color: white;
}</style>
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
  </div> <br> <br>
<div class="new">   <br><br>
 <table id="t01">
  <tr>
    <th>Cinema Hall</th>
    <th>On-Going Movies</th> 
    
  </tr>
   <tr>
    <td>City Square Cineplex</td>
    <td>1.Everest<br>2.Hotel  Transilvaina 2<br>3.Pan<br>4.Sicarion<br>5.Victor Frankenstein<br></td>
    
  </tr>
 
   <tr>
    <td>Metro Cinema</td>
    <td>1.Everest<br>2.Hotel Transilvania<br>3.Pan<br>4.Sicario<br>5.In The Heart Of The Sea<br></td>
    
  </tr>
     
  </tr>
   <tr>
    <td>City Square Cineplex</td>
    <td>1.Hotel  Transilvaina 2<br>2.Victor Frankenstein<br>3.In The Heart Of The Sea<br></td>
    
  </tr>
 
  </table>
</div>  
 <footer>
</footer>
</body>
</html>