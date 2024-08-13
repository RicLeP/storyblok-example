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
    <main class="grid-default contact">
        <div class="grid-subgrid bgc-primary contact__header a-fade-in">
            @if ($story->image->hasFile())
                {!! $story->image->picture('', null, ['class' => 'contact__image a-fade-in'], 'partials.picture-element') !!}
            @endif
            <header class="contact__title grid-xl a-slide-in-n a-delay-1000">
                <h1 class="grid-xl l-padding t-1 t-1--r fgc-white">{{ $story->title }}</h1>
            </header>
        </div>

        <div class="l-padding contact__content">
            <div class="contact__form">
                @if (session('status'))
                    <div class="contact__sent">
                        <x-svg-triple-tick/>
                        <p class="t-4">Thank your for your enquiry, we’ll be in touch shortly.</p>
                    </div>
                @else
                    {{ $story->form->render() }}
                @endif
            </div>
        </div>
    </main>
@stop
