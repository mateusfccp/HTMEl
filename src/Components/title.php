<?php

namespace mateusfccp\HTMEl\Components;

class title extends ContainerComponent {
    function name() {
        return "title";
    }
}

function title(¬text $child) {
    return new title([], [$child]);
}
