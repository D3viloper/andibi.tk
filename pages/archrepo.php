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
        <div class="pull-right"><img src="uburemix/archlogo.png" height="187" width="187" alt="ArchLinux Logo"></div>
        <p>ANDIBI.TK hat eine eigene Arch-Repo!</p>
        <p>Ich habe diese erstellt, da ich das Kompilieren aus dem AUR hasse (dauert ewig) und ich anderen das ersparen möchte. Hier findest du eine Auswahl an interessanten Paketen. Auch ist einige Software in der [andi] Repo aktueller.</p>
        
    <div class="page-header">
        <h1>Füge die Repo hinzu</h1>
    </div>
        <div class="alert alert-warning">
          <p>Die Repo unterstützt nur x86_64 (64 Bit)!</p>
        </div>
          <p>Öffne die <code>/etc/pacman.conf</code> in einem Editor mit Root-Rechten und füge folgendes ganz unten hinzu:</p>
          <div class="well">
            <p>[andi]<br>
            Server = http://andibi.tk/archrepo</p>
          </div>
          <p>Lade dann mit <code>sudo pacman -Sy</code> die Repos neu!</p>
          <p><strong>Die Repo und alle Pakete sind von mir seit dem 28. Juni 2014 signiert.</strong> Pacman wird dich fragen, ob du den Key importieren möchtest. Wähle "J".</p>
          
	<a id="troubleshooting"></a>
    <div class="page-header">
        <h1>Problembehebung</h1>
    </div>
    <p><i><strong>Ich habe die Repo vor dem 28. Juni 2014 genutzt. Was muss ich jetzt tun?</strong></i><br>
    Du musst in deiner <code>/etc/pacman.conf</code> die Zeile mit "SigLevel" unter [andi] entfernen. Sollte es beim Neuladen der Repositorys Probleme geben, führe <code>sudo pacman -Syy</code> aus.</p>
    
    <p><i><strong>Der Key kann nicht importiert werden??</strong></i><br>
    Es kann sein, dass dein ISP den Keyserver blockt. Ändere in der <code>/etc/pacman.d/gnupg/gpg.conf</code> den Keyserver zu <code>hkp://pgp.mit.edu:11371</code> ab und versuche es erneut.</p>
    
    <p><i><strong>Es klappt immer noch nicht!</strong></i><br>
    Führe folgenden Befehl aus: <code>sudo pacman-key -r A4FA956F && sudo pacman-key --lsign A4FA956F</code> - dies importiert meinen Key manuell und signiert ihn lokal.</p>
    
    <p><i><strong>Ich kann keine Pakete installieren, da ein GPG-Fehler auftritt!</strong></i><br>
    Dieser Fehler sollte nicht auftreten. Es kann sein, dass du früher mal ein Paket aus der Repo installiert hast und dieses noch in deinem Cache hängt. Führe <code>sudo pacman -Sc</code> aus, um den Pacman-Cache zu leeren. Versuche auch, <code>sudo pacman -Syy</code> auszuführen und neuzustarten.</p>
        
    <div class="page-header">
        <h1>Welche Pakete sind enthalten?</h1>
    </div>
	<a id="packages"></a>
        <p>Hier ist eine Liste:</p>
        <?php include("archrepo/packagelist.php"); ?>

    </div><!-- /.container -->
</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
