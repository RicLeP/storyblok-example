<?php
/** @var \RicLep\StoryblokForms\Blocks\LsfTextarea $block */
?>

<label class="control">
	<span class="control__label">{{ $block->label }}</span>

	<textarea
        name="{{ $block->name }}"
        placeholder="{{ $block->placeholder }}"
        class="control__input control__input--textarea @error($block->input_dot_name) control__input--error @enderror"
        @if (in_array_r('required', $block->validationRules())) required @endif
    >{{ data_get(old(), $block->input_dot_name) }}</textarea>

	@error($block->input_dot_name)
		<small class="fgc-red t-6">{{ $message }}</small>
	@enderror
</label>
