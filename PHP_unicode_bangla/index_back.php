<?php 
	include_once("db.php");
	
	$query = mysql_query("select * from profile");
	while($res = mysql_fetch_array($query))
	{
	  echo $res[1].'  '.$res[2] . "<br/>";
	}
?>