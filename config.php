<?php
// Configfile

// Pageinformation
$config_page = array("maintitle" => "ANDIBI.TK");
$config_navbar_content = array(
                                array("text" => "Home", "page_idf" => "index"),
                                array("text" => "Über", "page_idf" => "about"),
                                array("text" => "Kontakt", "page_idf" => "contact"),
                                array("dropdown" => "true", "text" => "Tools", "dropdown_idf" => "tools", "elements" => array(array("text" => "Datalist-Test", "page_idf" => "datalisttest"),
                                                                                                                                      array("text" => "Gefährliches Copy &amp; Paste", "page_idf" => "cp"),
                                                                                                                                      array("text" => "User-Agent", "page_idf" => "ua")))
                            );
$config_global_meldung = array("activated" => "true", "bell_count" => "1", "level" => "danger", "message" => 'Die ANDIBI.TK Arch-Repo wurde eingestellt. Bitte <a href="archrepo.php">modifiziere deine pacman.conf</a>, falls du die Repo nutzt.');
?>
