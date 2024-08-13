<?php
/* @var $block \App\Storyblok\Block */

//dd((string) $block->linkedin);
?>


<div class="grid-full grid-subgrid bgc-white l-padding" {!! $block->editorLink(true) !!}>
    <div class="person">
        @if ($block->photo->hasFile())
            {!! $block->photo->picture('', null, ['class' => 'person__image'], 'partials.picture-element') !!}
        @endif

        <div>
            <h2 class="t-3 mb-30">About {{ $block->name }}</h2>

            <div class="scope-cms fgc-grey-80 mb-30">{!! $block->biography !!}</div>

            <div class="buttons">
                @foreach ($block->buttons as $childBlock)
                    {{ $childBlock->render() }}
                @endforeach

                <a href="{{ $block->linkedin }}" target="_blank">
                    <img src="/img/linkedin.svg" alt="Connect with {{ $block->name }} on LinkedIn">
                </a>
            </div>
        </div>
    </div>
</div>
