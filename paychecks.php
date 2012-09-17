<?php
$page = "paychecks.php";
require_once('start.php');

$sql = "SELECT * from students ORDER BY last_name ASC";
$result = mysql_query($sql,$con);
if($result){
while ($row = mysql_fetch_object($result, 'Student')):
	$students[$row->id]=$row;
endwhile;
}
	// Populate the comments array with comment objects.
	$startdate = date('Y-m-j 00:00:00',strtotime($_SESSION['t1']));
	$enddate = date('Y-m-j 23:59:59',strtotime($_SESSION['t2']));
	$sql = "SELECT * from comments WHERE created BETWEEN '$startdate' AND '$enddate'";
	$result = mysql_query($sql,$con);
	if($result){
	while ($row = mysql_fetch_object($result, 'Comment')):
		if($students){
		foreach ($students as $student):
			if ($row->student == $student->id) {$student->comments[]=$row; }
		endforeach;
		}
	endwhile;
	}
	
	
	
	if($students){
	$students_sorted = $students;
	}
	
	if($students_sorted){
	// usort($students_sorted,"cmp_last_name");
	}
	
	if($students){
	$current_record = ($_GET['student']) ? $_GET['student'] : reset($students)->id ;
	}
?>
        



                    <div class="main-content">
	
                        <header>
                            <ul class="action-buttons clearfix">
								<li style="margin-right:5px;"><div class="form-input" style="text-align:center;"> 
									Print Paychecks by Grade:
									<label><input id="class-1" class="class-select" type="radio" name="category" id="form-category" value="1" <?php if ($teacher->class==1) { echo 'checked'; } ?> />5th</label> 
									<label><input id="class-2" class="class-select" type="radio" name="category" value="2" <?php if ($teacher->class==2) { echo 'checked'; } ?> />6th</label> 
									<label><input id="class-3" class="class-select" type="radio" name="category" value="3" <?php if ($teacher->class==3) { echo 'checked'; } ?> />7th</label>
									<label><input id="class-4" class="class-select" type="radio" name="category" value="4" <?php if ($teacher->class==4) { echo 'checked'; } ?> />8th</label></div>
									</li>
                                <li><a id="print-link" href="../checkmate/pdf/printPaycheck.php?class=<?php if ($teacher->class!=0){ echo $teacher->class; } else { echo '1'; } ?>" target="_blank" class="button" rel="#overlay" data-icon-primary="ui-icon-print">Print</a></li>
                            </ul>
                            <h2>
                                View Paychecks
                            </h2>
							<p>View your students' virtual paychecks, including their comments from other teachers, before printing them as PDFs.</p>
							
                        </header>
<script type="text/javascript">
$(function(){
	$("#change-period").click(function(){
		$("#form-from, #date-picked, #form-to, #date-button, #change-period").toggle();
		$(".message-close").click();
	});
	$('#class-1').click(function(){
		$('#print-link').attr('href','../checkmate/pdf/printPaycheck.php?class=1');
	});
	$('#class-2').click(function(){
		$('#print-link').attr('href','../checkmate/pdf/printPaycheck.php?class=2');
	});
	$('#class-3').click(function(){
		$('#print-link').attr('href','../checkmate/pdf/printPaycheck.php?class=3');
	});
	$('#class-4').click(function(){
		$('#print-link').attr('href','../checkmate/pdf/printPaycheck.php?class=4');
	});
	/*
	$("input[@name='category']").change(function(){
	    if ($("input[@name='category']:checked").val() == '1'){
	        $('#print-link').attr('href','/pdf/printPaycheck.php?class=1');// Code for handling value 'a'
	    }else if ($("input[@name='category']:checked").val() == '2'){
	        $('#print-link').attr('href','/pdf/printPaycheck.php?class=2');// Code for handling value 'b'
		}else if ($("input[@name='category']:checked").val() == '3'){
		     $('#print-link').attr('href','/pdf/printPaycheck.php?class=3');   // Code for handling value 'b'
		}else if ($("input[@name='category']:checked").val() == '4'){
			  $('#print-link').attr('href','/pdf/printPaycheck.php?class=4');  // Code for handling value 'b'
	   } else { }
	        // Code for handling 'c'
	});
	*/
});
</script>
                        <section style="margin-top:0;padding-top:0;">
							<?php if ($_GET['message']==3): ?>
							<div class="ui-widget message closeable"> 

							                                    <div class="ui-state-success ui-corner-all"> 

							                                        <p> 

							                                            <span class="ui-icon ui-icon-circle-check"></span> 

							                                            Paycheck period updated.

							                                        </p> 

							                                    </div> 

							                                </div>
							<?php endif; ?>
							<?php if ($_GET['message']==4): ?>
							<div class="ui-widget message closeable"> 

							                                    <div class="ui-state-error ui-corner-all"> 

							                                        <p> 

							                                            <span class="ui-icon ui-icon-circle-check"></span> 

							                                            Try again. The end date must be after the start date. Duh.

							                                        </p> 

							                                    </div> 

							                                </div>
							<?php endif; ?>
							<h4 style="border-bottom:thin solid #444;padding-bottom:12px;">Paycheck Period: <span id="date-picked" style="font-weight:normal;"><?php echo date('m/j/y', strtotime($_SESSION['t1'])); ?> - <?php echo date('m/j/y', strtotime($_SESSION['t2'])); ?></span> <a href="#" class="button help"  data-icon-primary="ui-icon-calendar" data-icon-only="true" id="change-period">Change Period</a><form class="form has-validation" action="change_period.php" method="post"><input type="hidden" name="goto" value="paychecks.php"><input type="date" id="form-from" name="from" style="display:none;width:105px;" value="Start on..." /><input type="date" id="form-to" name="to" value="End on..." style="display:none;width:105px;" /><button id="date-button" style="display:none;" class="button" type="submit" data-icon-primary="ui-icon-circle-check">Update Paycheck Period</button></form>
							</h4>
							<style type="text/css">
							#id_search_list{
								width:100%;
								padding:5px;
								margin-bottom:5px;
								margin-left:10px;
							}
							</style>
							<script type="text/javascript">
							$(function(){
								$('input#id_search_list').quicksearch('div#widget-orders tr');
							});


							</script>						
<div class="grid_2" style="min-height:400px;">
	<!--<input id="id_search_list" placeholder="Search Students"/>-->
	<div class="grid_2 portlet collapsible" id="widget-orders">
		
        <header>

            <h2>8th Grade</h2>

        </header>

        <section class="no-padding" <?php if ($teacher->class!=4){ echo 'style="display:none;"'; } else { echo 'style="display:block;"'; } ?>>
			
            <table class="full">

                <tbody>
					<?php
					if($students_sorted){
					foreach ($students_sorted as $student):
					if ($student->class == 4):
					$red = ($student->current_paycheck_amount() < 40) ? 'background:#fee;' : '';
					$green = ($student->current_paycheck_amount() > 40) ? 'background:#efe;' : '';
					
					
					echo "<tr style='".$red.$green."'><td><a href='?student=".$student->id."'>".$student->last_name.", ".$student->first_name."</a>";
					

					if (!empty($student->comments[0]->comment)):
					echo "<br/><small>";
					$message =(count($student->comments) == 1) ? '1 Comment' : count($student->comments)." Comments";
					echo $message;
					//echo ($student->comments[0]->comment);
					echo "</small>";
					else:
					//echo "<ul><li>No Comments</li></ul>";
					endif;
					echo "</td>";
					
					echo "<td class='ar'>$".$student->current_paycheck_amount."</td></tr>";
					endif;
					endforeach;
					}


				    ?>

                </tbody>

            </table>

        </section>

    </div>
	<div class="grid_2 portlet collapsible" id="widget-orders">
		
        <header>

            <h2>7th Grade</h2>

        </header>

        <section class="no-padding" <?php if ($teacher->class!=3){ echo 'style="display:none;"'; } else { echo 'style="display:block;"'; } ?>>

            <table class="full">

                <tbody>
					<?php
					if($students_sorted){
					foreach ($students_sorted as $student):
					if ($student->class == 3):
					$red = ($student->current_paycheck_amount() < 40) ? 'background:#fee;' : '';
					$green = ($student->current_paycheck_amount() > 40) ? 'background:#efe;' : '';
					
					
					echo "<tr style='".$red.$green."'><td><a href='?student=".$student->id."'>".$student->last_name.", ".$student->first_name."</a>";
					

					if (!empty($student->comments[0]->comment)):
					echo "<br/><small>";
					$message =(count($student->comments) == 1) ? '1 Comment' : count($student->comments)." Comments";
					echo $message;
					//echo ($student->comments[0]->comment);
					echo "</small>";
					else:
					//echo "<ul><li>No Comments</li></ul>";
					endif;
					echo "</td>";
					
					echo "<td class='ar'>$".$student->current_paycheck_amount."</td></tr>";
					endif;
					endforeach;
					}


				    ?>

                </tbody>

            </table>

        </section>

    </div>
	<div class="grid_2 portlet collapsible" id="widget-orders">
		
        <header>

            <h2>6th Grade</h2>

        </header>

        <section class="no-padding" <?php if ($teacher->class!=2){ echo 'style="display:none;"'; } else { echo 'style="display:block;"'; } ?>>

            <table class="full">

                <tbody>
					<?php
					if($students_sorted){
					foreach ($students_sorted as $student):
					if ($student->class == 2):
					$red = ($student->current_paycheck_amount() < 40) ? 'background:#fee;' : '';
					$green = ($student->current_paycheck_amount() > 40) ? 'background:#efe;' : '';
					
					
					echo "<tr style='".$red.$green."'><td><a href='?student=".$student->id."'>".$student->last_name.", ".$student->first_name."</a>";
					

					if (!empty($student->comments[0]->comment)):
					echo "<br/><small>";
					$message =(count($student->comments) == 1) ? '1 Comment' : count($student->comments)." Comments";
					echo $message;
					//echo ($student->comments[0]->comment);
					echo "</small>";
					else:
					//echo "<ul><li>No Comments</li></ul>";
					endif;
					echo "</td>";
					
					echo "<td class='ar'>$".$student->current_paycheck_amount."</td></tr>";
					endif;
					endforeach;
					}


				    ?>

                </tbody>

            </table>

        </section>

    </div>
	<div class="grid_2 portlet collapsible" id="widget-orders">
		
        <header>

            <h2>5th Grade</h2>

        </header>

        <section class="no-padding" <?php if ($teacher->class!=1){ echo 'style="display:none;"'; } else { echo 'style="display:block;"'; } ?>>

            <table class="full">

                <tbody>
					<?php
					if($students_sorted){
					foreach ($students_sorted as $student):
					if ($student->class == 1):
					$red = ($student->current_paycheck_amount() < 40) ? 'background:#fee;' : '';
					$green = ($student->current_paycheck_amount() > 40) ? 'background:#efe;' : '';
					
					
					echo "<tr style='".$red.$green."'><td><a href='?student=".$student->id."'>".$student->last_name.", ".$student->first_name."</a>";
					

					if (!empty($student->comments[0]->comment)):
					echo "<br/><small>";
					$message =(count($student->comments) == 1) ? '1 Comment' : count($student->comments)." Comments";
					echo $message;
					//echo ($student->comments[0]->comment);
					echo "</small>";
					else:
					//echo "<ul><li>No Comments</li></ul>";
					endif;
					echo "</td>";
					
					echo "<td class='ar'>$".$student->current_paycheck_amount."</td></tr>";
					endif;
					endforeach;
					}


				    ?>

                </tbody>

            </table>

        </section>

    </div>
</div>
<div class="grid_5">
		<h2 class="title" style="margin-top:0;"><?php if($students){ echo $students[$current_record]->first_name." ".$students[$current_record]->last_name."'s Paycheck"; } else { echo "No Student Found"; }?> <a href="lightning.php?s=<?php echo $students[$current_record]->id; ?>" class="button help"  data-icon-primary="ui-icon-plus" data-icon-only="true" id="add-comment">Add Comment</a></h2> 
		<table class="simple full ui-corner-bottom" style="background:#fff;">
			<tr>
				<th class="ui-state-default">Pride</th>
				<th class="ui-state-default">Passion</th>
				<th class="ui-state-default">Bravery</th>
				<th class="ui-state-default">Self-Awareness</th>
				<th class="ui-state-default">Urgency</th>
				<th class="ui-state-default">Attendance</th>
				<th class="ui-state-default"><strong>Total</strong></th>
			</tr>
			<tr>
				<td class='ac'><?php if($students) { print_pc_field($students, $current_record, 1, 1); } ?></td>
				<td class='ac'><?php if($students) { print_pc_field($students, $current_record, 2, 2); }  ?></td>
				<td class='ac'><?php if($students) { print_pc_field($students, $current_record, 3, 3); }  ?></td>
				<td class='ac'><?php if($students) { print_pc_field($students, $current_record, 4, 4); }  ?></td>
				<td class='ac'><?php if($students) { print_pc_field($students, $current_record, 5, 5); }  ?></td>
				<td class='ac'><?php if($students) { print_pc_field($students, $current_record, 6, 6); }  ?></td>
				<td class='ac'><?php if($students) { echo "$".( pc_field($students, $current_record, 1, 1) + pc_field($students, $current_record, 2, 2) + pc_field($students, $current_record, 3, 3) + pc_field($students, $current_record, 4, 4) + pc_field($students, $current_record, 5, 5) + pc_field($students, $current_record, 6, 6)); }  ?></td>
			</tr>
			<?php
			$start_ts = $_SESSION['t1'];	
			$end_ts = $_SESSION['t2'];
			$diff = strtotime($end_ts) - strtotime($start_ts);
			$days_since = round($diff / 86400);
			$weeks_since = floor($days_since/7);

			$sum = 40 * $weeks_since; 
			?>
			<tr>
				<td class='ac' colspan="6">Starting Amount:</td>
				<td class='ac'>+ $<?php echo $sum; ?></td>
			</tr>
			<tr>
				<td class='ac'></td>
				<td class='ac'></td>
				<td class='ac'></td>
				<td class='ac'></td>
				<td class='ac'></td>
				<td class='ac'></td>
				<td class='ac' style="font-size:1.5em;padding-top:5px;"><?php if($students) { echo "<strong>$".( $sum + pc_field($students, $current_record, 1, 1) + pc_field($students, $current_record, 2, 2) + pc_field($students, $current_record, 3, 3) + pc_field($students, $current_record, 4, 4))."</strong>"; }  ?></td>
			</tr>
		</table>  
</div>
<div class="grid_5"> 
                                    <header> 
                                        <h2><?php if($students) { echo $students[$current_record]->first_name." ".$students[$current_record]->last_name."'s Comments"; } else { echo "No Student Found"; } ?></h2> 
                                    </header> 
                                    <section class="no-padding"> 
                                        <table class="simple full ui-corner-bottom" style="background:#fff;"> 
                                            <thead> 
                                                <tr> 
                                                    <th class="ui-state-default" style="min-width:45px">$</th> 
                                                    <th class="ui-state-default">Teacher</th>
 													<th class="ui-state-default">Date</th>
													<th class="ui-state-default">Category</th>
                                                    <th class="ui-state-default">Comment</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <?php
												// PRINT LIST OF CURRENT COMMENTS FOR ONE SUDENT
										
												//echo "<li class='title'>Comments for ".$students[$current_record]->first_name." ".$students[$current_record]->last_name."</li>";
												if (count($students[$current_record]->comments)>0):

												foreach ($students[$current_record]->comments as $comment):


												$sql = "SELECT * from teachers WHERE id='$comment->teacher'";
												$result = mysql_query($sql,$con);
												$commenter = mysql_fetch_object($result, 'Teacher');
												if ($comment->amount < 0) { $comment_class = "red"; }
												elseif ($comment->amount > 0) { $comment_class = "green"; } else {
													$comment_class = "";
												}
												$category = array('','Pride', 'Passion', 'Bravery', 'Self-Aware', 'Urgency', 'Attendance');
												$line = "<tr><td ";
												$line .= ($comment->amount<0) ? "style='color:red;text-align:center;' >-" : "" ;
												$line .= ($comment->amount>0) ? "style='color:green;text-align:center;' >" : "" ;
												$line .= ($comment->amount==0) ? "style='text-align:center;' >" : "" ;
												$line .= abs($comment->amount)."</td>";
												$line .= "<td class='ac'>".$commenter->first_name." ".$commenter->last_name."</td>";
												$line .= "<td class='ac'>".date('m/j/y',strtotime($comment->created))."</td>";
												$line .= "<td class='ac'>".$category[$comment->category]."</td>";
												$line .= "<td class='ac'>".$comment->comment."</td>";
												$line .= "</tr>";

												echo $line;
												endforeach;
												mysql_close($con);

												else:
												echo "<p>No Comments</p>";

												endif;


												?>
                                                
                                            </tbody> 
                                        </table> 
										</div>
                                    </section> 
                                </div>

        </section>


    </div>
<?php require_once('footer.php'); ?>