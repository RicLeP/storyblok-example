<?php
/** @var \RicLep\StoryblokForms\Blocks\LsfSelect $block */
?>

<label class="control">
	<p class="control__label">{{ $block->label }}</p>

	<select name="{{ $block->name }}" class="control__input @error($block->input_dot_name) control__input--error @enderror" @if (in_array_r('required', $block->validationRules())) required @endif>
		@if ($block->show_empty_option && !$block->placeholder)
			<option value=""></option>
		@endif

		@if ($block->placeholder)
			<option value="">{{ $block->placeholder }}</option>
		@endif

		@foreach($block->options() as $option)
			<option value="{{ Str::slug($option['value']) }}"
                    @if (
                        data_get(old(), $block->input_dot_name) === Str::slug($option['value']) ||
                        (!data_get(old(), $block->input_dot_name) && $option['selected']) ||
                        $option['value'] === request()->get('type')
                   ) selected @endif>
				{{ $option['label'] }}
			</option>
		@endforeach
	</select>

	@error($block->input_dot_name)
		<small class="fgc-red t-6">{{ $message }}</small>
	@enderror
</label>
