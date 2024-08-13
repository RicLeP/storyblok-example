<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<section class="grid-xl rich-a" {!! $block->editorLink(true) !!}>
    <div class="rich-a__content">
        <h1 class="t-1 t-1--r fgc-primary-dark mb-40 a-fade-in">{!! $block->title !!}</h1>

        <div class="fgc-grey-80 mb-45 scope-cms a-fade-in a-delay-500">{!! $block->text !!}</div>

        <div class="buttons a-fade-in a-delay-500">
            @foreach ($block->buttons as $childBlock)
                {{ $childBlock->render() }}
            @endforeach
        </div>
    </div>

    @if ($block->image->hasFile())
        {!! $block->image->picture('', null, ['class' => 'rich-a__image a-slide-in-n a-delay-200'], 'partials.picture-element') !!}
    @endif
</section>
