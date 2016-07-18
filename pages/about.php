<?php
  $shownpage_page = array("page_idf" => "about", "title" => "Über", "description" => "ANDIBI.TK Über", "genericons" => "true");
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>

    <!--main-->
    <div class="container" id="main">
      <div class="row">
        <div class="col-md-6 col-sm-6">
		
          <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Über ANDIBI.TK</h3></div>
            <div class="panel-body">
            Ich besitze seit 2011 <a href="https://wiidatabase.de">WiiDatabase.de</a>. Dort schreibe ich über Nintendo &amp; Homebrew.
            </div>
          </div>
		  
          <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Open-Source</h3></div>
            <div class="panel-body">
            ANDIBI.TK ist <strong>Open-Source!</strong> <a href="https://github.com/Brawl345/andibi.tk" target="_blank">Sieh es dir an!</a>
            </div>
          </div>
        </div>
		
        <div class="col-md-6 col-sm-6">
          <div class="well">
            <h4>Steckbrief</h4>
            <p><strong>Nickname:</strong> iCON</p>
            <p><strong>Geboren:</strong> '98</p>
            <p><strong>Interessen:</strong> PC, Spielekonsolen (Homebrew)</p>
			<p><strong>Fähigkeiten:</strong> LUA, HTML, etwas CSS, etwas PHP</p>
          </div>

          <div class="panel panel-info">
		    <div class="panel-heading"><h3 class="panel-title">Social Media</h3></div>
            <div class="panel-body">
              <a href="https://twitter.com/WiiDatabase" target="_blank"><span class="twitter"></span></a>
              <a href="https://github.com/brawl345" target="_blank"><span class="github"></span></a>
              <a href="http://www.youtube.com/user/Meleefan100" target="_blank"><span class="youtube"></span></a>
		    </div>
          </div>
        </div>
      </div><!--/row-->

      <div class="row">
        <div class="col-md-12"><h2>Projekte</h2></div>
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Open-Source</h3></div>
            <div class="panel-body">
              Einige meiner Programme sind Open-Source.
              <div class="well well-sm">
                <div class="media">
                  <a class="thumbnail pull-left" href="https://github.com/Brawl345">
                    <img class="media-object" src="https://avatars2.githubusercontent.com/u/5049892" height="45" width="45"  alt="GitHub User-Bild">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Brawl345</h4>
                    <p><a href="https://github.com/Brawl345" class="btn btn-xs btn-primary btn-raised" target="_blank"><span class="glyphicon glyphicon-heart"></span> Folgen</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Nintendont-Updater</h3></div>
            <div class="panel-body">
              Ein Updater für Nintendont.
            </div>
			<div class="panel-footer"><a href="https://github.com/WiiDatabase/Nintendont-Updater" target="_blank" class="list-group-item active shadow-z-2">Zum Projekt</a></div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Brawlbot v2</h3></div>
            <div class="panel-body">
              Ein Telegram-Bot, basierend auf Plugins.
            </div>
			<div class="panel-footer"><a href="https://brawlbot.tk" target="_blank" class="list-group-item active shadow-z-2">Zum Projekt</a></div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">ANDIBI.TK</h3></div>
            <div class="panel-body">
              Diese Website. Eine Website über mich und meine Projekte außerhalb der <a href="https://wiidatabase.de" target="_blank">WiiDatabase</a>.
            </div>
			<div class="panel-footer"><a href="https://github.com/Brawl345/andibi.tk" target="_blank" class="list-group-item active shadow-z-2">Zum Projekt</a></div>
          </div>
        </div>
		
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">WiiDPaste</h3></div>
            <div class="panel-body">
              Ein minimalistischer Paste-Service - der Server hat keine Ahnung von den Daten.
            </div>
			<div class="panel-footer"><a href="https://paste.wiidatabase.de/" target="_blank" class="list-group-item active shadow-z-2">Zur Projektseite</a></div>
          </div>
        </div>

      </div><!--/row-->
	  
    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
