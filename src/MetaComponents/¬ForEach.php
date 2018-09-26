<?php

namespace mateusfccp\HTMEl\MetaComponents;

class ¬ForEach extends \mateusfccp\HTMEl\MetaComponent {
    protected function __construct(iterable $iterable, \Closure $iteration) {
        $this->iterable = $iterable;
        $this->iteration = $iteration;
    }

    public function render() {
        $count = (new \ReflectionFunction($this->iteration))->getNumberOfParameters();

        if ($count === 1) {
            foreach ($this->iterable as $item) {
                ($this->iteration)($item)->render();
            }
        } elseif ($count === 2) {
            foreach ($this->iterable as $key => $value) {
                ($this->iteration)($value, $key)->render();
            }
        } else {
            throw new Error("You must provide a function with 1 or 2 params!");
        }
    }
}
