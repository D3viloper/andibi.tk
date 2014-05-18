<?php
$shownpage_page = array("page_idf" => "contact", "title" => "Kontakt", "description" => "ANDIBI.TK Kontakt");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
	    <?php include("templates/meldungen.php"); ?>
	  <div class="page-header">
		<h1>Impressum/Kontakt</h1>
	  </div>
	  <div class="pull-right">
	  <div class="row">
	   <div class="col-sm">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Kontakt</h3>
            </div>
            <div class="panel-body">
              Du kannst mich ganz leicht mit dem Kontaktformular auf <a href="http://wiidatabase.de/kontakt">wiidatabase.de/kontakt</a> erreichen!
            </div>
          </div>
        </div>
		</div>
		</div>
        <p><strong>Angaben gemäß § 5 TMG:</strong></p>
		<p>Andreas Bielawski</p>
		<p>Parkstraße 16</p>
		<p>96215 Lichtenfels</p><br>
		<p><strong>ANDIBI.TK ist völlig unabhängig von WiiDatabase.de</strong></p><br>
		<p>ANDIBI.TK verwendet <a href="http://getbootstrap.com/">Twitters Bootstrap</a> und <a href="http://genericons.com/">Genericons</a>. Danke an die Ersteller dieser großartigen Tools!

	  


    </div><!-- /.container -->
</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
