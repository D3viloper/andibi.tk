<?php
$shownpage_page = array("page_idf" => "internet", "title" => "Internet-Special", "description" => "ANDIBI hat bald wieder Internet");
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "internet.php";
$page_has_extra_navbarentry_title = "Internet-Special";
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    ANDIBI is online!</h1>
                <div class="error-details">
                  <h1>Danke für's Lesen! Ich bin endlich wieder online!</h1>
                </div>
                <div class="error-actions">
                    <a href="index.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Zur Startseite </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("templates/htmlEnd.php");
