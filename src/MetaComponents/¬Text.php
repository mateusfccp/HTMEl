<?php

namespace mateusfccp\HTMEl\MetaComponents;

class ¬Text extends \mateusfccp\HTMEl\MetaComponent {
    protected function __construct(string $text) {
        $this->text = $text;
    }

    public function render() {
        echo $this->text;
    }
}
