<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">

@if(App::environment('production'))
	<link href="{{ mix('assets/css/combined.min.css') }}" rel="stylesheet" type="text/css">
@else
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/css/custom.css') }}" rel="stylesheet" type="text/css">
@endif
