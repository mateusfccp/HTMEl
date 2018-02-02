<?php

namespace mateusfccp\HTMEl\Components;

class div extends ContainerComponent {
    function name() {
        return "div";
    }
}

function div(array $attributes = [], Block ...$children) {
    return new div($attributes, ...$children);
}
