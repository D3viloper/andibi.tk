<?php
// Information about this page
//$active = "";
$page_identifier = "phprandom";
$page_title = "Random PHP-Test";
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "phprandom.php";
$page_has_extra_navbarentry_title = "Random PHP-Test";
$isindropdown = "false";

// PHP Random Shuffle
$slogan = array("Fun & Hacking Board", "Hacken für Spacken", "Noch ein Slogan", "masterP stinkt", "Brawl ist cool", "Pegelf.de - Das N steht für Niveau!", "PENIS");
	
$sort = shuffle($slogan); 
$var = $slogan[0];  
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

    <title>ANDIBI.TK | Random PHP-Test</title>

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
    <?php include("inc/navbar.php"); ?>
    <div class="container">
	  <div class="row">
        <!-- /.col-sm-4 -->
        <p><?php echo $var ?></p>
        <p>LADE DIE SEITE NEU!</p>
          </div>
        </div><!-- /.col-sm-4 -->
		</div>
	  


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
