<?php
				include("excelwriter.inc.php");
				
				$filename = "test.xls";
				
				$excel         = new ExcelWriter($filename);		

				
				$first_row = array("<b>Name</b>","<b>Address</b>" );
				$excel->writeLine($first_row);
						
				$second_row = array("<b>Khokon Sarker</b>","<b>Dhaka,Mohakhali</b>" );
				$excel->writeLine($second_row);						
						
				
				$excel->close();		
?>