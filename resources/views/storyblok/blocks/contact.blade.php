<?php
/* @var $block \App\Storyblok\Blocks\Contact */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="contact">
	<p>{{ $block->title }}</p>

	{{ $block->form }}

	@if ($block->image->hasFile())
		<img src="{{ $block->image->transform()->resize(100, 100) }}" alt>
	@endif


</div>