<?php
$page = "students.php";

require_once('start.php');

$sql = "SELECT * from students ORDER BY last_name ASC";
$result = mysql_query($sql,$con);

while ($students[] = mysql_fetch_array($result));

if ($_GET['s']!=''):
$edit_id = $_GET['s'];
$sql = "SELECT * from students WHERE id='$edit_id'";
$result = mysql_query($sql,$con);

while ($edit_student[] = mysql_fetch_array($result));
endif;
?>

        



                    <div class="main-content">

                        <header>

                            <h2>Students</h2>
							
                        </header>

                        

                        <section class="container_6 clearfix">
							
                            <!-- Forms Section -->

                            <div class="grid_2">

                                <div class="portlet">

                                    <header>

                                        <h2>Add New Student</h2>
                                    </header>

                                    <section>
										
                                        <?php if ($_GET['message']==1): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-success ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>SUCCESS!</strong> Student added.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<form class="form has-validation" action="add_student.php" method="post">


											<div class="clearfix">

                                                <label for="form-class" class="form-label">Grade Level <em>*</em></label><br/>

                                                <div class="form-input" style="text-align:center;">
	<label><input type="radio" name="class" id="form-class" value="1" checked /> 5th Grade</label><br/>
	<label><input type="radio" name="class" value="2" /> 6th Grade</label><br/>
	<label><input type="radio" name="class" value="3" /> 7th Grade</label><br/>
	<label><input type="radio" name="class" value="4" /> 8th Grade</label></div>

                                            </div>

                                            <div class="clearfix">

                                                <label for="form-amount" class="form-label">First Name <em>*</em></label>

                                                <div class="form-input"><input type="text" id="form-first_name" name="first_name" required="required"/></div>

                                            </div>

											<div class="clearfix">

	                                                <label for="form-amount" class="form-label">Last Name <em>*</em></label>

	                                                <div class="form-input"><input type="text" id="form-last_name" name="last_name" required="required"/></div>

	                                        </div>


                                            <div class="form-action clearfix">
												<input type="hidden" name="teacher" value="<?php echo $teacher->id; ?>">
												
												<input type="hidden" name="add" value="1">

                                                <button class="button" type="submit" data-icon-primary="ui-icon-circle-check">Add Student</button>

                                                <button class="button" type="reset">Reset</button>

                                            </div>

                                        </form>

                                    </section>

                                </div>

                            </div>

                            <!-- End Forms Section -->
							<?php if($teacher->admin ==1 ): ?>
							<div class="grid_2">

                                <div class="portlet">

                                    <header>

                                        <h2>Choose a Student to Edit</h2>
                                    </header>
									<style type="text/css">
									
									ul.edgetoedge {
									    border-width: 1px 0;
									    margin: 0;
									    padding: 0;
										list-style:none;
										color:#fff;
									}
									ul.edgetoedge li {
									    color: #666;
									    border-top: 1px solid #333;
									    border-bottom: #555858;
									    list-style-type: none;
									    padding: 5px 10px;
									    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4c4d4e), to(#404142));
									    overflow: hidden;
									}
									ul.edgetoedge li {
									    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1e1f21), to(#272729));
									    border-bottom: 2px solid #000;
									    border-top: 1px solid #4a4b4d;
									    font-size: 13px;
									    margin-bottom: -1px;
									}
									ul.edgetoedge li.current {
									    background:#53B401;
									}
									ul.edgetoedge li.arrow {
									    background-color: #404142 !important;
									    background-image: url(img/chevron.png), -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1e1f21), to(#272729));
									    background-position: right center;
									    background-repeat: no-repeat;
									}
									ul.edgetoedge li.sep {
									    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(0,0,0,0)), to(rgba(0,0,0,.5)));
									    border-bottom: 1px solid #111113;
									    border-top: 1px solid #666;
									    color: #000;
									font-weight:bold;
									    font-size: 20px;
									    margin: 1px 0 0 0;
									    padding: 10px 10px;
									    /* text-shadow: #333 0 0 1px; */
									}
									ul.edgetoedge li em {
									    font-weight: normal;
									    font-style: normal;
									}
									ul.edgetoedge li a {
									    color:#fff;
									text-decoration:none;
									}
									#id_search_list{
										width:100%;
										padding:5px;
									}
									</style>
                                    <section>
									<script type="text/javascript">
									$(function(){
										$('input#id_search_list').quicksearch('ul.edgetoedge li.student');
									});
									
									
									</script>
										<input id="id_search_list" placeholder="Search Students"/>
										<ul class="edgetoedge"> 
											<?php
											$list_1 = '';$list_2 = '';$list_3 = '';$list_4 = '';
											foreach($students as $student):
											if ($student['class']==1):
												$list_1 .= "<li class='";
												if ($student['id']==$edit_student[0]['id']){ $list_1 .= 'current student'; } else { $list_1 .= 'student'; }
												$list_1 .= "'><a class='student' href='?s=";
												$list_1 .= $student['id'];
												$list_1 .= "' rel='";
												$list_1 .=  $student['id']."'>";
												$list_1 .=  $student['last_name'].", <em>";
												$list_1 .=  $student['first_name']."</em></a></li>";
											elseif ($student['class']==2):
												$list_2 .= "<li class='";
												if ($student['id']==$edit_student[0]['id']){ $list_2 .= 'current student'; } else { $list_2 .= 'student'; }
												$list_2 .= "'><a class='student' href='?s=";
												$list_2 .= $student['id'];
												$list_2 .= "' rel='";
												$list_2 .=  $student['id']."'>";
												$list_2 .=  $student['last_name'].", <em>";
												$list_2 .=  $student['first_name']."</em></a></li>";
											elseif ($student['class']==3):
												$list_3 .= "<li class='";
												if ($student['id']==$edit_student[0]['id']){ $list_3 .= 'current student'; } else { $list_3 .= 'student'; }
												$list_3 .= "'><a class='student' href='?s=";
												$list_3 .= $student['id'];
												$list_3 .= "' rel='";
												$list_3 .=  $student['id']."'>";
												$list_3 .=  $student['last_name'].", <em>";
												$list_3 .=  $student['first_name']."</em></a></li>";
											elseif ($student['class']==4):
												$list_4 .= "<li class='";
												if ($student['id']==$edit_student[0]['id']){ $list_4 .= 'current student'; } else { $list_4 .= 'student'; }
												$list_4 .= "'><a class='student' href='?s=";
												$list_4 .= $student['id'];
												$list_4 .= "' rel='";
												$list_4 .=  $student['id']."'>";
												$list_4 .=  $student['last_name'].", <em>";
												$list_4 .=  $student['first_name']."</em></a></li>";
											endif;

											endforeach;
											echo '<li class="sep">5th Grade</li>';
											echo $list_1;
											echo '<li class="sep">6th Grade</li>';
											echo $list_2;
											echo '<li class="sep">7th Grade</li>';
											echo $list_3;
											echo '<li class="sep">8th Grade</li>';
											echo $list_4;
											?>
										</ul>

                                    </section>

                                </div>

                            </div>
							<?php endif; ?>

                            <!-- Forms Section -->

							<?php if($teacher->admin ==1 && $_GET['s']!=''): ?>
							<div class="grid_2">

                                <div class="portlet">

                                    <header>

                                        <h2>Edit Student Info</h2>
                                    </header>
									
                                    <section>
										<?php if ($_GET['message']==2): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-success ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>SUCCESS!</strong> Student info updated.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<form class="form has-validation" action="edit_student.php" method="post">


											<div class="clearfix">

                                                <label for="edit_form-class" class="form-label">Grade Level <em>*</em></label><br/>

                                                <div class="form-input" style="text-align:center;">
	<label><input type="radio" name="edit_class" id="form-class" value="1" <?php if ($edit_student[0]['class']==1){ echo 'checked'; } ?> /> 5th Grade</label><br/>
	<label><input type="radio" name="edit_class" value="2" <?php if ($edit_student[0]['class']==2){ echo 'checked'; } ?> /> 6th Grade</label><br/>
	<label><input type="radio" name="edit_class" value="3" <?php if ($edit_student[0]['class']==3){ echo 'checked'; } ?> /> 7th Grade</label><br/>
	<label><input type="radio" name="edit_class" value="4" <?php if ($edit_student[0]['class']==4){ echo 'checked'; } ?> /> 8th Grade</label></div>

                                            </div>

                                            <div class="clearfix">

                                                <label for="edit_form-amount" class="form-label">First Name <em>*</em></label>

                                                <div class="form-input"><input type="text" id="edit_form-first_name" name="edit_first_name" required="required" value="<?php echo $edit_student[0]['first_name']; ?>"/></div>

                                            </div>

											<div class="clearfix">

	                                                <label for="edit_form-amount" class="form-label">Last Name <em>*</em></label>

	                                                <div class="form-input"><input type="text" id="edit_form-last_name" name="edit_last_name" required="required" value="<?php echo $edit_student[0]['last_name']; ?>"/></div>

	                                        </div>


                                            <div class="form-action clearfix">
												
												
												<input type="hidden" name="edit_add" value="1">
												<input type="hidden" name="edit_student" value="<?php echo $edit_student[0]['id']; ?>">

                                                <button class="button" type="submit" data-icon-primary="ui-icon-circle-check">Edit Student</button>


                                            </div>

                                        </form>

                                    </section>

                                </div>

                            </div>
							<?php endif; ?>
                            

        </section>

    </div>
<?php require_once('footer.php'); ?>