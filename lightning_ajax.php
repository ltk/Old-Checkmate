<?php

$category = $_POST['category'];
$amount = str_replace(' ','',str_replace('$','',$_POST['amount']));
$comment = $_POST['comment'];
$teacher = $_POST['teacher'];
$student = $_POST['student'];
//date = $_POST['date'];

//$amount = $_PUT['amount'];
//$comment = $_PUT['comment'];
//$teacher = $_PUT['teacher'];
//$student = $_PUT['student'];

require_once('db_connect.php');


// Populate the students array with student objects.
$sql = "INSERT INTO comments (category, teacher, student, amount, comment) VALUES ($category, $teacher, $student, $amount, '$comment')";
$result = mysql_query($sql,$con);

if ($result) {
	return true;
	//header('Location: http://www.google.com/');

} else {
	return false;
	//header('Location: http://www.bing.com/');
}

?>