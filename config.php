<?php
// Configfile

// Pageinformation
$config_page = array("maintitle" => "ANDIBI.TK");
$config_navbar_content = array(
                                array("text" => "Home", "page_idf" => "index"),
                                array("text" => "Über", "page_idf" => "about"),
                                array("text" => "Kontakt", "page_idf" => "contact"),
                                array("text" => "Arch Linux Repo", "page_idf" => "archrepo"),
                                array("dropdown" => "true", "text" => "Tools", "dropdown_idf" => "tools", "elements" => array(array("text" => "Datalist-Test", "page_idf" => "datalisttest"),
                                                                                                                                      array("text" => "Gefährliches Copy &amp; Paste", "page_idf" => "cp"),
                                                                                                                                      array("text" => "User-Agent", "page_idf" => "ua")))
                            );
$config_global_meldung = array("activated" => "true", "bell_count" => "1", "level" => "info", "message" => '<strong>Willkommen bei der ANDIBI.TK Preview!</strong>');
?>
