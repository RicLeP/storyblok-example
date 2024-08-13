<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="nav-link">
	<p>{{ $block->label }}</p>

	<a href="{{ $block->link->cached_url }}"></a>


</div>