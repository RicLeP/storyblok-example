<?php

namespace App\Storyblok\Blocks;

use Riclep\Storyblok\Block as BaseBlock;

/**
 * Class representation for Storyblok rich-a component.
 *
 * @property-read string title
 * @property-read string text
 * @property-read array buttons
 * @property-read string image
 */
class RichA extends BaseBlock
{
    public function getTitleAttribute() {
        return strip_tags($this->content()['title'], ['i', 'b']);
    }
}
