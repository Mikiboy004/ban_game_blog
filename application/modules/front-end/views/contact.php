<!-- Contact Form & Map Overlay Section
		============================================= -->
		<section id="map-overlay">

			<div class="container clearfix">

				<!-- Contact Form Overlay
				============================================= -->
				<div id="contact-form-overlay" class="clearfix">

					<div class="fancy-title title-dotted-border">
						<h3>Send us an Email</h3>
					</div>

					<div class="form-widget">

						<div class="form-result"></div>

						<!-- Contact Form
						============================================= -->
						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

							<div class="col_half">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_half col_last">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_half">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="col_half col_last">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Wordpress</option>
									<option value="PHP / MySQL">PHP / MySQL</option>
									<option value="HTML5 / CSS3">HTML5 / CSS3</option>
									<option value="Graphic Design">Graphic Design</option>
								</select>
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
							</div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">

								<script src="https://www.google.com/recaptcha/api.js" async defer></script>
								<div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT"></div>

							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>

							<input type="hidden" name="prefix" value="template-contactform-">

						</form>
					</div>


					<div class="line"></div>

					<!-- Contact Info
					============================================= -->
					<div class="col_one_third nobottommargin">

						<address>
							<strong>Headquarters:</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
						</address>
						<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
						<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

					</div><!-- Contact Info End -->

					<!-- Testimonails
					============================================= -->
					<div class="col_two_third col_last nobottommargin">

						<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="4" data-animation="slide" data-arrows="false">
							<i class="i-plain color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
							<div class="flexslider" style="width: auto;">
								<div class="slider-wrap">
									<div class="slide"></div>
								</div>
							</div>
						</div>

					</div><!-- Testimonials End -->

				</div><!-- Contact Form Overlay End -->

			</div>

			<!-- Google Map
			============================================= -->
			<section id="google-map" class="gmap"></section>


		</section><!-- Contact Form & Map Overlay Section End -->