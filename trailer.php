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
  <div class="hi"> <img src="Images/nht.jpg" alt="Note" style="height:100px;width:300px"></div>
  <div class="hi"><video width="600" controls loop preload="auto" poster="Images/HOTEL TRANSILVANIA 2.jpg">
<source src="Hotel Transylvania 2 - International Trailer (Official).mp4" type='video/mp4'/>
</video></div>  
</div>
<br><br><br><br><br><br>
<div class="pan">
  <div class="pi"> <img src="Images/npan.jpg" alt="Note" style="height:100px;width:300px"></div>
  <div class="pi"><video width="600" controls loop preload="auto" poster="Images/pan.jpg">
<source src="Pan Official Adventure Trailer (2015) - Hugh Jackman, Rooney Mara Movie HD.mp4" type='video/mp4'/>
</video></div>  
</div>
<br><br><br><br><br><br>
 <div class="everest">
  <div class="evi"> <img src="Images/nev.jpg" alt="Note" style="height:100px;width:300px"></div>
  <div class="evi"><video width="600" controls loop preload="auto" poster="Images/everest.jpg">
<source src="Everest - Official Trailer (HD).mp4" type='video/mp4'/>
</video></div>  
</div>
<div class="sicario">
  <div class="si"> <img src="Images/sic.jpg" alt="Note" style="height:100px;width:300px"></div>
  <div class="si"><video width="600" controls loop preload="auto" poster="Images/SICARIO.jpg">
<source src="Sicario (2015 Movie - Emily Blunt) - Official Trailer.mp4" type='video/mp4'/>
</video></div>  
</div>
<br><br><br><br><br><br>
<div class="victor">
  <div class="vi"> <img src="Images/vi.jpg" alt="Note" style="height:100px;width:300px"></div>
  <div class="vi"><video width="600" controls loop preload="auto" poster="Images/VICTOR FRANKENSTEIN.jpg">
<source src="vf.mp4" type='video/mp4'/>
</video></div>  
</div>
<br><br><br><br><br><br>
 <div class="the_sea">
  <div class="ti"> <img src="Images/in.jpg" alt="Note" style="height:100px;width:300px"></div>
  <div class="ti"><video width="600" controls loop preload="auto" poster="Images/IN THE HEART OF THE SEA.jpg">
<source src="In the Heart of the Sea - Final Trailer [HD].mp4" type='video/mp4'/>
</video></div>  
</div>

 <footer>

</footer>
</body>
</html>





</body>
</html>

