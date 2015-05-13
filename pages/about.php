<?php
  $shownpage_page = array("page_idf" => "about", "title" => "Über", "description" => "ANDIBI.TK Über", "genericons" => "true");
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>

    <!--main-->
    <div class="container" id="main">
      <div class="row">
        <div class="col-md-6 col-sm-6">
		
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4><img src="img/assets/andibi.jpg" class="img-circle" alt="User-Bild">  Über ANDIBI.TK</h4>
            </div>
            <div class="panel-body">
            <p>Ich besitze seit 2011 <a href="http://wiidatabase.de/">WiiDatabase.de</a>. Dort schreibe ich über Nintendo &amp; Homebrew.</p>
            <p>Ich teste immer mal wieder meine Fähigkeiten aus, auch auf dieser Website. Vielleicht kommt später mehr Inhalt. Bis dahin!</p>
            <form>
              <div class="input-group">
                <div class="input-group-btn">
                  <button class="btn btn-default">+1</button>
				  <button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                </div>
              </div>
            </form>
            </div>
          </div>
		  
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Open-Source</h4>
            </div>
            <div class="panel-body">
            <p>ANDIBI.TK ist <strong>Open-Source!</strong> <a href="https://github.com/Brawl345/andibi.tk" target="_blank">Sieh es dir an!</a></p>
            </div>
          </div>
        </div>
		
        <div class="col-md-6 col-sm-6">
          <div class="well">
            <h4>Steckbrief</h4>
            <p><strong>Nickname:</strong> iCON</p>
            <p><strong>Geboren:</strong> '98</p>
            <p><strong>Interessen:</strong> PC, Spielekonsolen (Homebrew)</p>
			<p><strong>Fähigkeiten:</strong> HTML, etwas CSS, etwas PHP</p>
			<p><strong>OS &amp; Browser:</strong> Ubuntu und Mozilla Firefox</p>
          </div>

          <div class="panel panel-default">
		    <div class="panel-heading">
              <h4>Social Media</h4>
            </div>
            <div class="panel-body">
              <a href="https://twitter.com/WiiDatabase" target="_blank"><span class="twitter"></span></a>
              <a href="http://www.pinterest.com/AndiBie/" target="_blank"><span class="pinterest"></span></a>
              <span class="skype"></span>
              <a href="https://github.com/brawl345" target="_blank"><span class="github"></span></a>
              <a href="http://reddit.com/u/brawl345" target="_blank"><span class="reddit"></span></a>
              <a href="http://flickr.com/brawl98" target="_blank"><span class="flickr"></span></a>
              <a href="http://www.youtube.com/user/Meleefan100" target="_blank"><span class="youtube"></span></a>
              <div class="clearfix"></div>
			  <hr>
			  <p>Nur berechtigte Personen dürfen mich in Skype adden. Private Accounts sind nicht verlinkt.</p>
		    </div>
          </div>
        </div>
      </div><!--/row-->

      <div class="row">
        <div class="col-md-12"><h2>Projekte</h2></div>
        <div class="col-md-4 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Open-Source</h4>
            </div>
            <div class="panel-body">
              <p>Die meisten meiner Programme sind Open-Source. Freiheit ist das Wichtigste und jeder sollte Einblick in den Quellcode haben, damit man selber ein ruhiges Gewissen hat!</p>
              <hr>
              <div class="well well-sm">
                <div class="media">
                  <a class="thumbnail pull-left" href="https://github.com/Brawl345">
                    <img class="media-object" src="https://avatars2.githubusercontent.com/u/5049892" height="45" width="45"  alt="GitHub User-Bild">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Brawl345</h4>
                    <p><span class="label label-info shadow-z-1">9 Repositorys</span></p>
                    <p><a href="https://github.com/Brawl345" class="btn btn-xs btn-primary shadow-z-2" target="_blank"><span class="glyphicon glyphicon-heart"></span> Folgen</a></p>
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
              <p>Ein Programm, welches Wii-Homebrews von der WiiDatabase herunterlädt.</p>
              <div class="clearfix"></div>
              <hr>
              <a href="http://wdd.wiidatabase.de" target="_blank" class="list-group-item active shadow-z-2">Zum Projekt</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>WiiDPaste</h4>
            </div>
            <div class="panel-body">
              <p>Eine minimaler Paste-Service - der Server hat keine Ahnung von den Daten.</p>
              <div class="clearfix"></div>
              <hr>
              <a href="http://wiidatabase.de/paste" target="_blank" class="list-group-item active shadow-z-2">Zum Projekt</a>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>ANDIBI.TK</h4>
            </div>
            <div class="panel-body">
              <p>Diese Website. Eine Website über mich und meine Projekte außerhalb der <a href="http://wiidatabase.de" target="_blank">WiiDatabase</a>.</p>
              <div class="clearfix"></div>
              <hr>
              <a href="https://github.com/Brawl345/andibi.tk" target="_blank" class="list-group-item active shadow-z-2">Zum Projekt</a>
            </div>
          </div>
        </div>

      </div><!--/row-->
	  
    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
