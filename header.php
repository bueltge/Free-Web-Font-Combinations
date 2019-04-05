<!DOCTYPE html>
<html>
	<!--
	+---------------+
	¦               ¦
	¦   ¦           ¦
	¦   +--+        ¦
	¦   ¦  ¦        ¦
	¦   +--+        ¦
	¦   bueltge.de  ¦
	¦               ¦
	+---------------+
	Welcome to my Source ;)
	
	If you want to see the source on repo and you will give me feedback, check out:
	https://github.com/bueltge/Free-Web-Font-Combinations
	-->
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=960, maximum-scale=1">
		
		<title>Beautiful web type combinations &mdash; maybe the best typefaces combinations from the Google web fonts directory</title>
		<meta name="description" content="A showcase of the best typefaces from the Google web fonts directory.">
		<meta name="author" content="Frank Bueltge">
		<link rel="author" href="mailto:frank@bueltge.de" title="send eMail to author">
		<link rel="DCTERMS.license" href="http://creativecommons.org/licenses/by-sa/3.0/">
		
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link href="styles/normalize.css" rel="stylesheet" type="text/css" media="screen">
		<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen">
		
		<?php
		require_once( 'intro/head-intro.php' );
		$folder = 'fonts';
		$handle = @opendir( dirname( __FILE__ ) . '/' . $folder );
		if ( ! $handle )
			return;
			
		while ( false !== ( $font = readdir( $handle ) ) ) {
			
			if ( 'head.php' === substr( $font, -8 ) ) {
				require_once dirname( __FILE__ ) . '/' . $folder . '/' . $font;
				echo "\n\t\t";
			}
		}
		?>
		
	</head>
	
	<body>
		
		<section role="main" id="container">
		
		<a id="github" href="https://github.com/bueltge/Free-Web-Font-Combinations">
			<span>Fork me on GitHub!</span>
			<span>Get free lemonade!</span>
		</a>
		
