<?php

namespace HTMEl;

class doctype extends StandaloneComponent {
    function name() {
        return "!DOCTYPE html";
    }
}

function doctype() {
    return new doctype();
}
