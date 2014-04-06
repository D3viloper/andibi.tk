<?php
<<<<<<< HEAD
if(file_exists("config.php")) {
	include("config.php");
	} else {
		echo "Die config.php existiert nicht";
		exit;
	}
include("lib/meldung.php");
if ($_GET['page']) {
	if(file_exists("pages/" . $_GET['page'] . ".php")) {
		$file_path = "pages/" . $_GET['page'] . ".php";
		include($file_path);
	}
} else {
	include("pages/index.php");
}
?>
=======
if(file_exists("config.php")) {
	include("config.php");
	} else {
		echo "Die config.php existiert nicht";
		exit;
	}
include("lib/meldung.php");
if ($_GET['page']) {
	if(file_exists("pages/" . $_GET['page'] . ".php")) {
		$file_path = "pages/" . $_GET['page'] . ".php";
		include($file_path);
	}
} else {
	include("pages/index.php");
}
?>
>>>>>>> master
