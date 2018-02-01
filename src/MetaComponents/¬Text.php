<?php
class ¬Text implements Block {
    function __construct(string $text) {
        $this->text = $text;
    }

    function render() {
        echo $this->text;
    }
}

function ¬text(string $text) {
    return new ¬Text($text);
}
