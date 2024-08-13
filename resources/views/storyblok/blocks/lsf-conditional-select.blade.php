<?php
/* @var $block \Riclep\StoryblokForms\Blocks\LsfConditionalSelect */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="lsf-conditional-select">
	<p>{{ $block->label }}</p>

	<p>{{ $block->name }}</p>

	<div>{!! $block->options !!}</div>

	@foreach ($block->fields as $childBlock)
		{{ $childBlock->render() }}
	@endforeach

	{{ $block->show_empty_option }}

	<p>{{ $block->placeholder }}</p>

	@foreach ($block->validators as $childBlock)
		{{ $childBlock->render() }}
	@endforeach

	@foreach ($block->settings as $childBlock)
		{{ $childBlock->render() }}
	@endforeach


</div>