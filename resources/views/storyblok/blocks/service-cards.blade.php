<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<div class="grid-xl service-cards a-fade-in a-delay-1000" @if ($block->image->hasFile()) style="background-image: url({{ $block->image->transform()->resize(100, 100) }});" @endif {!! $block->editorLink(true) !!}>
	@foreach ($block->services as $childBlock)
		{{ $childBlock->render() }}
	@endforeach
</div>
