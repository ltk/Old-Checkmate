<?php
//include 'functions.php';

if($_POST['loggedin']==1):

	$email = $_POST['email'];
	$url_email = urlencode($email);

	require_once('db_connect.php');

	$sql = "SELECT id from teachers WHERE email='$email' LIMIT 1";
	$result = mysql_query($sql,$con);

	while($row = mysql_fetch_array($result))
  	{
  		$id = $row['id'];
  	}

	if ($id!=''):
	
	function genRandomString() {
	    $length = 50;
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
	    $string = '';    
	    for ($p = 0; $p < $length; $p++) {
	        $string .= $characters[mt_rand(0, strlen($characters))];
	    }
	    return $string;
	}
	$q = genRandomString();
	
	$sql = "INSERT INTO password_recovery (email, q, x) VALUES ('$email', '$q', '0')";
	mysql_query($sql,$con);
	
	$to = $email;
	 $subject = "CheckMate Password Reset Request";
	 $body = "Someone requested to reset the password for this CheckMate account. Click here: http://lkurtz.com.s132487.gridserver.com/passwordReset.php?e=$url_email&q=$q to reset your password. ";
	$headers = "From:CheckMate";
	 if (mail($to, $subject, $body, $headers)) {
	   header("Location: forgotPassword.php?message=1");
	  } else {
	   header("Location: forgotPassword.php?message=3");
	  }

//$sql = "SELECT * from teachers WHERE email='$email' AND password='$password' LIMIT 1";
//$result = mysql_query($sql,$con);


//if (mysql_num_rows($result)==1):
//require_once('functions.php');

//$teacher = mysql_fetch_object($result, 'Teacher') or die(mysql_error());
			
//		$_SESSION['teacher'] = $teacher->id;
	//$refer_to  = (urldecode($_POST['url'])=='login.php') ? 'comments.php' : urldecode($_POST['url']) ;
//	$refer_to = 'comments.php';
	
//		header("Location: $refer_to");

		
	else:
		header("Location: forgotPassword.php?message=2");
	endif;
//endif;

else:

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>CheckMate | Forgotten Password</title>
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
	<div id="blue-bar" class="forgot"></div>



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

              <li><a href="login.php" class="button">Back to Login</a></li>

          </ul>

          <h2 style="font-size:18px;font-family: 'Days One', sans-serif;">Reset Your Password</h2>

      </header>

    	<section>
<?php if ($_GET['message']==1): ?>
    		<div class="ui-widget message notice">

                <div class="ui-state-success ui-corner-all">

                    <p>

                    <span class="ui-icon ui-icon-info"></span>

                        Instructions for resetting your password have been sent to your email address.

                    </p>

                </div>

            </div>
<?php elseif($_GET['message']==2): ?>

	    		<div class="ui-widget message notice">

	                <div class="ui-state-error ui-corner-all">

	                    <p>

	                    <span class="ui-icon ui-icon-info"></span>

	                        Whoops! We don't recognize that email address. Try another one.

	                    </p>

	                </div>

	            </div>
				<form id="form" action="forgotPassword.php" method="post" class="clearfix">

	                <p>

	                    <input style="width:478px;" type="text" id="email"  class="large" value="<?php if ($_GET['usr']!=''): echo urldecode($_GET['usr']); endif; ?>" name="email" required="required" placeholder="Email Address" />

						<input type="hidden" name="loggedin" value="1">

	                    <button class="large button-gray ui-corner-all fr" type="submit">Submit</button>

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
			<?php elseif($_GET['message']==3): ?>

				    		<div class="ui-widget message notice">

				                <div class="ui-state-error ui-corner-all">

				                    <p>

				                    <span class="ui-icon ui-icon-info"></span>

				                        Well this is embarrassing. It didn't work for some reason. Try again.

				                    </p>

				                </div>

				            </div>
							<form id="form" action="forgotPassword.php" method="post" class="clearfix">

				                <p>

				                    <input style="width:478px;" type="text" id="email"  class="large" value="<?php if ($_GET['usr']!=''): echo urldecode($_GET['usr']); endif; ?>" name="email" required="required" placeholder="Email Address" />

									<input type="hidden" name="loggedin" value="1">

				                    <button class="large button-gray ui-corner-all fr" type="submit">Submit</button>

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
				<?php else: ?>
    		<form id="form" action="forgotPassword.php" method="post" class="clearfix">

                <p>

                    <input style="width:478px;" type="text" id="email"  class="large" value="<?php if ($_GET['usr']!=''): echo urldecode($_GET['usr']); endif; ?>" name="email" required="required" placeholder="Email Address" />

					<input type="hidden" name="loggedin" value="1">

                    <button class="large button-gray ui-corner-all fr" type="submit">Submit</button>

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
<?php endif; ?>

    	</section>

    </div>

</body>

</html>

<?php 
endif; 
?>