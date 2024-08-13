<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<div class="sub-service" {!! $block->editorLink(true) !!}>
	@if ($block->icon->hasFile())
		<img src="{{ $block->icon->transform()->resize(100, 100) }}" alt>
	@endif

	<h2 class="t-4 fgc-primary-dark w-m-300">{{ $block->title }}</h2>

	<div class="scope-cms fgc-grey-80 sub-service__description">{!! $block->description !!}</div>
</div>
