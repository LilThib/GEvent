<?php

/**
 * Affiche une notification bootstrap
 * @param string $message
 * @param string error, alert, success
 */
function DisplayError($message, $type) {
    return '<div class="alert alert-' . $type . '">'
            . $message .
    '</div>';
}
