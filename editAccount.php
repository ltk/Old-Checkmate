<?php
$page = "editAccount.php";

require_once('start.php');





?>

        



                    <div class="main-content">

                        <header>

                            <h2>Account Managment</h2>
							
                        </header>

                        

                        <section class="container_6 clearfix">
							
                            <!-- Forms Section -->

                            <div class="grid_2">

                                <div class="portlet">

                                    <header>

                                        <h2>Edit Your Info</h2>
                                    </header>

                                    <section>
										
                                        <?php if ($_GET['message']==1): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-success ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>SUCCESS!</strong> Details updated.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<?php if ($_GET['message']==4): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-error ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>Try again.</strong> Update failed.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<form class="form has-validation" action="edit_user.php" method="post">

											

                                            <div class="clearfix">

                                                <label for="form-first_name" class="form-label">First Name</label>

                                                <div class="form-input"><input type="text" id="form-first_name" name="first_name" required="required" value="<?php echo $teacher->first_name; ?>"/></div>

                                            </div>

											<div class="clearfix">

                                                <label for="form-last_name" class="form-label">Last Name</label>

                                                <div class="form-input"><input type="text" id="form-last_name" name="last_name" required="required" value="<?php echo $teacher->last_name; ?>"/></div>

                                            </div>

											<div class="clearfix">

                                                <label for="form-pref_name" class="form-label">Name Visible to Students</label>

                                                <div class="form-input"><input type="text" id="form-pref_name" name="pref_name" required="required" value="<?php echo $teacher->pref_name; ?>"/></div>

                                            </div>
											<div class="clearfix" style="margin-bottom:20px">
											Your Grade: <label><input id="class-1" class="class-select" type="radio" name="class" id="form-category" value="1" <?php if($teacher->class == 1) { echo 'checked'; } ?> />5th</label> 
											<label><input id="class-2" class="class-select" type="radio" name="class" value="2" <?php if($teacher->class == 2) { echo 'checked'; } ?> />6th</label> 
											<label><input id="class-3" class="class-select" type="radio" name="class" value="3" <?php if($teacher->class == 3) { echo 'checked'; } ?> />7th</label>
											<label><input id="class-4" class="class-select" type="radio" name="class" value="4" <?php if($teacher->class == 4) { echo 'checked'; } ?> />8th</label>
											</div>


                                            <div class="form-action clearfix">
												<input type="hidden" name="teacher" value="<?php echo $teacher->id; ?>">
												
												<input type="hidden" name="add" value="1">

                                                <button class="button" type="submit" data-icon-primary="ui-icon-circle-check">Update Details</button>

                                                <button class="button" type="reset">Reset</button>

                                            </div>

                                        </form>

                                    </section>

                                </div>

                            </div>

							<div class="grid_2">

                                <div class="portlet">

                                    <header>

                                        <h2>Change Your Password</h2>
                                    </header>

                                    <section>
										
                                        <?php if ($_GET['message']==2): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-success ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>SUCCESS!</strong> Password changed.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<?php if ($_GET['message']==3): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-error ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>Try Again.</strong> Request failed. Make sure your new passwords match.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<form class="form has-validation" action="reset.php" method="post">

											

                                            <div class="clearfix">

                                                <label for="form-old-pass" class="form-label">Old Password</label>

                                                <div class="form-input"><input type="password" id="form-old-pass" name="password_old" required="required" /></div>

                                            </div>

											<div class="clearfix">

                                                <label for="form-new-pass" class="form-label">New Password</label>

                                                <div class="form-input"><input type="password" id="form-new-pass" name="password" required="required"/></div>

                                            </div>

											<div class="clearfix">

                                                <label for="form-new-pass-again" class="form-label">Repeat New Password</label>

                                                <div class="form-input"><input type="password" id="form-new-pass-again" name="password_again" required="required"/></div>

                                            </div>

											


                                            <div class="form-action clearfix">
												<input type="hidden" name="teacher" value="<?php echo $teacher->id; ?>">
												
												<input type="hidden" name="update" value="1">

                                                <button class="button" type="submit" data-icon-primary="ui-icon-circle-check">Change Password</button>


                                            </div>

                                        </form>

                                    </section>

                                </div>

                            </div>

                            <!-- End Forms Section -->



                            
                </section>

                <!-- Main Section End -->



            </div>

        </section>

    </div>
<?php require_once('footer.php'); ?>