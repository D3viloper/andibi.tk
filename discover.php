<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Entdecke das neue ANDIBI.TK">
    <meta name="author" content="Andreas Bielawski">
	<meta http-equiv="expires" content="86400">

    <link rel="shortcut icon" href="favicon.ico">

    <title>ANDIBI.TK | Das neue ANDIBI.TK</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	
	<script type="text/javascript">
		if (top != self)
		top.location = self.location;
	</script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
<?php
$navbarzusatz = '<li class="active"><a href="discover.php">Das neue ANDIBI.TK</a></li>';
include("inc/navbar.php");
?>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/carousel/andibitk.png" alt="ANDIBI.TK">
          <div class="container">
            <div class="carousel-caption">
              <h1>Das neue ANDIBI.TK</h1>
              <p>Das neue ANDIBI.TK ist da: Mit einem brandneuen Design und neuen Technologien!</p>
              <p><a class="btn btn-lg btn-primary" href="index.php" role="button">Jetzt erleben</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/carousel/bootstrap.png" alt="Bootstrap">
          <div class="container">
            <div class="carousel-caption">
              <h1>Powered by Bootstrap</h1>
              <p>ANDIBI.TK benutzt Bootstrap, ein Framework zur einfachen Gestaltung von Webanwendungen.</p>
              <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com/" target="_blank" role="button">Mehr erfahren</a></p>
            </div>
          </div>
        </div>
       <div class="item">
          <img src="img/carousel/archlinux.png" alt="Bootstrap">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary" href="http://archlinux.de" target="_blank" role="button">Powered by ArchLinux</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    <?php include("inc/meldungen.php"); ?>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/promoting/design.png" alt="Navbar">
          <h2>Design</h2>
          <p>Schwarz ist das neue Grün.</p>
          <p><a class="btn btn-default" href="#design" role="button">Mehr Infos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/promoting/navbar.png" alt="Navbar">
          <h2>Navbar</h2>
          <p>Damit du immer alles im Blick hast.</p>
          <p><a class="btn btn-default" href="#navbar" role="button">Mehr Infos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/promoting/bootstrap.png" alt="Generic placeholder image">
          <h2>Bootstrap</h2>
          <p>ANDIBI.TK verwendet nun Bootstrap.</p>
          <p><a class="btn btn-default" href="#bootstrap" role="button">Mehr Infos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
	  <a name="design"></a>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Ein neues Design. <span class="text-muted">Weg mit Grün.</span></h2>
          <p class="lead">Weg mit kahlem Grün, Rot und Lila! Das neue ANDIBI.TK verwendet nun eine brandneue Farbpalette, damit du dich wohler fühlst. Denn du bist der Besucher und stehst an oberster Stelle. Das Design passt sich haargenau deiner Bildschirmgröße an.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/promoting/design_big.png" alt="Eine neue Farbpalette">
        </div>
      </div>

      <hr class="featurette-divider">
	  <a name="navbar"></a>
      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/promoting/navbar_big.png" alt="Eine Navbar">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Eine Navbar. <span class="text-muted">Damit du immer alles im Blick hast.</span></h2>
          <p class="lead">Verliere nie den Überblick mit der neuen Navbar. Sie funktioniert auf jedem Gerät, ganz egal, welche Bildschirmgroüße.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
	  <a name="bootstrap"></a>
        <div class="col-md-7">
          <h2 class="featurette-heading">Bootstrap. <span class="text-muted">Sieh genau hin.</span></h2>
		  <div class="well">
			<p>Bootstrap ist eine freie Sammlung von Hilfsmitteln für die Gestaltung von Websites und Webanwendungen. Es enthält auf HTML und CSS basierende Gestaltungsvorlagen für Typografie, Formulare, Buttons, Tabellen, Grid-System, Navigations- und andere Oberflächengestaltungselemente sowie zusätzliche, optionale JavaScript-Erweiterungen. Es ist das populärste Projekt beim Open-Source-Hostingdienst GitHub und wird unter anderem von der NASA und MSNBC eingesetzt.</p>
		  </div>
		  <p class="lead">Damit sieht alles einheitlich aus und ist wie ein Baukasten aufgebaut. Verände die Farbe eines Buttons und es ändert sich die Farbe von allen Buttons! Bootstrap macht mehr Spaß beim Programmieren.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/promoting/bootstrap_big.png" alt="Bootstrap Framework">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

	<!-- Footer -->
<?php
$zusatz = '- <a href="#">Nach oben</a>';
include("inc/footer.php");
?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>
