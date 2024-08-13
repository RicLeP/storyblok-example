<?php

namespace App\Storyblok\Blocks;

use Riclep\Storyblok\Block as BaseBlock;

/**
 * Class representation for Storyblok contact component.
 *
 * @property-read string title
 * @property-read string form
 * @property-read string image
 */
class Contact extends BaseBlock
{
    public array $_resolveRelations = ['form'];
}
