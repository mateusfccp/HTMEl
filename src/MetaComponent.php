<?php

namespace mateusfccp\HTMEl;

abstract class MetaComponent implements Component {
    public function render() {}

    public static function do(...$args) {
        return new static(...$args);
    }
}



