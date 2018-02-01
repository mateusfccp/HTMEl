<?php
function doctype(array $args = [], ...$children) {
    echo "<!DOCTYPE html>";

    foreach ($children as $child) {
        $child();
    }
}
