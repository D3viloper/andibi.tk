<?php
$shownpage_page = array("page_idf" => "index", "title" => "Home");

// PHP Countdown
$zielzeit = mktime(0, 0, 0, 04, 16, 2014);
$now = time();
$diff = $zielzeit - $now;
$tage = ceil($diff / (60*60*24));
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
    <?php include("templates/meldungen.php"); ?>
	        <div class="jumbotron">
        <h1>Willkommen auf ANDIBI.TK!</h1>
        <p>Hier erfährst du etwas über mich und meine Projekte außerhalb der WiiDatabase.</p>
        <p>In <?php print $tage; if ($tage == '1') { echo ' Tag'; } else { echo ' Tagen'; } ?> habe ich endlich wieder regulär Internet!</p>
          <a class="btn btn-lg btn-primary" href="internet.php" role="button">Sieh dir den Countdown an und lese den Internet-Blog &raquo;</a>
      </div>


	  <div class="page-header">
		<h1>Linkverzeichnis</h1>
	  </div>
	  <div class="row">
        <!-- /.col-sm-4 -->
        <div class="col-sm-6">
          <div class="list-group">
            <a href="http://wiidatabase.de/" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">WiiDatabase.de</h4>
              <p class="list-group-item-text">Aktuelle News und Downloads rund um Wii, 3DS, Wii U und Homebrew</p>
            </a>
            <a href="http://wiki.wiidatabase.de/" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">WiiDatabase Wiki (beta)</h4>
              <p class="list-group-item-text">Das Wiki der WiiDatabase rund um Nintendo & Homebrew</p>
              </a>
          </div>
        </div><!-- /.col-sm-4 -->
                <!-- /.col-sm-4 -->
                <div class="col-sm-6">
          <div class="list-group">
            <a href="https://pegelf.de/" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Pegelf.de</h4>
              <p class="list-group-item-text">Du hast Langeweile oder suchst nach einem guten Minecraft-Server? Dann melde dich an bei Pegelf.de, dem Forum von Mitgliedern für Mitglieder! Partner der WiiDatabase.</p>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
		</div>
	  


    </div><!-- /.container -->
	</div>
	<!-- Footer -->
    <?php include("templates/footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
  </body>
</html>
