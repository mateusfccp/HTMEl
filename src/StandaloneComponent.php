<?php

namespace HTMEl;

abstract class StandaloneComponent implements Component {
    function __construct(array $attributes = []) {
        $this->args = $attributes;
    }

    function open() {
        return "<{$this->name()} {$this->attributes()}";
    }

    function close() {
        return "/>";
    }

    function attributes() {
        return array_reduce(array_keys($this->args), function ($carry, $item) {
            return $carry . "{$item}='{$this->args[$item]}' ";
        }, "");
    }

    function render() {
        echo $this->open();
        echo $this->close();
    }
}
