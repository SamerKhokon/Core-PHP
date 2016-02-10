<?php 	$con = oci_connect("mpay","mpay","192.168.10.127/xe");
	
		$level1_str = "select * from TBL_MENU_INFO where MOTHER_MENU_ID=0";
		$level1_stm = oci_parse($con , $level1_str);
		oci_execute($level1_stm);	
		
		
		while($r = oci_fetch_array($your_query , OCI_BOTH+OCI_RETURN_NULLS)){
		    $name = $r['name'];
		}
		
		oci_close($con);
		
?>