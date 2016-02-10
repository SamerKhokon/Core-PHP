<?php 	$filename = "from_4000.csv";
		$fp =   fopen($filename , "r");
			
		/***************************************************
		*******     CSV File read 
		****************************************************/			
		$c = 0;
			
			while( ($data = fgetcsv($fp , 90 , ","))  != false ) 
			{			
			    echo $code       = $data[1].'<br/>';
				
				
				/*$entry_date = $data[2];
				$open       = $data[3];
				$high       = $data[4];
				$low        = $data[5];
				$close      = $data[6];
				$volume     = $data[7];*/
				
				
				/*
				echo  $add = "INSERT INTO `tbl_test_stock_beta` 
				( `code`, `entry_date`, `open`, `high`, `low`, `close`, `volume`
					)VALUES
					( 	'$code',str_to_date('$entry_date','%d/%m/%Y'), '$open', '$high', '$low', '$close', 
					'$volume');
				";*/
				
			}	

fclose($fp);			

?>