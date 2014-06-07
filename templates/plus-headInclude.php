<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $shownpage_page['description']; ?>">
    <meta name="author" content="Andreas Bielawski">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="expires" content="86400">
    <link rel="shortcut icon" href="favicon.ico">
      <title><?php echo $config_page['maintitle'] . " | " . $shownpage_page['title']; ?></title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="static/css/bootstrap.min.css">
      <!-- Custom styles for this page -->
    <link href="static/css/gplus.css" rel="stylesheet">
      <?php if($shownpage_page['page_idf'] == "404"):?>
      <!-- Custom styles for this error page -->
      <link rel="stylesheet" href="static/css/404.css">
    <?php endif;?>
    <?php if($shownpage_page['genericons'] == "true"): ?>
    <link href="static/css/genericons.css" rel="stylesheet">
    <link href="static/css/custom-genericons.css" rel="stylesheet">
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