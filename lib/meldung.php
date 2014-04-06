<?php
function meldung($message, $level) {
    $string = '<div class="alert alert-' . $level . '"><p>' . $message . '</p></div>';
    return $string;
    }
?>