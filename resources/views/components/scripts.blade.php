<!-- scripts -->
@if(App::environment('production'))
	<script src="{{ mix('assets/js/combined.min.js') }}"></script>
@else
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('dist/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/typewriter.js') }}"></script>
@endif
