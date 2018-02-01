<?php

namespace HTMEl;

class head extends ContainerComponent {
    function name() {
        return "head";
    }
}

function head(array $attributes = [], Block ...$children) {
    return new head($attributes, ...$children);
}
