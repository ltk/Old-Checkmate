<?php
//include 'functions.php';

require_once('session.php');

if($_SESSION['teacher']!=''):
header("Location: index.php");//.$teacher['id']." - ".$teacher['password']);
exit;
	
elseif($_POST['loggedin']==1):

$email = $_POST['email'];
$usr = urlencode($email);

$password = sha1($_POST['password']);

require_once('db_connect.php');

// Populate the students array with student objects.
$sql = "SELECT * from teachers WHERE email='$email' AND password='$password' LIMIT 1";
$result = mysql_query($sql,$con);


if (mysql_num_rows($result)==1):
require_once('functions.php');

$teacher = mysql_fetch_object($result, 'Teacher') or die(mysql_error());
			
		$_SESSION['teacher'] = $teacher->id;
	$refer_to  = (urldecode($_POST['url'])=='') ? 'index.php' : urldecode($_POST['url']) ;
//	$refer_to = 'index.php';
	
		header("Location: $refer_to");

else: 
	header("Location: login.php?message=1&usr=$usr");
endif;

else:

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Login to CheckMate</title>
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:extralight,light,regular,bold" media="screen" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" media="screen" rel="stylesheet" type="text/css" >
<link href='https://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>
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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16882938-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="login">
	<div id="blue-bar"></div>

    <div id="loading"> 

        <script type = "text/javascript"> 

            document.write("<div id='container'><p id='content'>" +

                           "<img id='loadinggraphic' width='16' height='16' src='images/ajax-loader-eeeeee.gif' /> " +

                           "Loading...</p></div>");

        </script> 

    </div> 



    <div class="login-box main-content">

      <header>

          <ul class="action-buttons clearfix">

              <li><a href="register.php" class="button">Register</a></li>

              <li><a href="forgotPassword.php" class="button" data-icon-primary="ui-icon-help">Forgot Password</a></li>

          </ul>

          <h2 style="font-size:35px;font-family: 'Days One', sans-serif;">CheckMate<!-- <span style="font-family:arial, sans-serif;font-size:16px;position:relative;top:-15px;"><a href="#" title="It's not perfect, but with your help it will be!">&beta;</a></span> --></h2>
<h4 style="margin:7px 0 10px 0;font-weight:normal;margin-left:3px;"><a href="http://www.ca2plus.com/" title="Visit Calcium Internet Engineering" >by Ca<sup style="font-family:arial, sans-serif;font-size:11px;position:relative;top:-5px;">2+</sup></a></h4>

      </header>

    	<section style="margin-top:10px;padding:20px 20px 25px 20px;">
<?php if ($_GET['message']==1): ?>
    		<div class="ui-widget message notice">

                <div class="ui-state-error ui-corner-all">

                    <p>

                    <span class="ui-icon ui-icon-info"></span>

                        Your login credentials were incorrect. Try again.

                    </p>

                </div>

            </div>
<?php endif; ?>
    		<form id="form" action="login.php" method="post" class="clearfix" style="margin:0;">

                <p style="margin:0;">

                    <input type="text" id="email"  class="large" value="<?php if ($_GET['usr']!=''): echo urldecode($_GET['usr']); endif; ?>" name="email" required="required" placeholder="Email Address" />

                    <input type="password" id="password" class="large" value="" name="password" required="required" placeholder="Password" />

					<input type="hidden" name="loggedin" value="1">
					
					<input type="hidden" name="url" value="<?php echo $_GET['url']; ?>"> 

                    <button class="large button-gray ui-corner-all fr" type="submit">Login</button>

                </p>
<!--
                <p class="clearfix">

                    <span class="fl">

                        <input type="checkbox" id="remember" class="" value="1" name="remember"/>

                        <label class="choice" for="remember">Keep me logged-in for two weeks</label>

                    </span>

                </p>
-->
            </form>
			<div id="mobile-links"><a href="register.php">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="forgotPassword.php">Forgot Password</a></div>
    	</section>

    </div>

</body>

</html>

<?php 
endif; 
?>