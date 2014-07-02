<?php
echo modal($title='Neues auf ANDIBI.TK');
if($config_global_meldung['activated'] == "true"):
    echo meldung($config_global_meldung['message'],$config_global_meldung['level']);
else:
    echo '<div class="text-center"><p>Momentan ist keine Meldung verfügbar</p></div>';
endif;
echo modal2($content='<div class="text-center"><strong>Dies ist eine Preview-Version, live aus dem <a href="https://github.com/Brawl345/andibi.tk/tree/gstyle" target="_blank">Git-Repositorium</a>!</strong> Bitte <a href="https://github.com/Brawl345/andibi.tk/issues" target="_blank">melde auftretende Fehler</a>!</div>');
 ?>
