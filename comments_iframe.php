<?php
$page = "comments.php";
$dc = $_GET['dc'];

require_once('start_iframe.php');

if ($dc):
	$sql = "DELETE FROM comments WHERE teacher=$teacher->id AND id=$dc";
	mysql_query($sql,$con);
	if (mysql_affected_rows()>=1):
		$delete_message = 1;
	else:
		$delete_message = 2;
	endif;
endif;

$sql = "SELECT * from comments WHERE teacher=$teacher->id";
$result = mysql_query($sql,$con);


while ($comments[] = mysql_fetch_array($result));

$sql = "SELECT * from students ORDER BY last_name ASC";
$result = mysql_query($sql,$con);

while ($students[] = mysql_fetch_array($result));



?>

        



                    

                    

                        
							
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

<!-- Forms Section -->

                            <div class="grid_2">

                                <div class="portlet">
                               

                                    <section>
										<script type="text/javascript">
										$(function() {
											
											
											$("#form-students").multiselect({
												      noneSelectedText: 'Select Students'
												   }).multiselectfilter({
													placeholder: 'Search for Student',
													label: '',
													width: '215'
												});
												
											
									
										});
										</script>
                                        <?php if ($_GET['message']==1): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-success ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>SUCCESS!</strong> Comments added.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<form class="form has-validation" action="add_comment.php" method="post">

											<div class="clearfix">

                                                <label for="form-timezone" class="form-label">Student(s) <em>*</em></label>

                                                <div class="form-input">
													<select multiple="multiple" id="form-students" name="students[]">
														
														<?php 
														$roster_5 = '';
														$roster_6 = '';
														$roster_7 = '';
														$roster_8 = '';
														
														foreach($students as $student):
														if ($student['id']):
														
														switch ($student['class']) {
														    case 1:
														    $roster_5 .= '<option title="'.$student['last_name'].'" value="'.$student['id'].'">'.$student['first_name'].' '.$student['last_name'].'</option>';
														        break;
														    case 2:
														        $roster_6 .= '<option title="'.$student['last_name'].'" value="'.$student['id'].'">'.$student['first_name'].' '.$student['last_name'].'</option>';
														        break;
															case 3:
														        $roster_7 .= '<option title="'.$student['last_name'].'" value="'.$student['id'].'">'.$student['first_name'].' '.$student['last_name'].'</option>';
														        break;
															case 4:
															    $roster_8 .= '<option title="'.$student['last_name'].'" value="'.$student['id'].'">'.$student['first_name'].' '.$student['last_name'].'</option>';
															    break;
														}
														 ?>
														
														<?php 
														endif;
														endforeach; ?>
														<?php if($teacher->class == 1 || $teacher->class == 0): ?>
														<optgroup id="label-5" label="5th Grade">
														<?php echo $roster_5; ?>
														</optgroup>
														<?php endif; ?>
														<?php if($teacher->class == 2 || $teacher->class == 0): ?>
														<optgroup id="label-6" label="6th Grade">
														<?php echo $roster_6; ?>
														</optgroup>
														<?php endif; ?>
														<?php if($teacher->class == 3 || $teacher->class == 0): ?>
														<optgroup id="label-7" label="7th Grade">
														<?php echo $roster_7; ?>
														</optgroup>
														<?php endif; ?>
														<?php if($teacher->class == 4 || $teacher->class == 0): ?>
														<optgroup id="label-8" label="8th Grade">
														<?php echo $roster_8; ?>
														</optgroup>
														<?php endif; ?>
													</select>
												</div>

                                            </div>

											<div class="clearfix">

                                                <label for="form-category" class="form-label">Category <em>*</em></label><br/>

                                                <div class="form-input" style="text-align:center;">
	<label><input type="radio" name="category" id="form-category" value="1" <?php if($_GET['cat']==1){ echo 'checked'; } ?>/> Character Habits</label><br/>
	<label><input type="radio" name="category" value="2" <?php if($_GET['cat']==2){ echo 'checked'; } ?> /> Academic Habits</label><br/>
	<label><input type="radio" name="category" value="3" <?php if($_GET['cat']==3){ echo 'checked'; } ?>/> Social Skills/Pride</label><br/>
	<label><input type="radio" name="category" value="4" <?php if($_GET['cat']==4){ echo 'checked'; } ?>/> Attendance</label></div>

                                            </div>

                                            <div class="clearfix">

                                                <label for="form-amount" class="form-label">Amount <em>*</em><small>Ex: 12 or -12</small></label>

                                                <div class="form-input"><input type="text" id="form-amount" name="amount" required="required" value="<?php echo $_GET['amount']; ?>"/></div>

                                            </div>
<!--
											<div class="clearfix">

                                                <label for="form-date" class="form-label">Comment Date<small>mm/dd/yyyy</small></label>

                                                <div class="form-input"><input type="date" id="form-date" name="date" /></div>

                                            </div>
-->
											<div class="clearfix">

                                                <label for="form-comment" class="form-label">Comment <em>*</em></label>

												<!-- <div class="form-input"><input type="text" id="form-comment" name="comment" required="required" /></div> -->

                                                <div class="form-input form-textarea"><textarea name="comment" id="form-textarea" required="required" rows="4" /><?php echo $_GET['comment']; ?></textarea></div>

                                            </div>


                                            <div class="form-action clearfix">
												<input type="hidden" name="teacher" value="<?php echo $teacher->id; ?>">
												
												<input type="hidden" name="add" value="1">

                                                <button class="button" type="submit" data-icon-primary="ui-icon-circle-check">Submit Comment</button>

                                                <button class="button" type="reset">Reset</button>

                                            </div>

                                        </form>

                                    </section>

                                </div>

                            </div>

                            <!-- End Forms Section -->



                            <!-- Forms Section -->


                            <!-- End Forms Section -->



                        </section>

                    </div>

                </section>

                <!-- Main Section End -->



            </div>

     

<?php require_once('footer_iframe.php'); ?>