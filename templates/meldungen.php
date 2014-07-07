<?php
echo modal($title='Neues auf ANDIBI.TK');
if($config_global_meldung['activated'] == "true"):
    echo meldung($config_global_meldung['message'],$config_global_meldung['level']);
else:
    echo '<div class="text-center"><p>Momentan ist keine Meldung verfügbar</p></div>';
endif;
echo modal2($content='');
 ?>
