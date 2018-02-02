<?php

namespace mateusfccp\HTMEl;

abstract class ContainerComponent implements Component {
    function __construct(array $attributes = [], Block ...$children) {
        $this->args = $attributes;
        $this->children = $children;
    }

    function open() {
        return "<{$this->name()} {$this->attributes()}>";
    }

    function close() {
        return "</{$this->name()}>";
    }

    function attributes() {
        return array_reduce(array_keys($this->args), function ($carry, $item) {
            return $carry . "{$item}='{$this->args[$item]}' ";
        }, "");
    }

    function render() {
        echo $this->open();

        foreach ($this->children as $child) {
            $child->render();
        }

        echo $this->close();
    }
}
