<?php
$page = "index.php";
require_once('start.php');

// $sql = "SELECT * from comments WHERE teacher=$teacher->id";
// $result = mysql_query($sql,$con);
// if($result){
// while ($row = mysql_fetch_object($result, 'Comment')):
// 	$teacher->comments[]=$row;
// endwhile;
// }

?>

        



                    <div class="main-content clearfix">
	
                        <header style="height:40px;">
                            
                            <h2>
                                Welcome <?php echo $teacher->first_name; ?>!
                            </h2>
							<p>Welcome to CheckMate. What would you like to do?</p>
                        </header>
						
						
						<div class="grid_2" style="width:280px;">

                            <div class="portlet">

                                <header class="clearfix">

<a href="lightning.php"><img style="float:left;margin-left:10px;" src="images/navicons/22.png"/><h2 style="text-align:center;margin-top:5px;">Add Comments</h2></a>
                                </header>

                                <section>
									<p>Add comments to students' paychecks.</p>
									<p>Add paycheck comments for students one-by-one, or issue the same comment to multiple students at once.</p>
								</section>
							</div>
						</div>
						<div class="grid_2" style="width:280px;">

                            <div class="portlet">

                                <header class="clearfix">

                                   <a href="comments.php"><img style="float:left;margin-left:10px;" src="images/navicons/09.png"/><h2 style="text-align:center;margin-top:5px;">View Comments</h2></a>
                                </header>

                                <section>
									<p>View and delete your paycheck comments.</p>
									<p>View your comments from any date period, sorted by category, student or dollar value.</p>
								</section>
							</div>
						</div>
						<div class="grid_2" style="width:280px;">

                            <div class="portlet">

                                <header class="clearfix">

<a href="paychecks.php"><img style="float:left;margin-left:10px;" src="images/navicons/132.png"/><h2 style="text-align:center;margin-top:5px;">View/Print Paychecks</h2></a>
                                </header>

                                <section>
									<p>View and print your students' paychecks.</p>
									<p>View your students' virtual paychecks, including their comments from other teachers, before printing them as PDFs.</p>
								</section>
							</div>
						</div>
						
                    


					<?php if( false ): // ...as in... just don't do it. ?>
					
					<div class="grid_7 leading clearfix" style="width:96%;">

	                    <div class="portlet">

	                        <header class="clearfix">

	<a href="paychecks.php"><img style="float:left;margin-left:10px;" src="images/navicons/132.png"/><h2 style="text-align:center;margin-top:5px;">Your Statistics</h2></a>
	                        </header>

	                        <section>
								<p>Average Comment Value: <?php $teacher->comment_average(); ?></p>
								<p>Total Comment Value: <?php $teacher->comment_sum(); ?></p>
								<p>Total Number of Comments: <?php $teacher->comment_number(); ?></p>
								<p>Comments by Category:<br/> <?php $teacher->comment_category_breakdown(); ?></p>
								<p>Most Common Comment: <?php $teacher->comment_common_comment( false ); ?></p>
								<h3>This Week's Statistics</h3>
								<ul class="isotope-widgets isotope-container clearfix">

		                            <li class="dash-stat">

		                                <a class="button-green ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_sum(); ?></strong>

		                                    <span>Comment Value Sum</span>

		                                </a>

		                            </li>

		                            <li class="dash-stat">

		                                <a class="button-green ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_average(); ?></strong>

		                                    <span>Average Comment Value</span>

		                                </a>

		                            </li>

		                            <li class="dash-stat">

		                                <a class="button-blue ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_number(); ?></strong>

		                                    <span>Total Number of Comments</span>

		                                </a>

		                            </li>

		                            <li class="dash-stat">

		                                <a class="button-blue ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_common_comment(); ?></strong>

		                                    <span>Most Common Comment</span>

		                                </a>

		                            </li>

		                        
		                        </ul>
								<h3>All Time Statistics</h3>
								<ul class="isotope-widgets isotope-container clearfix">

		                            <li class="dash-stat">

		                                <a class="button-green ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_sum(); ?></strong>

		                                    <span>Comment Value Sum</span>

		                                </a>

		                            </li>

		                            <li class="dash-stat">

		                                <a class="button-green ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_average(); ?></strong>

		                                    <span>Average Comment Value</span>

		                                </a>

		                            </li>

		                            <li class="dash-stat">

		                                <a class="button-blue ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_number(); ?></strong>

		                                    <span>Total Number of Comments</span>

		                                </a>

		                            </li>

		                            <li class="dash-stat">

		                                <a class="button-blue ui-corner-all" href="#">

		                                    <strong><?php $teacher->comment_common_comment(); ?></strong>

		                                    <span>Most Common Comment</span>

		                                </a>

		                            </li>

		                        
		                        </ul>
		
							</section>
						</div>
					</div>
					
					<?php endif; ?>
					
				</div>	
                </section>







				
				
				
				
				
<script type="text/javascript">
if (document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>


                <!-- Main Section End -->



            </div>

        </section>


    </div>
<?php require_once('footer.php'); ?>