<?php
$shownpage_page = array("page_idf" => "about", "title" => "Über", "description" => "ANDIBI.TK Über", "genericons" => "true");
include("templates/plus-headInclude.php");
include("templates/plus-navbar.php");
include("templates/plus-meldungen.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
      <?php include("templates/meldungen.php"); ?>
        <div class="alert alert-success">
          <p><strong>Zu interaktiv?</strong> <i><a href="about.php">Wechsle zurück zur alten, langweiligen Ansicht &raquo;</a></i></p>
        </div>
    <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4><img src="img/allgoogle/buddies/andibi.jpg" class="img-circle">  Über ANDIBI.TK</h4>
    </div>
     <div class="panel-body">
      <p>Ich besitze seit 2011 <a href="http://wiidatabase.de/">WiiDatabase.de</a>. Dort schreibe ich über Nintendo & Homebrew.</p>
      <p>Ich teste immer mal wieder meine Fähigkeiten aus, auch auf dieser Website. Vielleicht kommt später mehr Inhalt. Bis dahin!</p>
     <div class="clearfix"></div><hr>
      <p><strong>Willkommen bei einer</strong> ANDIBI.TK Preview! Lese, <a href="#newModal" data-toggle="modal">was es neues gibt</a>!<hr>
      <form>
      <div class="input-group">
      <div class="input-group-btn">
      <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
      </div>
      </div>
      </form>
      </div>
      </div>

    <div class="well">
      <h4>Google+ Stream</h4>
      <p>Stream hier einbinden!</p>
    </div>
    </div>
    <div class="col-md-6 col-sm-6">
    <div class="well">
      <h4>Steckbrief</h4>
      <p><strong>Nickname:</strong> iCON</p>
      <p><strong>Geboren:</strong> '98</p>
      <p><strong>Interessen:</strong> PC, Spielekonsolen, Linux, Google</p>
      <p><strong>Fähigkeiten:</strong> HTML, etwas CSS</p>
      <p><strong>OS & Browser:</strong> Ubuntu und Google Chrome</p>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Social Media</h4>
    </div>
    <div class="panel-body">
      <a href="https://twitter.com/WiiDatabase" target="_ext"><span class="twitter"></span></a>
      <a href="http://www.pinterest.com/AndiBie/" target="_ext"><span class="pinterest"></span></a>
      <span class="skype"></span>
      <a href="https://github.com/brawl345" target="_ext"><span class="github"></span></a>
      <a href="http://reddit.com/u/brawl345" target="_ext"><span class="reddit"></span></a>
      <a href="http://flickr.com/brawl98" target="_ext"><span class="flickr"></span></a>
      <a href="http://www.youtube.com/user/Meleefan100" target="_ext"><span class="youtube"></span></a>
    <div class="clearfix"></div>
      <hr>
      <p>Nur berechtigte Personen dürfen mich in Skype adden. Private Accounts sind nicht verlinkt.</p>
    </div>
    </div>
    </div>
    </div><!--/row-->

    <div class="row">
    <div class="col-md-12"><h2>Programme</h2></div>
    <div class="col-md-4 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Open-Source</h4>
    </div>
    <div class="panel-body">
      <p>Alle meine Programme sind Open-Source. Freiheit ist das Wichtigste und jeder sollte Einblick in den Quellcode haben, damit man selber ein ruhiges Gewissen hat!</p>
      <hr>
      <div class="well well-sm">
        <div class="media">
          <a class="thumbnail pull-left" href="https://github.com/Brawl345">
            <img class="img-circle media-object" src="https://avatars2.githubusercontent.com/u/5049892">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Brawl345</h4>
            <p><span class="label label-info">4 Projekte</span> <span class="label label-success">Mehr als 20 Commits</span> <span class="label label-primary">2 Followers</span></p>
            <p><a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Nachricht senden</a>
            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Folgen</a></p>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>WiiDataDownloader</h4>
    </div>
    <div class="panel-body">
    <img data-src="static/js/holder.js/50x50" class="img-circle pull-right">
    <p>Ein Programm zum blablabla...</p>
    <div class="clearfix"></div>
      <hr>
      <p>Text</p>
    </div>
    </div>
    </div>

    <div class="col-md-4 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>WiiDPaste</h4>
    </div>
    <div class="panel-body">
    <img data-src="static/js/holder.js/50x50" class="img-circle pull-left">
    <p>Ein Programm zum blablabla...</p>
    <div class="clearfix"></div>
      <hr>
      <p>Text</p>
    </div>
    </div>
     </div><!--/articles-->
   </div>
    <!-- Footer -->
<?php include("templates/plus-footer.php"); ?>
        </div><!--/main-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/js/jquery-1.10.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <!-- <script src="static/js/togglelayout.js"></script> -->
    <script src="static/js/holder.js"></script>

    </body>
</html>
