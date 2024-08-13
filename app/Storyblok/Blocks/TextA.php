<?php

namespace App\Storyblok\Blocks;

use Illuminate\Support\Str;
use Riclep\Storyblok\Block as BaseBlock;
use Riclep\Storyblok\Fields\Textarea;

/**
 * Class representation for Storyblok text-a component.
 *
 * @property-read string key_words
 * @property-read string text
 * @property-read array buttons
 */
class TextA extends BaseBlock
{
    protected array $_casts = [
        'text' => Textarea::class,
    ];

    public function getKeyWordsAttribute() {
        return Str::of($this->content()['key_words'])->wrap('<span>', '</span>')->explode("\n")->implode('</span><span>');
    }
}
