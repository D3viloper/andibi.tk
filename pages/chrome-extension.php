<?php
if($_GET['extension'] == "")
{
  $extension = "Chrome";
}
else
{
  $extension = $_GET['extension'];
}
// Information about this page
//$active = "";
$page_identifier = "chrome-extension";
$page_title = "chrome-extension";
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "chrome-extension.php";
$page_has_extra_navbarentry_title = $extension . "-Erweiterung installieren";
include("inc/headInclude.php");
include("inc/navbar.php");
?>
    <div class="container">
        <?php include("inc/meldungen.php"); ?>
	  <div class="page-header">
		<h1><?php echo $extension ?>-Erweiterung installieren</h1>
	  </div>
          <p>Hier erfährst du, wie du die <?php echo $extension ?>-Erweiterung installierst.</p>
          <p>Zuerst solltest du sicherstellen, dass sich die CRX-Datei der <?php echo $extension ?>-Erweiterung auf deinem System befindet.</p>
          <p>Öffne dann die "Erweiterungen"-Seite in Google Chrome. Öffne dazu das <img class="img-responsive" src="img/allgoogle/assets/chrome_menu.png" alt="3 horizontale Streifen"> Chrome-Menü und           klicke dann auf "Tools" -> "Erweiterungen".</p>
          <img class="img-responsive" src="img/allgoogle/assets/erweiterungen.png" alt="Tools und dann auf Erweiterungen">
          <p>Ziehe dann die <?php echo $extension ?>-Erweiterung von deinem Dateien-Explorer in das Erweiterungs-Fenster und lege die Erweiterung ab.</p>
          <p><strong>HINWEIS:</strong> Falls die Installation so nicht funktioniert, lade dir entweder die
          <a href="https://www.google.com/chrome/eula.html?extra=devchannel" target="_blank">Entwicklerversion von Google Chrome herunter</a> oder füge
          <i>"<a href="http://peter.sh/experiments/chromium-command-line-switches/#easy-off-store-extension-install" target="_blank">--enable-easy-off-store-extension-install            </a>"</i> zu Chromes "Eigenschaften" hinzu (unter "Ziel").</p>
          <img class="img-responsive" src="img/allgoogle/assets/erweiterung_installieren.png" alt="Erweiterung in das Fenster ziehen">
          <p>Bestätige noch den Hinweis und schon ist die <?php echo $extension ?>-Erweiterung installiert!</p>


    </div><!-- /.container -->
	</div>
	<!-- Footer -->
    <?php include("inc/footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
