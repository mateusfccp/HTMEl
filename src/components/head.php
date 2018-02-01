<?php
function head(array $args = [], ...$children) {
    return function () use ($args, $children) {
        echo "<head>";

        foreach ($children as $child) {
            $child();
        }

        echo "</head>";
    };
}
