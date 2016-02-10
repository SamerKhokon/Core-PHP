<?php  error_reporting(1);
	/******************************************************
	   Excel Library Including
	   
	   Date , code,ltp,high,low,open,close,ycp,trade,value,volume
	*******************************************************/
	$con = mysql_connect("localhost","root","");
	mysql_select_db("db_portal",$con);
	
	require_once 'reader.php';					
	$filename = "Sibli_vi_docs/STANCERAM.xls";
				
	$excel = new Spreadsheet_Excel_Reader();				
	/****************************************************
	  Execl file read by class
	*****************************************************/
	$excel->read($filename);					
	$rows =  $excel->sheets[0]['numRows'] ; 
	
	
	for($i=3 ; $i < $rows ;  $i++) 
	{		
		$entry_date = $excel->sheets[0]['cells'][$i][2];
		$code 		= $excel->sheets[0]['cells'][$i][3];
		$ltp 		= $excel->sheets[0]['cells'][$i][4];
		$high 		= $excel->sheets[0]['cells'][$i][5];
		$low 		= $excel->sheets[0]['cells'][$i][6];
		$open 		= $excel->sheets[0]['cells'][$i][7];
		$close      = $excel->sheets[0]['cells'][$i][8];
		$ycp     	= $excel->sheets[0]['cells'][$i][9];
		$trade      = $excel->sheets[0]['cells'][$i][10];
		$value     	= $excel->sheets[0]['cells'][$i][11];
		$volume     = $excel->sheets[0]['cells'][$i][12];	
		
		echo  $add = "INSERT INTO `tbl_test_stock_beta`(`code`,`entry_date`,`ltp`,`high`,`low`,`open`,`close`, 
		`ycp`,`trade`,`value`,`volume`) VALUES('$code',str_to_date('$entry_date','%d/%m/%Y'),'$ltp','$high','$low','$open', 
		'$close','$ycp', '$trade', '$value', '$volume')";			
		
		echo $index."<br/>";	
		
		//mysql_query($add);
		
		
	}								

	
	
	/**********************
	** 247 data in index
	** 1= 247
	***********************/

?>