<?php
class ¬match implements Block {
    function __construct(...$cases) {
        $this->cases = $cases;
    }

    function render() {
        foreach ($this->cases as $case) {
            if (false /*typeof $block !== Block*/) {
                throw new Error("Your case array itens should follow the pattern \" bool => Block\"");
            }

            if ($case[0]) {
                $case[1]->render();
                break;
            }
        }
    }
}

function ¬match(...$cases) {
    return new ¬match(...$cases);
}
