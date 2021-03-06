<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicons/favicon.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
        @include('components.styles')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-18710254-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-18710254-4');
</script>


	</head>
	<body class="loader">
		@include('components.loader')
        @include('components.totop')
        @section('registerbutton') @show
        @include('components.header')
        @include('components.navigation')

		{{-- animsition-overlay start --}}
		<main class="animsition-overlay" data-animsition-overlay="true">

            @section('message')
                {{-- Messages --}}
            @show

            @yield('content')

            @section('contactform')
                {{-- @include('components.contactform') --}}
            @show
        </main>{{-- animsition-overlay end --}}

        @include('components.footer')
        @include('components.scripts')
    </body>
</html>
