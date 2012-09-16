<?php
require_once('session.php');
$user = $_SESSION['teacher'];

require_once('db_connect.php');
require_once('functions.php');
// Populate the students array with student objects.
$sql = "SELECT * from teachers WHERE id='$user' LIMIT 1";
$result = mysql_query($sql,$con);

if ($result):

$teacher = mysql_fetch_object($result, 'Teacher') or die(mysql_error());

endif;

$class = $_POST['edit_class'];
$first_name = $_POST['edit_first_name'];
$last_name = $_POST['edit_last_name'];
$student = $_POST['edit_student'];

if($teacher->admin == 1):
$sql = "UPDATE students SET class='$class', first_name='$first_name', last_name='$last_name' WHERE id='$student'";
$result = mysql_query($sql,$con);
if ($result) {
	
	header("Location: students.php?message=2&s=$student");
	exit;
} else { echo "Please try again later."; }
else:
echo "You are not authorized to edit student information.";
endif;


?>