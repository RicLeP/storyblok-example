<?php

namespace App\Storyblok\Fields;

use Riclep\Storyblok\Fields\Image;

class HeroImage extends Image
{
    protected function transformations() {
        $this->transformations = [
            'desktop' => [
                'src' => $this->transform()->resize(2800, 1400, 'auto'),
                'media' => '(min-width: 700px)',
            ],
            'mobile' => [
                'src' => $this->transform()->resize(1000, 1000, 'auto'),
                'media' => '',
            ],
        ];
    }
}
