<?php
require __DIR__ . '/HtmEl.php';

$options = ['Cartão 1' => 'Conteúdo 1', 'Cartão 2' => 'Conteúdo 2', 'Cartão 3' => 'Conteúdo 3'];

div(['id' => 'testing_foreach'],
    ¬foreach($options, function ($card, $content) {
        return div(['style' => 'border: 1px solid black'],
            p([], ¬text($card)),
            p([], ¬text($content))
        );
    })
)->render();
