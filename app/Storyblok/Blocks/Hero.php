<?php

namespace App\Storyblok\Blocks;

use Riclep\Storyblok\Block as BaseBlock;

/**
 */
class Hero extends BaseBlock
{
    public function textColour() {
        $colours = [
            'dark' => 'fgc-primary-dark',
            'light' => 'fgc-white',
        ];

        return $colours[$this->content()['text_colour']];
    }

    public function getFormattedTextAttribute() {
        return str_replace([
            '=',
            '+',
        ], [
            '<span class="fgc-primary">=</span>',
            '<span class="fgc-primary">+</span>',
        ], $this->content()['text']);
    }
}
