<?php
  if($_GET['extension'] == "") {
    $extension = "Chrome";
  }
  else
  {
  $extension = htmlspecialchars($_GET['extension']);
  }
  
  // Information about this page
  $shownpage_page = array("page_idf" => "chrome-extension", "title" => $extension . "-Erweiterung installieren", "description" => "ANDIBI.TK - Eine Chrome-Erweiterung installieren");
  $page_has_extra_navbarentry = "true";
  $page_has_extra_navbarentry_url = "chrome-extension.php";
  $page_has_extra_navbarentry_title = $extension . "-Erweiterung installieren";
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>

   <!--main-->
    <div class="container" id="main">
    <div class="row">
	  <?php echo meldung('Achtung, Chrome-User: <a href="https://blog.chromium.org/2015/05/continuing-to-protect-chrome-users-from.html" target="_blank"><strong>ab Juli 2015</strong></a> wird es in keinem Kanal unter Windows und OS X mehr möglich sein, Erweiterungen außerhalb des Web Stores zu installieren.<br>Choose Independent - <a href="https://www.mozilla.org/de/firefox/new/" target="_blank"><strong>Choose Firefox!</strong></a>', danger); ?>
      <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4><?php echo $extension ?>-Erweiterung installieren</h4>
    </div>
     <div class="panel-body">
      <p>Hier erfährst du, wie du die <?php echo $extension ?>-Erweiterung installierst.</p>
          <p>Zuerst solltest du sicherstellen, dass sich die CRX-Datei der <?php echo $extension ?>-Erweiterung auf deinem System befindet.</p>
          <p>Öffne dann die "Erweiterungen"-Seite in Google Chrome. Klicke dazu auf das <img class="img-responsive" src="img/assets/chrome_menu.png" alt="3 horizontale Streifen"> Chrome-Menü und klicke dann auf "Tools" -> "Erweiterungen".</p>
          <img class="img-responsive" src="img/assets/erweiterungen.png" alt="Tools und dann auf Erweiterungen">
          <p>Ziehe dann die <?php echo $extension ?>-Erweiterung von deinem Dateien-Explorer in das Erweiterungs-Fenster und lege die Erweiterung ab.</p>
          <img class="img-responsive" src="img/assets/erweiterung_installieren.png" alt="Erweiterung in das Fenster ziehen">
          <p>Bestätige noch den Hinweis und schon ist die <?php echo $extension ?>-Erweiterung installiert!</p>
      </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6">
    <div class="well">
      <h4>HINWEISE</h4>
      <p>Unter Windows benötigst du die <a href="https://www.google.com/chrome/eula.html?extra=devchannel" target="_blank">Developer-</a> oder die <a href="https://www.google.com/intl/de/chrome/browser/canary.html" target="_blank">Canary-Version</a> von Google Chrome. <strong>Ab Juli 2015 funktioniert diese Anleitung nur noch mit der Linux-Version von Google Chrome.</strong></p>
        <p>Mit dieser Website kannst du die Anleitung zum Installieren einer Erweiterung ganz einfach verlinken! Hänge einfach <code>?extension=NAME</code> an die URL an, bspw.<br><a href="chrome-extension.php?extension=APK-Downloader">?extension=APK-Downloader</a>.</p>
    </div>



   </div>
        </div>
    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
