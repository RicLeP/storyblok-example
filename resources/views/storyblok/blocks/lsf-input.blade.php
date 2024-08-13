<?php
/** @var \RicLep\StoryblokForms\Blocks\LsfInput $block */
?>


<label class="control">
	<span class="control__label">{{ $block->label }}</span>

	<input type="{{ $block->type }}" name="{{ $block->name }}"
           placeholder="{{ $block->placeholder }}"
           value="{{ data_get(old(), $block->input_dot_name) }}"
           class="control__input @error($block->input_dot_name) control__input--error @enderror"
           @if (in_array_r('required', $block->validationRules())) required @endif
    >

    @error($block->input_dot_name)
		<small class="fgc-red t-6">{{ $message }}</small>
	@enderror
</label>
