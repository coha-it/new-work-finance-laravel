		<!-- nav-container start -->
		<nav class="nav-container dark-bg-1">
			<!-- nav-logo start -->
			<div class="nav-logo">
				<img src="{{ asset('assets/images/logo/logo-coha-w-2z.png') }}" alt="logo">
			</div><!-- nav-logo end -->

			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>

			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->

			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1">
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="/" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Startseite">Startseite</span>
					</a>
					<div class="nav-bg" style="background-image:url({{ asset('assets/images/projects/startseite/frankfurt-body-of-water-near-trees-1124460.jpg') }});"></div>
                </li><!-- nav-box end -->

				<li class="nav-box nav-bg-change">
					<a href="#Digitalisierung" class="pointer-large nav-link" onclick="$('.menu-open, .nav-container').removeClass('active');">
						<span class="nav-btn" data-text="Digitalisierung">Digitalisierung</span>
					</a>
					<div class="nav-bg" style="background-image:url({{ asset('assets/images/projects/digitalisierung/AdobeStock_233493970.jpg') }});"></div>
                </li><!-- nav-box end -->

				<li class="nav-box nav-bg-change">
					<a href="#Inviting" class="pointer-large nav-link" onclick="$('.menu-open, .nav-container').removeClass('active');">
						<span class="nav-btn" data-text="Inviting">Inviting</span>
					</a>
					<div class="nav-bg" style="background-image:url({{ asset('assets/images/projects/inviting/inviting-AdobeStock_74172486.jpg') }});"></div>
                </li><!-- nav-box end -->

				<li class="nav-box nav-bg-change">
					<a href="#CorporateIdentity" class="pointer-large nav-link" onclick="$('.menu-open, .nav-container').removeClass('active');">
						<span class="nav-btn" data-text="Corporate Identity">Corporate Identity</span>
					</a>
					<div class="nav-bg" style="background-image:url({{ asset('assets/images/projects/fusion/fusion-1.jpg') }});"></div>
				</li><!-- nav-box end -->
				

				<li class="nav-box nav-bg-change">
						<a href="#ZurAusbildung" class="pointer-large nav-link" onclick="$('.menu-open, .nav-container').removeClass('active');">
							<span class="nav-btn" data-text="Zur Ausbildung">Zur Ausbildung</span>
						</a>
						<div class="nav-bg" style="background-image:url({{ asset('assets/images/projects/startseite/frankfurt-body-of-water-near-trees-1124460.jpg') }});"></div>
					</li><!-- nav-box end -->

				<li class="nav-box nav-bg-change">
					<a href="{{ route('register') }}" class="pointer-large nav-link" onclick="$('.menu-open, .nav-container').removeClass('active');">
						<span class="nav-btn" data-text="Anmelden">Anmelden</span>
					</a>
					<div class="nav-bg" style="background-image:url({{ asset('assets/images/mailing/mailing0.jpg') }});"></div>
				</li><!-- nav-box end -->
				
				<li class="nav-box nav-bg-change">
					<a href="{{ route('contact') }}" class="pointer-large nav-link" onclick="$('.menu-open, .nav-container').removeClass('active');">
						<span class="nav-btn" data-text="Kontakt">Kontakt</span>
					</a>
					<div class="nav-bg" style="background-image:url({{ asset('assets/images/mailing/mailing0.jpg') }});"></div>
                </li><!-- nav-box end -->

				<li class="nav-box nav-bg-change">
					<a href="{{ url('impressum') }}" class="pointer-large nav-link" onclick="$('.menu-open, .nav-container').removeClass('active');">
						<span class="nav-btn" data-text="Impressum">Impressum</span>
					</a>
					<div class="nav-bg"></div>
                </li><!-- nav-box end -->

			</ul><!-- nav-menu end -->
		</nav><!-- nav-container end -->
