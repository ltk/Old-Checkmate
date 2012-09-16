<!DOCTYPE html><html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>CheckMate - By Lawson Kurtz</title>
<meta name="viewport" content="width=device-width,initial-scale=1"> 
<link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:extralight,light,regular,bold" media="screen" rel="stylesheet" type="text/css" >
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption" media="screen" rel="stylesheet" type="text/css" >
<link href='http://fonts.googleapis.com/css?family=Arvo|Days+One' rel='stylesheet' type='text/css'>
<link href="../checkmate/css/reset.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/grid.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/style.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/elfinder.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/jquery.ui.datatables.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/jquery.slidernav.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/jquery.fullcalendar.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/ui/default-ui/ui.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/ui/default-ui/portlet.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/ui/default-ui/jquery.ui.uniform.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/ui/default-ui/colors/jquery.ui.colors.default.css" media="screen" rel="stylesheet" type="text/css" class="uicolor" >
<link href="../checkmate/css/forms.css" media="screen" rel="stylesheet" type="text/css" >
<link href="../checkmate/css/prettify.css" media="screen" rel="stylesheet" type="text/css" >
<!--[if lt IE 8]> <link href="../checkmate/css/ie.css" media="screen" rel="stylesheet" type="text/css" ><![endif]-->
<!--[if lt IE 9]> <script type="text/javascript" src="../checkmate/js/html5.js"></script><![endif]-->
<script type="text/javascript" src="../checkmate/js/jquery.min.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.selectors.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.easing.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.cookie.js"></script>
<script type="text/javascript" src="../checkmate/js/hoverIntent.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="../checkmate/js/overlay.apple.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.slidernav.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.fullcalendar.min.js"></script>
<script type="text/javascript" src="../checkmate/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="../checkmate/js/superfish.js"></script>
<script type="text/javascript" src="../checkmate/js/supersubs.js"></script>
<script type="text/javascript" src="../checkmate/js/elfinder.full.js"></script>
<script type="text/javascript" src="../checkmate/js/prettify/prettify.js"></script>
<script type="text/javascript" src="../checkmate/js/global.js"></script>
<script src="js/jquery.multiselect.js" type="text/javascript"></script>
<script src="js/jquery.multiselect.filter.js" type="text/javascript"></script>
<script src="js/sortElements.js" type="text/javascript"></script>
<!--[if lt IE 9]> <script type="text/javascript" src="../checkmate/js/selectivizr.js"></script><![endif]-->
<!--[if lt IE 8]> <script type="text/javascript" src="../checkmate/js/ie.js"></script><![endif]-->

<script>

	$(function() {

		var availableTags = [

			"ActionScript",

			"AppleScript",

			"Asp",

			"BASIC",

			"C",

			"C++",

			"Clojure",

			"COBOL",

			"ColdFusion",

			"Erlang",

			"Fortran",

			"Groovy",

			"Haskell",

			"Java",

			"JavaScript",

			"Lisp",

			"Perl",

			"PHP",

			"Python",

			"Ruby",

			"Scala",

			"Scheme"

		];

		$( "#quick-search" ).autocomplete({

			source: availableTags

		});

	});

</script>



<!-- LOADING SCRIPT -->

<script>

$(window).load(function(){

    $("#loading").fadeOut(function(){

        $(this).remove();

        $('body').removeAttr('style');

    });

});

</script>



<style type = "text/css">

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

<body class="iframe" style="overflow:hidden;width:330px;background:#000;">



    <div id="loading"> 

        <script type = "text/javascript"> 

            document.write("<div id='container'><p id='content'>" +

                           "<img id='loadinggraphic' width='16' height='16' src='../checkmate/images/ajax-loader-eeeeee.gif' /> " +

                           "Loading...</p></div>");

        </script> 

    </div> 
