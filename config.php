<?php
// Configfile

// Pageinformation
$config_page = array("maintitle" => "ANDIBI.TK", "site_url" => "https://andibi.tk");
$config_navbar_content = array(
                                array("text" => "Home", "page_idf" => "index"),
                                array("text" => "Über", "page_idf" => "about"),
                                array("dropdown" => "true", "text" => "Tools", "dropdown_idf" => "tools", "elements" => array(
																															  array("text" => "Datalist-Test", "page_idf" => "datalisttest"),
                                                                                                                              array("text" => "Gefährliches Copy &amp; Paste", "page_idf" => "cp"),
																															  array("text" => "News-Suchmaschine", "page_idf" => "news-sufu"),
                                                                                                                              array("text" => "User-Agent &amp; IP", "page_idf" => "ua")
																															  )
								     )
                            );
$config_global_meldung = array("activated" => "false", "bell_count" => "1", "level" => "success", "message" => '');
?>
