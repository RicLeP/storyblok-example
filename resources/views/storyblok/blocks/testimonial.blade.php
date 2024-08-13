<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<div class="testimonial" {!! $block->editorLink(true) !!}>
{{--    <img src="/img/quote-mark.svg" alt>--}}
    <x-svg-quote-mark class="testimonial__quotemark"/>

	<blockquote>
        <div class="mb-40 @if (strlen($block->quote) > 260) t-3 w-900 @else t-2 t-2--r @endif">
            {!! $block->quote !!}
        </div>

        <cite class="t-6 t-uppercase">
            {{ $block->person }}, {{ $block->company }}
        </cite>
    </blockquote>
</div>
