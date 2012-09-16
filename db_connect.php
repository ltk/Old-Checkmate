<?php
// Connect to the database.
$con = mysql_connect("internal-db.s132487.gridserver.com", "db132487", "BelSop5507");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("db132487_checkmate_new",$con);
?>