<?php
/* @var $block \App\Storyblok\Block */

//dd($block->key_words);
?>


<div class="grid-full grid-subgrid bgc-primary-dark fgc-white relative l-padding" style="--lpt: var(--p-xlarge); --lpb: var(--p-xlarge);" {!! $block->editorLink(true) !!}>
    <section class="text-a">
        <div style="container-type: inline-size">
            <div class="text-a__key-words anim">{!! $block->key_words !!}</div>
        </div>

        <div>
            <div class="scope-cms mb-45">{!! $block->text !!}</div>

            <div class="buttons" style="--button-border-colour: #fff; --button-fgc: #fff; --button-hover-bgc: #fff;; --button-hover-fgc: var(--c-primary-dark);">
                @foreach ($block->buttons as $childBlock)
                    {{ $childBlock->render() }}
                @endforeach
            </div>
        </div>
    </section>
</div>
