<?php

namespace mateusfccp\HTMEl\MetaComponents;

class ¬ConditionalContainer extends \mateusfccp\HTMEl\MetaComponent {
    protected function __construct(bool $condition, ContainerComponent $container, ...$children) {
        $this->condition = $condition;
        $this->container = $container;
        $this->children = $children;
    }

    public function render() {
        if ($this->condition) {
            $this->container->children = $this->children;
            $this->container->render();
        } else {
            foreach ($this->children as $child) {
                $child->render();
            }
        }
    }
}
