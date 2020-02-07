			<!-- contact-form-box start -->
			<section id="Kontakt" class="contact-form-box flex-min-height-box" style="background-image:url(assets/images/backgrounds/pexels-photo-1287145.jpeg)">
				<div class="bg-overlay"></div>
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						@if($type == 'contact')
							<h4 class="small-title-oswald text-color-4 text-center">
								Kontaktformular
							</h4>
						@else 
							<div data-animation-container>
								<h2 data-animation-child class="gold-color text-color-5 fade-anim-box tr-delay05" data-animation="fade-anim">
									<span class="">Anmeldeformular</span>
								</h2>
							</div>
							<h3 class="large-title-bold text-color-4">
							 	<span class="overlay-loading2 overlay-light-bg-1 tr-delay02">Sichern Sie sich jetzt</span><br>
							 	<span class="overlay-loading2 overlay-light-bg-1 tr-delay03">Ihre Anmeldung</span><br>
                        	</h3>
						@endif

						<!-- flex-container start -->
						<form class="flex-container top-padding-90" method="POST" action="{{ route('scf') }}">
							<input type="hidden" name="data[type]" id="type" value="{{ $type ? $type : 'register' }}" />
                            @csrf
							<!-- column start -->
							<div class="four-columns">
								<div class="content-right-margin-10">
		                       		<input type="text" placeholder="Vorname*" name="data[firstname]" id="firstname" class="contact-form-control pointer-small">
							   	</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns">
								<div class="content-left-right-margin-5">
		                       		<input type="text" placeholder="Nachname*" name="data[lastname]" id="lastname" class="contact-form-control pointer-small">
								</div>
							</div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-left-margin-10">
		                       		<input type="email" placeholder="E-Mail Adresse*" name="data[email]" id="email" class="contact-form-control pointer-small">
			                    </div>
                            </div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-right-margin-10">
		                       		<input type="text" placeholder="Position" name="data[position]" id="position" class="contact-form-control pointer-small" autocomplete="new-password">
			                    </div>
                            </div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-left-margin-10">
		                       		<input type="text" placeholder="Straße & Hausnummer" name="data[streetandnumber]" id="streetandnumber" class="contact-form-control pointer-small" autocomplete="new-password">
			                    </div>
                            </div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-left-margin-10">
		                       		<input type="text" placeholder="PLZ & Ort" name="data[zipandlocation]" id="zipandlocation" class="contact-form-control pointer-small" autocomplete="new-password">
			                    </div>
                            </div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-right-margin-10">
		                       		<input type="text" placeholder="Telefon o. Handynummer" name="data[phone]" id="phone" class="contact-form-control pointer-small" autocomplete="new-password">
			                    </div>
                            </div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-left-margin-10">
		                       		<input type="text" placeholder="Firma" name="data[company]" id="company" class="contact-form-control pointer-small" autocomplete="new-password">
			                    </div>
                            </div><!-- column end -->
							<!-- column start -->
	                        <div class="four-columns">
		                        <div class="content-left-margin-10">
		                       		<input type="text" placeholder="Umsatz-Steuer-ID (Nur für Firmen außerhalb Deutschlands)" name="data[ustid]" id="ustid" class="contact-form-control pointer-small" autocomplete="new-password">
			                    </div>
		                    </div><!-- column end -->
		                    <!-- column start -->
							<div class="twelve-columns">
	                       		<textarea placeholder="Zusätzliche Nachricht" name="data[message]" id="message" class="contact-form-control pointer-small"></textarea>
							</div><!-- column end -->
							<!-- column start -->
	                        <div class="twelve-columns text-center top-padding-90">
								<button class="border-btn-box pointer-large">
									<span class="border-btn-inner">
								      	<span class="border-btn" data-text="Absenden">Absenden</span>
								    </span>
								</button>
							</div><!-- column end -->
						</form><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
            </section><!-- contact-form-box end -->
