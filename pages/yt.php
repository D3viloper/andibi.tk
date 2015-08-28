<?php
  $shownpage_page = array("page_idf" => "yt", "title" => "Gesamtspiellänge einer YouTube-Playlist", "description" => "Finde die Gesamtspiellänge einer YouTube-Playlist heraus!");
  $page_has_extra_navbarentry = "true";
  include("templates/headInclude.php");
  include("templates/navbar.php");

// Gesamtspiellänge einer YouTube-Playlist herausfinden
  if($_GET['id'] == "") {
    $id = "nicht gesetzt";
  }
  else
  {
    $id = htmlspecialchars($_GET['id']);
  }

  $total_seconds = 0;
  $url = 'http://gdata.youtube.com/feeds/api/playlists/'.$id.'?max-results=50';

  $dom = new DOMDocument();
  $dom->loadXML(file_get_contents($url));

  $xpath = new DOMXPath($dom);
  foreach ($xpath->query('//yt:duration/@seconds') as $duration) {
    $total_seconds += (int) $duration->value;
  }

  $totalduration = (int) ($total_seconds / 3600) . ':' . (int) ($total_seconds / 60) % 60 . ':' . $total_seconds % 60;
?>

   <!--main-->
    <div class="container" id="main">
    <div class="row">
	  <?php echo meldung('<strong>ACHTUNG:</strong> Dieses Tool funktioniert nicht mehr, da Google die Version 2 der YouTube-API Ende Mai 2015 endgültig abgeschaltet hat. Die benötigten Videoinformationen (sowas einfaches wie die Zeit, wtf?) erhält man nur noch über Umwege (ID des Vids von der Playlist abfragen, damit dann noch einen Request, bei 50 Videos dauert das dementsprechend auch länger...).<br>Da Google offensichtlich <strong><u><a href="https://code.google.com/p/gdata-issues/issues/detail?id=4294" target="_blank">kein Interesse daran hat</a></u></strong>, die Videoinformationen einfacher zugänglich zu machen, bleibt dieses Tool vorerst funktionslos.<br>Danke für dein Verständnis!', danger); ?>
      <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Gesamtspiellänge deiner YouTube-Playlist</h4>
    </div>
     <div class="panel-body">
	 <?php echo '<form action="yt.php" method="GET">
	 <input class="form-control floating-label" placeholder="Gebe eine Playlist-ID an (das hinter dem ?list=)" name="id" type="text"><button class="btn btn-primary" type="submit">Absenden</button><br>';
     ?>
      </form>
	  
	  <?php if ($totalduration != '0:0:0') {
		  echo '<p>Deine angegebene YouTube-Playlist ist insgesamt so lang:</p>
		  <p><input class="form-control" name="duration" placeholder="label" type="text" value="',$totalduration,'" readonly="readonly"></p>
		  <p><br>Deine Playlist-ID ist <strong>',$id,'</strong>. Du erreichst sie unter <a href="https://youtube.com/playlist?list=',$id,'" target="_blank">https://youtube.com/playlist?list=',$id,'</a></p>';
	  }
	  else {
		  if ($id == "nicht gesetzt") {
			  echo '<p>Gebe eine YouTube-Playlist-ID an.</p>';
		  }
		  else {
		   echo meldung('Siehe Hinweis oben.', warning);
		  }
	  }?>
      </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6">
    <div class="well">
      <h4>HINWEIS</h4>
        <p>Mit dieser Website kannst du die Gesamtspiellänge einer YouTube-Playlist herausfinden! Hänge einfach <code>?id=PLAYLIST-ID</code> an die URL an, bspw.<br><a href="yt.php?id=PLAZbIQwTqfrhC_n9vDlbKxRWE-B5vm1qq">?id=PLAZbIQwTqfrhC_n9vDlbKxRWE-B5vm1qq</a>.</p>
		<p>Die Playlist-ID findest du auf YouTube in der URL unter ""<i>?list=PLAYLIST-ID</i>".</p>
		<p><strong>Die Playlist sollte nicht mehr als 50 Videos besitzen!</strong></p>
		<p><img class="img-responsive" src="img/assets/yt-erklaerung.png" alt="YouTube-Markierung"></p>
	</div>



   </div>
        </div>
    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
