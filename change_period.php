<?php
require_once('session.php');

$from = $_POST['from'];
$to = $_POST['to'];

if (strtotime($to)>strtotime($from)):
$_SESSION['t1'] = $from . ' 00:00:00';
$_SESSION['t2'] = $to . ' 23:59:59';	
header("Location: ".$_POST['goto']."?message=3");
exit;
else:
header("Location: ".$_POST['goto']."?message=4");
exit;
endif;


?>