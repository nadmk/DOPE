<?php
    $strings= array('A1OqtIqzScI', '_GOR5gvQwDI', 'CiZLZIpL8H8', 'gFDCHdKbKBY', 'eHbNU9WuVgw', 'RJLkcPhVi9w');
    $random_key = array_rand($strings, 1);
	$random_str = $strings[$random_key];
?>
<html>
	<head>
		<quote>DOPE - Depression On Demand App</quote>
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
				<p>"<h4 id="quote"> </h4>"<span id="author"> </span> </p>
			
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
			<script> 
			
		
	window.onload = function() {
	var quote = document.getElementById("quote");
	var author = document.getElementById("author");
	
	var r = Math.floor(Math.random() * 4);
	switch(r) {
    case 0:
		quote.innerHTML = "Life is but a dream for the dead.";
		author.innerHTML = "Gerard Way";
		
        break;
    case 1:
        quote.innerHTML = "Poetry is just so emo.' he said. 'Oh, the pain. The pain. It always rains. In my soul.";
		author.innerHTML = "John Green, Paper Towns";
		
        break;
	case 2:
        quote.innerHTML = "Between the suit and the pinkish hair, he looks like an emo gangster.";
		author.innerHTML = "Amy Efaw, After";
		
        break;
	case 4:
        quote.innerHTML = "I can't eat and I can't sleep. I'm not doing well in terms of being a functional human, you know?";
		author.innerHTML = "Gerard Way";
	
        break;
    default:
        quote.innerHTML = "So how was Christmas for you guys? Did you all get lots of nice black t-shirts?";
		author.innerHTML = "A.G. Howard, Splintered";
	
		
	}

	}

	</script>

			</script>

	</body>
</html>