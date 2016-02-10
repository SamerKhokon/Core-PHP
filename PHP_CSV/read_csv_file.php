<?php   error_reporting(0);

			$con = mysql_connect("localhost","root","");
			mysql_select_db("test",$con);


			$filename = "aur.csv";
			$fp =   fopen($filename , "r");
			
			/***************************************************
			*******     CSV File read and JSON encode
			****************************************************/			
			$c = 0;
			
			while( ($line = fgetcsv($fp , 9000 , ","))  != false ) 
			{			
			    if( $line[0]  != "MSISDN" ) 								
				{
					    $text   =   trim($line[0]);		

						//$insert = "insert into tbl_msisdn(`msisdn`) values('$text')";
						//mysql_query($insert);
						
						$result[] = array( "mobileno" => $text );	
                        $c++;						
				}
			}			
						
			echo json_encode($result);			
			
			
			
			echo "<br/><br/>Total Rows: $c";
			
			
			fclose($fp);	
			
			
			//http://androidcookbook.com/Recipe.seam?recipeId=2260
?>