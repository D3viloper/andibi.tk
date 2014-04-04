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

    <title>ANDIBI.TK | User-Agent</title>

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
$useragent = ' class="active"';
include("inc/navbar.php");
?>

    <div class="container">
     <?php include("inc/meldungen.php"); ?>
	  <div class="page-header">
		<h1>Dein User-Agent lautet</h1>
		</div>
  <div class="row">
        <!-- /.col-sm-4 -->
        <div class="well">
	<script type="text/javascript">
		document.write(navigator.userAgent);
	</script>
</div> 
          
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 align="center"  class="panel-title">Was ist ein User-Agent?</h3>
            </div>
            <div class="panel-body">
              <p>Der User-Agent ist der String, den dein Browser an eine Website übermittelt. Zum Beispiel wird dann angezeigt, welchen Browser in welcher Version du nutzt.</p>
                <p><strong>An Entwickler:</strong> Erkennung der Browser über den User-Agent ist <strong>nicht emfpohlen!</strong> Benutze Feature-Erkennung!</p>
            </div>
          </div>
              </div>
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
