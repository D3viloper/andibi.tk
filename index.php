<?php
error_reporting(0);
if(file_exists("config.php.inc")) {
    include("config.php.inc");
    } else {
        $root = '';
    }

if(file_exists("config.php")) {
    include("config.php");
    } else {
        echo "Die config.php existiert nicht";
        exit;
    }
	
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

include("lib/meldung.php");
include("lib/modal.php");
include("lib/cururl.php");

if ($_GET['page']) {
    if(file_exists("pages/" . $_GET['page'] . ".php")) {
        $file_path = "pages/" . $_GET['page'] . ".php";
        include($file_path);
    } else {
        http_response_code(404); // Gebe 404 aus
        include("pages/404.php"); // gebe die 404-Seite aus, für den Fall, dass keine ErrorPage gesetzt wurde
    }
} else {
    include("pages/index.php");
}
?>
