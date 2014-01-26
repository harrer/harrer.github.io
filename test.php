<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="stylesheets/stylesheet.css">
		<title>My Page</title>
	</head>
	<body>
		<div id="header_wrap" class="outer" align="center">
			<?php
				$l = isset($_POST['length'])? $_POST['length'] : 12;
				$l = isset($_GET['l'])? $_GET['l']: $l;
				echo("<pre>Your password with length ".$l." is:</pre>\n</div><br>\n<div id=\"content_wrap\" class=\"outer\"><section id=\"main_content\" class=\"inner\"><a>");
				system("openssl rand -base64 32 | head -c ".$l);
				echo("<br><a href=\"test.php?l=".$l."\">Get another one</a>");
			?>
			</a>
			</section>
		</div>
		</h3>
	</body>
</html>

