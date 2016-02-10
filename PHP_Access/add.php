<?php  
	$con = odbc_connect("test","test","test.mdb");
	
    $str = "insert into TBL_DOCTORS(NAME,ADDRESS,MOBILE) 
	VALUES('Susanta','Rangpur','8801716238830')";

    $stn = odbc_exec($con , $str);
?>