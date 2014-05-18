<?php
$shownpage_page = array("page_idf" => "about", "title" => "Über", "description" => "ANDIBI.TK Über", "genericons" => "true");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
	    <?php include("templates/meldungen.php"); ?>
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
    <div class="page-header">
        <h1>Open-Source!</h1>
    </div>
      <p>ANDIBI.TK ist <strong>Open-Source!</strong> <a href="https://github.com/Brawl345/andibi.tk" target="_blank">Sieh es dir an!</a></p>
	  
    </div><!-- /.container -->
</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
