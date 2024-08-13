<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Riclep\Storyblok\StoryblokFacade as Storyblok;

class NavHeader extends Component
{
    public string|false $json;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $navHeader = Storyblok::read('shared/nav-header');

        $this->json = json_encode($navHeader->block()->toArray());
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-header');
    }
}
