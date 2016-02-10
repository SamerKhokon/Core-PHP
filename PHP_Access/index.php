<?php
    $str = "select * from [TBL_DOCTORS];";
	$con = odbc_connect("test","test","test.mdb");
	
	/*if($con)
	echo 1;
	else
	echo 2;*/
	
	
	$stm = odbc_exec($con , $str);
	
	?>
	
	<table>
	
	<?php 
	while( odbc_fetch_row($stm))
	{?>
	  <tr>
	   <td><?php echo  $id = odbc_result($stm , 1);?></td>
	   <td><?php echo  $name = odbc_result($stm , 2);?></td>
	   <td><?php echo  $address = odbc_result($stm , 3);?></td>
	   <td><?php echo  $mobile = odbc_result($stm , 4);?></td>
	  </tr>
	<?php }
?>
    </table>
	
	
	
	
	