<?php

namespace mateusfccp\HTMEl\Components;

class html extends ContainerComponent {
    function name() {
        return "html";
    }
}

function html(array $attributes = [], Block ...$children) {
    return new html($attributes, ...$children);
}
