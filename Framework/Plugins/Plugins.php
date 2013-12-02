<?php

class Plugins {
    public static function Import($name) {
        require_once sprintf("Framework/Plugins/%s/Plugin.php", $name);
    }
}
?>