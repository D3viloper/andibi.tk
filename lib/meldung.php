<?php
function meldung($message, $level) {
    $string = '<div class="alert alert-' . $level . ' shadow-z-1"><p>' . $message . '</p></div>';
    return $string;
    }
?>
