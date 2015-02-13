<?php
$shownpage_page = array("page_idf" => "archrepo", "title" => "Arch Linux Repo", "description" => "[andi] Arch Repo");
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "archrepo.php";
$page_has_extra_navbarentry_title = "ANDIBI.TK Arch Repo (Archiv)";
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
        <?php echo meldung('Die Repo wurde eingestellt. Ich biete die Pakete vom 2. November 2014, 15:18 Uhr noch als Archiv an.', danger); ?>
    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h4>ANDIBI.TK Arch Linux Repo (Archiv)</h4>
    </div>
    <div class="panel-body">
        <div class="pull-right"><img src="img/assets/archlogo.png" height="187" width="187" alt="ArchLinux Logo"></div>
        <p>ANDIBI.TK hatte eine eigene Arch-Repo, diese wurde am 2. November 2014 eingestellt. Die Pakete sind eingefroren als Archiv verfügbar. <strong>Diese könnten Sicherheitslücken aufweisen! Es wird empfohlen, die Repository nicht mehr zu benutzen!</strong></p>
    </div>
    </div>
    <a id="troubleshooting"></a>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Problembehebung</h4>
    </div>
    <div class="panel-body">
        <p><i><strong>Ich habe die Repo vor dem 2. November 2014 genutzt. Was muss ich jetzt tun?</strong></i><br>
    Du musst in deiner <code>/etc/pacman.conf</code> die Zeile mit "Server" unter [andi] umändern. Sie muss lauten <code>Server = https://dl.dropboxusercontent.com/u/32829149/andi-archive/</code>. Sollte es beim Neuladen der Repositorys Probleme geben, führe <code>sudo pacman -Syy</code> aus.</p>

    <p><i><strong>Der Key kann nicht importiert werden??</strong></i><br>
    Es kann sein, dass dein ISP den Keyserver blockt. Ändere in der <code>/etc/pacman.d/gnupg/gpg.conf</code> den Keyserver zu <code>hkp://pgp.mit.edu:11371</code> ab und versuche es erneut.</p>

    <p><i><strong>Es klappt immer noch nicht!</strong></i><br>
    Führe folgenden Befehl aus: <code>sudo pacman-key -r A4FA956F && sudo pacman-key --lsign A4FA956F</code> - dies importiert meinen Key manuell und signiert ihn lokal.</p>

    <p><i><strong>Ich kann keine Pakete installieren, da ein GPG-Fehler auftritt!</strong></i><br>
    Dieser Fehler sollte nicht auftreten. Es kann sein, dass du früher mal ein Paket aus der Repo installiert hast und dieses noch in deinem Cache hängt. Führe <code>sudo pacman -Sc</code> aus, um den Pacman-Cache zu leeren. Versuche auch, <code>sudo pacman -Syy</code> auszuführen und neuzustarten.</p>
    </div>
    </div>
    </div>

    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Füge das Repo-Archiv hinzu</h4>
    </div>
    <div class="panel-body">
    <?php echo meldung('Die Repo unterstützt nur x86_64 (64 Bit).', warning); ?>
              <?php echo meldung('Die Repo wurde eingestellt. Ich biete die Pakete vom 2. November 2014, 15:18 Uhr noch als Archiv an.', danger); ?>
          <p>Öffne die <code>/etc/pacman.conf</code> in einem Editor mit Root-Rechten und füge folgendes ganz unten hinzu:</p>
          <div class="well">
            <p>[andi]<br>
            Server = https://dl.dropboxusercontent.com/u/32829149/andi-archive/</p>
          </div>
          <p>Lade dann mit <code>sudo pacman -Sy</code> die Repos neu!</p>
          <p><strong>Die Repo und alle Pakete sind von mir seit dem 28. Juni 2014 signiert.</strong> Pacman wird dich fragen, ob du den Key importieren möchtest. Wähle "J".</p>
     <p><strong>DIESE REPO ERHÄLT KEINE UPDATES!</strong></p>
    </div>
    </div>
    </div>

     <a id="packages"></a>
    <div class="col-md-6">
    <div class="well">
      <h4>Welche Pakete sind enthalten?</h4>
    <p>Du kannst dir die Pakete <a href="https://dl.dropboxusercontent.com/u/32829149/andi-archive/index.html">hier</a> ansehen und einzeln herunterladen. Bedenke, dass diese keine Updates mehr bekommen.</p>
    </div>
    </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
