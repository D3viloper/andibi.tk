<?php
  $shownpage_page = array("page_idf" => "index", "title" => "Home", "description" => "ANDIBI.TK - Die private Website vom Macher der WiiDatabase");
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
    <div class="col-md-12">
    <div class="jumbotron">
        <h1>Willkommen auf ANDIBI.TK!</h1>
        <p>Hier erfährst du etwas über mich und meine Projekte außerhalb der WiiDatabase.</p>
          <a class="btn btn-lg btn-success" href="https://github.com/Brawl345/andibi.tk/commits/master" role="button">Letzte &Auml;nderungen &raquo;</a>
        <a class="btn btn-lg btn-warning" href="discover.php" role="button">Entdecke das Design &raquo;</a>
    </div>
    </div>

    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>WiiDatabase.de</h4>
    </div>
    <div class="panel-body">
    <p>Die WiiDatabase wurde am 04. August 2011 gegründet. Hier gibt es aktuelle News &amp; Downloads rund um Wii, Wii U, 3DS und Homebrew.</p>
    <div class="clearfix"></div>
      <hr>
    <a href="http://wiidatabase.de" target="_blank" class="list-group-item active shadow-z-2">Besuche WiiDatabase.de</a>
    </div>
    </div>
    </div>

    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>WiiDatabase Wiki</h4>
    </div>
    <div class="panel-body">
    <p>Ein Wiki über Wii, Wii U, 3DS, Homebrew und mehr!</p>
    <div class="clearfix"></div>
      <hr>
    <a href="https://wiki.wiidatabase.de/wiki/Hauptseite" target="_blank" class="list-group-item active shadow-z-2">Besuche das WiiDatabase Wiki</a>
    </div>
    </div>
    </div>
    </div><!--/row-->
    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
