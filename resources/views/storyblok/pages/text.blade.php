<?php
/* @var $story \App\Storyblok\Page */

// This is dummy page to get you started, extend it in your own views, add sections
// delete it or do whatever else you need to make it work for your project!

//dd($story);
?>

@extends('layouts._default')

@section('title')
    {{ $story->meta('name') }}
@stop

@section('content')
    <main class="grid-default l-padding" style="--lpt: var(--p-medium);">
        <section class="text">
            <h1 class="t-1 fgc-primary-dark mb-60">{{ $story->title }}</h1>

            <div class="scope-cms fgc-grey-80">
                {!! $story->text !!}
            </div>
        </section>
    </main>
@stop
