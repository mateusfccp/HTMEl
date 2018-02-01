<?php

namespace HTMEl;

class html extends ContainerComponent {
    function name() {
        return "html";
    }
}

function html(array $attributes = [], Block ...$children) {
    return new html($attributes, ...$children);
}
