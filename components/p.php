<?php
class p extends ContainerComponent {
    function name() {
        return "p";
    }
}

function p(array $args = [], Block ...$children) {
    return new p($args, ...$children);
}
