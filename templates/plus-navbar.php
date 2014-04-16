<div class="navbar navbar-fixed-top header">
  <div class="col-md-12">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">ANDIBI.TK</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
      <i class="glyphicon glyphicon-th-list"></i>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://google.com/+AndreasBielawski" target="_ext">+ANDIBI</a></li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-bell"></i></a>
      <ul class="dropdown-menu">
        <li><a href="#newModal" data-toggle="modal"><span class="label label-info pull-right">1</span>Neues</a></li>
        <!-- <li><a href="#"><span class="label label-info pull-right">1</span>Link</a></li> -->
      </ul>
        </li>
        <!--<li><a href="#" id="btnToggle"><i class="glyphicon glyphicon-th"></i></a></li>-->
        <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
      </ul>
      </div>
      </div>
      </div>

    <div class="navbar navbar-default" id="subnav">
    <div class="col-md-12">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
        <span class="sr-only">Navigation umschalten</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>

    <div class="collapse navbar-collapse" id="navbar-collapse2">
<ul class="nav navbar-nav">
            <li <?php if ($active == "home") {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
            <li <?php if ($active == "about") {echo 'class="active"';} ?>><a href="about.php">Über</a></li>
            <li <?php if ($active == "contact") {echo 'class="active"';} ?>><a href="contact.php">Kontakt</a></li>
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
    </div>
  </div>
</div>
