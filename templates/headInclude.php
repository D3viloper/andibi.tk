<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $shownpage_page['description']; ?>">
    <meta name="author" content="Andreas Bielawski">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title><?php echo $config_page['maintitle'] . " | " . $shownpage_page['title']; ?></title>
    <link rel="shortcut icon" href="<?php echo $root; ?>favicon.ico">
	
	<link rel="prefetch" href="https://andibi.tk/static/css/bootstrap.min.css">
	<link rel="prefetch" href="https://andibi.tk/static/css/ripples.min.css">
	<link rel="prefetch" href="https://andibi.tk/static/css/bootstrap-material-design.min.css">
	<link rel="prefetch" href="https://andibi.tk/static/css/custom.min.css">
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo $root; ?>static/css/bootstrap.min.css">
	
	<!-- Feeds -->
	<link rel="alternate" type="application/rss+xml" title="Kürzliche Änderungen" href="https://github.com/Brawl345/andibi.tk/commits/master.atom" />
	
	<!-- OpenGraph Tags -->
	<meta property="og:site_name" content="<?php echo $config_page['maintitle']; ?>" />
    <meta property="og:title" content="<?php echo $shownpage_page['title']; ?>" />
	<meta property="og:description" content="<?php echo $shownpage_page['description']; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo $config_page['site_url']; ?>/<?php echo $shownpage_page['page_idf']; ?>.php" />
	<meta property="og:image" content="<?php echo $config_page['site_url']; ?>/img/logo.png" />
	
	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@iCONLinux" />
	<meta name="twitter:title" content="<?php echo $config_page['maintitle']; ?> | <?php echo $shownpage_page['title']; ?>" />
	<meta name="twitter:description" content="<?php echo $shownpage_page['description']; ?>" />
	
	<!-- Phone number detection -->
	<meta name="format-detection" content="telephone=no">
	
	<!-- Apple touch icons -->
    <link rel="apple-touch-icon" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>img/apple-touch-icons/apple-touch-icon-180x180.png" />
	
      <!-- Custom styles for this page -->
	<link href="<?php echo $root; ?>static/css/ripples.min.css" rel="stylesheet">
	<link href="<?php echo $root; ?>static/css/bootstrap-material-design.min.css" rel="stylesheet">
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
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
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
