<?php
// Information about this page
$shownpage_page = array("page_idf" => "ua", "title" => "User-Agent", "isindropdown" => "tools", "description" => "ANDIBI.TK - Dein User-Agent");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
     <?php include("templates/meldungen.php"); ?>
	  <div class="page-header">
		<h1>Dein User-Agent lautet</h1>
		</div>
  <div class="row">
        <!-- /.col-sm-4 -->
        <div class="well">
	<script type="text/javascript">
		document.write(navigator.userAgent);
	</script>
</div> 
          
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 align="center"  class="panel-title">Was ist ein User-Agent?</h3>
            </div>
            <div class="panel-body">
              <p>Der User-Agent ist der String, den dein Browser an eine Website übermittelt. Zum Beispiel wird dann angezeigt, welchen Browser in welcher Version du nutzt.</p>
                <p><strong>An Entwickler:</strong> Erkennung der Browser über den User-Agent ist <strong>nicht emfpohlen!</strong> Benutze Feature-Erkennung!</p>
            </div>
          </div>
              </div>
              </div>


    </div><!-- /.container -->
	</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
