<?php
$shownpage_page = array("page_idf" => "contact", "title" => "Kontakt", "description" => "ANDIBI.TK Kontakt");
include("templates/plus-headInclude.php");
include("templates/plus-navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
    <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
              <h4>Impressum</h4>
        </div>
    <div class="panel-body">
        <p><strong>Angaben gemäß § 5 TMG:</strong></p>
        <p>Andreas Bielawski</p>
        <p>Parkstraße 16</p>
        <p>96215 Lichtenfels</p><br>
        <p><strong>ANDIBI.TK ist völlig unabhängig von WiiDatabase.de</strong></p><br>
           <div class="clearfix"></div><hr>
        <p>ANDIBI.TK verwendet <a href="http://getbootstrap.com/">Twitters Bootstrap</a> und <a href="http://genericons.com/">Genericons</a>. Danke an die Ersteller dieser großartigen Tools!</p>
    </div>
    </div>
    </div>

   <div class="col-md-6">
       <div class="well">
        <h4>Kontakt</h4>
        <p>Du kannst mich ganz leicht mit dem Kontaktformular auf <a href="http://wiidatabase.de/kontakt">wiidatabase.de/kontakt</a> erreichen!</p>
    </div>
    </div>
   <div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
              <h4>Verschlüsselter Kontakt</h4>
        </div>
    <div class="panel-body">
        <p>Möchtest du lieber verschlüsselten Kontakt per PGP, so kannst du meinen <a href="dl/ANDIBI-GPG.asc">öffentlichen Schlüssel herunterladen</a> (oder nutze einen <a href="http://keyserver.ubuntu.com/pks/lookup?op=vindex&amp;fingerprint=on&amp;search=0x7B171F44A4FA956F" target="_blank">Key-Server</a>) und importieren. Ich gehe davon aus, dass du dich damit auskennst. Ich benötige natürlich noch deinen öffentlichen Schlüssel.</p>
        <p>Es stehen auch fast immer .asc Dateien bereit, die eine Signatur enthalten. Einfach an den Downloadlink ".asc" anhängen!</p>
    </div>
    </div>
    </div>

    </div><!--/row-->
    <!-- Footer -->
<?php include("templates/plus-footer.php");
      include("templates/htmlEnd.php");?>
