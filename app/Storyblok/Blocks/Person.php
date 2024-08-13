<?php

namespace App\Storyblok\Blocks;

use Riclep\Storyblok\Block as BaseBlock;
use Riclep\Storyblok\Fields\Textarea;

/**
 * Class representation for Storyblok person component.
 *
 * @property-read string name
 * @property-read string surname
 * @property-read string biography
 * @property-read string photo
 * @property-read array buttons
 * @property-read string linkedin
 */
class Person extends BaseBlock
{
    protected array $_casts = [
        'biography' => Textarea::class,
    ];
}
