<?php       //error_reporting(0);

			$con = mysql_connect("localhost","root","");
			mysql_select_db("mpay",$con);


			
			if($con)
			echo 1;
			else
			echo 0;
			
			$filename = "TBL_TASK_PERMISSIONS.csv";
			$fp =   fopen($filename , "r");
			
			/***************************************************
			*******     CSV File read and JSON encode
			****************************************************/			
			$c = 0;
			
			while( ($line = fgetcsv($fp , 9000 , ","))  != false ) 
			{	     
               if($c>=1)
			  {
				$perm_id   =   trim($line[0]);		
				$menu_id   =   trim($line[1]);		
				$add_perm   =   trim($line[2]);		
				$module_id   =   trim($line[3]);		
				$group_id   =   trim($line[4]);						
				$edit_perm   =   trim($line[5]);						
				$delete_perm   =   trim($line[6]);						
				$view_perm   =   trim($line[7]);				

				echo $insert = "INSERT INTO `mpay`.`tbl_task_permissions` 
					(`perm_id`,`menu_id`,`add_perm`, 
					`module_id`,`group_id`,`creation_date`, 
					`edit_perm`,`delete_perm`,`view_perm`)
					VALUES('$perm_id','$menu_id','$add_perm', 
					'$module_id','$group_id',sysdate, 
					'$edit_perm','$delete_perm','$view_perm')";
					echo "<br/>";
				//mysql_query($insert);
				
				}	
				$c++;		
			}
			
			echo $c;
			
			fclose($fp);	
			
			
			//http://androidcookbook.com/Recipe.seam?recipeId=2260
?>