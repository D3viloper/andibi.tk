  	<div id="wrap">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">ANDIBI.TK</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($active == "home") {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
            <li <?php if ($active == "about") {echo 'class="active"';} ?>><a href="about.php">Über</a></li>
            <li <?php if ($active == "contact") {echo 'class="active"';} ?>><a href="contact.php">Kontakt</a></li>
	        <li <?php if ($active == "internet") {echo 'class="active"';} ?>><a href="internet.php">Internet-Special  <span class="label label-danger">NEU!</span></a></li>
            <li class="dropdown<?php if ($isindropdown == "true") {echo " active";} ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li <?php if ($active == "chromenewhtml5") {echo 'class="active"';} ?>><a href="chromenewhtml5.php">Chrome &lt;3 HTML5</a></li>
                <li <?php if ($active == "cp") {echo 'class="active"';} ?>><a href="cp.php">Gefährliches Copy & Paste</a></li>
                <li <?php if ($active == "useragent") {echo 'class="active"';} ?>><a href="ua.php">User-Agent</a></li>
              </ul>
            </li>
            <?php if ($page_has_extra_navbarentry == "true") :?>
            <li class="active"><a href="<?php echo $page_has_extra_navbarentry_url; ?>"><?php echo $page_has_extra_navbarentry_title; ?></a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
