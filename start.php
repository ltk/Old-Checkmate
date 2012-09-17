<?php

require_once('session.php');

$category_labels = array(
	1 => 'Pride',
	2 => 'Passion',
	3 => 'Bravery',
	4 => 'Self-Awareness',
	5 => 'Urgency',
	6 => 'Attendance'
);

// If there is no user logged in, go to the login page.
if ($_SESSION['teacher']==""):
$referral = urlencode(str_replace('/checkmate/', '', $_SERVER['REQUEST_URI']));
if ($page != 'pdf.php'){
	header("Location: login.php?url=$referral");
} else {
	header("Location: ../login.php?url=$referral");
}
//exit;

else:

//require_once ('functions.php');
$now = time();
$day = date('w');
$start = time() - (24*60*60*intval($day));
$end = $start + (7*24*60*60);
$start_date = date('Y-m-d 00:00:00', $start);
$end_date = date('Y-m-d 23:59:59', $end);

if (!$_SESSION['t1']): $_SESSION['t1'] = $start_date; endif;
if (!$_SESSION['t2']): $_SESSION['t2'] = $end_date; endif;
$user = $_SESSION['teacher'];
$t1 = $_SESSION['t1'];
$t2 = $_SESSION['t2'];
$intro = $_GET['intro'];

require_once('functions.php');

require_once('db_connect.php');

// Populate the students array with student objects.
$sql = "SELECT * from teachers WHERE id='$user' LIMIT 1";
$result = mysql_query($sql,$con);

if ($result):

$teacher = mysql_fetch_object($result, 'Teacher') or die(mysql_error());

endif;

if ($page != 'pdf.php'){
	require_once('header.php');
}
endif;

?>
