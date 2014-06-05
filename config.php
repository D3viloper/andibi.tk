<?php
// Configfile

// Pageinformation
$config_page = array("maintitle" => "ANDIBI.TK");
$config_navbar_content = array(
                                array("text" => "Home", "page_idf" => "index"),
                                array("text" => "Über", "page_idf" => "about"),
                                array("text" => "Kontakt", "page_idf" => "contact"),
                                array("text" => "Arch Linux Repo", "page_idf" => "archrepo"),
                                array("dropdown" => "true", "text" => "Tools", "dropdown_idf" => "tools", "elements" => array(array("text" => "Chrome &lt;3 HTML5", "page_idf" => "chromenewhtml5"),
                                                                                                                                      array("text" => "Gefährliches Copy & Paste", "page_idf" => "cp"),
                                                                                                                                      array("text" => "User-Agent", "page_idf" => "ua")))
                            );
$config_global_meldung = array("activated" => "false", "level" => "info", "message" => '<strong>Willkommen</strong> auf dem <strong>NEUEN</strong> Server!');
?>
