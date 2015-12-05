<?php
  $shownpage_page = array("page_idf" => "abp", "title" => "Brawls Blocking List", "description" => "ANDIBI.TK - Brawls Adblock Plus Blocking List");
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
    <div class="col-md-8">
    <div class="jumbotron">
        <h1>Brawls Blocking List</h1>
        <p>Filterliste für Adblock Plus - filtert nervige, dumme Sachen im Web!</p>
          <a class="btn btn-lg btn-success" href="abp:subscribe?location=https%3A%2F%2Fandibi.tk%2Ffilterlist.txt&amp;title=Brawls%20Blocking%20List" role="button">Filterliste abonnieren</a>
        <a class="btn btn-lg btn-warning" href="https://adblockplus.org/de/" role="button" target="_blank">Adblock Plus holen</a>
    </div>
    </div>

    <div class="col-md-4">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Was ist das?</h4>
    </div>
    <div class="panel-body">
    <p>Das ist eine Filterliste für <a href="https://adblockplus.org/de/" target="_blank">Adblock Plus</a> oder andere Adblock-Erweiterungen, wie <a href="https://www.ublock.org/" target="_blank">µBlock</a>.<br>
	Sie filtert einige nervige Dinge im Web, bspw. Freiräume, übersehen Banner, zappelende und andere, nervige Dinge.</p>
	<p>Die Filterliste aktualisiert sich selbstständig alle drei Tage und wird mit <a href="https://github.com/r4vi/block-the-eu-cookie-shit-list/tree/master/genlist" target="_blank">Genlist</a> erstellt.</p>
    </div>
    </div>
    </div>
	</div>
	
	<div class="row">
    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Filterliste ansehen</h4>
    </div>
    <div class="panel-body">
    <p>Du kannst die Filterliste manuell ansehen, indem du unten auf diese attraktive Schaltfläche klickst.</p>
    <div class="clearfix"></div>
      <hr>
    <a href="http://andibi.tk/filterlist.txt" target="_blank" class="list-group-item active shadow-z-2">Filterliste ansehen</a>
    </div>
    </div>
    </div>
	
    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Anregungen, Vorschläge, Kritik?</h4>
    </div>
    <div class="panel-body">
    <p>Vorschläge für die Filterliste, oder irgendwas wird zu viel geblockt? Du kannst mich auf Telegram oder per Mail kontaktieren.</p>
    <div class="clearfix"></div>
      <hr>
    <a href="https://telegram.me/Brawl" target="_blank" class="list-group-item active shadow-z-2">Per Telegram kontaktieren</a><br>
	<a href="http://wiidatabase.de/kontakt" target="_blank" class="list-group-item active shadow-z-2">Per Mail kontaktieren</a>
    </div>
    </div>
    </div>
    </div><!--/row-->
    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>