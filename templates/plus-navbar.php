<!-- <div class="navbar navbar-fixed-top header">
  <div class="col-md-12">
    <div class="navbar-header">
          <a class="navbar-brand" href="index.php">lel</a>
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
      </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
      </ul>
      </div>
      </div>
      </div> -->

    <div class="navbar navbar-default" id="subnav">
    <div class="col-md-12">
      <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><?php echo $config_page['maintitle']; ?></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
        <span class="sr-only">Navigation umschalten</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>
 <div class="collapse navbar-collapse" id="navbar-collapse2">
          <ul class="nav navbar-nav">
            <?php foreach ($config_navbar_content as $value) :?>
            <?php if($value['dropdown'] == "true") : ?>
            <li class="dropdown <?php if ($shownpage_page['isindropdown'] == $value['dropdown_idf']) {echo "active";}?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $value['text'];?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php foreach ($value['elements'] as $element) :?>
                <li <?php if ($shownpage_page['page_idf'] == $element['page_idf']) {echo 'class="active"';}?>><a href="<?php echo $element['page_idf'] . ".php";?>"><?php echo $element['text']; ?></a>
                <?php endforeach; ?>
              </ul>
            </li>
            <?php else: ?>
            <li <?php if ($shownpage_page['page_idf'] == $value['page_idf']) {echo 'class="active"';}?>><a href="<?php echo $value['page_idf'] . ".php"; ?>"><?php echo $value['text'];?></a></li>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php if ($page_has_extra_navbarentry == "true") :?>
            <li class="active"><a href="<?php echo $page_has_extra_navbarentry_url; ?>"><?php echo $page_has_extra_navbarentry_title; ?></a></li>
            <?php endif; ?>
          </ul>
      <ul class="nav navbar-right navbar-nav">
        <li><a href="https://google.com/+AndreasBielawski" target="_ext">+ANDIBI</a></li>
        <li><a href="#newModal" data-toggle="modal"><i class="glyphicon glyphicon-bell"></i><span class="label label-danger pull-right">1</span></a></li>
        <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
      </ul>
        </div><!--/.nav-collapse -->
  </div>
</div>
