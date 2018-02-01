<?php
class p extends ContainerComponent {
    function name() {
        return "p";
    }
}

function p(array $attributes = [], Block ...$children) {
    return new p($attributes, ...$children);
}
