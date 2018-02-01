<?php

namespace HTMEl;

interface Component extends Block {
    function __construct(array $args = [], Block ...$children);
    function name();
    function open();
    function close();
    function attributes();
}
