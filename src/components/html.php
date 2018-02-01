<?php
function html(array $args = [], ...$children) {
    return function () use ($args, $children) {
        echo "<html>";
        
        foreach ($children as $child) {
            $child();
        }

        echo "</html>";
    };
}
