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
                                                                                                                                      array("text" => "User-Agent &amp; IP", "page_idf" => "ua")))
                            );
$config_global_meldung = array("activated" => "true", "bell_count" => "1", "level" => "success", "message" => '<strong>Willkommen bei ANDIBI.TK!</strong><br> Das neue Design, welches das  <strong><a href="http://www.google.com/design/" target="_blank">Material-Design</a></strong> von Google benutzt, ist endlich online. Bitte <strong><a href="contact.php">melde auftretende Fehler</a></strong>. Den Code kannst du <strong><a href="https://github.com/Brawl345/andibi.tk/" target="_blank">auf GitHub betrachten</a></strong>.');
?>
