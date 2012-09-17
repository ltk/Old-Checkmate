<?php
$page = "lightning.php";
$dc = $_GET['dc'];

require_once('start.php');

$class = ($_GET['class']) ? $_GET['class'] : $teacher->class ;
if($class==0){ $class = 1; }

if ($dc):
	$sql = "DELETE FROM comments WHERE teacher=$teacher->id AND id=$dc";
	mysql_query($sql,$con);
	if (mysql_affected_rows()>=1):
		$delete_message = 1;
	else:
		$delete_message = 2;
	endif;
endif;

// $sql = "SELECT * from comments WHERE teacher=$teacher->id";
// $result = mysql_query($sql,$con);


// while ($comments[] = mysql_fetch_array($result));

$s = $_GET['s'];

$sql = ($s) ? "SELECT * from students ORDER BY last_name ASC" : "SELECT * from students WHERE class=$class ORDER BY last_name ASC"; //plug in to class selector
$result = mysql_query($sql,$con);

while ($students[] = mysql_fetch_array($result));

$students_sorted = $students;


// usort($students_sorted,"cmp_last_name");


?>

        



                    <div class="main-content">

                        <header>
                            <ul class="action-buttons clearfix">
								<li style="margin-right:5px;"><div class="form-input" style="text-align:center;"> 
									Choose a Grade:
									<label><input id="class-1" class="class-select" type="radio" name="category" value="1" <?php if ($class==1 && !$s) {echo 'checked';} ?> />5th</label> 
									<label><input id="class-2" class="class-select" type="radio" name="category" value="2" <?php if ($class==2 && !$s) {echo 'checked';} ?> />6th</label> 
									<label><input id="class-3" class="class-select" type="radio" name="category" value="3" <?php if ($class==3 && !$s) {echo 'checked';} ?> />7th</label>
									<label><input id="class-4" class="class-select" type="radio" name="category" value="4" <?php if ($class==4 && !$s) {echo 'checked';} ?> />8th</label></div>
									</li>
                                <!-- <li><a id="print-link" href="/pdf/printPaycheck.php?class=1" target="_blank" class="button" rel="#overlay" data-icon-primary="ui-icon-circle-arrow-e">Switch</a></li> -->
                            </ul>
                            <h2 style="">
                                Add Comments
								
                            </h2>
							<p>Add paycheck comments for students one-by-one, or issue the same comment to multiple students at once.</p>
							
                        </header>

                        

                        <section class="container_6 clearfix">
							
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

                                    <header>

                                        <h2 style="text-align:center;">Add Comments</h2>
                                    </header>

                                    <section>
										<script type="text/javascript">
										$(function() {
											
											$('#form-textarea, #form-amount, .form-category').blur(function(){
												var comment = $('#form-textarea').val();
												var amount = $('#form-amount').val();
												var cat = $('.checked input').val();
												var multiple_href = 'comments_iframe.php?comment=' + comment + '&amount=' + amount + '&cat=' + cat;
												$('#add-to-multiple').attr('href', multiple_href);
											});
											
											$('#class-1').click(function(){
												//$('#print-link').attr('href','?class=1');
												window.location = '?class=1';
											});
											$('#class-2').click(function(){
											//	$('#print-link').attr('href','?class=2');
												window.location = '?class=2';
											});
											$('#class-3').click(function(){
												//$('#print-link').attr('href','?class=3');
												window.location = '?class=3';
											});
											$('#class-4').click(function(){
												//$('#print-link').attr('href','?class=4');
												window.location = '?class=4';
											});
											
											$("#form-students").multiselect({
												      noneSelectedText: 'Select Students'
												   }).multiselectfilter({
													placeholder: 'Search for Student',
													label: '',
													width: '215'
												});
												
											
									
										});
									
										function newPopup(url) {
											popupWindow = window.open(
												url,'popUpWindow','height=600,width=300,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
										}
										
										
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
										<form id="add-comment" class="form has-validation" action="lightning_ajax.php" method="post">


											<div class="clearfix">

                                                <label for="form-category" class="form-label">Category <em>*</em></label><br/>

                                                <div class="form-input" style="text-align:center;">
	<label><input type="radio" name="category" class="form-category" id="form-category-1" value="1" checked /> 1: Pride</label><br/>
	<label><input type="radio" name="category" class="form-category" id="form-category-2" value="2" /> 2: Passion</label><br/>
	<label><input type="radio" name="category" class="form-category" id="form-category-3" value="3" /> 3: Bravery</label><br/>
	<label><input type="radio" name="category" class="form-category" id="form-category-4" value="4" /> 4: Self-Awareness</label><br/>
	<label><input type="radio" name="category" class="form-category" id="form-category-5" value="5" /> 5: Urgency</label><br/>
	<label><input type="radio" name="category" class="form-category" id="form-category-6" value="6" /> 6: Attendance</label></div>

                                            </div>

                                            <div class="clearfix">

                                                <label for="form-amount" class="form-label">Amount <em>*</em><small>Ex: 12 or -12</small></label>

                                                <div class="form-input"><input type="text" id="form-amount" name="amount" required="required" value=""/></div>

                                            </div>
<!--
											<div class="clearfix">

                                                <label for="form-date" class="form-label">Comment Date<small>mm/dd/yyyy</small></label>

                                                <div class="form-input"><input type="date" id="form-date" name="date" /></div>

                                            </div>
-->
											<div class="clearfix">

                                                <label for="form-comment" class="form-label">Comment <em>*</em></label>

												<!-- <div class="form-input"><input type="text" id="form-textarea" name="comment" required="required" /></div> -->

                                               <div class="form-input form-textarea"><textarea name="comment" id="form-textarea" required="required" rows="2" /></textarea></div>

                                            </div>


                                            <div class="form-action clearfix" style="border-bottom:thin solid #000;padding-bottom:15px;margin-bottom:10px;">
												<input type="hidden" name="teacher" value="<?php echo $teacher->id; ?>">
												
												<input type="hidden" name="add" value="1">
												
												<input id="student_select" type="hidden" name="student" value="1">

                                                <button id="submit-button" class="button" type="submit" data-icon-primary="ui-icon-circle-check">Submit Comment</button>

                                                <button class="button" type="reset">Reset</button>
												<a id="add-to-multiple" style="width:100%;margin-top:5px;" href=" JavaScript:newPopup('comments_iframe.php');" class="button help" target="_top" data-icon-primary="ui-icon-circle-plus" data-icon-only="false">Add Comment for Multiple Students</a>
												
                                            </div>

											<div class="clearfix">
												<span style="float:left;"><a id="prev-student" href="#">Prev Student</a></span>
												<span style="float:right;"><a id="next-student" href="#">Next Student</a></span>
                                            </div>
                                        </form>
                                    </section>

                                </div>

                            </div>

                            <!-- End Forms Section -->

							<div class="grid_2">

                                <div class="portlet">

                                    <header>

                                        <h2 style="text-align:center;"><?php echo ($class + 4); ?>th Grade Students</h2>
                                    </header>

                                    <section style="min-height:428px;">
									
                                        <?php if ($_GET['message']==8): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-success ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>SUCCESS!</strong> Some message.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<style type="text/css">
										#lightning {
											overflow:hidden;
											/*max-height:40px;*/
										}
										#lightning h3{
											/*float:left;*/
											margin:10px;
											display:none;
											cursor:pointer;

										}

										#lightning h3.a0{

										}
										#lightning h3.a1{
											display:block;
											font-size:1.7em;
											color:#000;
											padding:10px;
											border:thin solid #000;
										}
										#lightning h3.a2{
											display:block;
											color:#222;
										}
										#lightning h3.a3{
											display:block;
											color:#222;
										}
										#lightning h3.a4{
											display:block;
											color:#222;
										}
										#lightning h3.a5{
											display:block;
											color:#222;
										}
										#lightning h3.a6{
											display:block;
											color:#222;
										}
										#lightning h3.a7{
											display:block;
											color:#222;
										}
										#lightning h3.show{
											display:block !important;
										}
										#lightning h3.hide{
											display:none !important;
										}
										#more-students-back, #more-students-next{
											cursor:pointer;
										}
										#id_search_list{
											width:100%;
											padding:5px;
											margin-bottom:5px;
										}
										</style>
										<script type="text/javascript">
										$(function(){
											$("#more-students-back").click(function(){
												$('#lightning h3').first().click();
											});
											$("#more-students-next").click(function(){
												$('#lightning h3').last().click();
											});
											
											$("#lightning h3[rel='']").remove();
											
											$('#lightning h3').click(function(){
												$('#lightning h3').removeClass();
												$('#id_search_list').val('');
												$(this).addClass('a1');
												$(this).next().addClass('a2');
												$(this).next().next().addClass('a3');
												$(this).next().next().next().addClass('a4');
												$(this).next().next().next().next().addClass('a5');
												$(this).next().next().next().next().next().addClass('a6');
												$(this).next().next().next().next().next().next().addClass('a7');
												$(this).prev().addClass('a2');
												$(this).prev().prev().addClass('a3');
												$(this).prev().prev().prev().addClass('a4');
												$(this).prev().prev().prev().prev().addClass('a5');
												$(this).prev().prev().prev().prev().prev().addClass('a6');
												$(this).prev().prev().prev().prev().prev().prev().addClass('a7');

												var student_id = $(this).attr('rel');
												$('#student_select').val(student_id);
											});
											$('#submit-button').click(function(event){
												event.preventDefault();
												$.post("lightning_ajax.php", $("#add-comment").serialize(), function(data){
													//if (data){
													$('#form-textarea').val('');
													$('#form-amount').val('');
													$('h3.a1').css('color','green');
											//	}
												});
													
												

											});
											
											// Arrow key navigation
											$(document).keydown(function(e){
											    if (e.keyCode == 13) { 
											       if ($('#submit-button').is(':focus')) {
												e.preventDefault();
												$('#submit-button').click();
												//alert ('submission here');
												$('#submit-button').blur();
												$('#submit-button').removeClass('ui-state-active');
											} else if ($('#form-amount').is(':focus')) {
												e.preventDefault();
												$('#form-textarea').focus();
											
											} else if ($('#form-textarea').is(':focus')) {
												e.preventDefault();
												$('#submit-button').focus();
												
											} else {
												$('#form-amount').focus();
											       return false;
											  }  
											}
											});
											
											// click 1 key
											$(document).keydown(function(e){
											    if (e.keyCode == 49) { 
													var focusedInputs = $("#add-comment input:focus");
													if (focusedInputs != null && focusedInputs.length > 0) { 
														
														} else {
															$('#form-category-1').click();
															$('.form-category').prop('checked',false);
															$('#form-category-1').prop('checked',true);
															$('.form-category').parent().removeClass('checked');
															$('#form-category-1').parent().addClass('checked');
														}
												
											      
											       //return false;
											    }
											});
											// click 2 key
											$(document).keydown(function(e){
											    if (e.keyCode == 50) { 
													var focusedInputs = $("#add-comment input:focus");
													if (focusedInputs != null && focusedInputs.length > 0) { 
														
														} else {
															$('#form-category-2').click();
															$('.form-category').prop('checked',false);
															$('#form-category-2').prop('checked',true);
															$('.form-category').parent().removeClass('checked');
															$('#form-category-2').parent().addClass('checked');
															
														}
												
											      
											       //return false;
											    }
											});
											// click 3 key
											$(document).keydown(function(e){
											    if (e.keyCode == 51) { 
													var focusedInputs = $("#add-comment input:focus");
													if (focusedInputs != null && focusedInputs.length > 0) { 
														
														} else {
															$('#form-category-3').click();
															$('.form-category').prop('checked',false);
															$('#form-category-3').prop('checked',true);
															$('.form-category').parent().removeClass('checked');
															$('#form-category-3').parent().addClass('checked');
														}
												
											      
											      // return false;
											    }
											});
											// click 4 key
											$(document).keydown(function(e){
											    if (e.keyCode == 52) { 
													var focusedInputs = $("#add-comment input:focus");
													if (focusedInputs != null && focusedInputs.length > 0) { 
														
														} else {
															$('#form-category-4').click();
															//$('.form-category').prop('checked',false);
														//	$('#form-category-4').prop('checked',true);
														//	$('.form-category').parent().removeClass('checked');
														//	$('#form-category-4').parent().addClass('checked');	
														}
												
											      
											      // return false;
											    }
											});
											$(document).keydown(function(e){
											    if (e.keyCode == 37 || e.keyCode == 38) { 
											       $('#lightning h3.a1').prev().click();
											       return false;
											    }
											});
											$(document).keydown(function(e){
											    if (e.keyCode == 39 || e.keyCode == 40) { 
											       $('#lightning h3.a1').next().click();
											       return false;
											    }
											});
											
											$('#next-student').click(function(event){
												event.preventDefault();
												$('#lightning h3.a1').next().click();
											});
											$('#prev-student').click(function(event){
												event.preventDefault();
												$('#lightning h3.a1').prev().click();
											});
											
											$('#lightning h3').first().click();
										});
										</script>
										<script type="text/javascript">
										$(function(){
											$('input#id_search_list').quicksearch('div#lightning h3');
											$('#lightning h3').first().click();
											
										});


										</script>
											<input id="id_search_list" placeholder="Search Students"/>
										<div id="lightning" class="clearfix vert">
											<h4 style="border-bottom:thin solid #000;" id="more-students-back">Jump to Top</h4>
											<?php 
											$counter = 1;
											foreach ($students_sorted as $student): 
												echo '<h3 title="'.$student['last_name'].'" rel="'.$student['id'].'" class="a'.$counter.'">'.$student['first_name'].' '.$student['last_name'].'</h3>';
												if ($counter>=7 || $counter==0){
													$counter=0;
												} else { $counter ++; }
											endforeach;
											?>
											<h4 style="border-top:thin solid #000;" id="more-students-next">Jump to Bottom</h4>
										</div>

                                    </section>

                                </div>

                            </div>
                            

                            <!-- End Forms Section -->

							<div class="grid_2">

                                <div class="portlet">

                                    <header>

                                        <h2 style="text-align:center;">Quick Tips</h2>
                                    </header>

                                    <section style="height:428px;background:#fcfcfc;">
									
                                        <?php if ($_GET['message']==8): ?>
										<div class="ui-widget message closeable"> 

										                                    <div class="ui-state-success ui-corner-all"> 

										                                        <p> 

										                                            <span class="ui-icon ui-icon-circle-check"></span> 

										                                            <strong>SUCCESS!</strong> Some message.

										                                        </p> 

										                                    </div> 

										                                </div>
										<?php endif; ?>
										<div>
											<p>Comment without touching your mouse!</p>
											<p><strong>Switch between students</strong> using the &larr;&rarr; or &uarr;&darr; keys. You can switch students at any time.</p>
											
											<p style="margin-top:10px;"><strong>Follow these steps</strong> to enter a comment:</p>
											<p><strong>1. Select a comment category</strong> by double-tapping the desired number key.</p>
											<p><strong>2. Move to the amount field</strong> by pressing the enter key.</p>
											<p><strong>3. Move to the comment field</strong> by pressing the enter key.</p>
											<p><strong>4. Submit your comment</strong> by double-tapping the enter key.</p>
											
										</div>

                                    </section>

                                </div>

                            </div>

                        </section>

                    </div>

                </section>

                <!-- Main Section End -->



            </div>

        </section>

    </div>
	<?php if ($s): ?>
		<script type="text/javascript">
		$(function(){
			$('h3[rel="<?php echo $s; ?>"]').click();
		});
		$('a[rel="nofollow self"]')
		</script>
	<?php endif; ?>
<?php require_once('footer.php'); ?>