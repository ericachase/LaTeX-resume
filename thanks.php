<html>
<head>
	<title>Thank You</title>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</head>
<body class="grey darken-3" background="background.jpg" style="background-position: bottom right">
	<article>
		<header><a href="index.html">Thank You</a></header>
		<div class="progress">
		    <div class="indeterminate"></div>
		</div>
		<p class="copy">Your download will start shortly</p>

		<a href="templates.html"><button class="waves-effect waves-light btn-large">View Templates</button></a>
		<a href="builder.html"><button class="waves-effect waves-light btn-large">Try again?</button></a>
	</article>

	<footer style="margin-top: 25%">
		<a href="mailto:erica@eresumebuilder.com">Contact </a> | <a href="https://github.com/ericachase/LaTeX-resume">GitHub </a> | ©2016
	</footer>
</body>
</html>


<?php
$path = 'resume.pdf';
header("Content-Length: " . filesize ( $path ) ); 
header("Content-type: application/pdf"); 
header("Content-disposition: attachment; filename=".basename($path));
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
ob_clean();
flush();
readfile($path);
?>