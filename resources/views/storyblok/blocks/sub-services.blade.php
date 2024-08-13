<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<section class="sub-services l-b-padding" {!! $block->editorLink(true) !!}>
	<h2 class="t-2 mb-45">{{ $block->title }}</h2>

	@foreach ($block->services as $childBlock)
		{{ $childBlock->render() }}
	@endforeach
</section>
