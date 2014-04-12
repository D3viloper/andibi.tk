<?php
if($config_global_meldung['activated'] == "true"):
echo meldung($config_global_meldung['message'],$config_global_meldung['level']);
endif;
?>
