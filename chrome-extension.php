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

    <title>ANDIBI.TK | Chrome-Erweiterung installieren</title>

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
if($_GET['extension'] == "")
{
  $extension = "Chrome";
}
else
{
  $extension = $_GET['extension'];
}
?>
<?php
$navbarzusatz = '<li class="active"><a href="chrome-extension.php">' . $extension . '-Erweiterung installieren</a></li>';
include("inc/navbar.php");
?>

    <div class="container">
        <?php include("inc/meldungen.php"); ?>
	  <div class="page-header">
		<h1><?php echo $extension ?>-Erweiterung installieren</h1>
	  </div>
          <p>Hier erfährst du, wie du die <?php echo $extension ?>-Erweiterung installierst.</p>
          <p>Zuerst solltest du sicherstellen, dass sich die CRX-Datei der <?php echo $extension ?>-Erweiterung auf deinem System befindet.</p>
          <p>Öffne dann die "Erweiterungen"-Seite in Google Chrome. Öffne dazu das <img class="img-responsive" src="img/allgoogle/assets/chrome_menu.png" alt="3 horizontale Streifen"> Chrome-Menü und           klicke dann auf "Tools" -> "Erweiterungen".</p>
          <img class="img-responsive" src="img/allgoogle/assets/erweiterungen.png" alt="Tools und dann auf Erweiterungen">
          <p>Ziehe dann die <?php echo $extension ?>-Erweiterung von deinem Dateien-Explorer in das Erweiterungs-Fenster und lege die Erweiterung ab.</p>
          <p><strong>HINWEIS:</strong> Falls die Installation so nicht funktioniert, lade dir entweder die
          <a href="https://www.google.com/chrome/eula.html?extra=devchannel" target="_blank">Entwicklerversion von Google Chrome herunter</a> oder füge
          <i>"<a href="http://peter.sh/experiments/chromium-command-line-switches/#easy-off-store-extension-install" target="_blank">--enable-easy-off-store-extension-install            </a>"</i> zu Chromes "Eigenschaften" hinzu (unter "Ziel").</p>
          <img class="img-responsive" src="img/allgoogle/assets/erweiterung_installieren.png" alt="Erweiterung in das Fenster ziehen">
          <p>Bestätige noch den Hinweis und schon ist die <?php echo $extension ?>-Erweiterung installiert!</p>


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
