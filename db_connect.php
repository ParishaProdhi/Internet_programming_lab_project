<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='final';
$flag = mysql_connect($mysql_host,$mysql_user,$mysql_pass);

if ($flag) 
{	
	$db=mysql_select_db($mysql_db);
	if($db)
	{

	}
	else
	{
		echo "not connected with db";
	}
}
else
{
	echo "failed";
}
?>