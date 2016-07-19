    <div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="sr-only">Navigation umschalten</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
		<a class="navbar-brand" href="<?php echo $root; ?>index.php"><?php echo $config_page['maintitle']; ?></a>
      </div>
	  <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <?php foreach ($config_navbar_content as $value) :?>
            <?php if($value['dropdown'] == "true") : ?>
            <li class="dropdown <?php if ($shownpage_page['isindropdown'] == $value['dropdown_idf']) {echo "active";}?>">
              <a href="#" data-target="#" class="dropdown" data-toggle="dropdown"><?php echo $value['text'];?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php foreach ($value['elements'] as $element) :?>
                <li <?php if ($shownpage_page['page_idf'] == $element['page_idf']) {echo 'class="active"';}?>><a href="<?php echo $root; echo $element['page_idf'] . ".php";?>"><?php echo $element['text']; ?></a>
                <?php endforeach; ?>
              </ul>
            </li>
            <?php else: ?>
            <li <?php if ($shownpage_page['page_idf'] == $value['page_idf']) {echo 'class="active"';}?>><a href="<?php echo $root; echo $value['page_idf'] . ".php"; ?>"><?php echo $value['text'];?></a></li>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php if ($page_has_extra_navbarentry == "true") :?>
            <li class="active"><a href="<?php echo $shownpage_page['page_idf']; ?>.php"><?php echo $shownpage_page['title']; ?></a></li>
            <?php endif; ?>
          </ul>
      <ul class="nav navbar-right navbar-nav">
        <li><a href="https://wiidatabase.de" target="_blank">WiiDatabase.de</a></li>
        <li><a href="#newModal" data-toggle="modal"><i class="glyphicon glyphicon-bell"></i><?php if($config_global_meldung['activated'] == "true"): echo '<span class="label label-danger pull-right">'; echo ''. $config_global_meldung['bell_count'] .'</span>'; endif; ?></a></li>
        <li><a href="https://plus.google.com/share?url=<?php echo getCurrentUrl(); ?>" target="_blank"><i class="glyphicon glyphicon-share"></i></a></li>
      </ul>
        </div><!--/.nav-collapse -->
  </div>
</div>
<?php include("templates/meldungen.php"); ?>
