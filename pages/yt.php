<?php
// Information about this page
$shownpage_page = array("page_idf" => "yt", "title" => "Gesamtspiellänge einer YouTube-Playlist", "description" => "Finde die Gesamtspiellänge einer YouTube-Playlist heraus!");
include("templates/headInclude.php");
include("templates/navbar.php");

// Gesamtspiellänge einer YouTube-Playlist herausfinden
if($_GET['id'] == "")
{
  $id = "nicht gesetzt";
}
else
{
	// Hier bekommen wir die Playlist-ID, die der Benutzer eingegeben hat
  $id = htmlspecialchars($_GET['id']);
}

// Hier setzen wir ein paar Variablen, u.a. die volle URL von YouTube
$total_seconds = 0;
$url = 'http://gdata.youtube.com/feeds/api/playlists/' . $id;

// Wir laden das ganze in ein DOM (= Document Object Model, damit kann XML verarbeitet werden)...
$dom = new DOMDocument();
$dom->loadXML(file_get_contents($url));

// ...und nehmen dann von JEDEM Video in der Playlist die Videolange (in Millisekunden!)
$xpath = new DOMXPath($dom);
foreach ($xpath->query('//yt:duration/@seconds') as $duration) {
    $total_seconds += (int) $duration->value;
}

// Die Millisekunden werden in das Format Stunden:Minuten:Sekunden umgerechnet
$totalduration = (int) ($total_seconds / 3600) . ':' . (int) ($total_seconds / 60) % 60 . ':' . $total_seconds % 60;
?>
   <!--main-->
    <div class="container" id="main">
    <div class="row">
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
			  echo '<p>Gebe eine YouTube-Playlist-ID an</p>';
		  }
		  else {
		  echo '<p>Bei dem übergebenen String handelt es sich nicht um eine YouTube-Playlist-ID.</p>';
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
		<p><img src="img/assets/yt-erklaerung.png" alt="YouTube-Markierung"></p>
	</div>



   </div>
        </div>
    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
