<!DOCTYPE html>
<html lang="de">
  <head>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="<?php echo $page_describtion; ?>">
  	<meta name="author" content="Andreas Bielawski">
  	<meta http-equiv="expires" content="86400">
  	<link rel="shortcut icon" href="favicon.ico">
  	<title>ANDIBI.TK | <?php echo $page_title; ?></title>
  	<!-- Bootstrap core CSS -->
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<!-- Custom styles for this page -->
  	<link rel="stylesheet" href="css/template.css">
  	<?php if($page_idf == "404"):?>
  	<!-- Custom styles for this error page -->
  	<link rel="stylesheet" href="css/404.css">
    <?php endif;?>
    <?php if($page_uses_genericons == "true"): ?>
    <link href="css/genericons.css" rel="stylesheet">
	<link href="css/custom-genericons.css" rel="stylesheet">
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