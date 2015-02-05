<?php
$shownpage_page = array("page_idf" => "ua", "title" => "User-Agent &amp; IP", "isindropdown" => "tools", "description" => "ANDIBI.TK - Dein User-Agent und deine IP");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
        <div class="col-md-6 col-sm-6">
    <div class="well">
      <h4>Dein User-Agent lautet:</h4>
        <textarea class="form-control" cols="60" rows="2" readonly="readonly"><?php echo $_SERVER['HTTP_USER_AGENT']; ?></textarea>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Was ist ein "User-Agent"?</h4>
    </div>
    <div class="panel-body">
      <p>Der User-Agent ist der String, den dein Browser an eine Website übermittelt. Zum Beispiel wird dann angezeigt, welchen Browser du in welcher Version nutzt.</p>
    </div>
    </div>

    </div>
    <div class="col-md-6 col-sm-6">
    <div class="well">
      <h4>Deine IP-Adresse lautet:</h4>
  <input class="form-control" name="ip" placeholder="label" type="text" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" readonly="readonly">
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Was ist eine IP-Aresse?</h4>
    </div>
    <div class="panel-body">
      <p>Die IP-Adresse ist eine "Kennung" im Internet, die an Webseiten übermittelt wird. So wird z.B. auch dein Standort bestimmt.</p>
    </div>
    </div>
    </div>
    </div><!--/row-->


    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
