<!DOCTYPE html>
<!--Fixes this problem www.phpied.com/conditional-comments-block-downloads/ with the advantages of this paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us" class="no-js ie8"><![endif]-->
<!--[if gt IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us" class="no-js ie9"><![endif]-->
<!--[if !IE]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us" class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<!--Redirect IE6 to the /ie6 directory-->
	<!--[if lt IE 7 ]>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
		<script>
			CFInstall.check({
			     onmissing: function(){
								var host = window.location.host; 
								window.location.href = "ie6/";
							}
			});
		</script>
	<![endif]-->
	
	<title>UNTITLED PAGE</title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<!--  Mobile Viewport -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

	<!-- CSS : implied media="all" -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>common/css/global.css?v=1" />

	<!-- For the less-enabled mobile browsers like Opera Mini -->
	<link rel="stylesheet" media="handheld" href="<?php echo base_url(); ?>common/css/handheld.css?v=1" />
	
	<!-- Modernizr (Must be at top) -->
	<script src="<?php echo base_url(); ?>common/js/modernizr-1.5.min.js"></script>
	
	<!-- asynchronous google analytics: change the UA-XXXXX-X to be your site's ID. -->
	<script>
	/*<![CDATA[*/
		/*
		var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
		(function(d, t) {
			var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
			g.async = true;
			g.src = '//www.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s);
			})(document, 'script');
			*/
	/*]]>*/
	</script>

</head>
