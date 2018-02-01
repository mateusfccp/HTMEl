<?php
function meta(array $args = [], ...$children) {
    return function () use ($args, $children) {
        echo "<meta";

        foreach ($args as $arg => $value) {
            echo " {$arg}='{$value}'";
        }

        echo ">";
    };
}
