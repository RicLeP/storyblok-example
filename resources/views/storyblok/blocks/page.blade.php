<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="page">
	@foreach ($block->panels as $childBlock)
		{{ $childBlock->render() }}
	@endforeach


</div>