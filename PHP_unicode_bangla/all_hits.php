<?php 
		$con = mysql_connect('localhost','root','');
		mysql_select_db('bangla',$con);

		mysql_query('SET CHARACTER SET utf8');
		mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
		
		$sql = "select id,mobileno,sms 
				from profile order by id desc";
				
		$r   = mysql_query($sql);
		while($row = mysql_fetch_assoc($r))
		$res[] = $row;
		
		
		
		
		echo json_encode($res);
?>