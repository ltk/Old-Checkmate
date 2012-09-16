<?php

$category = $_POST['category'];
$amount = str_replace(' ','',str_replace('$','',$_POST['amount']));
$comment = $_POST['comment'];
$teacher = $_POST['teacher'];
$students = $_POST['students'];
$date = $_POST['date'];

//$amount = $_PUT['amount'];
//$comment = $_PUT['comment'];
//$teacher = $_PUT['teacher'];
//$student = $_PUT['student'];

require_once('db_connect.php');

$error = 0;
foreach ($students as $student):
// Populate the students array with student objects.
$sql = "INSERT INTO comments (category, teacher, student, amount, comment) VALUES ($category, $teacher, $student, $amount, '$comment')";
$result = mysql_query($sql,$con);

if (!$result) {
	$error += 1;

}
endforeach;

if ($error == 0) {
	
	header("Location: comments_iframe.php?message=1");
	exit;
} else { echo "Please try again later."; }

?>