<?php
class div extends ContainerComponent {
    function name() {
        return "div";
    }
}

function div(array $args = [],...$children) {
    return new div($args, ...$children);
}
