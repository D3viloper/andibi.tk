<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Andreas Bielawski">
	<meta http-equiv="expires" content="86400">
    <link rel="shortcut icon" href="favicon.ico">

    <title>ANDIBI.TK | Gefährliches Copy & Paste</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript">
		if (top != self)
		top.location = self.location;
	</script>
  </head>

  <body>
<?php
$dropdown = ' active';
$cp = ' class="active"';
include("inc/navbar.php");
?>

    <div class="container">
     <?php include("inc/meldungen.php"); ?>
	  <div class="page-header">
		<h1>Gefährliches Copy &amp; Paste</h1>
	  </div>
	  <div class="row">
        <!-- /.col-sm-4 -->
        
        <p>Alte Tricks werden neu aufgewärmt: Mittels einem einfachen HTML-Tag wird der Text, den man kopiert, ganz anders!</p>
<p>Teste es selbst:</p>
            <div class="well">
            <p>Kopiere diesen <span style="position: absolute; left: -1000px; top: -1000px">Text bloß nicht! Dies ist ein gefakter </span>Text!</p></div>
            <p>Füge den Text nun hier ein und siehe, was daraus geworden ist:</p>
         <textarea cols=60 rows=4></textarea>
            
        
		</div>
	<div class="page-header">
		<h2>Erschreckend, nicht wahr?</h2>
	  </div>
<p>Kopiere nichts von nicht vertrauenswürdigen Seiten, ohne es vorher in einem Texteditor geprüft zu haben! Insbesondere bei Terminalbefehlen kann dies schwerwiegende Folgen haben!</p>
        
        <div class="page-header">
            <h2>Doch wie zur Hölle geht das?</h2>
        </div>
<p>Ganz einfach: Der Text steht normal in einem <code>&lt;p&gt;&lt;/p&gt;</code>-Tag, sowie jeder andere Text hier auch!</p>
<p>ABER: Der unsichtbare Text wird "dank" <code>&lt;span style="position:...</code> außerhalb der Seite angezeigt!</p>
<p>Mittels STRG + U kannst du dir selber ein Bild davon machen! <span style="position: absolute; left: -1000px; top: -1000px">Ich habe einfach diesen Text von <a href="http://andibi.tk">ANDIBI.TK</a> geklaut. Ich schäme mich dafür so sehr.</span> Aber kopiere bloß nicht diese Zeile hier! ;-)</p>
<p>Übrigens: Wenn du in Google Chrome doppelt auf den Text klickst, wirst du merken, dass nicht der ganze Satz kopiert wird. Probier es mit dem Beispiel oben aus!</p>
<br><br>
<p><a href="http://www.heise.de/security/dienste/Copy-Paste-Tricks-1842691.html" target="_blank">Mit dank an Heisec</a></p>


    </div><!-- /.container -->
	</div>
	<!-- Footer -->
<?php
include("inc/footer.php");
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
