<?php
  $shownpage_page = array("page_idf" => "shorturl", "title" => "ANDIB.TK Kurz-URL", "description" => "Kurz-URL ANDIB.TK Info-Seite");
  $page_has_extra_navbarentry = "true";
  $page_has_extra_navbarentry_url = "shorturl.php";
  $page_has_extra_navbarentry_title = "ANDIB.TK Kurz-URL";
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>
   <!--main-->
    <div class="container" id="main">
    <div class="row">
        <div class="col-md-12 col-sm-12">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Danke für's Vorbeischauen / Thank you for stopping by</h4>
    </div>
     <div class="panel-body">
      <p>Dies ist mein Kurz-URL-Dienst, der nur von mir benutzt wird.</p>
      <p>This is my short URL service, which is only used by me.</p>
      </div>
      </div>
    </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
