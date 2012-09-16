<?php
require_once('session.php');

$from = $_POST['from'];
$to = $_POST['to'];

if (strtotime($to)>strtotime($from)):
$_SESSION['t1'] = $from;
$_SESSION['t2'] = $to;	
header("Location: ".$_POST['goto']."?message=3");
exit;
else:
header("Location: ".$_POST['goto']."?message=4");
exit;
endif;


?>