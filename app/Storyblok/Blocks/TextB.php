<?php

namespace App\Storyblok\Blocks;

use Riclep\Storyblok\Block as BaseBlock;
use Riclep\Storyblok\Fields\Textarea;

/**
 * Class representation for Storyblok text-b component.
 *
 * @property-read string text
 * @property-read array buttons
 */
class TextB extends BaseBlock
{
    protected array $_casts = [
        'text' => Textarea::class,
    ];
}
