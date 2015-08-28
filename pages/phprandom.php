<?php
  $shownpage_page = array("page_idf" => "phprandom", "title" => "Random PHP-Test", "description" => "ANDIBI.TK - Random PHP-Test mit shuffle");
  $page_has_extra_navbarentry = "true";
  include("templates/headInclude.php");
  include("templates/navbar.php");
  
  // PHP Random Shuffle
  $slogan = array("Fun & Hacking Board", "Hacken für Spacken", "Noch ein Slogan", "masterP stinkt", "Brawl ist cool", "Pegelf.de - Das N steht für Niveau!", "PENIS");
  $sort = shuffle($slogan);
  $var = $slogan[0];
?>
   <!--main-->
    <div class="container" id="main">
    <div class="row">
        <div class="col-md-12 col-sm-12">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>PHP shuffle()</h4>
    </div>
     <div class="panel-body">
      <p><?php echo $var ?></p>
        <p>LADE DIE SEITE NEU!</p>
      </div>
      </div>
    </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
