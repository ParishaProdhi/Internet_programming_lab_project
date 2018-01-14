<?php
session_start();
    if(session_destroy())
	{
		 setcookie('username', "", time()-15);
	     header("Location:motherpage.php");
	}
?>