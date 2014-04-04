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
            <li<?php echo "$home" ?>><a href="index.php">Home</a></li>
            <li<?php echo "$about" ?>><a href="about.php">Über</a></li>
            <li<?php echo "$contact" ?>><a href="contact.php">Kontakt</a></li>
	    <li<?php echo "$internet" ?>><a href="internet.php">Internet-Special  <span class="label label-danger">NEU!</span></a></li>
            <li class="dropdown<?php echo "$dropdown" ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li<?php echo "$chromenewhtml5" ?>><a href="chromenewhtml5.php">Chrome &lt;3 HTML5</a></li>
                <li<?php echo "$cp" ?>><a href="cp.php">Gefährliches Copy & Paste</a></li>
                <li<?php echo "$useragent" ?>><a href="ua.php">User-Agent</a></li>
              </ul>
            </li>
            <?php echo "$navbarzusatz" ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
