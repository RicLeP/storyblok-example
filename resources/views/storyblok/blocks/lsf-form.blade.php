<?php
/** @var \RicLep\StoryblokForms\Blocks\LsfForm $block */
//dd($block);
?>


<h2 class="t-3 mb-45">{{ $block->title }}</h2>

<form method="POST" action="{{ route('submit-form') }}" class="form">
    @csrf

    <input type="hidden" name="_slug" value="{{ $block->page()->meta('slug') }}">

    @foreach($block->fields as $field)
        {{ $field->render() }}
    @endforeach

    <button type="submit" class="button button--solid self-left" style="--button-bgc: var(--c-primary-dark); --button-hover-bgc: var(--c-primary);">{{ $block->button_label }}</button>
</form>

