<?php
class ¬conditional_container implements Block {
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
    return new ¬conditional_container($condition, $container, ...$children);
}
