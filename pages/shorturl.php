<?php
$shownpage_page = array("page_idf" => "shorturl", "title" => "ANDIB.TK Kurz-URL", "description" => "Kurz-URL ANDIB.TK Info-Seite");
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "shorturl.php";
$page_has_extra_navbarentry_title = "ANDIB.TK Kurz-URL";
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
        <?php include("templates/meldungen.php"); ?>
      <div class="page-header">
        <h1>ANDIB.TK Kurz-URL</h1>
      </div>
      <p><strong>Danke für's Vorbeischauen!</strong> Dies ist mein Kurz-URL-Dienst, der nur von mir benutzt wird.</p>
        <p><strong>Thank you for stopping by!</strong> This is my short URL service, which is only used by me.</p>
    </div><!-- /.container -->
</div>
    <!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
