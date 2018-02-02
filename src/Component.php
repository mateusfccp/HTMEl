<?php

namespace mateusfccp\HTMEl;

interface Component extends Block {
    function __construct(array $attributes = [], Block ...$children);
    function name();
    function open();
    function close();
    function attributes();
}
