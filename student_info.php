<?php
$page = "student_info.php";
require_once('start.php');
if($teacher->admin == 1): //check to see if the user is allowed to make edits
if($_POST['submission']==1): //what to do if this is a form submission

//student_info
$middle_name = $_POST['middle_name'];
$birthday = $_POST['birthday'];
$pref_name = $_POST['pref_name'];
$cellphone = $_POST['cellphone'];
$email = $_POST['email'];
$phys_address = $_POST['phys_address'];
$phys_city = $_POST['phys_city'];
$phys_state = $_POST['phys_state'];
$phys_zip = $_POST['phys_zip'];
$mail_address = $_POST['mail_address'];
$mail_city = $_POST['mail_city'];
$mail_state = $_POST['mail_state'];
$mail_zip = $_POST['mail_zip'];
$student = $_POST['student'];

//academic_info
$iep = $_POST['iep'];
$poor_subject = $_POST['poor_subject'];
$language = $_POST['language'];
$computer = $_POST['computer'];
$printer = $_POST['printer'];
$internet = $_POST['internet'];
$signer = $_POST['signer'];
$prev_school = $_POST['prev_school'];

//parents 1
$parent_1_first_name = $_POST['parent_1_first_name'];
$parent_1_last_name = $_POST['parent_1_last_name'];
$parent_1_homephone = $_POST['parent_1_homephone'];
$parent_1_cellphone = $_POST['parent_1_cellphone'];
$parent_1_workphone = $_POST['parent_1_workphone'];
$parent_1_work = $_POST['parent_1_work'];
$parent_1_relationship = $_POST['parent_1_relationship'];
$parent_1_email = $_POST['parent_1_email'];
$parent_1_id = $_POST['parent_1_id'];

//parents 2
$parent_2_first_name = $_POST['parent_2_first_name'];
$parent_2_last_name = $_POST['parent_2_last_name'];
$parent_2_homephone = $_POST['parent_2_homephone'];
$parent_2_cellphone = $_POST['parent_2_cellphone'];
$parent_2_workphone = $_POST['parent_2_workphone'];
$parent_2_work = $_POST['parent_2_work'];
$parent_2_relationship = $_POST['parent_2_relationship'];
$parent_2_email = $_POST['parent_2_email'];
$parent_2_id = $_POST['parent_2_id'];

//emergency contact 1
$ec_1_id = $_POST['ec_1_id'];
$ec_1_name = $_POST['ec_1_name'];
$ec_1_phone = $_POST['ec_1_phone'];
$ec_1_relationship = $_POST['ec_1_relationship'];

//emergency contact 2
$ec_2_id = $_POST['ec_2_id'];
$ec_2_name = $_POST['ec_2_name'];
$ec_2_phone = $_POST['ec_2_phone'];
$ec_2_relationship = $_POST['ec_2_relationship'];

//emergency contact 3
$ec_3_id = $_POST['ec_3_id'];
$ec_3_name = $_POST['ec_3_name'];
$ec_3_phone = $_POST['ec_3_phone'];
$ec_3_relationship = $_POST['ec_3_relationship'];

//emergency contact 4
$ec_4_id = $_POST['ec_4_id'];
$ec_4_name = $_POST['ec_4_name'];
$ec_4_phone = $_POST['ec_4_phone'];
$ec_4_relationship = $_POST['ec_4_relationship'];

//emergency contact 5
$ec_5_id = $_POST['ec_5_id'];
$ec_5_name = $_POST['ec_5_name'];
$ec_5_phone = $_POST['ec_5_phone'];
$ec_5_relationship = $_POST['ec_5_relationship'];

$sql = "SELECT count(*) as numstudents from student_info WHERE student='$student_id'";
$result = mysql_query($sql,$con);
$row=mysql_fetch_assoc($result);
if ($row['numstudents'] >= 1){

	$sql = "UPDATE student_info SET middle_name='$middle_name', birthday='$birthday', pref_name='$pref_name', cellphone='$cellphone', email='$email', phys_address='$phys_address', phys_city='$phys_city', phys_state='$phys_state', phys_zip='$phys_zip', mail_address='$mail_address', mail_city='$mail_city', mail_state='$mail_state', mail_zip='$mail_zip' WHERE student='$student' ";
	$result = mysql_query($sql,$con);
	if($result){ $message = 'student info edited'; } else { $message = 'student info not edited'; }
}else{
	$sql = "INSERT INTO student_info (middle_name, birthday, pref_name, cellphone, email, phys_address, phys_city, phys_state, phys_zip, mail_address, mail_city, mail_state, mail_zip, student) VALUES ('$middle_name', '$birthday', '$pref_name', '$cellphone', '$email', '$phys_address', '$phys_city', '$phys_state', '$phys_zip', '$mail_address', '$mail_city', '$mail_state', '$mail_zip', '$student') ";
	$result = mysql_query($sql,$con);
	if($result){ $message = 'student info added'; } else { $message = 'student info not added'; }
}


$sql = "SELECT count(*) as numstudents from academic_info WHERE student='$student_id'";
$result = mysql_query($sql,$con);
$row=mysql_fetch_assoc($result);
if ($row['numstudents'] >= 1){

	$sql = "UPDATE academic_info SET prev_school='$prev_school', iep='$iep', poor_subject='$poor_subject', language='$language', computer='$computer', printer='$printer', internet='$internet', signer='$signer' WHERE student='$student' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & academic info edited'; } else { $message = ' & academic info not edited'; }
}else{
	$sql = "INSERT INTO academic_info (prev_school, iep, poor_subject, language, computer, printer, internet, signer, student) VALUES ('$prev_school', '$iep', '$poor_subject', '$language', '$computer', '$printer', '$internet', '$signer', '$student') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & academic info added'; } else { $message .= ' & academic info not added'; }
}




if (!$parent_1_id):
	$sql = "INSERT INTO parents (first_name, last_name, homephone, cellphone, workphone, email, work, student, relationship) VALUES ('$parent_1_first_name', '$parent_1_last_name', '$parent_1_homephone', '$parent_1_cellphone', '$parent_1_workphone', '$parent_1_email', '$parent_1_work', '$student', '$parent_1_relationship') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & parent 1 info added'; } else { $message = ' & parent 1 info not added'; }
else:
	$sql = "UPDATE parents SET first_name='$parent_1_first_name', last_name='$parent_1_last_name', homephone='$parent_1_homephone', cellphone='$parent_1_cellphone', workphone='$parent_1_workphone', email='$parent_1_email', work='$parent_1_work', relationship='$parent_1_relationship' WHERE id='$parent_1_id' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & parent 1 info edited'; } else { $message .= ' & parent 1 info not edited'; }
endif;

if (!$parent_2_id):
	$sql = "INSERT INTO parents (first_name, last_name, homephone, cellphone, workphone, email, work, student, relationship) VALUES ('$parent_2_first_name', '$parent_2_last_name', '$parent_2_homephone', '$parent_2_cellphone', '$parent_2_workphone', '$parent_2_email', '$parent_2_work', '$student', '$parent_2_relationship') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & parent 2 info added'; } else { $message = ' & parent 2 info not added'; }
else:
	$sql = "UPDATE parents SET first_name='$parent_2_first_name', last_name='$parent_2_last_name', homephone='$parent_2_homephone', cellphone='$parent_2_cellphone', workphone='$parent_2_workphone', email='$parent_2_email', work='$parent_2_work', relationship='$parent_2_relationsihp' WHERE id='$parent_2_id' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & parent 2 info edited'; } else { $message .= ' & parent 2 info not edited'; }
endif;

if (!$ec_1_id):
	$sql = "INSERT INTO emergency_contacts (name, student, phone, relationship) VALUES ('$ec_1_name', '$student', '$ec_1_phone', '$ec_1_relationship') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 1 info added'; } else { $message = ' & parent 1 info not added'; }
else:
	$sql = "UPDATE emergency_contacs SET name='$ec_1_name', phone='$ec_1_phone', relationship='$ec_1_relationship' WHERE id='$ec_1_id' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 1 info edited'; } else { $message .= ' & emergency contact 1 info not edited'; }
endif;

if (!$ec_2_id):
	$sql = "INSERT INTO emergency_contacts (name, student, phone, relationship) VALUES ('$ec_2_name', '$student', '$ec_2_phone', '$ec_2_relationship') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 2 info added'; } else { $message = ' & parent 2 info not added'; }
else:
	$sql = "UPDATE emergency_contacs SET name='$ec_2_name', phone='$ec_2_phone', relationship='$ec_2_relationship' WHERE id='$ec_2_id' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 2 info edited'; } else { $message .= ' & emergency contact 2 info not edited'; }
endif;

if (!$ec_3_id):
	$sql = "INSERT INTO emergency_contacts (name, student, phone, relationship) VALUES ('$ec_3_name', '$student', '$ec_3_phone', '$ec_3_relationship') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 3 info added'; } else { $message = ' & parent 3 info not added'; }
else:
	$sql = "UPDATE emergency_contacs SET name='$ec_3_name', phone='$ec_3_phone', relationship='$ec_3_relationship' WHERE id='$ec_3_id' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 3 info edited'; } else { $message .= ' & emergency contact 3 info not edited'; }
endif;

if (!$ec_4_id):
	$sql = "INSERT INTO emergency_contacts (name, student, phone, relationship) VALUES ('$ec_4_name', '$student', '$ec_4_phone', '$ec_4_relationship') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 4 info added'; } else { $message = ' & parent 4 info not added'; }
else:
	$sql = "UPDATE emergency_contacs SET name='$ec_4_name', phone='$ec_4_phone', relationship='$ec_4_relationship' WHERE id='$ec_4_id' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 4 info edited'; } else { $message .= ' & emergency contact 4 info not edited'; }
endif;

if (!$ec_5_id):
	$sql = "INSERT INTO emergency_contacts (name, student, phone, relationship) VALUES ('$ec_5_name', '$student', '$ec_5_phone', '$ec_5_relationship') ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 5 info added'; } else { $message = ' & parent 5 info not added'; }
else:
	$sql = "UPDATE emergency_contacs SET name='$ec_5_name', phone='$ec_5_phone', relationship='$ec_5_relationship' WHERE id='$ec_5_id' ";
	$result = mysql_query($sql,$con);
	if($result){ $message .= ' & emergency contact 5 info edited'; } else { $message .= ' & emergency contact 5 info not edited'; }
endif;
?>
<div class="main-content student-info">
	
	<header>
		<h2><?php echo $message; ?></h2>
		<a href="student_info.php?s=<?php echo $_GET['s']; ?>">Return to Editing</a>
	</header>
</div>
<?php require_once('footer.php'); ?>

<?php

else: // what to do if not a submission

$student_id = $_GET['s'];
if($student_id):
$sql = "SELECT * from students WHERE id='$student_id'";
$result = mysql_query($sql,$con);
if($result){
while ($row = mysql_fetch_object($result, 'Student')):
	$student=$row;
endwhile;
}

$sql = "SELECT * from student_info WHERE student='$student_id'";
$result = mysql_query($sql,$con);
if($result){
while ($row = mysql_fetch_array($result)):
	$student_info=$row;
endwhile;
}

$sql = "SELECT * from academic_info WHERE student='$student_id'";
$result = mysql_query($sql,$con);
if($result){
while ($row = mysql_fetch_array($result)):
	$academic_info=$row;
endwhile;
}

$sql = "SELECT * from parents WHERE student='$student_id'";
$result = mysql_query($sql,$con);
if($result){
while ($row = mysql_fetch_array($result)):
	$parents[]=$row;
endwhile;
}

$sql = "SELECT * from emergency_contacts WHERE student='$student_id'";
$result = mysql_query($sql,$con);
if($result){
while ($row = mysql_fetch_array($result)):
	$ec[]=$row;
endwhile;
}
endif;
	
$sql = "SELECT * from students ORDER BY last_name ASC";
$result = mysql_query($sql,$con);

while ($students[] = mysql_fetch_array($result));	

?>
        



<div class="main-content student-info">
	
	<header>
		<h2>Student Information Manager</h2>
		<p>Add or Edit student information.</p>
	</header>
    <section class="container_6 clearfix">

        <!-- Forms Section -->

        <div class="grid_3">

            <div class="portlet">

                <header>

                    <h2>Student Information</h2>

                </header>

                <section>

                    <form class="form has-validation" action="student_info.php?s=<?php echo $student_id; ?>" method="post">
						<h3 style="margin-top:0;">Student Information</h3>
                        <div class="clearfix">

                            <label for="form-name" class="form-label">First Name <em>*</em><small>Enter student's first name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="first_name" required="required" value="<?php echo $student->first_name; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Middle Name <em>*</em><small>Enter student's middle name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="middle_name" required="required" value="<?php echo $student_info['middle_name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Last Name <em>*</em><small>Enter student's last name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="last_name" required="required" value="<?php echo $student->last_name; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Preferred Name <em>*</em><small>What name does this student go by?</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="pref_name" required="required" value="<?php echo $student_info['pref_name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-birthday" class="form-label">Birthdate<small>yyyy-mm-dd</small></label>

                            <div class="form-input"><input type="date" id="form-birthday" name="birthday" value="<?php echo $student_info['birthday']; ?>"/></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Cell Phone Number <em>*</em><small>Student's cell phone number</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="cellphone" required="required" value="<?php echo $student_info['cellphone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-email" class="form-label">Email Address <em>*</em><small>Student's email address</small></label>

                            <div class="form-input"><input type="email" id="form-email" name="email" required="required" value="<?php echo $student_info['email']; ?>" /></div>

                        </div>
						<h3>Physical Address</h3>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Street Address <em>*</em><small>Street number and name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="phys_address" required="required" value="<?php echo $student_info['phys_address']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">City <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="phys_city" required="required" value="<?php echo $student_info['phys_city']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">State <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="phys_state" required="required" value="<?php echo $student_info['phys_state']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Zip Code <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="phys_zip" required="required" value="<?php echo $student_info['phys_zip']; ?>" /></div>

                        </div>
						<h3>Mailing Address <small>(if different from above)</small></h3>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Street Address <em>*</em><small>Street number and name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="mail_address" required="required" value="<?php echo $student_info['mail_address']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">City <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="mail_city" required="required" value="<?php echo $student_info['mail_city']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">State <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="mail_state" required="required" value="<?php echo $student_info['mail_state']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Zip Code <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="mail_zip" required="required" value="<?php echo $student_info['mail_zip']; ?>" /></div>

                        </div>
                    	<h3 style="margin-top:0;">Parent/Guardian Information</h3>
						<h4>Parent/Guardian #1</h4>
						<input type="hidden" name="parent_1_id" value="<?php echo $parents[0]['id']; ?>">
                        <div class="clearfix">

                            <label for="form-name" class="form-label">First Name <em>*</em><small>Enter guardian's first name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_1_first_name" required="required" value="<?php echo $parents[0]['first_name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Last Name <em>*</em><small>Enter guardian's last name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_1_last_name" required="required" value="<?php echo $parents[0]['last_name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Home Phone Number <em>*</em><small>Guardian's home phone number</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_1_homephone" required="required" value="<?php echo $parents[0]['homephone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Cell Phone Number <em>*</em><small>Guardian's cell phone number</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_1_cellphone" required="required" value="<?php echo $parents[0]['cellphone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Work Phone Number <em>*</em><small>Guardian's work phone number</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_1_workphone" required="required" value="<?php echo $parents[0]['workphone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-email" class="form-label">Email Address <em>*</em><small>Guardian's email address</small></label>

                            <div class="form-input"><input type="email" id="form-email" name="parent_1_email" required="required" value="<?php echo $parents[0]['email']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Relationship <em>*</em><small>Guardian's relationship to student</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_1_relationship" required="required" value="<?php echo $parents[0]['relationship']; ?>" /></div>

                        </div>
						<h4>Parent/Guardian #2</h4>
                        <input type="hidden" name="parent_2_id" value="<?php echo $parents[1]['id']; ?>">
						<div class="clearfix">

                            <label for="form-name" class="form-label">First Name <em>*</em><small>Enter guardian's first name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_2_first_name" required="required" value="<?php echo $parents[1]['first_name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Last Name <em>*</em><small>Enter guardian's last name</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_2_last_name" required="required" value="<?php echo $parents[1]['last_name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Home Phone Number <em>*</em><small>Guardian's home phone number</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_2_homephone" required="required" value="<?php echo $parents[1]['homephone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Cell Phone Number <em>*</em><small>Guardian's cell phone number</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_2_cellphone" required="required" value="<?php echo $parents[1]['cellphone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Work Phone Number <em>*</em><small>Guardian's work phone number</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_2_workphone" required="required" value="<?php echo $parents[1]['workphone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-email" class="form-label">Email Address <em>*</em><small>Guardian's email address</small></label>

                            <div class="form-input"><input type="email" id="form-email" name="parent_2_email" required="required" value="<?php echo $parents[1]['email']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Relationship <em>*</em><small>Guardian's relationship to student</small></label>

                            <div class="form-input"><input type="text" id="form-name" name="parent_2_relationship" required="required" value="<?php echo $parents[0]['relationship']; ?>" /></div>

                        </div>
						
						<h3 style="margin-top:0;">Emergency Contact Information</h3>
						<h4>Emergency Contact #1</h4>
						<input type="hidden" name="ec_1_id" value="<?php echo $ec[0]['id']; ?>">
                        <div class="clearfix">

                            <label for="form-name" class="form-label">Name <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_1_name" required="required" value="<?php echo $ec[0]['name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Phone <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_1_phone" required="required" value="<?php echo $ec[0]['phone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Relationship <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_1_relationship" required="required" value="<?php echo $ec[0]['relationship']; ?>" /></div>

                        </div>
						<h4>Emergency Contact #2</h4>
						<input type="hidden" name="ec_2_id" value="<?php echo $ec[1]['id']; ?>">
                        <div class="clearfix">

                            <label for="form-name" class="form-label">Name <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_2_name" required="required" value="<?php echo $ec[1]['name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Phone <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_2_phone" required="required" value="<?php echo $ec[1]['phone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Relationship <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_2_relationship" required="required" value="<?php echo $ec[1]['relationship']; ?>" /></div>

                        </div>
						<h4>Emergency Contact #3</h4>
						<input type="hidden" name="ec_3_id" value="<?php echo $ec[2]['id']; ?>">
                        <div class="clearfix">

                            <label for="form-name" class="form-label">Name <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_3_name" required="required" value="<?php echo $ec[2]['name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Phone <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_3_phone" required="required" value="<?php echo $ec[2]['phone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Relationship <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_3_relationship" required="required" value="<?php echo $ec[2]['relationship']; ?>" /></div>

                        </div>
						<h4>Emergency Contact #4</h4>
						<input type="hidden" name="ec_4_id" value="<?php echo $ec[3]['id']; ?>">
                        <div class="clearfix">

                            <label for="form-name" class="form-label">Name <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_4_name" required="required" value="<?php echo $ec[3]['name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Phone <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_4_phone" required="required" value="<?php echo $ec[3]['phone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Relationship <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_4_relationship" required="required" value="<?php echo $ec[3]['relationship']; ?>" /></div>

                        </div>
						<h4>Emergency Contact #5</h4>
						<input type="hidden" name="ec_5_id" value="<?php echo $ec[4]['id']; ?>">
                        <div class="clearfix">

                            <label for="form-name" class="form-label">Name <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_5_name" required="required" value="<?php echo $ec[4]['name']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Phone <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_5_phone" required="required" value="<?php echo $ec[4]['phone']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Relationship <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="ec_5_relationship" required="required" value="<?php echo $ec[4]['relationship']; ?>" /></div>

                        </div>
						<h3>Other Information</h3>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Previous School <em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="prev_school" required="required" value="<?php echo $academic_info['prev_school']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Indiv Ed Plan?<em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="iep" required="required" value="<?php echo $academic_info['iep']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Struggle Subject<em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="poor_subject" required="required" value="<?php echo $academic_info['poor_subject']; ?>" /></div>

                        </div>
						<div class="clearfix">
                            <label for="form-gender" class="form-label">Does this student have a computer at home?</label>
                            <div class="form-input">
								<label><input type="radio" name="computer" id="form-gender" value="1" <?php if ($academic_info['computer']==1){ echo 'checked'; }; ?> /> Yes</label>
								<label><input type="radio" name="computer" value="0" <?php if ($academic_info['computer']==0){ echo 'checked'; }; ?> /> No</label>
							</div>
                        </div>
						<div class="clearfix">
	                           <label for="form-gender" class="form-label">Does this student have a printer at home?</label>
	                           <div class="form-input">
								<label><input type="radio" name="printer" id="form-gender" value="1" <?php if ($academic_info['printer']==1){ echo 'checked'; }; ?> /> Yes</label>
								<label><input type="radio" name="printer" value="0" <?php if ($academic_info['printer']==0){ echo 'checked'; }; ?> /> No</label>
							</div>
	                    </div>
						<div class="clearfix">
	                           <label for="form-gender" class="form-label">Does this student have an internet connection at home?</label>
	                           <div class="form-input">
								<label><input type="radio" name="internet" id="form-gender" value="1" <?php if ($academic_info['internet']==1){ echo 'checked'; }; ?> /> Yes</label>
								<label><input type="radio" name="internet" value="0" <?php if ($academic_info['internet']==0){ echo 'checked'; }; ?> /> No</label>
							</div>
	                    </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Language at home?<em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="language" required="required" value="<?php echo $academic_info['language']; ?>" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-name" class="form-label">Who will sign?<em>*</em></label>

                            <div class="form-input"><input type="text" id="form-name" name="signer" required="required" value="<?php echo $academic_info['signer']; ?>" /></div>

                        </div>
						<!-- 
                        <div class="clearfix">

                            <label for="form-username" class="form-label">Username <em>*</em><small>Alphanumeric (max 12 char.)</small></label>

                            <div class="form-input"><input type="text" id="form-username" name="username" required="required" maxlength="12" /></div>

                        </div>

                        <div class="clearfix">

                            <label for="form-password" class="form-label">Password<small>max. 30 char.</small></label>

                            <div class="form-input"><input type="password" id="form-password" name="password" maxlength="30" /></div>

                        </div>

                        <div class="clearfix">

                            <label for="form-password-check" class="form-label">Password check<small>Re-enter your password</small></label>

                            <div class="form-input"><input type="password" id="form-password-check" name="check" data-equals="password" maxlength="30" /></div>

                        </div>

                        <div class="clearfix">

                            <label for="form-website" class="form-label">Website <em>*</em><small>A valid URL</small></label>

                            <div class="form-input"><input type="url" id="form-website" required="required" /></div>

                        </div>
						<div class="clearfix">

                            <label for="form-email" class="form-label">Email <em>*</em><small>A valid email address</small></label>

                            <div class="form-input"><input type="email" id="form-email" required="required" /></div>

                        </div>

                        <div class="clearfix">

                            <label for="form-textarea" class="form-label">About you <em>*</em><small>Describe yourself</small></label>

                            <div class="form-input form-textarea"><textarea id="form-textarea" required="required" rows="5" /></textarea></div>

                        </div>
						
                        <div class="clearfix">

                            <label for="form-timezone" class="form-label">Timezone<small>Your timezone</small></label>

                            <div class="form-input"><select id="form-timezone"><option>America/Los Angeles</option><option>America/New York</option><option>Asia/Manila</option></select></div>

                        </div>

                        <div class="clearfix">

                            <label for="form-upload" class="form-label">Photo<small>80x80 jpeg/png format</small></label>

                            <div class="form-input"><input type="file" id="form-upload" /></div>

                        </div>

                        <div class="clearfix">

                            <label for="form-gender" class="form-label">Gender<small>Male or female?</small></label>

                            <div class="form-input"><label><input type="radio" name="gender" id="form-gender" value="male" /> Male</label> <label><input type="radio" name="gender" value="female" /> Female</label></div>

                        </div>

                        <div class="clearfix">

                            <label for="form-updates" class="form-label">Receive Updates?<small>Receive weekly updates</small></label>

                            <div class="form-input"><input style="margin-left:25px;" type="checkbox" id="form-updates" value="1" /></div>

                        </div> -->

                        <div class="form-action clearfix">
							<input type="hidden" name="submission" value="1" />
							<input type="hidden" name="student" value="<?php echo $student_id; ?>" />                           
							<button style="float:right;" class="button" type="submit" data-icon-primary="ui-icon-circle-check">Submit Changes</button>

                            

                        </div>

                    </form>

                </section>

            </div>

        </div>

        <!-- End Forms Section -->



        <!-- Forms Section -->

        <div class="grid_3">

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

        <!-- End Forms Section -->



    </section>

</div>

</section>                   


</div>
<?php require_once('footer.php'); ?>
<?php endif; ?>
<?php else: ?>
	<div class="main-content student-info">

		<header>
			<h2>ACCESS DENIED</h2>
			<a href="index.php">Go Back Home</a>
		</header>
	</div>
<?php endif; ?>