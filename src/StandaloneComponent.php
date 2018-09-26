<?php

namespace mateusfccp\HTMEl;

abstract class StandaloneComponent implements Component {
    protected function __construct(array $attributes = []) {
        $this->args = $attributes;
    }

    protected function open() {
        return "<{$this->name()} {$this->attributes()}";
    }

    protected function close() {
        return "/>";
    }

    protected function attributes() {
        return array_reduce(array_keys($this->args), function ($carry, $item) {
            return $carry . "{$item}='{$this->args[$item]}' ";
        }, "");
    }

    public function render() {
        echo $this->open();
        echo $this->close();
    }

    public static function do(...$args) {
        return new static(...$args);
    }
}
