<?php
$shownpage_page = array("page_idf" => "archrepo", "title" => "Arch Linux Repo", "description" => "[andi] Arch Repo");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
	    <?php include("templates/meldungen.php"); ?>
	  <div class="page-header">
		<h1>ANDIBI.TK Arch Linux Repo</h1>
	  </div>
        <div class="pull-right"><img src="uburemix/archlogo.png" height="187" width="187"></div>
        <p>ANDIBI.TK hat eine eigene Arch-Repo!</p>
        <p>Ich habe diese erstellt, da ich das Kompilieren aus dem AUR hasse (dauert ewig) und ich anderen das ersparen möchte. Hier findest du eine Auswahl an interessanten Paketen. Auch ist einige Software in der [andi] Repo aktueller. Die Repo ist momentan noch im Aufbau.</p>
        
    <div class="page-header">
        <h1>Füge die Repo hinzu</h1>
    </div>
        <div class="alert alert-warning">
          <p>Die Repo unterstützt momentan nur x86_64 (64 Bit)!</p>
        </div>
          <p>Öffne die <code>/etc/pacman.conf</code> in einem Editor mit Root-Rechten und füge folgendes ganz unten hinzu:</p>
          <div class="well">
            <p>[andi]<br>
            SigLevel = Optional TrustAll<br>
            Server = http://andibi.tk/archrepo
          </div>
          <p>Lade dann mit <code>sudo pacman -Sy</code> die Repos neu!</p>
        
    <div class="page-header">
        <h1>Welche Pakete sind enthalten?</h1>
    </div>
	<a name="packages"></a>
        <p>Hier ist eine Liste:</p>
        <?php include("archrepo/packagelist.php"); ?>

    </div><!-- /.container -->
</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
