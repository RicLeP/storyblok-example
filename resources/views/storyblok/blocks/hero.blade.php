<?php
/* @var $block \App\Storyblok\Blocks\Hero */

// ddd($block);
?>


<header class="grid-xl hero" {!! $block->editorLink(true) !!}>
    @if ($block->image->hasFile())
        @if ($block->image_cover)
            {!! $block->image->picture('', null, ['class' => 'w hero__image hero__image--cover a-slide-in-n'], 'partials.picture-element') !!}
        @else
            {!! $block->image->picture('', null, ['class' => 'w hero__image a-slide-in-n'], 'partials.picture-element') !!}
        @endif
    @endif

    <div class="hero__content a-fade-in a-delay-1000 {{ $block->textColour() }}">
        <h1 class="t-6 t-uppercase t-bold">{{ $block->title }}</h1>

        <h2 class="t-1 t-1--r">{!!  $block->formatted_text !!}</h2>
    </div>
</header>
