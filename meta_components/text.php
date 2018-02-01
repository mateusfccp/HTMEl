<?php
class ¬text implements Block {
    function __construct(string $text) {
        $this->text = $text;
    }

    function render() {
        echo $this->text;
    }
}

function ¬text(string $text) {
    return new ¬text($text);
}
