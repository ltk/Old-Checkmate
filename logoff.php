<?php
define('INCLUDE_CHECK',true);

session_name('paycheckLogin');
// Starting the session

session_set_cookie_params(2*7*24*60*60);
// Making the cookie live for 2 weeks

session_start();

$_SESSION = array();
session_unset();

header("Location: login.php");
exit;

?>