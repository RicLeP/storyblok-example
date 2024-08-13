<?php

namespace App\Storyblok\Blocks;

use App\Storyblok\Fields\Link;
use Riclep\Storyblok\Block as BaseBlock;

/**
 * Class representation for Storyblok button component.
 *
 * @property-read string label
 * @property-read string link
 * @property-read string style
 */
class Button extends BaseBlock
{
    protected array $_casts = [
        'link' => Link::class,
    ];
}
