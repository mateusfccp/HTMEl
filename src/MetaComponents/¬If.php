<?php

namespace mateusfccp\HTMEl\MetaComponents;

use \mateusfccp\HTMEl\Component;

class ¬If extends \mateusfccp\HTMEl\MetaComponent {
    protected function __construct(bool $condition, Component $then, Component $else) {
        $this->condition = $condition;
        $this->then = $then;
        $this->else = $else;
    }

    public function render() {
        if ($this->condition) {
            $this->then->render();
        } else {
            $this->else->render();
        }
    }
}
