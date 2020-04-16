<?php
function dump($var) {
    global $APPLICATION;
    $APPLICATION->RestartBuffer();
    echo '<pre>';
    var_dump($var);
    die();
}