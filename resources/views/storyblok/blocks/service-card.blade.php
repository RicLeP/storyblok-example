<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<div class="service-card" {!! $block->editorLink(true) !!}>
    <header>
        @if ($block->icon->hasFile())
            <img src="{{ $block->icon }}" alt class="mb-15">
        @endif

        <h2 class="t-4 fgc-primary-dark mb-15">{{ $block->title }}</h2>
    </header>

	<div class="scope-cms mb-45">{!! $block->text !!}</div>

    <div class="buttons">
        @foreach ($block->buttons as $childBlock)
            {{ $childBlock->render() }}
        @endforeach
    </div>
</div>
