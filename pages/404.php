<?php
// Information about this page
//$active = "";
$shownpage_page = array("page_idf" => "404", "title" => "404 - Diese Seite wurde nicht gefunden");

include("templates/headInclude.php");
include("templates/navbar.php");
?>
	<div class="container">
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
                    <a href="index.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Zur Startseite </a><a href="index.php?page=contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Den Webmaster kontaktieren </a>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="static/bootstrap.min.js"></script>
</body>
</html>

