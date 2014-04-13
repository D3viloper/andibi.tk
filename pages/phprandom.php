<?php
// Information about this page
//$active = "";
$shownpage_page = array("page_idf" => "phprandom", "title" => "Random PHP-Test", "description" => "ANDIBI.TK - Random PHP-Test mit shuffle");
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "phprandom.php";
$page_has_extra_navbarentry_title = "Random PHP-Test";

// PHP Random Shuffle
$slogan = array("Fun & Hacking Board", "Hacken für Spacken", "Noch ein Slogan", "masterP stinkt", "Brawl ist cool", "Pegelf.de - Das N steht für Niveau!", "PENIS");
	
$sort = shuffle($slogan); 
$var = $slogan[0];  

include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
	  <div class="row">
        <!-- /.col-sm-4 -->
        <p><?php echo $var ?></p>
        <p>LADE DIE SEITE NEU!</p>
          </div>
        </div><!-- /.col-sm-4 -->
		</div>
	  


    </div><!-- /.container -->
	</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>