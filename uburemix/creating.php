<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UbuReMiX erstellen...">
    <meta name="author" content="Andreas Bielawski">
    <!-- <meta http-equiv="refresh" content="7; URL=fertig.php"> -->
    <link rel="shortcut icon" href="uburemix.png">

    <title>creating your beat...</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="uburemix.css" rel="stylesheet">
	<link href="../css/genericons.css" rel="stylesheet">
	<link href="../css/custom-genericons.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
  	<div id="wrap">
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">UbuReMiX - Dein eigenes Ubuntu</a>
        </div>
        <div class="collapse navbar-collapse">
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">UbuReMiX</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
	  <div class="page-header">
		<h1>creating your beat........</h1>
	  </div>

	   <?php
         $sent = $_GET['sent'];			// Weichensteller
         $de = $_GET['de']; 			// Inhalt von DE
         $greeter = $_GET['greeter']; 		// Inhalt von Greeter
         $browser = $_GET['browser']; 		// Inhalt von Browser
         $file = $_GET['file']; 		// Inhalt von File
         $things = $_GET['things']; 		// Inhalt von Things
         
         // Nicht-ausgefüllt-Prüfung
         if ($de == '') { $sent = 'false'; }
	 if ($greeter == '') { $sent = 'false'; }
	 if ($browser == '') { $sent = 'false'; }
	 if ($file == '') { $sent = 'false'; }
	 
	 // Ende der Prüfung
  
         if ($sent == 'yes') {
                 $de_text = implode(', ',$de);
                 $greeter_text = implode(', ',$greeter);
                 $browser_text = implode(', ',$browser);
                 $file_text = implode(', ',$file);
                 $things_text = implode(', ',$things);
                 echo '<p>Wir erstellen gerade deinen persönlichen ReMiX!</p>';
	  	 echo '<p>Dies dürfte nicht allzu lange dauern! Bitte schließe nicht das Browserfenster!</p>';
	  	 echo '<br>';
	  	 echo '<div class="alert alert-info"><p><strong>HINWEIS:</strong> Nach dem Erstellen ist dein ReMiX nur einmal downloadbar!</p></div>';
	  	 echo '<br>';
                 echo '<script type="text/javascript">window.setTimeout(\'window.location = "fertig.php"\',7000);</script>';
  		 echo '<img class="img-responsive" src="progressbar.gif" alt="Erstelle ReMiX...">';
                 echo  '<p><strong>Desktop-Oberfläche:</strong><br>'.$de_text.'</p>';
                 echo  '<p><strong>LightDM-Greeter:</strong><br>'.$greeter_text.'</p>';
                 echo  '<p><strong>Browser:</strong><br>'.$browser_text.'</p>';
                 echo  '<p><strong>Datei-Manager:</strong><br>'.$file_text.'</p>';
                 echo  '<p><strong>Das werden wir noch tun:</strong><br>Uns bei dir für die Nutzung von UbuReMiX bedanken! '.$things_text.'</p>';
                  if (strpos($browser_text,"Chrome")!==false) echo  '<div class="alert alert-danger"><p><strong>Beim Herunterladen stimmst du den Google Chrome-Nutzungsbedingungen zu:</strong></p></div> <iframe src="chrome-eula.html" width="100%" height="300" name="chreula"><p><a href="chrome-eula.html">Nutzungsbedingungen von Google Chrome lesen</a></p></iframe>';
         }
         else {
	  	echo '<div class="alert alert-danger"><p><strong>FEHLER:</strong> Ein oder mehrere Optionen wurden nicht gesetzt! Bitte <a href="index.php">versuche es erneut</a>!';
	  if ($de == '') { echo '<li>Desktopumgebung</li>'; }
	  if ($greeter == '') { echo '<li>LightDM-Greeter</li>'; }
	  if ($browser == '') { echo '<li>Browser</li>'; }
	  if ($file == '') { echo '<li>Datei-Manager</li>'; }
	  echo '</ul></div>';
         }
 ?>
 


    </div><!-- /.container -->
</div>
	<!-- Footer -->
<?php
$zusatz = '- "Ubuntu" ist eine Marke von Canonical Ltd.';
include("../inc/footer.php");
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
