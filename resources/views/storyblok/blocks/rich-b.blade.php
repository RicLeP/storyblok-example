<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<div class="grid-full grid-subgrid l-b-padding rich-b" {!! $block->editorLink(true) !!}>
    <header class="rich-b__content">
        <h1 class="t-6 t-uppercase t-bold fgc-primary mb-35 a-fade-in">{{ $block->title }}</h1>

        <h2 class="t-1 t-1--r mb-45 a-fade-in">{!! $block->subtitle !!}</h2>

        <div class="scope-cms t-4 fgc-grey-80 a-fade-in a-delay-500">{!! $block->text !!}</div>
    </header>

	@if ($block->image->hasFile())
		<img src="{{ $block->image->transform()->resize(100, 100) }}" alt class="rich-b__image a-fade-in a-delay-200">
	@endif
</div>
