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
       <textarea class="form-control" cols="60" rows="10" readonly="readonly"><?php echo $_SERVER['HTTP_USER_AGENT']; ?></textarea>
    </div>
    <div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Was ist ein "User-Agent"?</h3></div>
    <div class="panel-body">
      Der User-Agent ist der String, den dein Browser an eine Website übermittelt. Zum Beispiel wird dann angezeigt, welchen Browser du in welcher Version nutzt.
    </div>
    </div>

    </div>
    <div class="col-md-6 col-sm-6">
    <div class="well">
      <h4>Deine IP-Adresse lautet:</h4>
  <input class="form-control" name="ip" placeholder="label" type="text" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" readonly="readonly">
    </div>

    <div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Was ist eine IP-Aresse?</h3></div>
    <div class="panel-body">
      Eine IP-Adresse ist eine Adresse in Computernetzen, die – wie das Internet – auf dem Internetprotokoll (IP) basiert. Sie wird Geräten zugewiesen, die an das Netz angebunden sind, und macht die Geräte so adressierbar und damit erreichbar.
    </div>
    </div>
    </div>
    </div><!--/row-->


    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
