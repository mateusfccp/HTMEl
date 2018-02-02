<?php

namespace mateusfccp\HTMEl\Components;

class p extends ContainerComponent {
    function name() {
        return "p";
    }
}

function p(array $attributes = [], Block ...$children) {
    return new p($attributes, ...$children);
}
