<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<section class="l-padding text-b" {!! $block->editorLink(true) !!}>
	<div class="scope-cms mb-45 t-4 t-4--r">{!! $block->text !!}</div>

    <div class="buttons">
        @foreach ($block->buttons as $childBlock)
            {{ $childBlock->render() }}
        @endforeach
    </div>
</section>
