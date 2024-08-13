<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="lsf-validator-max">
	<p>{{ $block->error_message }}</p>

	<p>{{ $block->parameter }}</p>


</div>