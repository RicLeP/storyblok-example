<?php
/* @var $story \App\Storyblok\Page */

// This is dummy page to get you started, extend it in your own views, add sections
// delete it or do whatever else you need to make it work for your project!

// dd($story);
?>

@extends('layouts._default')

@section('title')
    GSD Solutions - {{ $story->meta('name') }}
@stop

@section('content')
<main class="grid-default">
	@foreach ($story->panels as $childBlock)
		{{ $childBlock->render() }}
	@endforeach
</main>
@stop
