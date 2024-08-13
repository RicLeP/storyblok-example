<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="text">
	<p>{{ $block->title }}</p>

	<div>{!! $block->text !!}</div>


</div>