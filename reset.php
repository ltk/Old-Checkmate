<?php
$referer = $_SERVER['HTTP_REFERER'];
$auth1 = strpos('http://lkurtz.com.s132487.gridserver.com/passwordReset.php',$referer);
$auth2 = strpos('http://www.lkurtz.com.s132487.gridserver.com/passwordReset.php',$referer);
$auth3 = strpos('http://lkurtz.com/passwordReset.php',$referer);
$auth4 = strpos('http://www.lkurtz.com/passwordReset.php',$referer);
$auth1 = strpos('http://lkurtz.com.s132487.gridserver.com/editAccount.php',$referer);
$auth2 = strpos('http://www.lkurtz.com.s132487.gridserver.com/editAccount.php',$referer);
$auth3 = strpos('http://lkurtz.com/editAccount.php',$referer);
$auth4 = strpos('http://www.lkurtz.com/editAccount.php',$referer);

if ($auth1!==false && $auth2!==false && $auth3!==false && $auth4!==false && $auth5!==false && $auth6!==false && $auth7!==false && $auth8!==false):// !$auth && !$auth2 && !$auth3 && !$auth4):
 
	header("Location: http://www.fbi.gov/about-us/investigate/cyber/cyber"); 

else:

// http://lkurtz.com.s132487.gridserver.com/passwordReset.php
	$password = sha1($_POST['password']);
	$password_again = sha1($_POST['password_again']);
	$email = $_POST['email'];
	$usr = urlencode($email);
	$update = $_POST['update'];
	$password_old = sha1($_POST['password_old']);
	$teacher = $_POST['teacher'];

	require_once('db_connect.php');
	
	if ($update == 1 ):
		$sql = "SELECT password FROM teachers WHERE id='$teacher'";
		$result = mysql_query($sql,$con);
		while($row = mysql_fetch_array($result))
		  {
		  $password_server = $row['password'];
		  }
		if ($password_server == $password_old && $password == $password_again):
			$sql = "UPDATE teachers SET password='$password' WHERE id='$teacher'";
			if (mysql_query($sql,$con)):

			header("Location: editAccount.php?message=2");
			else:
			header("Location: http://www.google.com/");
			endif;
		else:
			header("Location: editAccount.php?message=3");
		endif;
		
	else:

		$sql = "UPDATE teachers SET password='$password' WHERE email='$email'";
		if (mysql_query($sql,$con)):

		header("Location: login.php?usr=$usr");
		else:
		header("Location: http://www.google.com/");
		endif;
	endif;

endif; ?>