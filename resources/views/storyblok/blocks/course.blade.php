<?php
/* @var $block \App\Storyblok\Block */

// ddd($block);
?>


{!! $block->editorLink() !!}
<div class="course" @if ($block->image->hasFile())
    style="--background-image: url({{ $block->image->transform()->resize(1800, 1200) }});"
@endif>

    <section class="course__content">
        <header class="mb-30">
            <h3 class="t-4 t-4--r t-bold mb-15">{{ $block->statement }}</h3>

            <h2 class="t-1 t-1--r t-bold fgc-primary">{{ $block->title }}</h2>
        </header>

        <footer class="mb-45 pills">
            @foreach ($block->pills as $childBlock)
                {{ $childBlock->render() }}
            @endforeach
        </footer>


        <div class="mb-35 scope-cms">{!! $block->description !!}</div>

        <div class="buttons">
            @foreach ($block->buttons as $childBlock)
                {{ $childBlock->render() }}
            @endforeach
        </div>
    </section>
</div>
