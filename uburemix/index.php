<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UbuReMiX erstellen">
    <meta name="author" content="Andreas Bielawski">
    <link rel="shortcut icon" href="uburemix.png">

    <title>Let it UbuReMiX (beta)!</title>

    <!-- Bootstrap core CSS -->
    <link href="../static/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="uburemix.css" rel="stylesheet">
	<link href="../static/css/genericons.css" rel="stylesheet">
	<link href="../static/css/custom-genericons.css" rel="stylesheet">

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
          <a class="navbar-brand" href="index.php">UbuReMiX (beta) - Dein eigenes Ubuntu</a>
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
		<h1>Let it ReMiX!</h1>
	  </div>
	  <div class="pull-right">
	  <div class="row">
	   <div class="col-sm">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 align="center" class="panel-title">Wie es funktioniert:</h3>
            </div>
            <div class="panel-body">
              <p>Unsere Server ermitteln deine Anfragen und stellen dir <br> 
              ein minimales Ubuntu-System bereit. Mittels eines Skriptes werden alle deine<br> 
              gewählten Pakete automatisch installiert, sodass du ein voll konfiguriertes System hast!</p>
            </div>
          </div>
        </div>
		</div>
		</div>
	  <p>Ubuntu ist dir zu vollgestopft? Oder zu "unfrei"? Oder du willst mehr Kontrolle? Du magst Unity nicht, möchtest auf Derrivate verzichten und dein System von vorne bis hinten selbst konfigurieren?</p>
	  <p>Das Team rund um UbuReMiX dachte sich genau das und hat deshalb den UbuReMiX (beta) erstellt. Der UbuReMiX ist dein persönliches Ubuntu-System mit den Paketen, die DU möchtest! Fange jetzt an und erstelle dein eigenes UbuReMiX-System (beta)! Völlig kostenlos natürlich!</p>
	  <div class="page-header">
	     <h1>create your beat</h1></div>
	     	  <div class="page-header">
	  <h2>Desktopoberfläche</h2></div>
	 <p>Wenn du hier mehrere Desktop-Oberflächen wählst, dann kannst du beim Einloggen zwischen den verschiedenen Oberflächen hin- und herwechseln.</p>
	 <p>Das UbuReMiX-Team empfiehlt dir aber, nur eine Oberfläche zu nutzen!</p>
	 <form action="creating.php">
<input type="hidden" name="sent" value="yes">
	  <div class="row">
 <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="Unity">
      </span>
      <p class="form-control">Unity</p>
      </span>
      </div>
      </div>
      <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="KDE">
      </span>
      <p class="form-control">KDE <span class="label label-success">UbuReMiX Empfehlung!</span></p>
      </span>
      </div>
      </div>
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="GNOME">
      </span>
      <p class="form-control">GNOME</p>
      </span>
      </div>
        <br>
      </div>
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="XFCE">
      </span>
      <p class="form-control">XFCE</p>
      </span>
      </div>
      </div>
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="LXDE">
      </span>
      <p class="form-control">LXDE</p>
      </span>
      </div>
      </div>
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="MATE">
      </span>
      <p class="form-control">MATE</p>
      </span>
      </div>
      <br>
      </div>
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="Cinnamon">
      </span>
      <p class="form-control">Cinnamon</p>
      </span>
      </div>
      </div>
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="de[]" value="Openbox">
      </span>
      <p class="form-control">Openbox</p>
      </span>
      </div>
      </div>
      </div>
	  <div class="page-header">
	     <h2>LightDM-Greeter</h2></div>
	  <p><strong>LightDM ist der Login-Manager, also der Bildschirm, wo du dich anmeldest. Wähle LightDM mit </strong></p>
	  <div class="row">
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="radio" name="greeter[]" value="Unity-Greeter">
      </span>
      <p class="form-control">Ubuntu-Greeter <span class="label label-success">UbuReMiX Empfehlung!</span></p>
      </span>
      </div>
      </div>
                  <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="radio" name="greeter[]" value="GTK3-Greeter">
      </span>
      <p class="form-control">GTK3-Greeter</p>
      </span>
      </div>
      </div>
      </div>
      <div class="page-header">
	     <h2>Internet-Browser</h2></div>
	  <div class="row">
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="browser[]" value="Firefox">
      </span>
      <p class="form-control">Mozilla Firefox</p>
      </span>
      </div>
      </div>
                  <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="browser[]" value="Chrome">
      </span>
      <p class="form-control">Google Chrome <span class="label label-success">UbuReMiX Empfehlung!</span></p>
      </span>
      </div>
      </div>
                  <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="browser[]" value="Midori">
      </span>
      <p class="form-control">Midori</p>
      </span>
      </div>
      </div>
      </div>
      <div class="page-header">
	     <h2>Datei-Manager</h2></div>
	  <div class="row">
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="radio" name="file[]" value="Nautilus">
      </span>
      <p class="form-control">Nautilus</p>
      </span>
      </div>
      </div>
                  <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="radio" name="file[]" value="Thunar">
      </span>
      <p class="form-control">Thunar <span class="label label-success">UbuReMiX Empfehlung!</span></p>
      </span>
      </div>
      </div>
                  <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="radio" name="file[]" value="Nemo">
      </span>
      <p class="form-control">Nemo <span class="label label-warning">Probleme ohne Cinnamon!</span></p>
      </span>
      </div>
      </div>
      </div>
	<div class="page-header">
	     <h2>Zusätzliches</h2></div>
	     <p>Hier kannst du zusätzliche Dinge installieren, für die wir nicht extra eine neue Kategorie erstellen wollten.</p>
	     <p>Du hast hier natürlich freie Wahl! Möglicherweise gelten bestimmte Bedinungen, abhängig von deinem Land!</p>
	  <div class="row">
            <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="Pidgin installieren">
      </span>
      <p class="form-control">Pidgin installieren</p>
      </span>
      </div>
      </div>
                  <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="Skype installieren">
      </span>
      <p class="form-control">Skype installieren</p>
      </span>
      </div>
      </div>
                        <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="Programme für deine Oberfläche installieren">
      </span>
      <p class="form-control">Programme für deine Oberfläche <span class="label label-success">Empfehlung!</span></p>
      </span>
      </div>
      <br>
      </div>
                  <div class="col-lg-7">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="Codecs und zusätzliche Programme installieren (Java, Flash...)">
      </span>
      <p class="form-control">Codecs und zusätzliche Programme installieren (Java, Flash...) <span class="label label-success">UbuReMiX Empfehlung!</span></p>
      </span>
      </div>
      </div>
                        <div class="col-lg-5">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="VLC installieren">
      </span>
      <p class="form-control">VLC installieren <span class="label label-success">UbuReMiX Empfehlung!</span></p>
      </span>
      </div>
      <br>
      </div>
                              <div class="col-lg-5">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="Ubuntu Software Center installieren">
      </span>
      <p class="form-control">Ubuntu Software Center installieren <span class="label label-success">UbuReMiX Empfehlung!</span></p>
      </span>
      </div>
      </div>
                                    <div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="Thunderbird installieren">
      </span>
      <p class="form-control">Thunderbird installieren</p>
      </span>
      </div>
      </div>
                           <div class="col-lg-4">
    <div class="input-group">
      <span class="input-group-addon">
      <input type="checkbox" name="things[]" value="GParted installieren">
      </span>
      <p class="form-control">GParted installieren</p>
      </span>
      </div>
      </div>
      </div>
      <!-- DER HIER KOMMT GANZ UNTEN HIN! -->
   <input class="btn btn-lg btn-success" type="submit" value="ERSTELLE MEINEN MIX!">
</form>
 </form>
       </div>
  </div>	  


    </div><!-- /.container -->
</div>
	<!-- Footer -->
<?php
$zusatz = '- "Ubuntu" ist eine Marke von Canonical Ltd.';
include("../templates/footer.php");
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../static/js/jquery-1.10.2.min.js"></script>
    <script src="../static/js/bootstrap.min.js"></script>
	<script src="../static/js/holder.js"></script>
  </body>
</html>
