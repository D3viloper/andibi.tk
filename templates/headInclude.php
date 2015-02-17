<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- NO <meta http-equiv="X-UA-Compatible" content="IE=edge">, because fuck you IE -->
    <meta name="description" content="<?php echo $shownpage_page['description']; ?>">
    <meta name="author" content="Andreas Bielawski">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
      <title><?php echo $config_page['maintitle'] . " | " . $shownpage_page['title']; ?></title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="<?php echo $root; ?>static/css/bootstrap.min.css">
      <!-- Custom styles for this page -->
	<link href="<?php echo $root; ?>static/css/ripples.min.css" rel="stylesheet">
	<link href="<?php echo $root; ?>static/css/material-wfont.min.css" rel="stylesheet">
	<link href="<?php echo $root; ?>static/css/custom.css" rel="stylesheet">
      <?php if($shownpage_page['page_idf'] == "404"):?>
      <!-- Custom styles for this error page -->
      <link rel="stylesheet" href="<?php echo $root; ?>static/css/404.css">
    <?php endif;?>
    <?php if($shownpage_page['page_idf'] == "discover"):?>
      <!-- Custom styles for this error page -->
      <link rel="stylesheet" href="<?php echo $root; ?>static/css/carousel.css">
    <?php endif;?>
    <?php if($shownpage_page['genericons'] == "true"): ?>
    <link href="<?php echo $root; ?>static/css/genericons.css" rel="stylesheet">
    <link href="<?php echo $root; ?>static/css/custom-genericons.css" rel="stylesheet">
    <?php endif;?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries (IE SUCKS!) -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        if (top != self)
        top.location = self.location;
    </script>
  </head>
    <body>
    <div id="wrap">
