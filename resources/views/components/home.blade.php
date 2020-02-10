

@section('registerbutton')
	@include('components.registerbutton')
@endsection

            <!-- page-head start -->
			<section id="up" class="page-head video-bg-box flex-min-height-box dark-bg-1" style="overflow: hidden">
				<!-- video-bg -->
				<video class="coha-video jq-preload-video" muted loop autoplay playsinline>
					<source type="video/webm" />
					<source type="video/mp4" />
					<source type="video/ogv" />
					Your browser does not support the video tag.
				</video>

				<!-- bg-overlay -->
				<div class="bg-overlay"></div>

				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- container start -->
		  			<div class="container top-bottom-padding-120">
		  				<h2 class="overlay-loading2 medium-title gold-color">New Work Finance</h2>
				  	    <h3 class="large-title-bold text-color-4">
									<span class="overlay-loading2 overlay-light-bg-1 tr-delay01">Mit Innovation zum </span><br>
									<span class="overlay-loading2 overlay-light-bg-1 tr-delay02">Vorreiter der </span><br>
									<span class="overlay-loading2 overlay-light-bg-1 tr-delay03">Branche werden!</span>
								</h3>
								<h2 class="small-title-oswald overlay-loading2 overlay-light-bg-1 gold-color tr-delay04 animated overlay-anim2">Start: 22. Oktober 2020&nbsp;&nbsp;|&nbsp;&nbsp;Frankfurt</h2>
								<br>
								<div class="overlay-loading2 overlay-light-bg-1 tr-delay05 top-margin-20">
										<div class="border-btn-box pointer-large">
												<div class="border-btn-inner">
														<a href="{{ route('register') }}" class="border-btn" data-text="Jetzt Anmelden">Jetzt Anmelden</a>
												</div>
										</div>
								</div>
		  			</div><!-- container end -->
	  			</div><!-- flex-min-height-inner end -->

                <!-- scroll-btn start -->
                @section('scrollarea1')
                  @include('components.scrolldown')
                @show

			</section><!-- page-head end -->

			<!-- flex-min-height-box start -->
			<section id="start" class="dark-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">
								<h2 class="large-title text-height-12">
									<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="New Work Finance">New Work Finance</span><br>
									<!-- <span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="Warum New Work Finance?">Warum New Work Finance?</span> -->
								</h2>
              </div><!-- column end -->


							<!-- column start -->
							<!-- <div class="six-columns">
								<div class="content-right-margin-20">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02" data-animation="fade-anim">Unser New Work Finance Programm zeigt Ihnen, wie Sie fernab von herkömmlichen Schulungsansätzen effektiv und nachhaltig, verschiedenste Herausforderungen der Finanzbranche lösen können, um Ihr Unternehmen von Innen heraus zu stärken und in eine erfolgreiche Zukunft zu führen. Unsere einzigartige Methodik, basierend auf wissenschaftlich fundierten Erkenntnissen, sichert die Freisetzung bisher unentdeckter Selbstentfaltungskräfte Ihrer MitarbeiterInnen und Mitarbeiter. Eigenverantwortung, Kreativität und Wertschätzung sind Schlüsselqualifikationen, die unabdingbar für ein modernes Unternehmen sind.</p>
								</div>
							</div>column end -->
							<!-- column start -->
							<!-- <div class="six-columns">
								<div class="content-left-margin-20">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay03" data-animation="fade-anim">Wir schulen daher nicht auf der Informationsebene, sondern bringen die Teilnehmerinnen und Teilnehmer ins Erfahren. Nur wer die Veränderungen seiner eigenen Wirksamkeit erlebt, kann auch andere dazu inspirieren. In den neunmonatigen Programmen, setzen wir auf die positiven Effekte des blended-Learnings, d.h. eine Kombination aus Präsenz-Workshops und einer umfangreichen eLearning-Plattform. Sie werden somit zielgerichtet und praxisnah ausgebildet, um Vorreiter der Branche zu werden. </p>
								</div>
              </div>column end -->

              <!-- column start -->
              <div class="twelve-columns">
								<div class="content-right-margin-20 content-left-margin-20">
									<p data-animation-child="" class="coha--text-split-2 p-style-medium text-color-5 fade-anim-box tr-delay02 animated fade-anim" data-animation="fade-anim">Unser New Work Finance Ausbildungsprogramm zeigt Ihnen, wie Sie fernab von herkömmlichen Schulungsansätzen effektiv und nachhaltig, verschiedenste Herausforderungen der Finanzbranche lösen können, um Ihr Unternehmen von Innen heraus zu stärken und in eine erfolgreiche Zukunft zu führen.
                    Unsere einzigartige Methodik, basierend auf wissenschaftlich fundierten Erkenntnissen, sichert die Freisetzung bisher unentdeckter Selbstentfaltungskräfte Ihrer MitarbeiterInnen und Mitarbeiter. Eigenverantwortung, Kreativität und Wertschätzung sind Schlüsselqualifikationen, die unabdingbar für ein modernes Unternehmen sind. Wir schulen daher nicht nur auf der Informationsebene, sondern bringen die Teilnehmerinnen und Teilnehmer ins Erfahren. Nur wer die Veränderungen seiner eigenen Wirksamkeit erlebt, kann auch andere dazu inspirieren.
                    In dem neunmonatigen Programm, setzen wir auf die positiven Effekte des Blended-Learnings, d.h. eine Kombination aus Präsenz-Workshops und einer umfangreichen eLearning-Plattform. Sie werden somit zielgerichtet und praxisnah ausgebildet, um Vorreiter der Branche zu werden.</p>
								</div>
							</div>


							<!-- column start -->
							<div class="twelve-columns text-center">
								<p data-animation-child class="p-letter-style text-color-4 text-height-13 fade-anim-box tr-delay04" data-animation="fade-anim">Weil Kreativität & Innovationskraft von Menschen stets die Zukunft ist</p>
							</div>
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->

			<!-- section start -->
			<section class="light-bg-1 bottom-padding-30 top-padding-0" data-midnight="black">
				<!-- container start -->
				<!-- <div data-animation-container class="container small bottom-padding-60 text-center">
					<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">Recent Works</h2><br>
					<p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">We Offer Digital Solutions</p>
        </div> -->
        <!-- container end -->

				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90" id="Digitalisierung">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="top-padding-40 content-right-margin-40">
										<!-- <span class="small-title-oswald gold-color overlay-anim-box2" data-animation="overlay-anim2">Digitalisierung</span> -->
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Aufbruchsstimmung in der </span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Digitalisierung!</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03 small-title-oswald" data-animation="overlay-anim2">Wie Sie die digitale Transformation optimal ausschöpfen</span><br>
                    </h3>
                    <div class="coha--cut-text-wrapper">
  										<div data-animation-child class="p-style-small text-color-1 fade-anim-box tr-delay04" data-animation="fade-anim">
                        <p>
                          Die Digitalisierung im Bankensektor schreitet voran und bringt massive Änderungen mit sich. Menschliche Tätigkeiten werden zunehmend durch technische Lösungen ersetzt und das Anforderungsprofil der Mitarbeiter steht zunehmend im Wandel. Trotz den enormen Investitionen der Banken in digitale Technologien bleiben die erhofften Erträge und die damit verbundenen Einsparungen allerdings bisher größtenteils aus.<br>
                        </p>
                       <p>
                         <b>In Ihrer New Work Finance Ausbildung lernen Sie:</b>
                       </p>
                       <ul class="bullets">
                         <li>
                           wie und weshalb Vorreiter der Branche in der digitalen Transformation auf den Erfolgsfaktor Mensch setzen und genau damit die erhofften Fortschritte und Effizienzgewinne erzielen
                         </li>
                         <li>
                           welche Chancen Ihnen die Digitalisierung persönlich und als Unternehmen eröffnet und wie Sie den Herausforderungen wirksam begegnen
                         </li>
                         <li>
                           wie Sie Mitarbeiter auf dem Weg durch die Digitalisierung kurz- und langfristig mobilisieren und nicht verlieren
                         </li>
                         <li>
                           wie Sie als Unternehmen die Digitalisierung für eine höhere Arbeitgeberattraktivität nutzen können
                         </li>
                         <li>
                           wie Sie sich jetzt mit Persönlichkeits-entwicklung auf die Digitalisierung vorbereiten sollten
                         </li>
                         <li>
                           warum die Zukunft – aufgrund der Digitalisierung - der Mensch ist
                         </li>
                        </ul>
                      </div>
                      <div class="after"></div>
                    </div>
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<div class="portfolio-content-bg-box pointer-large hover-box hidden-box">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/digitalisierung/AdobeStock_233493970.jpg)"></div>
                                    </div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->

				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90" id="Inviting">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container reverse container small">
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<div class="portfolio-content-bg-box pointer-large hover-box hidden-box">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/inviting/inviting-AdobeStock_74172486.jpg)"></div>
									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div data-animation-container class="six-columns top-padding-60 bottom-padding-60">
									<div class="content-left-margin-40">
										<!-- <span class="small-title-oswald gold-color overlay-anim-box2" data-animation="overlay-anim2">Graphic Design</span> -->
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Inviting statt Recruiting!</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03 small-title-oswald" data-animation="overlay-anim2">Fachkräftemagnet trotz Krise</span><br>
                    </h3>

                    <div class="coha--cut-text-wrapper">
                      <div data-animation-child class="p-style-small text-color-1 fade-anim-box tr-delay04" data-animation="fade-anim">
                        <p>Faktoren wie der Personalabbau, die Finanzkrise, die Schließung von Filialen oder die Kürzung der Ausbildungsquote haben das einstmals nahezu unanfechtbare Arbeitgeberimage der Banken nachhaltig beschädigt.</p>
                        <p>Die früheren Attribute „sicherer Arbeitsplatz“, „solides Berufsbild“ scheinen heute nicht mehr hinreichend verlässlich zu sein. Die Arbeitgeberattraktivität von Banken und Sparkassen ist heute nur noch mittelmäßig. Und das ist zu wenig, um auf einem Arbeitsmarkt mit wachsenden strukturellen Angebotsschwächen Erfolg zu haben.</p>
                        <strong>In Ihrer New Work Finance Ausbildung lernen Sie:</strong>
                        <ul class="bullets">
                          <li>warum Stellenanzeigen und Messen das Problem nicht lösen werden</li>
                          <li>dass die Mitarbeitergewinnung nicht das eigentliche Problem ist</li>
                          <li>was bei Bewerbern noch viel wichtiger ist, als die fachliche Qualifikation</li>
                          <li>dass Sie bei der Gewinnung von Mitarbeitern nicht sparen dürfen und müssen, um wirtschaftlich erfolgreich zu sein</li>
                          <li>wie ihre Bank trotz Krise zum Fachkräftemagneten wird und zu alter Arbeitgeberattraktivität zurückfindet</li>
                        </ul>
                      </div>
                      <div class="after"></div>
                    </div>

										<!-- <div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
											<a href="project.html" class="arrow-btn pointer-large animsition-link">Mehr erfahren</a>
										</div> -->

									</div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->

				<!-- bottom-padding-90 start -->
				<div class="bottom-padding-90" id="Fusion">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns top-padding-60 bottom-padding-60 ">
									<div class="content-right-margin-40">
										{{-- <span class="small-title-oswald gold-color overlay-anim-box2" data-animation="overlay-anim2">Agilitätskultur & neue Geschäftsmodelle</span> --}}
										<h3 class="title-style text-color-1">
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">Corporate Identity</span><br>
											<span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay03 small-title-oswald" data-animation="overlay-anim2">Agilitätskultur & neue Geschäftsmodelle</span><br>
                    </h3>

                    <div class="coha--cut-text-wrapper">
                      <div data-animation-child class="p-style-small text-color-1 fade-anim-box tr-delay04" data-animation="fade-anim">
                        <p>Deutsche Banken sind hochgradig zinsabhängig. Im aktuellen Niedrigzinsumfeld ist das ein Problem, denn die Situation wird sich in absehbarerer Zeit durch die Niedrigzinspolitik der EZB nicht ändern.</p>
                        <p>Zur schlechten Ertragslage gesellen sich enorme Kosten, verursacht durch Investitionen in die digitale Transformation und Restrukturierungskosten des Personalabbaus.</p>
                        <p>Aufgrund der daraus resultierenden Einsparungen kommt es immer häufiger zu Fusionen und Zusammenschlüssen, welche Banken vor große Kultur und Management Herausforderungen stellen.</p>
                        <p>In Ihrer New Work Finance Ausbildung lernen Sie:</p>
                            <ul class="bullets">
                                <li>wie Fusionen und Zusammenschlüsse zum Profit werden können, wenn die Kulturthemen beachtet werden</li>
                                <li>was Sie dazu brauchen, um neue Geschäftsbereiche zu erschließen und sich somit weniger von Zinserträgen abhängig zu machen</li>
                                <li>weshalb agile Mitarbeiter für den Kulturwandel eines Zusammenschlusses unabdingbar sind</li>
                                <li>wie Mitarbeiter agiler, begeisterter und kreativer werden und das Unternehmen von innen heraus stärken</li>
                                <li>welchen Beitrag Führungskräfte und Mitarbeiter zu einer neuen Agilitätskultur beitragen können</li>
                                <li>warum ein intaktes Leitbild dabei eine entscheidende Rolle spielt</li>
                            </ul>

                      </div>
                      <div class="after"></div>
                    </div>

									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
									<div class="portfolio-content-bg-box pointer-large hover-box hidden-box">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url(assets/images/projects/fusion/fusion-1.jpg)"></div>
                                    </div>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->

			</section><!-- section end -->



			@include('components/training01')


            <div class="text-center top-bottom-padding-120 red-bg" data-midnight="black">
                <a href="{{ route('register') }}" class="pointer-large overlay-btn-box">
                    <span class="overlay-btn" data-text="Jetzt Anmelden">Jetzt Anmelden</span>
                </a>
            </div>

			<!-- section start -->
			<section class="dark-bg-2">
				<!-- container start -->
				<div class="container small top-bottom-padding-120">
					<!-- medium-title start -->
					<h2 data-animation-container class="medium-title">
						<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Diese Unternehmen tragen ">Diese Unternehmen tragen </span><br>
						<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="mit uns aktiv zum ">mit uns aktiv zum </span><br>
						<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="Kulturwandel bei">Kulturwandel bei</span>
					</h2><!-- medium-title end -->

					<!-- client-list start -->
					<ul class="client-list d-flex-wrap top-padding-60">
						<li>
							<a href="https://www.vr-bank-wuerzburg.de/" target="_blank" class="pointer-large d-block">
								<div class="brand-box single">
									<img src="{{ asset('assets/images/logos/vr-bank-wuerzburg.svg') }}" alt="Brand" class="opac-img">
								</div>
							</a>
                        </li>
						<li>
							<a href="https://www.kasseler-sparkasse.de/de/home.html" target="_blank" class="pointer-large d-block">
								<div class="brand-box single">
									<img src="{{ asset('assets/images/logos/kasseler-sparkasse.png') }}" alt="Brand" class="opac-img">
								</div>
							</a>
                        </li>
						<li>
							<a href="https://www.deutsche-bank.de/" target="_blank" class="pointer-large d-block">
								<div class="brand-box single">
									<img src="{{ asset('assets/images/logos/deutsche-bank.svg') }}" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
							<a href="https://www.vb-loebau-zittau.de/" target="_blank" class="pointer-large d-block">
								<div class="brand-box single">
									<img src="{{ asset('assets/images/logos/volksbank-l-bau-zittau.png') }}" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
								<a href="https://www.naspa.de/" target="_blank" class="pointer-large d-block">
									<div class="brand-box single">
										<img src="{{ asset('assets/images/logos/naspa.png') }}" alt="Brand" class="opac-img">
									</div>
								</a>
							</li>
						<li>
							<a href="https://www.ruv.de/" target="_blank" class="pointer-large d-block">
								<div class="brand-box single">
									<img src="{{ asset('assets/images/logos/r-und-v-versicherungen.svg') }}" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
						<li>
								<a href="https://www.pax-versicherung.de/" target="_blank" class="pointer-large d-block">
									<div class="brand-box single">
										<img src="{{ asset('assets/images/logos/pax.svg') }}" alt="Brand" class="opac-img">
									</div>
								</a>
							</li>
						<li class="empty-spot-box">
							<a data-animation-container href="#" class="pointer-large p-style-bold-up empty-spot d-block">
								<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Dieser Platz">Dieser Platz</span>
								<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="wartet">wartet</span>
								<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="auf Sie">auf Sie</span>
							</a>
						</li>
					</ul><!-- client-list end -->
				</div><!-- container end -->
			</section><!-- section end -->

			<!-- light-bg-2 start -->
			<div class="light-bg-2 top-bottom-padding-120" data-midnight="black">
				<!-- testimonials-slider start -->
				<div class="testimonials-slider container small">
					<!-- swiper-wrapper start -->
					<div class="swiper-wrapper">
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="{{ asset('assets/images/personen/claus-reder.jpg') }}" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">»Nur wenn Mitarbeiter an ihrem Arbeitsplatz ihre Stärken einbringen können und mit Freude bei der Arbeit sind, tragen sie auch zu einem erheblichen Maß zum Erfolg des Unternehmens bei. Dadurch gelingt es uns, die Chancen und Herausforderungen, die vor uns liegen zu meistern.«</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Claus Reder, <span class="text-color-2">Mitglied des Vorstandes, VR-Bank Würzburg</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="{{ asset('assets/images/personen/dr-oliver-haas.jpg') }}" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">»Langfristig erfolgreich sind nur die Betriebe, deren Mitarbeiter einen Sinn in ihrer Arbeit sehen, ihre Stärken einbringen können und begeistert sind!«</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Oliver Haas, <span class="text-color-2">Gründer und Geschäftsführer</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="{{ asset('assets/images/personen/elisabeth-cartolaro.jpg') }}" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">»Die Kombination aus Erkenntnissen aus der Positiven Psychologie, umfangreichen Übungen und einem gemeinsamen Gruppenprozess bietet so viele Auseinandersetzungsmöglich­keiten, dass es unmöglich ist, keine Wirkung zu erzielen. Sich neu mit sich selbst und dem Umfeld zu verbinden, dazu dient die Botschaftertätigkeit. Sie macht wirklich Spaß.«</p>
							</div>
							<div class="text-color-1 small-title-oswald">
									Elisabeth Cartolaro, <span class="text-color-2">Transformation Consultant und Coach, Deutsche Telekom AG</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="{{ asset('assets/images/personen/armin-lipp.jpg') }}" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">»Die VR-Bank Würzburg ist ein Vorbild für ganz Deutschland. Ich freue mich sehr darauf, ein außergewöhnliches Programm für inspirierte Unternehmer gemeinsam mit der VR-Bank durchzuführen.«</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Armin Lipp, <span class="text-color-2">Trainer, Corporate Happiness®</span>
							</div>
						</div><!-- slide end -->
						<!-- slide start -->
						<div class="swiper-slide text-center">
							<img src="{{ asset('assets/images/personen/holger-kerler.jpg') }}" alt="author">
							<div class="testimonials-content">
								<p class="text-color-4 p-style-bold">»Das Zusammenspiel aus Erkenntnissen der Positiven Psychologie, praktischen Erkenntnissen durch Übungen sowie die gemeinsamen Workshops entfalten eine große Wirkung bei jedem einzelnen und in der gesamten Organisation.«</p>
							</div>
							<div class="text-color-1 small-title-oswald">
								Holger Kerler, <span class="text-color-2">Trainer, VR-Bank Würzburg</span>
							</div>
						</div><!-- slide end -->
					</div><!-- swiper-wrapper end -->

					<!-- swiper-pagination -->
					<div class="swiper-pagination"></div>
				</div><!-- testimonials-slider end -->
			</div><!-- light-bg-2 end -->

