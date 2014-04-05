<?php
// Information about this page
$active = "about";
$page_identifier = "about";
$page_title = "Über";
$page_has_extra_navbarentry = "false";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ANDIBI.TK Über">
    <meta name="author" content="Andreas Bielawski">
    <meta http-equiv="expires" content="86400">
    <link rel="shortcut icon" href="favicon.ico">

    <title>ANDIBI.TK | <?php echo $page_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/template.css" rel="stylesheet">
	<link href="css/genericons.css" rel="stylesheet">
	<link href="css/custom-genericons.css" rel="stylesheet">

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
    <?php include("inc/navbar.php"); ?>
    <div class="container">
	    <?php include("inc/meldungen.php"); ?>
        <div class="alert alert-success">
        <p><strong>Immer noch in der alten, langweiligen Ansicht?</strong> <i><a href="about-int.php">Teste die neue, interaktive Ansicht &raquo;</a></i></p>
      </div>
	  <div class="page-header">
		<h1>Über</h1>
	  </div>
	  <div class="pull-right">
	  <div class="row">
	   <div class="col-sm">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 align="center" class="panel-title">Steckbrief</h3>
            </div>
            <div class="panel-body">
              <p><strong>Nickname:</strong> iCON</p>
			  <p><strong>Geboren:</strong> '98</p>
			  <p><strong>Interessen:</strong> PC, Spielekonsolen, Linux, Google</p>
			  <p><strong>Fähigkeiten:</strong> HTML, etwas CSS</p>
			  <p><strong>OS & Browser:</strong> Ubuntu und Google Chrome</p>
            </div>
          </div>
        </div>
		</div>
		</div>
	  <p>Ich besitze seit 2011 <a href="http://wiidatabase.de/">WiiDatabase.de</a>. Dort schreibe ich über Nintendo & Homebrew.</p>
	  <p>Ich teste immer mal wieder meine Fähigkeiten aus, auch auf dieser Website. Vielleicht kommt später mehr Inhalt. Bis dahin!</p>
	  <div class="page-header">
	     <h1>Social Media</h1>
	  </div>
	  <a href="https://twitter.com/WiiDatabase" target="_blank"><span class="twitter"></span></a>
	  <a href="http://www.pinterest.com/AndiBie/" target="_blank"><span class="pinterest"></span></a>
	  <span class="skype"></span>
	  <a href="https://github.com/brawl345" target="_blank"><span class="github"></span></a>
	  <a href="http://reddit.com/u/brawl345" target="_blank"><span class="reddit"></span></a>
	  <a href="http://flickr.com/brawl98" target="_blank"><span class="flickr"></span></a>
	  <a href="http://www.youtube.com/user/Meleefan100" target="_blank"><span class="youtube"></span></a><br>
	  
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
	<script src="js/holder.js"></script>
  </body>
</html>
