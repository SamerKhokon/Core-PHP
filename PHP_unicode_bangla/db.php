<?php 
	$con = mysql_connect("localhost","root","");
	mysql_select_db("bangla",$con);
	
	
	mysql_query('SET CHARACTER SET utf8');
	mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
?>