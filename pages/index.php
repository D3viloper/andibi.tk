<?php
$shownpage_page = array("page_idf" => "index", "title" => "Home", "description" => "ANDIBI.TK - Die private Website vom Macher der WiiDatabase");
include("templates/plus-headInclude.php");
include("templates/plus-navbar.php");
include("templates/plus-meldungen.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
    <div class="col-md-12">
    <div class="jumbotron">
        <h1>Willkommen auf ANDIBI.TK!</h1>
        <p>Hier erfährst du etwas über mich und meine Projekte außerhalb der WiiDatabase.</p>
          <a class="btn btn-lg btn-success" href="https://github.com/Brawl345/andibi.tk/commits/master" role="button">Letzte Commits ansehen &raquo;</a>
          <a class="btn btn-lg btn-primary" href="archrepo.php" role="button">Zur Arch Linux Repo &raquo;</a>
    </div>
    </div>

    <div class="col-md-4">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>WiiDatabase.de</h4>
    </div>
    <div class="panel-body">
    <p>Die WiiDatabase wurde am 04. August 2011 gegründet. Hier gibt es aktuelle News & Downloads rund um Wii, Wii U, 3DS und Homebrew.</p>
    <div class="list-group">
                <a href="http://wiidatabase.de" target="_blank" class="list-group-item active">Besuche WiiDatabase.de</a>
              </div>
    </div>
    </div>
    </div>

    <div class="col-md-4">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>WiiDatabase Wiki (beta)</h4>
    </div>
    <div class="panel-body">
    <p>Ein Wiki über Wii, Wii U, 3DS, Homebrew und mehr! Beta-Phase</p>
    <div class="list-group">
                <a href="http://wiki.wiidatabase.de/wiki/Hauptseite" target="_blank" class="list-group-item active">Besuche das WiiDatabase Wiki (beta)</a>
              </div>
    </div>
    </div>
    </div>

    <div class="col-md-4">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Pegelf.de (Partner)</h4>
    </div>
    <div class="panel-body">
    <p>Laufen dein PC oder deine Konsole nicht? Hast du keinen Minecraftserver zum Zocken? Oder ist dir einfach langweilig?<br><br>

  Gegen diese Probleme wirst du in unserer Community viele freundliche Helfer finden.
  Seit mehreren Jahren treffen sich gleichgesinnte Technikfans im Teenageralter, um sich über das Neuste auszutauschen und Spass zu haben.
  Wir bieten dir ein Forum, einen Blog und einen Minecraftserver. Wenn du dich also angesprochen fühlst, worauf wartest du noch?</p>
    <div class="list-group">
                <a href="http://pegelf.de" target="_blank" class="list-group-item active">Besuche Pegelf.de</a>
              </div>
    </div>
    </div>
    </div>
    </div><!--/row-->
    <!-- Footer -->
<?php include("templates/plus-footer.php");
      include("templates/htmlEnd.php");?>
