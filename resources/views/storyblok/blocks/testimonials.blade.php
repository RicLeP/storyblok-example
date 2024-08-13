<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


<div class="grid-full grid-subgrid l-padding bgc-primary-dark fgc-white" {!! $block->editorLink(true) !!}>
    <div class="grid-l">
        @if ($block->testimonial->count() === 1)
            {{ $block->testimonial[0]->render() }}
        @else
            <swiper-testimonials>
                <template v-slot:slides>
                    @foreach ($block->testimonial as $childBlock)
                        {{ $childBlock->render() }}
                    @endforeach
                </template>
            </swiper-testimonials>
        @endif
    </div>
</div>
