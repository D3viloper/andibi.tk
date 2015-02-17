<?php
$shownpage_page = array("page_idf" => "404", "title" => "404 - Diese Seite wurde nicht gefunden", "description" => "ANDIBI.TK 404");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
   <!--main-->
    <div class="container" id="main">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    0/\/\G!!11</h1>
                <h2>
                    404!!11!!einself11!! - Diese Seite wurde nicht gefunden!</h2>
                <div class="error-details">
                    Es sieht so aus, als wurde diese Seite nicht gefunden. Möglicherweise wurde eine falsche Adresse eingegeben ode auf einen Link geklickt, der nicht mehr existiert.
                </div>
                <div class="error-actions">
                    <a href="<?php echo $root; ?>index.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Zur Startseite </a><a href="https://github.com/Brawl345/andibi.tk/issues?state=open" target="_blank" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-bullhorn"></span> Fehler melden </a>
                </div>
            </div>
        </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
