<?php

$edit_class = $_POST['edit_class'];
$edit_first_name = $_POST['edit_first_name'];
$edit_last_name = $_POST['edit_last_name'];
$edit_student = $_POST['edit_student'];

$class = $_POST['class'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];


require_once('db_connect.php');

if (!$edit_student) {

	$sql = "INSERT INTO students (class, first_name, last_name) VALUES ($class, '$first_name', '$last_name')";
	$result = mysql_query($sql,$con);

	if ($result) {

		header("Location: students.php?message=1");
		exit;
	} else { echo "Please try again later."; }
	

} else { 

$sql = "UPDATE students SET class='$edit_class', first_name='$edit_first_name', last_name='$edit_last_name' WHERE id='$edit_student'";
$result = mysql_query($sql,$con);

if ($result) {
	
	header("Location: students.php?s=$edit_student&message=2");
	exit;
} else { echo "Please try again later."; }

}
?>