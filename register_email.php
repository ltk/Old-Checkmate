<?php

require_once "Mail.php";
require_once "Mail/mime.php";

class Mailer {
	public $host		="ssl://smtp.gmail.com";
	public $port		="465";
	public $username	="lawson.kurtz@gmail.com";
	public $password	="axwkfkvgihevnvyv";
	
}
class Email {
	public $to			= "";
	public $from		= "CheckMate <lawson.kurtz@gmail.com>";
	public $subject		= "Welcome to CheckMate";
	public $body 		= "Welcome";
	
	public function send( $mailer, $to ) {
		$text = 'Welcome to Checkmate!';
		$html = '<html>
		<head>
		   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		   <title>AirMail Email Template</title>
		   <link rel="stylesheet" type="text/css" href="screen.css">
		</head>




		<!-- BEGIN THE HTML BODY OF THIS TEMPLATE --> 
		<body>


		<!-- BEGIN THE CSS (STYLING) OF THIS TEMPLATE - THIS NEEDS TO BE HERE, NOT IN THE HEAD SECTION --> 
		<STYLE>
		body { 
		   background: #f0f9ff url(http://makedesignnotwar.com/email-templates/airmail/Classic/img/bg/ltblue_alt_bg.jpg) repeat-x top center;
		   margin: 0;
		   padding: 6px 0 10px;
		}

		table {font-family: "Lucida Sans Unicode","Lucida Grande",Garuda,sans-serif; font-size: 0.9em; color: #666666; line-height: 1.4em;}

		a {color: #1780b9; }
		a img {border: none;}

		#header.span{font-size: 30px; font-weight: bold;}
		#header img.logo{margin-top: 45px; text-align: center;}
		#header img.postcard{margin-top: 45px; text-align: center;}

		#header{
			background: transparent url(http://makedesignnotwar.com/email-templates/airmail/Classic/img/bg/header_bg_ltblue.jpg) no-repeat top center;
			height: auto;
			text-align: center;
			color: ltblue;
			height: 150px;
		}

		#footer{
			background: transparent url(http://makedesignnotwar.com/email-templates/airmail/Classic/img/bg/footer_bg_ltblue.jpg) no-repeat bottom center;
			text-align: center;
			height: 103px;
			padding-top: 15px;
			color: ltblue;
		}

		table{background: transparent url(http://makedesignnotwar.com/email-templates/airmail/Classic/img/bg/body_bg_white.jpg) repeat-y top center;}

		table.main {background: transparent;}
		.permission {padding: 0px 0 20px 0; margin: 0 auto;}
		.permission p, .permission p a {color: #666666; font-family: "Lucida Sans Unicode","Lucida Grande",Garuda,sans-serif; font-size: 10px; line-height: 9px;}
		td.date {margin: 0; padding: 25px 0 9px 0; }
		td.date p {font-family: "Lucida Sans Unicode","Lucida Grande",Garuda,sans-serif; font-size: 0.85em; color: #666666;}
		td.sidebar ul {margin: 10px 0 10px 24px; padding: 0; }
		td.sidebar ul li a {text-decoration: none;}
		td.sidebar p {margin: 10px 0 0 0; padding: 0;}
		td.footer {font-family: "Lucida Sans Unicode","Lucida Grande",Garuda,sans-serif; font-size: 10px; line-height: 9px; padding-top: 20px;}

		h1, h2, h3, h4, h5 {font-family: Arial, "Lucida Sans Unicode","Lucida Grande",Garuda,sans-serif; font-weight: bold; color: #222; margin: 0; padding: 0;}
		td.sidebar h4 {font-size: 13px; margin: 14px 0 0 0;}
		td.sideHeader h3, td.sideTitle h3, h3 {font-size: 18px; font-style: italic; color: #222 !important;}
		td.mainbar h2 {font-size: 18px; color: #222 !important;}
		td.mainbar h2 a {text-decoration: none;}
		td.mainbar p {margin: 10px 0 0 0;  padding: 0;}
		td.mainbar p.more {padding: 0 0 10px 0;}

		td.mainbar ul {   
		   font-weight: normal;
		   color: #666;
		   margin: 10px 0 10px 10px;
		   padding: 0;
		   list-style-position: inside;
		}

		table.blackbg {background-color: ltblue; display: block;}
		</STYLE>





		<table width="100%" cellspacing="0" cellpadding="0">

		   <tr id="header"><td>

		   <br />


		<!-- YOUR LOGO GOES RIGHT HERE - INSIDE THE IMG SRC QUOTES - MAKE SURE THIS FILE EXISTS SOMEWHERE ON A WEB HOST :) -->	
		   <center><span><a href="#"><img class="logo" src="http://nujigroup.com/mail/logo.jpg" width="480" height="71" alt="bwg:h24" /></a></span><br />

		 <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/smallspacer.gif" width="480" height="10" /><br />  
		 <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/hr.gif" width="480" /><br />
		 <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/smallspacer.gif" width="480" height="10" /></center>

		   </td></tr>
		   <tr>
		      <td align="center" valign="top">




		<!-- BEGIN THE CONTENT -->         
		         <table width="580" border="0" cellspacing="0" cellpadding="0" class="main">

		            <tr>
		               <td align="center">

		                  <table width="480" cellspacing="0" cellpadding="0">


		                  	 <img src="http://nujigroup.com/mail/banners/1.jpg" width="480" />

		                     <tr>

		                        <td class="date" width="480"><p></p></td>
		                     </tr>
		                     <tr align="left" rowspan="3" valign="top">





		<!-- BEGIN THE MAIN CONTENT -->
		                        <td width="480" valign="top" class="mainbar" align="left">
		                        <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/hr.gif" width="480" height="4" />
		                        <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/smallspacer.gif" width="480" height="12" />

		                           <table cellspacing="0" cellpadding="0" class="blackbg">                           	
		                              <tr>
		                                 <td>
		                                    <h2>Welcome to CheckMate</h2>
		                                 </td>
		                              </tr>
		                           </table>
								   <p>CheckMate blah blah</p>
		           

		                           <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/smallspacer.gif" width="480" height="12" />
		                           <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/hr.gif" width="480" height="4" />
		                           <img src="http://makedesignnotwar.com/email-templates/airmail/Classic/img/framework/smallspacer.gif" width="480" height="20" />





		                     </tr>
		                  </table>

		               </td>
		            </tr>




		<!-- BEGIN THE FOOTER - COPYRIGHT / ADDRESS SECTION -->            
		            <tr>
		               <td align="center" class="footer">
		                  <img src="http://nujigroup.com/mail/footer.jpg" width="480" />
		               </td>
		            </tr>
		         </table>

		      </td>
		   </tr>




		<!-- MORE FOOTER - UNSUBSCRIBE/BROWSER PROMPT/ETC. -->     
		   <tr id="footer"><td>.</td></tr>
		</table>


		     <div align="center" class="permission">
		        <p>You\'re receiving this newsletter from Checkmate.</p>
		        <p>If you would like to unsubscribe, please <a href="http://despair.com/doitlater.html">click here</a>.</p> 
		     </div>




		</body>
		</html>';
		
		
		$message = new Mail_mime();
		
		$message->setTXTBody($text);
		$message->setHTMLBody($html);
		$this->body = $message->get(); 
		
		
		$extraheaders = array ('From' => $this->from,
		   'To' => $to,
		   'Subject' => $this->subject);
		
		$headers = $message->headers($extraheaders);
		
		 $smtp = Mail::factory('smtp',
		   array ('host' => $mailer->host,
		     'port' => $mailer->port,
		     'auth' => true,
		     'username' => $mailer->username,
		     'password' => $mailer->password));

		 $mail = $smtp->send($to, $headers, $this->body);

		 if (PEAR::isError($mail)) {
		   	//return false;
			
		  } else {
		   	//return true;
			
		  }
	}
	
}

$mailer = new Mailer();
$welcome = new Email();
$welcome->send( $mailer, $email );
/*

$con = mysql_connect("nujigroupcom.ipagemysql.com", "nuji", "tng5678.$");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("mailing_list",$con);

$sql = "SELECT time FROM bwgh24 ORDER BY time DESC LIMIT 1";
$result = mysql_query($sql,$con);
$last_email = mysql_fetch_array($result);

//print_r($last_email);

$current_time = time();
echo "<p>It is now ".date('H:i:s', $current_time).".</p>";


$previous_time = strtotime($last_email['time']);
echo "<p>Last birthday wish sent at ".date('H:i:s', $previous_time).".</p>";

echo "<p>".date('i:s', ($current_time - $previous_time))." since last birthday wish sendage.</p>";

if (  ($previous_time + (1440))<$current_time): //if (($previous_time + 1440000)<$current_time):
echo "<p>Birthday wish sent!</p>";
send_wish();
$sql = "INSERT INTO bwgh24 (email) VALUES ('wendy.jaglom@gmail.com')";
$result = mysql_query($sql,$con);
if ($result): return true; else: return false; endif;
else:
echo "<p>Gotta wait more! ... it's too soon.</p>";
endif;

mysql_close($con);
*/
/*
$db_selected = mysql_select_db("mailing_list",$con);

$sql = "SELECT email FROM list";
$result = mysql_query($sql,$con);
$addresses = mysql_fetch_array($result, MYSQL_ASSOC);
mysql_close($con);

*/
function send_wish(){
	for ($j=1;$j<=65;$j++):
		$mailer = new Mailer();
		${'email'.$i} = new Email();
		${'email'.$i}->send( $mailer, $j );
	endfor;
}

//send_wish();
/*
$mailer = new Mailer();

for ( $i = 0; $i <= 1; $i++):
${'email'.$i} = new Email();
//${'email'.$i}->to = $addresses['email'];
${'email'.$i}->send( $mailer );
endfor;
*/






?>