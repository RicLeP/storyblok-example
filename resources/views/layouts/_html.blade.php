<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
        @if (request()->path() === '/')
            GSD Solutions - Helping companies in Guernsey solve business challenges and upskill their teams
        @else
            @yield('title') - Helping companies in Guernsey solve business challenges and upskill their teams
        @endif
    </title>

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#4662f5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#4662f5">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#4662f5">

{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">--}}

    @googlefonts

    <meta name="view-transition" content="same-origin">

    @if (isset($story))
        {!! $story->schemaOrgScript() !!}
    @endif

{{--    @stack('jsonld')--}}

    @include('layouts._meta')

    @yield('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

	@if (config('app.debug'))
		<meta name="robots" content="noindex">
	@endif

	@if (config('core.google_analytics_enabled') && isset($_COOKIE['cookie_acceptance']) && $_COOKIE['cookie_acceptance'] == 1)
		<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('core.google_analytics_code') }}"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '{{ config('core.google_analytics_code') }}');
		</script>
	@endif
</head>
<body class="bgc-grey-10">

@yield('body')

@include('laravel-storyblok::editor-bridge')

</body>
</html>
