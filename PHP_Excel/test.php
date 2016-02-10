<?php      //error_reporting(0);


				/******************************************************
				   Excel Library Including
				*********************************************************/
              	require_once 'reader.php';
								
				$filename = "yam.xls";
				$excel = new Spreadsheet_Excel_Reader();
				
				
				/****************************************************
				  Execl file read by class
				********************************************************/
				$excel->read($filename);								
				$rows =  $excel->sheets[0]['numRows'] ; 
				
				
				/******************************************************************************
				    sheets[0][i][j]
					
					sheets[0] = first excel page
					i = row
					j = column
				******************************************************************************/
			    $cn = mysql_connect("localhost","root","");
				mysql_select_db("db_iportal",$cn);
				
			
				
				
				
				
				for($i=1;$i<$rows;$i++) 
				{
				    $id         = $excel->sheets[0]['cells'][$i][1];						
				    $timestamp  = $excel->sheets[0]['cells'][$i][2];				
					
					echo $up = "UPDATE `sector_price` SET 
					 `timestamps`='$timestamp' WHERE id>14244 and id=".($i+14244);
		
					mysql_query($up);
					echo "<br/>";
					//echo $date."  ".$ycp."<br/>";
				}
				
				
			
?>

