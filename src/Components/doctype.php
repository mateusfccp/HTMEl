<?php

namespace mateusfccp\HTMEl\Components;

class doctype extends StandaloneComponent {
    function name() {
        return "!DOCTYPE html";
    }
}

function doctype() {
    return new doctype();
}
