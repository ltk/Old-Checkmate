<?php
$page = "comments.php";
$dc = $_GET['dc'];

require_once('start.php');

if ($dc):
	$sql = "DELETE FROM comments WHERE teacher=$teacher->id AND id=$dc";
	mysql_query($sql,$con);
	if (mysql_affected_rows()>=1):
		$delete_message = 1;
	else:
		$delete_message = 2;
	endif;
endif;


// Populate the comments array with comment objects.
$startdate = date('Y-m-j',strtotime($_SESSION['t1']));
$enddate = date('Y-m-j',strtotime($_SESSION['t2']));
$sql = ($teacher->admin ==1) ? "SELECT * from comments WHERE created BETWEEN '$startdate' AND '$enddate'" : "SELECT * from comments WHERE teacher=$teacher->id AND created BETWEEN '$startdate' AND '$enddate'";
$result = mysql_query($sql,$con);


//$sql = "SELECT * from comments WHERE teacher=$teacher->id";
//$result = mysql_query($sql,$con);


while ($comments[] = mysql_fetch_array($result));

$sql = "SELECT * from students ORDER BY last_name ASC";
$result = mysql_query($sql,$con);

while ($students[] = mysql_fetch_array($result));



?>

        



                    <div class="main-content">

                        <header>

                            <h2>View Comments</h2>
							<p>View your comments from any date period, sorted by category, student or dollar value.</p>
                        </header>

                        

                        <section class="container_6 clearfix">
							<h4 style="border-bottom:thin solid #444;padding-bottom:12px;">View Comments From: <span id="date-picked" style="font-weight:normal;"><?php echo date('m/j/y', strtotime($_SESSION['t1'])); ?> <strong>To:</strong> <?php echo date('m/j/y', strtotime($_SESSION['t2'])); ?></span> <a href="#" class="button help"  data-icon-primary="ui-icon-calendar" data-icon-only="true" id="change-period">Change Period</a><form class="form has-validation" action="change_period.php" method="post"><input type="hidden" name="goto" value="comments.php"><input type="date" id="form-from" name="from" style="display:none;width:105px;" value="Start on..." /><input type="date" id="form-to" name="to" value="End on..." style="display:none;width:105px;" /><button id="date-button" style="display:none;" class="button" type="submit" data-icon-primary="ui-icon-circle-check">Update Comment Period</button></form>
							</h4>
							<?php if ($delete_message==1): ?>
							<div class="ui-widget message closeable"> 

							                                    <div class="ui-state-success ui-corner-all"> 

							                                        <p> 

							                                            <span class="ui-icon ui-icon-circle-check"></span> 

							                                            Comment deleted.

							                                        </p> 

							                                    </div> 

							                                </div>
							<?php endif; ?> 
							<?php if ($delete_message==2): ?>
							<div class="ui-widget message closeable"> 

							                                    <div class="ui-state-error ui-corner-all"> 

							                                        <p> 

							                                            <span class="ui-icon ui-icon-circle-check"></span> 

							                                            Comment could not be deleted.

							                                        </p> 

							                                    </div> 

							                                </div>
							<?php endif; ?>                           
							<?php if ($_GET['message']==3): ?>
							<div class="ui-widget message closeable"> 

							                                    <div class="ui-state-success ui-corner-all"> 

							                                        <p> 

							                                            <span class="ui-icon ui-icon-circle-check"></span> 

							                                            Comment period updated.

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
<!-- Forms Section -->

                            

                            <!-- End Forms Section -->



                            <!-- Forms Section -->
							
                            <div class="grid_6">

                                <div class="portlet">

                                    <header>

                                        <h2>Your Comments</h2>

                                    </header>

                                    <section>
										<script type="text/javascript">
										$(document).ready(function() {
											$("#change-period").click(function(){
												$("#form-from, #date-picked, #form-to, #date-button, #change-period").toggle();
												$(".message-close").click();
											});
											
			$('#recent_comments').dataTable({
				"bJQueryUI": true,
				"bRetrieve": true,
				"bInfo": false,
				"sPaginationType": "full_numbers"
				
			});
		} );
		</script>
                                        <table class="display" id="recent_comments"> 
		                                    <thead> 
		                                        <tr> 
													
		                                            <th>Student</th>
													<th>Category</th>                                             
													<th>$</th> 
		                                            <th>Comment</th>
													<th>Date</th>
													<th>Delete</th> 
		                                        </tr> 
		                                    </thead> 
		                                    <tbody> 
			
												<?php foreach ($comments as $comment): 
												$student = $comment['student'];
												$sql = "SELECT * from students WHERE id='$student'";
												$result = mysql_query($sql,$con);
												$student_name = mysql_fetch_array($result);
												if ($student_name):
												?>
		                                        <tr class="<?php if ($comment['amount'] > 0): echo 'gradeA'; elseif ($comment['amount'] < 0): echo 'gradeX'; endif; ?> "> 
		                                            <td><?php
												
		
		 										echo $student_name['first_name']." ".$student_name['last_name'];
		 ?></td> 
													<td><?php
													$cat = $comment['category'];
													if ($cat==1):
													echo "Pride";
													elseif($cat==2):
													echo "Passion";
													elseif($cat==3):
													echo "Bravery";
													elseif($cat==4):
													echo "Self-Awareness";
													elseif($cat==5):
													echo "Urgency";
													elseif($cat==6):
													echo "Attendance";
													endif;
													?></td>
		                                            <td><?php echo $comment['amount']; ?></td> 
		                                            <td><?php echo $comment['comment']; ?></td>
													<td><?php echo date('m/d/y', strtotime($comment['created']))?></td>
													<td><a href="comments.php?dc=<?php echo $comment['id']; ?>" title="Delete this Comment">[Delete]</a></td>
		                                        </tr> 
												<?php 
												endif;
												endforeach; ?>

		                                    </tbody> 
		                                </table>

                                    </section>

                                </div>

                            </div>

                            <!-- End Forms Section -->



                        </section>

                    </div>

                </section>

                <!-- Main Section End -->



            </div>

        </section>

    </div>
<?php require_once('footer.php'); ?>