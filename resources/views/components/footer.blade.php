<!-- footer start -->
<footer class="footer dark-bg-1">
	<!-- flex-container start -->
	<div class="flex-container container top-bottom-padding-90">
		<!-- column start -->
		<div class="two-columns bottom-padding-60">
			<div class="content-right-margin-10 footer-center-mobile">
				<img class="footer-logo" src="{{ asset('assets/images/logo/logo-coha-2z.png') }}" alt="logo">
			</div>
		</div><!-- column end -->
		<!-- column start -->
		<div class="three-columns bottom-padding-60">
			<div class="content-left-right-margin-10">
				<ul class="footer-menu text-color-4">
					<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{ url('/') }}">Home</a></li>
					<li><a class="pointer-large small-title-oswald hover-color" href="#Digitalisierung">Digitalisierung</a></li>
					<li><a class="pointer-large small-title-oswald hover-color" href="#Inviting">Inviting</a></li>
					<li><a class="pointer-large small-title-oswald hover-color" href="#Fusion">Fusion</a></li>
                    <li><a class="pointer-large small-title-oswald hover-color" href="{{ route('register') }}">Anmelden</a></li>
                    <li><a class="pointer-large small-title-oswald hover-color" href="{{ route('contact') }}">Impressum</a></li>
                    <li><a class="pointer-large small-title-oswald hover-color" href="{{ route('imprint') }}">Impressum</a></li>
					{{-- <li><a class="pointer-large small-title-oswald hover-color" href="contact.html">Contact</a></li> --}}
				</ul>
			</div>
		</div><!-- column end -->
		<!-- column start -->
		<div class="four-columns bottom-padding-60">
			<div class="content-left-right-margin-10 footer-center-mobile">
				<ul class="footer-information text-color-4">
					<li><i class="far fa-envelope"></i><a href="#" class="xsmall-title-oswald">info@corporate-happiness.de</a></li>
					<li><i class="fas fa-mobile-alt"></i><a href="#" class="xsmall-title-oswald">+49 89 890 673 177</a></li>
					<li><i class="fas fa-map-marker-alt"></i><a href="#" class="xsmall-title-oswald text-height-17">Gewürzmühlstraße 17<br><span>80538 München, Bayern</span></a></li>
				</ul>
			</div>
		</div><!-- column end -->
		<!-- column start -->
		<div class="three-columns bottom-padding-60">
			<div class="content-left-margin-10">
				<ul class="footer-social">
					<li>
						<div class="flip-btn-box">
							<a target="_blank" class="flip-btn pointer-small" href="https://www.instagram.com/corporate_happiness/" data-text="Instagram">Instagram</a>
						</div>
					</li>
					<li>
						<div class="flip-btn-box">
							<a target="_blank" class="flip-btn pointer-small" href="https://www.facebook.com/CorporateHappiness/" data-text="Facebook">Facebook</a>
						</div>
					</li>
				</ul>
			</div>
		</div><!-- column end -->
		<!-- column start -->
		<div class="twelve-columns">
			<p class="p-letter-style text-color-4 footer-copyright">&copy; Copyright 2020 Corporate Happiness GmbH.</p>
		</div><!-- column end -->
	</div><!-- flex-container end -->
</footer><!-- footer end -->
