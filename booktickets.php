<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
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
  <button class="dropbtn"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?></style></button>
  <div class="dropdown-content">
    <a href="logout.php">Log Out</a>
    
  </div>
</div>
  </th>
</tr>
</table>

  
  <div class="nav">
    <nav style="font-size:150%"><pre style="font-family:cursive"><a href="motherpage.php">            HOME        </a><a href="halls.php">       HALLS        </a><a href="showtimes.php">       SHOW TIMES        </a><a href="booktickets.php">     BOOK TICKETS    </a><a href="trailer.php">    TRAILERS   </a><a href="aboutus.php">    ABOUT US   </a></pre></nav>
  </div>

<br>
<br>
<br>
<br>
<div class="hotel">
  <div class="hi"> <img src="Images/HOTEL TRANSILVANIA 2.jpg" alt="Note" style="height:300px;width:200px"></div>
  <div class="hi"><strong style="text-align:center">Hotel Transilvania 2</strong><br>
  <p style="font-size:30px">Drac is worried that his adorable half-human, half-vampire grandson, Dennis, isn't showing signs of being a vampire!</p></div>
  <div class="hi"><pre style="font-size:150%"><a href="htbooking.php">BOOK NOW!</a></pre></div>  
</div>
   <br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br>
   <br><br><br><br>
  

  <div class="pan">
  <div class="pi"> <img src="Images/PAN.jpg" alt="Note" style="height:300px;width:200px"></div>
  <div class="pi"><strong style="text-align:center">Pan</strong><br>
  <p style="font-size:30px">A return to Neverland that should never have been made!</p></div>
  <div class="pi"><pre style="font-size:150%"><a href="panbook.php">BOOK NOW!</a></pre></div>  
</div>
   <br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br>
   <br><br><br><br>
   
  <div class="everest">
  <div class="evi"> <img src="Images/EVEREST.jpg" alt="Note" style="height:300px;width:200px"></div>
  <div class="evi"><strong style="text-align:center">Everest</strong><br>
  <p style="font-size:30px">"Never Let Go" is the tagline on posters for this movie,based on the true
    story of an exceedingly ill-fated trek up the title mountain in 1996.</p></div>
  <div class="evi"><pre style="font-size:150%"><a href="everestbook.php">BOOK NOW!</a></pre></div>  
</div>
<br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br>
   <br><br><br><br>
<div class="sicario">
  <div class="si"> <img src="Images/SICARIO.jpg" alt="Note" style="height:300px;width:200px"></div>
  <div class="si"><strong style="text-align:center">SICARIO</strong><br>
  <p style="font-size:30px">A great performance from Blunt makes this well-staged story of FBI operations in the murky world of the US-Mexico borderlands a cut above the ordinary</p></div>
  <div class="si"><pre style="font-size:150%"><a href="scbook.php">BOOK NOW!</a></pre></div>  
</div><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br>
   <br><br><br><br>
<div class="victor">
  <div class="vi"> <img src="Images/VICTOR FRANKENSTEIN.jpg" alt="Note" style="height:300px;width:200px"></div>
  <div class="vi"><p style="text-align:center">VICTOR FRANKENSTEIN</p>
  <p style="font-size:30px"> Victor Frankenstein plays at providing a fresh perspective on an oft-told tale, but ultimately offers little of interest that viewers haven't already seen in superior Frankenstein films.</p></div>
  <div class="vi"><pre style="font-size:150%"><a href="vcbook.php">BOOK NOW!</a></pre></div>  
</div><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br><br>
<div class="the_sea">
  <div class="ti"> <img src="Images/IN THE HEART OF THE SEA.jpg" alt="Note" style="height:300px;width:200px"></div>
  <div class="ti"><strong style="text-align:center">IN THE HEART OF THE SEA</strong><br>
  <p style="font-size:30px">A recounting of a New England whaling ship's sinking by a giant whale in 1820, an experience that later inspired the great novel Moby-Dick.</p></div>
  <div class="ti"><pre style="font-size:150%"><a href="seabook.php">BOOK NOW!</a></pre></div>  
</div>
   
 <footer>

</footer>
</body>
</html>