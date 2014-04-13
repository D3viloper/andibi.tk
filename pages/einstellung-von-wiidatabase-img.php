<?php
$shownpage_page = array("page_idf" => "einstellung-von-wiidatabase-img", "title" => "Einstellung von WiiDatabase IMG", "description" => "WiiDatabase IMG Einstellung");
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "einstellung-von-wiidatabase-img.php";
$page_has_extra_navbarentry_title = "Einstellung von WiiDatabase IMG";
?>
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

    <title>Einstellung von WiiDatabase IMG</title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/css/template.css" rel="stylesheet">

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
    <?php include("templates/navbar.php"); ?>
        <div class="container">
        <?php echo meldung("WiiDatabase IMG wurde geschlossen.", danger); ?>
	  <div class="page-header">
		<h1>WiiDatabase IMG wurde am 04. April 2014 vollkommen <strong>eingestellt</strong>!</h1>
	  </div>
	  <p>Aufgrund der wachsenden Bildgrößen und der Anzahl der hochgeladenen Bilder und des begrenzten Speichers haben wir uns dazu entschlossen, WiiDatabase IMG einzustellen. Vielen Dank für dein Verständnis!</p>

	  <div class="page-header">
	     <h1>Was bedeutet das für mich?</h1>
	     	  </div>
	     <p>Wir haben in der letzten Zeit alle notwendigen Bilder versandt. Einige Bilder konnten niemandem zugeordnet werden, diese sind für immer verloren.</p>
	     <p><strong>Am 04. März 2014</strong> wurde die Domain img.wiidatabase.de abgeschalten. Das bedeutet, dass Bilder von WiiDatabase IMG "ins Leere laufen" und nichts mehr anzeigen. Ebenso die Bilder, die auf http://wiidatabase.de/pic gehostet waren. Bilder, die auf static.wiidatabase.de gehostet sind, bleiben jedoch erhalten.</p>
	     <p><i><strong>WICHTIG:</strong> Falls dir deine Bilder zugesandt wurden, hast du bis zum 15. April 2014 Zeit, diese herunterzuladen. Danach werden diese VOLLSTÄNDIG gelöscht. Du kannst den Löschvorgang auch sofort einleiten, indem du uns einfach eine E-Mail zurückschreibst</i></p>
	     <p><i>Mit der Stoppung des Dienstes wurden auch alle Userdaten und alle Bilder aus unserem System gelöscht, also keine Sorge!</i></p>

	  
    </div><!-- /.container -->
</div>
	<!-- Footer -->
<?php
$zusatz = '- WiiDatabase IMG war ein Service der <a href="http://wiidatabase.de">WiiDatabase</a>.';
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
