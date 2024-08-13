<?php

namespace App\Storyblok\Blocks;

use Riclep\Storyblok\Block as BaseBlock;

/**
 * Class representation for Storyblok nav component.
 *
 * @property-read array items
 */
class Nav extends BaseBlock
{
    public function toArray() {
		return $this->content()->transform(function ($item) {
			return $item->transform(function ($item) {
				return $item->toArray();
			});
		})->first()->toArray();
    }
}
