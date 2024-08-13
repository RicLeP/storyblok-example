<?php

namespace App\Storyblok\Fields;

use Riclep\Storyblok\Fields\Image;

class PersonPhoto extends Image
{
    protected function transformations() {
        $this->transformations = [
            'desktop' => [
                'src' => $this->transform()->resize(1000, 900, 'auto'),
                'media' => '(min-width: 750px)',
            ],
            'tablet' => [
                'src' => $this->transform()->resize(880, 720, 'auto'),
                'media' => '(min-width: 500px)',
            ],
            'mobile' => [
                'src' => $this->transform()->resize(740, 600, 'auto'),
                'media' => '',
            ],
        ];
    }
}
