<?php
$sentences = file('quotes.txt');

$keyNr = array_rand($sentences, 1);
    $strings= array('A1OqtIqzScI', '_GOR5gvQwDI', 'CiZLZIpL8H8', 'gFDCHdKbKBY', 'eHbNU9WuVgw', 'RJLkcPhVi9w');
    $random_key = array_rand($strings, 1);
	$random_str = $strings[$random_key];
?>
<html>
	<head>
		<title>DOPE - Depression On Demand App</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>DOPE</h1>
				<p>Depression On Demand App</p>
				<h4> <?php print($sentences[$keyNr]); ?></h4>
			
			</header>
			
			<object width="640" height="360">
    <param name="movie" value="https://www.youtube.com/embed/<?php echo $random_str ?>?html5=1&amp;rel=0&amp;hl=en_US&amp;version=3"/
    <param name="allowFullScreen" value="true"/>
    <param name="allowscriptaccess" value="always"/>
    <embed width="640" height="360" src="https://www.youtube.com/embed/<?php echo $random_str ?>?html5=1&amp;rel=0&amp;hl=en_US&amp;version=3" class="youtube-player" type="text/html" allowscriptaccess="always" allowfullscreen="true"/>
</object>

		<!-- Footer -->
			<footer id="footer">
		
				<ul class="copyright">
					<li>&copy; Nick Adam 2017.</li> Follow this Project on <a href="https://github.com/NickTehPro/DOPE"> Github </a>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			

	</body>
</html>