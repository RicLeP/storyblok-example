<?php

namespace App\Storyblok\Fields;

use Illuminate\Support\Str;

class Link extends \Riclep\Storyblok\Fields\Link
{
	public function __toString(): string {
        $link = rtrim($this->cached_url, '/');

        if (Str::startsWith($link, 'http') || Str::startsWith($link, '#')) {
            return $link;
        }

        //Remove unwanted slash before anchor
        if (Str::contains($link, '/#')) {
            return '/' . Str::before($link, '/#') . '#' . Str::after($link, '/#');
        }

        $anchor = $this->anchor ? '#' . $this->anchor : '';

        $query = $this->has('query') ? '?type=' . $this->query : '';

        return '/' . $link . $anchor . $query;
	}
}


 // ->link->content()['query']
