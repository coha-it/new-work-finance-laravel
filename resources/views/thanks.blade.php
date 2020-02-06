@extends('layouts.app')

@section('title', 'Vielen Dank für Ihre Nachricht | New Work Finance | Mit Innovation durch Vorreiter der Branche werden!')

@section('scrollarea1')
    {{-- Disable Scrollarea --}}
@endsection

@section('message')

{{-- Errors --}}
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

			<!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-2 typewriter-home">
				<!-- page-head-bg -->
				<div class="page-head-bg" style="background-image: url({{ url('assets/images/mailing/mailing1.jpg') }});"></div>

				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- container start -->
		  			<div class="container top-bottom-padding-120">
					  	<h2 class="overlay-loading2 medium-title gold-color">Ihre Nachricht wurde versendet</h2>
				  		<h3 class="large-title-bold text-color-4">
                              <span class="overlay-loading2 overlay-light-bg-1 tr-delay02">Wir werden uns bald</span><br>
                              <span class="overlay-loading2 overlay-light-bg-1 tr-delay03">bei ihnen Melden</span><br>
                              <span class="overlay-loading2 overlay-light-bg-1 tr-delay01" id="typewriter">&nbsp;</span><br>
						</h3>
						<p class="d-flex-wrap top-margin-20 text-color-4">
							<span class="small-title-oswald text-height-20 fade-loading tr-delay04 top-margin-10">Kreativität</span>
							<span class="small-title-oswald text-height-20 fade-loading tr-delay05 top-margin-10">Innovation</span>
							<span class="small-title-oswald text-height-20 fade-loading tr-delay06 top-margin-10">Ideenreichtum</span>
						</p>
		  			</div><!-- container end -->
	  			</div><!-- flex-min-height-inner end -->

	  			@include('components.scrolldown')
            </section><!-- page-head end -->

@endsection

@section('content')
    @include('components.home')
@endsection
