<?php

namespace mateusfccp\HTMEl;

abstract class ContainerComponent implements Component {
    protected function __construct(array $attributes = [], Component ...$children) {
        $this->args = $attributes;
        $this->children = $children;
    }

    protected function open() {
        return "<{$this->name()} {$this->attributes()}>";
    }

    protected function close() {
        return "</{$this->name()}>";
    }

    protected function attributes() {
        return array_reduce(array_keys($this->args), function ($carry, $item) {
            return $carry . "{$item}='{$this->args[$item]}' ";
        }, "");
    }

    public function render() {
        echo $this->open();

        foreach ($this->children as $child) {
            $child->render();
        }

        echo $this->close();
    }

    public static function do(...$args) {
        return new static(...$args);
    }
}
