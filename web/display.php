<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Bitcoin Dictionary</title>
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

  <div id="editorPanel"  style="float: left;">
    <!-- do not indent text inside the textarea. -->
    <textarea id="txtAsciiDoc" style="display:none;">
<?php
$text = file_get_contents('../data/'.$_GET['word'].'.asciidoc');
if($text == FALSE)
  header('Location: all.php?error=1');
echo $text;
?>
    </textarea>
  </div>

  <div class="wrap">
    <div class="content">
      <div id="viewerPanel" style="float: center;">
        <div id="content" class="heading">
        </div>
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

  <script src="js/opal.js"></script>
  <script src="js/asciidoctor.js"></script>
  <script type="text/javascript">
      var isCalled = false;

      function renderAsciiDoc() {
          if (!isCalled) {
              isCalled = true;

              // add attribute options for Font-Awesome by default
              var asciidoctorAttributes = Opal.hash2(['attributes'], { 'attributes': ['icons=font@'] });  // by adding the @ symbol, attributes added in line in the asciidoc text takes precedence over this hard-coded attribute

              //var html_doc = Opal.Asciidoctor.$render(document.getElementById("txtAsciiDoc").value);
              var html_doc = Opal.Asciidoctor.$render(document.getElementById("txtAsciiDoc").value, asciidoctorAttributes);

              document.getElementById('content').innerHTML = html_doc;
              return false;
          }
      }

      setInterval('isCalled = renderAsciiDoc()', 10);

      // Render HTML from AsciiDoc text
      document.getElementById('txtAsciiDoc').addEventListener('keydown', function (e) {
          isCalled = renderAsciiDoc();
      }, false);
  </script>
</body>
</html>
