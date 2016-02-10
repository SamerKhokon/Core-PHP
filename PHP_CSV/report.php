<?php         include("db.php");

					$str = "SELECT a.mobile_no,a.time_dependent_marks,a.marks,a.total_marks,a.answer_time,
							(SELECT total_correct_answer  FROM mas_user_point WHERE mobile_no=a.mobile_no) AS total_correct ,
							(SELECT total_error_answer  FROM mas_user_point WHERE mobile_no=a.mobile_no) AS total_error,
							(SELECT total_faced_question  FROM mas_user_point WHERE mobile_no=a.mobile_no) AS total_faced ,
							(SELECT marks  FROM mas_user_point WHERE mobile_no=a.mobile_no) AS total_point
							FROM user_answer_table AS a";
							
							
					$sql = mysql_query($str);		
?>
            <table>
<?php					
					while($res  = mysql_fetch_array($sql) ) {
					   $mobile  = $res[0];
					   $tdmrk    = $res[1];
					   $mrk       = $res[2];
					   $tmrk     = $res[3];
						$anstm = $res[4];
						$tca     =  $res[5];
                        $tea     = $res[6];
						$tfq      = $res[7];
                        $tp       = $res[8];
						?>
						<tr>
						      <td><?php echo $mobile;?></td>
							  <td><?php echo $tdmrk;?></td>
							  <td><?php echo $mrk;?></td>
							  <td><?php echo $tmrk;?></td>
							  <td><?php echo $anstm;?></td>
							  <td><?php echo $tca;?></td>
							  <td><?php echo $tea;?></td>
							  <td><?php echo $tfq;?></td>
							  <td><?php echo $tp;?></td>
						 </tr>
<?php			}  ?>
            </table> 