<?php
  $shownpage_page = array("page_idf" => "news-sufu", "title" => "News-Suchmaschine", "isindropdown" => "tools", "description" => "ANDIBI.TK - Finde objektive und seriöse Nachrichten mit der einfachen News-Suchmaschine!");
  include("templates/headInclude.php");
  include("templates/navbar.php");
  
  if($_GET['q'] == "") {
	$query = "";
  }
	else
  {
	$query = htmlspecialchars($_GET['q']);
  }
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
	<div id="searchform_panel" class="col-md-12">
	  <div class="panel panel-default">
		<div class="panel-body">
		  <!-- Search Form -->
		  <div class="form-group form-group-lg label-floating">
		    <form id="search" method="get" action="<?php echo getCurrentUrl(); ?>">
			  <label for="search_bar" id="search_label" class="control-label" style="display: block">Suchbegriff eingeben</label>
			  <input type="text" name="q" id="search_bar" class="form-control" value="<?php echo $query; ?>" />
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<div id="microhpone_panel" class="col-md-1" style="display:none">
	  <div class="panel panel-default">
		<div class="panel-body">
		  <!-- Microphone button -->
		  <img id="microphone" onclick="startDictation()" src="<?php echo $root; ?>img/assets/mic.png" width="38px" />
		</div>
	  </div>
	</div>
	
	<?php if($query != ""): ?>
	<div class="col-md-12">
	  <div class="panel panel-default">
		<div class="panel-body">
		  <!-- Search Results -->
		<gcse:searchresults-only enableHistory="true" webSearchResultSetSize="filtered_cse"></gcse:searchresults-only>
		</div>
	  </div>
	</div>
	<?php endif;?>

    <div class="col-md-12">
	  <div class="panel panel-info">
		<div class="panel-heading">
		  <h3 class="panel-title">Informationen</h3>
		</div>
	    <div class="panel-body">
	      <a href="/news.txt">Enthaltene Quellen</a> - Suchmaschine powered by <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAARCAYAAACfB/8pAAAABmJLR0QA/wD/AP+gvaeTAAAFg0lEQVRIic2UbWzVZxnGf9fz//cdNtpRWpEu4l5cQDZk7WrDrO05vLglXRiJMQOdTqeIOpzWyTzwoWFtycwmG/OFGIwftkQN0SnoNutpiyUGu9HJCLhKXGPCoLRl9vX07Zzz3H6gJR00khqZXsnz4X8/93U99/VcT/5iBqp3DS9X4LYIqzCsANSPdFSkn2uOXXea9xilP7//w4Zbh+eljk2/7Px3vQ4AM0UaEzsV6A2wRwyWTu1/ALOvmbkTkYbEw9d68CtgKhc87QJKr9bqACK7R3dg9oTBOUk1lcm8RS075t9UmcxbJKkGoxPTiWs/+X+OcM2ukRXerA54O4XKj8TyupunNuvq5IHfTq3/a4TpwL4qFEjsPBLL654LeXB9RcFkMrXaULZz7uTC+J/fvLzHfp9TknbpMoDAB69p/diZy3uqGoduc14rHNbdXzi/Pf+fEyVmk4ODfO6KM/vWfmSxt/CjLm2p0FJt+YePDwCEQpUAcpO/nkm4e/dAfjbZ+ZcLuTCrp+kxJXojZQ9NpNJ7EfPA8JamZ03pz8xNfrG46UTCDKWaM+tTpL4NhACpIJVKNmc+FUYmYxJ2z17LmhhOPImxDSGPuP5Cos1DJbg9wKl3mVhT9iXzPCPIMSeSltHXEyn/dFFLe5MDCoDx+OMFgzNJWT74hvepty5fqWRi4/m1ZVHET8AGhX3ZTBuBV2R6wKWz9wIkmzO2gcWAv8q0WdIm4CRmjyfjGY8CjA+PPg18HWiRdD9mjwB3zJZ+b6T0HjP2Ad0y24T4FGJc8gfeqSpfEmKcRxR9rHG48Ehsft800csdc+Z/fOmJ4JaDrZZhzlMLyJltXNhy7FUAq6o6dCFIHDfssz3R8hi8XgsMh+nkWq2nF8BeIp7KzPi7ZN+qeerc84kJ2wJ03pDMu/dAnSYBqhuGe4V+cYUTaRugAFfjg8kBLPw8F39W16VdekNojmYZd2SaNgHPTvNaY3kHgYPT39X1I/slVnunN4WWGTYwbQJAhw+neqNlzcDyjKKhOwUlwJFpEwC6l75knA5QdXHQVfYWK0NQ67QJgMykjyczgtlCuQUYT+Pr8WENMCbjhXRoPyxuOnbSBQp/AEwa1EUbh5fNphBtHLpV4gGwro9P5P7FsH5gfn/VygXvujTsRoDUaNY5YEKwxAxdStWQjBJgcmB0UfdFjl88U2PSuffNNgNiAMg2+BDYo0GmW1LY8tpXipuOnQRw8e9kd5nZY8ACM7VFGoe33r17IB+gqq53XrQxscXM/QnIkVxtXZ284EUgSAUZz9knl2cC9FWX3mfoPuB04crjJ8AOGSxNxcMd02ZS8XC7iZvBfncgdssbQKehmkh9ogag4nuW4wI9OasRrxcBnPHHwoKl+254uX2oJ3rXht5o2cGeaHnRpduKNI48hLEHuH6q1A8sAAQkEFtbYvOeBzhTUZGTlZt6BajE6EP0czH6Qe/9J4pbO9qtKXdx2iXbDG4yOAOY4EZBV6CwUtGxs5H60buQfxnIB04DC6fOD4E9Qx988BTSfonP/OaFf/wqHHVxoALoBQaAW4F3ZH6dmzbSEpv3U5/0N0tsB/4AdAFxM9vlQ3fbtAmAkqNHxwoH/BqkbUh/QwzL2BcE3F7c2tEOoHWj5wJL3gl6QtAtOI9UH1hylaJjZwFadua+GoRaIfQjYf0YRw3bPP3KvDglsVeezsWHOkYHM/urJfsmsuPABcQzofyqwpaO12dN8b1CpH70/dUNIw/OrEXrRzZHGkYs0ji8dS5a4X93tDlC6e8LbYg0jNzu5fcLLTPju8A4Pjh4Vf4M/E+NZCT9F5IZrghU68zVTpWTBg+37sw9OxctXb3lGsNM1btHKjGtAnosdG2Ht+e+PVeZfwHOhW1ZsCswkwAAAABJRU5ErkJggg==" alt="Google" height="17px" width="50px" style="vertical-align:middle;">
	    </div>
	  </div>
    </div>

    </div><!--/row-->
    <!-- Footer -->
	<script>
	if (window.hasOwnProperty('webkitSpeechRecognition')) { 
	   /* Speech recognition supported */
	   document.getElementById("searchform_panel").className = 'col-md-11';
	   document.getElementById("microhpone_panel").style.display = 'block';
	} else {
	  document.getElementById("searchform_panel").className = 'col-md-12';
	}
	</script>
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
