<?php
	if(isset($_GET['error']))
	{
		if($_GET['error'] == 1)
			$error = 1;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Index - Bitcoin Dictionary</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" />
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
        </div>
      </div>
    </div>

  <div class="wrap">
  	<div cass="content">
  		<div class="list">
  			<ul>
  				<?php
  					if($error == 1)
  					{
  						echo "<p><span style='color:#fa9e27'>Sorry!</span> The word could not be found. Here is a list of all the words.</p><br><br>";
  					}
					$RawFile = glob('../data/*.{asciidoc}', GLOB_BRACE);
					echo "<p><span style='color:#fa9e27'>Index</span></p><br><br>";
					foreach($RawFile as $RawFileIndex) {
  						$RawBaseName = basename($RawFileIndex);
  						$RawBaseName = str_replace(".asciidoc", "", $RawBaseName);
  						$FormattedName = str_replace("_", " ", $RawBaseName);
  						echo "<li><a href='display.php?word=".$RawBaseName."'>".$FormattedName."</a></li>";
					}
				?>
  			</ul>
  		</div>
  	</div>
  </div>


  <div class="wrap">
      <div class="content">
        <div class="form">
          <form id="contact-form" action="index.php" method="get">
            <input placeholder="Search" type="text" tabindex="2" required name="word">
            <input type="submit" name="submit" id="contact-submit" value="Go">
          </form>
      </div>
    </div>

  <div class="wrap">
    <div class = "content">
        <div class="footer">
          <p class="copy">&#169; 2015 ฿itcoin Dictionary. Developed by<a href="http://ritvikgautam.in" target="_blank"> Ritvik Gautam</a>. <a href="http://blog.ritvikgautam.in/2015/10/31/introducing-bitcoin-dictionary/" target="_blank">Read More.</a></p>
        </div>
    </div>
  </div>
</body>
</html>
