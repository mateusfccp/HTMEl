<?php

namespace HTMEL;

class body extends ContainerComponent {
    function name() {
        return "body";
    }
}

function body(array $attributes, Block ...$children) {
    return new body($attributes, ...$children);
}
