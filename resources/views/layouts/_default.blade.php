
@extends('layouts._html')


@section('body')
	<div id="app">
        @include('partials._header')

        <div class="storyblok-live">

            @yield('content')

            {{--            <cookies></cookies>--}}
        </div>

        @include('partials._footer')
	</div>
@endsection
