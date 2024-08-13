<?php

namespace App\Storyblok\Fields;

use Riclep\Storyblok\Fields\Image;

class RichAImage extends Image
{
    protected function transformations() {
        $this->transformations = [
            'max' => [
                'src' => $this->transform()->resize(1200, 1400, 'auto'),
                'media' => '(min-width: 1000px)',
            ],
            'desktop' => [
                'src' => $this->transform()->resize(860, 1000, 'auto'),
                'media' => '(min-width: 700px)',
            ],
            'tablet' => [
                'src' => $this->transform()->resize(1300, 800, 'auto'),
                'media' => '(min-width: 500px)',
            ],
            'mobile' => [
                'src' => $this->transform()->resize(690, 800, 'auto'),
                'media' => '',
            ],
        ];
    }
}
