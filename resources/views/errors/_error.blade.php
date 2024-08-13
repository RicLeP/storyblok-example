@extends('layouts._default')

@section('title')
	{{ $code ?? '' }} Error
@endsection

@section('meta')
	<meta name="robots" content="noindex">
@endsection

@section('content')
	<div class="grid-default">
        <main class="grid-l t-centred l-padding">
            <img src="{{ asset('/img/question-mark.svg') }}" alt class="mb-45">

            <h1 class="t-2 mb-20">
                {{ $message }}
            </h1>

            <h2 class="t-6 t-uppercase mb-45">
                {{ $code ?? '' }} error
            </h2>

            <a href="/" class="button button--bordered mb-50">Back to home</a>
        </main>
	</div>
@endsection
