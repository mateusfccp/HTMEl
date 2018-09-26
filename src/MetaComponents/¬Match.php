<?php

namespace mateusfccp\HTMEl\MetaComponents;

class ¬Match extends \mateusfccp\HTMEl\MetaComponent {
    protected function __construct(...$cases) {
        $this->cases = $cases;
    }

    public function render() {
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
