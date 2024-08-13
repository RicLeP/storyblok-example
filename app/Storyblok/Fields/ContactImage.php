<?php

namespace App\Storyblok\Fields;

use Riclep\Storyblok\Fields\Image;

class ContactImage extends Image
{
    protected function transformations() {
        $this->transformations = [
            'xxxl' => [
                'src' => $this->transform()->resize(2800, 2000, 'auto'),
                'media' => '(min-width: 2400px)',
            ],
            'xxl' => [
                'src' => $this->transform()->resize(1800, 2000, 'auto'),
                'media' => '(min-width: 1600px)',
            ],
            'xl' => [
                'src' => $this->transform()->resize(1500, 2000, 'auto'),
                'media' => '(min-width: 880px)',
            ],
            'desktop' => [
                'src' => $this->transform()->resize(1600, 1400, 'auto'),
                'media' => '(min-width: 700px)',
            ],
            'tablet' => [
                'src' => $this->transform()->resize(1500, 1000, 'auto'),
                'media' => '(min-width: 450px)',
            ],
            'mobile' => [
                'src' => $this->transform()->resize(1000, 1000, 'auto'),
                'media' => '',
            ],
        ];
    }
}
