<?php
$shownpage_page = array("page_idf" => "index", "title" => "Home", "description" => "ANDIBI.TK - Die private Website vom Macher der WiiDatabase");

include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
    <?php include("templates/meldungen.php"); ?>
	        <div class="jumbotron">
        <h1>Willkommen auf ANDIBI.TK!</h1>
        <p>Hier erfährst du etwas über mich und meine Projekte außerhalb der WiiDatabase.</p>
        <p>Ich habe nun wieder Internet!</p>
          <a class="btn btn-lg btn-success" href="https://github.com/Brawl345/andibi.tk/commits/master" role="button">Letzte Commits ansehen &raquo;</a>
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
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
