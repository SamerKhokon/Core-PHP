<?php	  /********************************************************************
              ****** Code Execution Time
			  *********************************************************************/
			$start_time = microtime(true);
			
			//echo "<br/>";
			$st = "";
			for($i=1;$i<=10;$i++)
			{
			  $st .= $i."<br/>";
			}
			$end_time = microtime(true);
			//echo "<br/>";
			$exec_time = (float)$end_time - (float)$start_time;
			echo $exec_time."<br/>";
?>