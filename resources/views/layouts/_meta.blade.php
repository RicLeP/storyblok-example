@section('meta')
    <meta name="description" content="Helping companies solve business challenges and upskill their teams. We offer practical, commercial enhancements to business processes, project management services and outsourced senior level support when companies need them most. We also help develop teams with our tailored training courses.">

    <meta property="og:title" content="@yield('title') - Helping companies in Guernsey solve business challenges and upskill their teams">
    <meta property="og:site_name" content="@yield('title') - Helping companies in Guernsey solve business challenges and upskill their teams">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="Helping companies solve business challenges and upskill their teams. We offer practical, commercial enhancements to business processes, project management services and outsourced senior level support when companies need them most. We also help develop teams with our tailored training courses.">
    <meta property="og:image" content="{{ asset('img/ogp.png') }}">
    <meta property="og:type" content="website">

    @if(config('social-graces.enabled'))
        {!! $story->manner()->source(route('social-graces', $story->meta()['slug']))->htmlThanks() !!}
    @endif
@stop
