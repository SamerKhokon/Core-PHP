<?php   /******************************************************
		   Excel Library Including
		*********************************************************/
		require_once 'reader.php';						
		$filename = "index_mover_data_26_03_2014.xls";
		$excel = new Spreadsheet_Excel_Reader();	
				
		/****************************************************
		  Execl file read by class
		********************************************************/
		$excel->read($filename);								
		$rows =  $excel->sheets[0]['numRows'] ;
		
		
		$con = mysql_connect("localhost" , "root" , "");
		mysql_select_db("db_iportal" , $con);
		
		
		for( $i = 2 ; $i < $rows ; $i++ ) 
		{
		    //$id 			   = $excel->sheets[0]['cells'][$i][1];
			$date 			   = $excel->sheets[0]['cells'][$i][2];
			$cal_val 		   = (float)$excel->sheets[0]['cells'][$i][3];
			$idx_devi 		   = (float)$excel->sheets[0]['cells'][$i][4];			
		    $idx_percent_devi  = (float)$excel->sheets[0]['cells'][$i][5];	
			
			$parse = explode("%",$idx_percent_devi);
			$idx_percent_deviation = $parse[0];
			
			$str = "INSERT INTO `index_change`(`idx_index_id`,`idx_date_time`,
						 `idx_capital_value`,`idx_deviation`,`idx_percentage_deviation`)
			VALUES ('DSEX','','$cal_val','$idx_devi','');";
			
			//mysql_query($str);
			echo "$str<br/>";
		}	
		
?>