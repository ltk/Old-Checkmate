<?php
$teacher = $_POST['teacher'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$pref_name = $_POST['pref_name'];
$class = ($_POST['class']) ? $_POST['class'] : 0;

require_once('db_connect.php');

$sql = "UPDATE teachers SET first_name='$first_name', last_name='$last_name', pref_name='$pref_name', class='$class' WHERE id='$teacher'";
if (mysql_query($sql,$con)):

header("Location: editAccount.php?message=1");
else:
header("Location: editAccount.php?message=4");
endif;

?>