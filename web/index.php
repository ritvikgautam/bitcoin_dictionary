<?php
  if(isset($_GET['word']))
  {
  	$FormattedName = ucwords($_GET['word']);
  	$FormattedName = str_replace(" ", "_", $FormattedName);
    header('Location: display.php?word='. $FormattedName);
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<title>Bitcoin Dictionary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<meta name="description" content="The one stop place for bitcoin vocabulary.">
		<meta name="keywords" content="Bitcoin, definition, dictionary, meaning, mining, crypto, currency">
		<meta name="author" content="Ritvik Gautam">
	</head>
	<body>
		<div class="wrap">
			<div class="content">
				<div class="logo">
					<a href="index.php"><h1><span style="color:#fa9e27">฿</span>itcoin Dictionary</h1></a>
					<hr>
					<p style="font-size:40px">The one stop place for <span style="color:#fa9e27">฿</span>itcoin vocabulary.</p>
				</div>
				<div class="form">
					<form id="contact-form" action="index.php" method="get">
						<input placeholder="Search" type="text" tabindex="2" required name="word">
						<input type="submit" name="submit" id="contact-submit" value="Go">
					</form>
					<div class="subheading">
						<p id="below"><a href="all.php">Or have a look at the complete list.</a></p>
					</div>
				</div>
				<div class="footer" style="font-size=:0.85em">
					<p class="copy">&#169; 2015 ฿itcoin Dictionary. Developed by<a href="http://ritvikgautam.in" target="_blank"> Ritvik Gautam</a>.</p>
				</div>
			</div>
		</div>
	</body>
</html>