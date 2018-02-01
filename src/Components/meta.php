<?php

namespace HTMEl;

class meta extends ContainerComponent {
    function name() {
        return "meta";
    }
}

function meta(array $attributes = [], Block ...$children) {
    return new meta($attributes, ...$children);
}
