<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="nav">
	@foreach ($block->links as $childBlock)
		{{ $childBlock->render() }}
	@endforeach


</div>