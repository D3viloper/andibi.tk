  	<div id="wrap">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><?php echo $config_page['maintitle']; ?></a>
        </div>
        <div class="collapse navbar-collapse">
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
        </div><!--/.nav-collapse -->
      </div>
    </div>