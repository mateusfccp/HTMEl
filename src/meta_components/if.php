<?php
class ¬if implements Block {
    function __construct(bool $condition, Block $then, Block $else) {
        $this->condition = $condition;
        $this->then = $then;
        $this->else = $else;
    }

    function render() {
        if ($this->condition) {
            $this->then->render();
        } else {
            $this->else->render();
        }
    }
}

function ¬if(bool $condition, Block $then, Block $else) : Block {
    return new ¬if($condition, $then, $else);
}
