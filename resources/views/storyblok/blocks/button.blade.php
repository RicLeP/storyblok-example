<?php
/* @var $block \App\Storyblok\Block */

//dd($block);
?>


<a class="button button--{{ $block->type }}" href="{{ $block->link }}" {!! $block->editorLink(true) !!}>
    {{ $block->label }}
</a>
