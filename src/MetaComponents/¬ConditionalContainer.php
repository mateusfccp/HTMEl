<?php

namespace mateusfccp\HTMEl\MetaComponents;

class ¬ConditionalContainer implements Block {
    function __construct(bool $condition, ContainerComponent $container, ...$children) {
        $this->condition = $condition;
        $this->container = $container;
        $this->children = $children;
    }

    function render() {
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

function ¬conditional_container(bool $condition, ContainerComponent $container, ...$children) {
    return new ¬ConditionalContainer($condition, $container, ...$children);
}
