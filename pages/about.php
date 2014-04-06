<?php
// Information about this page
$active = "about";
$page_identifier = "about";
$page_title = "Über";
$page_description = "ANDIBI.TK Über";
$page_has_extra_navbarentry = "false";
$page_uses_genericons = "true";

include("inc/headInclude.php");
include("inc/navbar.php");
?>
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
