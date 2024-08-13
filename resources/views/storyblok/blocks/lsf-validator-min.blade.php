<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="lsf-validator-min">
	<p>{{ $block->error_message }}</p>

	<p>{{ $block->parameter }}</p>


</div>