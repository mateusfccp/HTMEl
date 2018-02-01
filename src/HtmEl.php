<?php
require 'Block.interface.php';
require 'Component.interface.php';
require 'ContainerComponent.abstract.php';

function load_from_dir(string $dir) {
    foreach (glob($dir . '/*.php') as $file) {
        require $file;
    }
}

load_from_dir('meta_components');
load_from_dir('components');

