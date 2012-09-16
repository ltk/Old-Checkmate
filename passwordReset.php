
<?php
//resetPassword.php?e=lawson.kurtz@gmail.com&q=P0wzTtIP2lO0TICF8u5r90vReozMa7EqKDmhKbN5emCDK0eCho
$email = urldecode($_GET['e']); //'lawson.kurtz@gmail.com'; //$_GET['q']
$key = $_GET['q']; //'P0wzTtIP2lO0TICF8u5r90vReozMa7EqKDmhKbN5emCDK0eCho';//$_GET['e']
require_once('db_connect.php');

$sql = "SELECT * from password_recovery WHERE email='$email'";
$result = mysql_query($sql,$con);

$q=array();
$x=array();
while($row = mysql_fetch_array($result))
  {
  $q[] = $row['q'];
  $x[] = $row['x'];
  }
$qmatch = array_search($key,$q);
$xmatch = array_search(0,$x);
if ($qmatch!==false):
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>CheckMate | Change Your Password</title>
<link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:extralight,light,regular,bold" media="screen" rel="stylesheet" type="text/css" >
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption" media="screen" rel="stylesheet" type="text/css" >
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



    <div id="loading"> 

        <script type = "text/javascript"> 

            document.write("<div id='container'><p id='content'>" +

                           "<img id='loadinggraphic' width='16' height='16' src='images/ajax-loader-eeeeee.gif' /> " +

                           "Loading...</p></div>");

        </script> 

    </div> 


<?php

if ($xmatch!==false):

if (mysql_query("UPDATE password_recovery SET x = 1
WHERE email = '$email'")):
?>
<div class="login-box main-content">

  <header>

      <h2>Reset Password</h2>

  </header>

	<section>
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
		<form id="form" action="reset.php" method="post" class="clearfix">

            <p>

                <input type="password" id="email"  class="large" value="<?php if ($_GET['usr']!=''): echo urldecode($_GET['usr']); endif; ?>" name="password" required="required" placeholder="New Password" />

                <input type="password" id="password" class="large" value="" name="password_again" required="required" placeholder="New Password Again" />

				<input type="hidden" name="loggedin" value="1">
				
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 

                <button class="large button-gray ui-corner-all fr" type="submit">Reset</button>

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

	</section>

</div>
<?php

endif;
else:
echo '<h1>Sorry, this request is no longer valid.</h1>';
endif;

echo '</body></html>';
else: //did not match
echo '<html><body><h1>Bad Request.';
print_r($xmatch);
print_r($qmatch);
echo '</h1></body></html>';
endif;

?>
