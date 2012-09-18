<?php
include 'functions.php';

if($_POST['loggedin']==1):
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$pref_name = $_POST['pref_name'];
	global $email;
	$email = $_POST['email'];
	$code = str_replace('-','',$_POST['code']);
	$password = sha1($_POST['password']);
	$password_again = sha1($_POST['password_again']);

	if ($password!=$password_again) { header("Location: register.php?f_name=$first_name&l_name=$last_name&v_name=$pref_name&email=$email&code=$code&message=1"); } else {

		// Connect to the database.
		require_once('db_connect.php');

		$code_sql = "SELECT * FROM register_codes WHERE code ='$code'";
		$code_result = mysql_query($code_sql,$con) or die(mysql_error());
		while($row = mysql_fetch_array($code_result))
  			{
  			$x = $row['x'];
  			}
			if ($x=='1'):
				header("Location: register.php?f_name=$first_name&l_name=$last_name&v_name=$pref_name&email=$email&code=$code&message=3");
			elseif ($x!='0'):
				header("Location: register.php?f_name=$first_name&l_name=$last_name&v_name=$pref_name&email=$email&code=$code&message=4");
			elseif ($x=='0'):
				$sql = "SELECT email FROM teachers WHERE email='$email'";
				$result = mysql_query($sql,$con) or die(mysql_error());
				while($row = mysql_fetch_array($result))
		  			{
		  			$same_email = $row['email'];
		  			}
				if($same_email!=''){
					header("Location: register.php?f_name=$first_name&l_name=$last_name&v_name=$pref_name&email=$email&code=$code&message=5");
				} else {
				$sql = "UPDATE register_codes SET x=1 WHERE code='$code'";
				mysql_query($sql,$con) or die(mysql_error());
				
				// Populate the students array with student objects.
				$sql = "INSERT INTO teachers ( first_name, last_name, pref_name, email, password ) VALUES ( '$first_name', '$last_name', '$pref_name', '$email', '$password' ) ";
				$result = mysql_query($sql,$con) or die(mysql_error());

				if($result){
					//$teacher = mysql_fetch_object($result, 'Teacher');
					$sql = "SELECT * FROM teachers WHERE email='$email'";
					$result = mysql_query($sql,$con) or die(mysql_error());
					$teacher = mysql_fetch_array($result) or die(mysql_error());
	
					if ($teacher['id']) {
		
						//require_once('register_email.php');
						$to = $teacher['email'];
						 $subject = "Welcome to CheckMate!";
						 $body = "Welcome to Checkmate! We hope this makes your life a little easier. You can visit your CheckMate homepage anytime at http://lkurtz.com.";
						$headers = "From:CheckMate";
						 mail($to, $subject, $body, $headers);
						
						session_name('paycheckLogin');
						session_set_cookie_params(2*7*24*60*60);
						session_start();
		
						$_SESSION['teacher'] = $teacher['id'];
		
						header("Location: index.php");//.$teacher['id']." - ".$teacher['password']);
						exit;
					} else { 
						header("Location: register.php?f_name=$first_name&l_name=$last_name&v_name=$pref_name&email=$email&code=$code&message=2"); }
						//echo "Registration failed! Contact us for help."; }
	
				} else { echo "Woops, big error!"; }
				
			}

			endif;
		}

else:
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Register for CheckMate</title>
<link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:extralight,light,regular,bold" media="screen" rel="stylesheet" type="text/css" >
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption" media="screen" rel="stylesheet" type="text/css" >
<link href='http://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>
<link href="css/reset.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/grid.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/ui.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/portlet.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/jquery.ui.uniform.css" media="screen" rel="stylesheet" type="text/css" >
<link href="css/ui/default-ui/colors/jquery.ui.colors.default.css" media="screen" rel="stylesheet" type="text/css" class="uicolor" >
<link href="css/forms.css" media="screen" rel="stylesheet" type="text/css" >
<!--[if lt IE 8]> <link href="css/ie.css" media="screen" rel="stylesheet" type="text/css" ><![endif]-->
<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script><![endif]-->
<!--[if lt IE 9]> <script type="text/javascript" src="js/IE9.js"></script><![endif]-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<!--[if lt IE 9]> <script type="text/javascript" src="js/ie.js"></script><![endif]-->

<script> 

$(document).ready(function(){

    $.tools.validator.fn("#username", function(input, value) {

        return value!='Username' ? true : {     

            en: "Please complete this mandatory field"

        };

    });

    

    $.tools.validator.fn("#password", function(input, value) {

        return value!='Password' ? true : {     

            en: "Please complete this mandatory field"

        };

    });



    var form = $("#form").validator({ 

    	position: 'bottom left', 

    	offset: [5, 0],

    	messageClass:'form-error',

    	message: '<div><em/></div>' // em element is the arrow

    }).attr('novalidate', 'novalidate');

});

</script> 



<!-- LOADING SCRIPT -->

<script>

$(window).load(function(){

    $("#loading").fadeOut(function(){

        $(this).remove();

        $('body').css('overflow', 'auto');

    });

});

</script>



<style type = "text/css">

    body{overflow: hidden;}

    #container {position: absolute; top:50%; left:50%;}

    #content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}

    #content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }

    #loadinggraphic {margin-right: 0.2em; margin-bottom:-2px;}

    #loading {background-color: #eeeeee; overflow:hidden; width:100%; height:100%; position: absolute; top: 0; left: 0; z-index: 9999;}

	body.login .login-box form input[type="text"], body.login .login-box form input[type="password"] {
	margin: 3px;
	}
	#searchsubmit { width:242px;margin-left:3px; }

</style> 


<!-- LOADING SCRIPT END -->
<script type="text/javascript">
$(function(){
    var color_index = 0;
    var int=self.setInterval(function(){color_change()},50);

    function color_change(){
        
        color_val = color_index * 360;
        $('#blue-bar').css('background', 'hsl(' + color_val + ', 60%, 60%)');

        color_index += 0.001;
        if( color_index > 1 ){ color_index = 0; }
        console.log( color_index );
    }
});
</script>


</head>

<body class="login">
	<div id="blue-bar" class="register"></div>
	


    <div id="loading"> 

        <script type = "text/javascript"> 

            document.write("<div id='container'><p id='content'>" +

                           "<img id='loadinggraphic' width='16' height='16' src='images/ajax-loader-eeeeee.gif' /> " +

                           "Loading...</p></div>");

        </script> 

    </div> 



    <div class="login-box main-content"  style="width:540px;">

      <header>

          <ul class="action-buttons clearfix">

              <li><a href="login.php" class="button">Back to Login</a></li>

          </ul>

          <h2 style="font-size:25px;font-family: 'Days One', sans-serif;">Register for CheckMate</h2>

      </header>

    	<section>
			<?php 
			if ($_GET['message']): 
			switch ($_GET['message']) {
			    case '1':
			        $message_text = "Your passwords didn't match. Try again.";
			        break;
			    case '2':
			        $message_text = "Uh oh. There was a problem with your registration. Try again later.";
			        break;
			    case '3':
			        $message_text = "The registration code you entered has already been used.";
			        break;
				case '4':
				    $message_text = "You did not provide a valid registration code.";
				    break;
				case '5':
				    $message_text = "A user with that email address already exisits.";
				    break;
			}
			?>
			    		<div class="ui-widget message notice">

			                <div class="ui-state-error ui-corner-all">

			                    <p>

			                    <span class="ui-icon ui-icon-info"></span>

			                        <?php echo $message_text; ?>

			                    </p>

			                </div>

			            </div>
			<?php endif; ?>

    		<form action="register.php" method="post">
				<input type="text" id="email"  class="large" value="<?php if ($_GET['f_name']!=''): echo urldecode($_GET['f_name']); endif; ?>" name="first_name" required="required" placeholder="First Name" />
					<input type="text" id="email"  class="large" value="<?php if ($_GET['l_name']!=''): echo urldecode($_GET['l_name']); endif; ?>" name="last_name" required="required" placeholder="Last Name" />
					<input type="text" id="email"  class="large" value="<?php if ($_GET['v_name']!=''): echo urldecode($_GET['v_name']); endif; ?>" name="pref_name" required="required" placeholder="Name Visible to Students" />
				<input type="text" id="email"  class="large" value="<?php if ($_GET['email']!=''): echo urldecode($_GET['email']); endif; ?>" name="email" required="required" placeholder="Email Address" />

                <input type="password" id="password" class="large" value="" name="password" required="required" placeholder="Password" />
<input type="password" id="password" class="large" value="" name="password_again" required="required" placeholder="Repeat Password" />
<input type="text" id="email"  class="large" value="<?php if ($_GET['code']!=''): echo urldecode($_GET['code']); endif; ?>" name="code" required="required" placeholder="Registration Code" />
	            

	<input type="hidden" name="loggedin" value="1">                
	<input type="submit" value="Complete Registration" class="button large" id="searchsubmit">
	            
	        </form>

    	</section>

    </div>

</body>

</html>


<?php
endif;
?>