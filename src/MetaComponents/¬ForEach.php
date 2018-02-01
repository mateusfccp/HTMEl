<?php

namespace HTMEl;

class ¬ForEach implements Block {
    function __construct(array $iterable, Closure $iteration) {
        $this->iterable = $iterable;
        $this->iteration = $iteration;
    }

    function render() {
        $count = 2;

        if ($count === 1) {
            foreach ($this->iterable as $item) {
                ($this->iteration)($item)->render();
            }
        } elseif ($count === 2) {
            foreach ($this->iterable as $key => $value) {
                ($this->iteration)($key, $value)->render();
            }
        } else {
            throw new Error("You should provide a Closure with one or two params!");
        }
    }
}

function ¬foreach(array $iterable, Closure $iteration) {
    return new ¬ForEach($iterable, $iteration);
}
