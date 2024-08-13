<?php

namespace App\Storyblok\Blocks;

use Illuminate\Support\Str;
use Riclep\Storyblok\Block as BaseBlock;

/**
 * Class representation for Storyblok nav-link component.
 *
 * @property-read string label
 * @property-read string url
 */
class NavLink extends BaseBlock
{
    protected string $component = 'NavLink';

	public function toArray() {
		$link =  $this->content()->transform(function ($item) {
			return is_string($item) ? $item : rtrim((string) $item, '/');
		})->toArray();

        $link['component'] = $this->component;
        $link['active'] = '/' . request()->path() === $this->content()['link'];

        return $link;
	}

    public function getLabelAttribute()
    {
        return $this->content()['label'];
    }

    public function getLinkAttribute()
    {
        if (str_starts_with($this->content()['link']->cached_url, 'http')) {
            return $this->content()['link']->cached_url;
        }

        return '/' . $this->content()['link']->cached_url;
    }

    public function getTargetAttribute()
    {
        if (str_starts_with($this->content()['link']->cached_url, 'http')) {
            return '_blank';
        }

        return '';
    }
}
