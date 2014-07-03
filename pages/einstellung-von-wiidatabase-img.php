<?php
$shownpage_page = array("page_idf" => "einstellung-von-wiidatabase-img", "title" => "Einstellung von WiiDatabase IMG", "description" => "WiiDatabase IMG Einstellung");
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "einstellung-von-wiidatabase-img.php";
$page_has_extra_navbarentry_title = "Einstellung von WiiDatabase IMG";
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
        <?php echo meldung("WiiDatabase IMG wurde geschlossen.", danger); ?>
        <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>WiiDatabase IMG wurde am 04. April 2014 vollkommen <strong>eingestellt</strong>!</h4>
    </div>
     <div class="panel-body">
      <p>Aufgrund der wachsenden Bildgrößen und der Anzahl der hochgeladenen Bilder und des begrenzten Speichers haben wir uns dazu entschlossen, WiiDatabase IMG einzustellen. Vielen Dank für dein Verständnis!</p>
      </div>
      </div>
        </div>

    <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Was bedeutet das für mich?</h4>
    </div>
     <div class="panel-body">
      <p>Wir haben alle notwendigen Bilder versandt. Einige Bilder konnten niemandem zugeordnet werden, diese sind für immer verloren.</p>
         <p><strong>Am 04. März 2014</strong> wurde die Domain img.wiidatabase.de abgeschalten. Das bedeutet, dass Bilder von WiiDatabase IMG "ins Leere laufen" und nichts mehr anzeigen. Ebenso die Bilder, die auf http://wiidatabase.de/pic gehostet waren. Bilder, die auf static.wiidatabase.de gehostet sind, bleiben jedoch erhalten.</p>
         <p><i>Mit der Stoppung des Dienstes wurden auch alle Userdaten und alle Bilder aus unserem System gelöscht, also keine Sorge!</i></p>
        </div>
      </div>
        </div>

    <div class="col-md-12 col-sm-12">
    <div class="well">
      <h4>Alternativen</h4>
      <p>//TODO</p>
    </div>
    </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
