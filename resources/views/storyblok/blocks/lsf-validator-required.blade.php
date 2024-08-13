<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="lsf-validator-required">
	<p>{{ $block->error_message }}</p>


</div>