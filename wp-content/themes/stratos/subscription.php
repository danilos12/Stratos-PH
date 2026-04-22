<?php get_header(); /*Template Name: Subscription Page */ ?>

<section class="cstm_hero sub_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
					<li class="active">Subscription Plans</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<span class="sub_badge"><i class="fa fa-shield"></i> Monthly Monitoring Plans</span>
				<h1>Choose the right plan<br>for your property</h1>
				<p class="sub_hero_desc">Professional security monitoring services tailored for commercial and residential clients. Cancel anytime.</p>
				<div class="separator">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-seperator.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Plan Cards -->
<section class="sub_plans">
	<div class="container">
		<div class="row sub_plans_row">

			<!-- Plan A: Alarm Monitoring -->
			<div class="col-md-3 col-sm-6 sub_plan_col">
				<div class="sub_plan_card">
					<div class="sub_plan_icon"><i class="fa fa-bell"></i></div>
					<h3 class="sub_plan_name">Alarm Monitoring</h3>
					<p class="sub_plan_desc">Round-the-clock intrusion detection</p>
					<div class="sub_plan_price">
						<span class="sub_price_amount">&#8369;1,500</span>
						<span class="sub_price_period">/ month</span>
					</div>
					<a href="#book-schedule" class="sub_plan_btn" data-plan="A" data-plan-label="Alarm Monitoring Subscription Only">Subscribe &rarr;</a>
					<ul class="sub_features">
						<li><i class="fa fa-check"></i> 24/7 alarm monitoring</li>
						<li><i class="fa fa-check"></i> Emergency response alerts</li>
						<li><i class="fa fa-check"></i> SMS &amp; email notifications</li>
						<li><i class="fa fa-check"></i> Monthly status reports</li>
					</ul>
				</div>
			</div>

			<!-- Plan B: CCTV Monitoring -->
			<div class="col-md-3 col-sm-6 sub_plan_col">
				<div class="sub_plan_card">
					<div class="sub_plan_icon"><i class="fa fa-video-camera"></i></div>
					<h3 class="sub_plan_name">CCTV Monitoring</h3>
					<p class="sub_plan_desc">Professional video surveillance</p>
					<div class="sub_plan_price">
						<span class="sub_price_amount">&#8369;2,000</span>
						<span class="sub_price_period">/ month</span>
					</div>
					<a href="#book-schedule" class="sub_plan_btn" data-plan="B" data-plan-label="CCTV Monitoring Subscription Only">Subscribe &rarr;</a>
					<ul class="sub_features">
						<li><i class="fa fa-check"></i> 24/7 CCTV monitoring</li>
						<li><i class="fa fa-check"></i> Live feed access</li>
						<li><i class="fa fa-check"></i> Incident recording</li>
						<li><i class="fa fa-check"></i> Monthly reports</li>
					</ul>
				</div>
			</div>

			<!-- Plan C: Alarm & CCTV (Most Popular) -->
			<div class="col-md-3 col-sm-6 sub_plan_col">
				<div class="sub_plan_card sub_plan_featured">
					<span class="sub_popular_badge">Most Popular</span>
					<div class="sub_plan_icon"><i class="fa fa-shield"></i></div>
					<h3 class="sub_plan_name">Alarm &amp; CCTV</h3>
					<p class="sub_plan_desc">Complete security monitoring bundle</p>
					<div class="sub_plan_price">
						<span class="sub_price_amount">&#8369;3,000</span>
						<span class="sub_price_period">/ month</span>
					</div>
					<a href="#book-schedule" class="sub_plan_btn sub_plan_btn_featured" data-plan="C" data-plan-label="Alarm &amp; CCTV Monitoring Subscription Only">Subscribe &rarr;</a>
					<ul class="sub_features">
						<li><i class="fa fa-check"></i> Everything in Alarm &amp; CCTV</li>
						<li><i class="fa fa-check"></i> Priority support</li>
						<li><i class="fa fa-check"></i> Advanced analytics</li>
						<li><i class="fa fa-check"></i> Incident playback</li>
						<li><i class="fa fa-check"></i> Volume discount eligible</li>
					</ul>
				</div>
			</div>

			<!-- Plan D: GPS Monitoring -->
			<div class="col-md-3 col-sm-6 sub_plan_col">
				<div class="sub_plan_card">
					<div class="sub_plan_icon"><i class="fa fa-map-marker"></i></div>
					<h3 class="sub_plan_name">GPS Monitoring</h3>
					<p class="sub_plan_desc">Real-time vehicle and asset tracking</p>
					<div class="sub_plan_price">
						<span class="sub_price_amount">&#8369;1,200</span>
						<span class="sub_price_period">/ month</span>
					</div>
					<a href="#book-schedule" class="sub_plan_btn" data-plan="D" data-plan-label="GPS Monitoring Services">Subscribe &rarr;</a>
					<ul class="sub_features">
						<li><i class="fa fa-check"></i> Real-time GPS tracking</li>
						<li><i class="fa fa-check"></i> Route history &amp; playback</li>
						<li><i class="fa fa-check"></i> Geo-fence alerts</li>
						<li><i class="fa fa-check"></i> Monthly fleet reports</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Booking Form -->
<section class="sub_booking" id="book-schedule">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sub_booking_intro">
				<h2>Book a Schedule</h2>
				<p>Select your preferred subscription plan and pick a date and time for our team to visit and assess your property. No upfront commitment required.</p>
				<div class="separator">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/stratos-seperator.png" alt="">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<?php
				// Show success/error messages
				if ( isset( $_GET['sub_status'] ) ) {
					if ( $_GET['sub_status'] === 'success' ) {
						echo '<div class="sub_alert sub_alert_success"><i class="fa fa-check-circle"></i> Your schedule has been booked! Our team will confirm your appointment shortly.</div>';
					} elseif ( $_GET['sub_status'] === 'error' ) {
						echo '<div class="sub_alert sub_alert_error"><i class="fa fa-exclamation-circle"></i> Something went wrong. Please try again or contact us directly.</div>';
					}
				}
				?>

				<form class="sub_form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
					<?php wp_nonce_field( 'stratos_book_schedule', 'stratos_schedule_nonce' ); ?>
					<input type="hidden" name="action" value="stratos_book_schedule">
					<input type="hidden" name="redirect_url" value="<?php echo esc_url( get_permalink() ); ?>">

					<div class="sub_form_row">
						<div class="col-md-6 sub_form_group">
							<label for="sub_name">Full Name <span class="req">*</span></label>
							<input type="text" id="sub_name" name="sub_name" placeholder="e.g. Juan dela Cruz" required maxlength="100">
						</div>
						<div class="col-md-6 sub_form_group">
							<label for="sub_email">Email Address <span class="req">*</span></label>
							<input type="email" id="sub_email" name="sub_email" placeholder="e.g. juan@email.com" required maxlength="150">
						</div>
					</div>

					<div class="sub_form_row">
						<div class="col-md-6 sub_form_group">
							<label for="sub_phone">Phone / Mobile Number <span class="req">*</span></label>
							<input type="tel" id="sub_phone" name="sub_phone" placeholder="e.g. 09XX XXX XXXX" required maxlength="30">
						</div>
						<div class="col-md-6 sub_form_group">
							<label for="sub_plan">Subscription Plan <span class="req">*</span></label>
							<select id="sub_plan" name="sub_plan" required>
								<option value="">-- Select a plan --</option>
								<option value="A">Alarm Monitoring Subscription Only</option>
								<option value="B">CCTV Monitoring Subscription Only</option>
								<option value="C">Alarm &amp; CCTV Monitoring Subscription Only</option>
								<option value="D">GPS Monitoring Services</option>
							</select>
						</div>
					</div>

					<div class="sub_form_row">
						<div class="col-md-6 sub_form_group">
							<label for="sub_date">Preferred Date <span class="req">*</span></label>
							<input type="date" id="sub_date" name="sub_date" required
								min="<?php echo esc_attr( date('Y-m-d', strtotime('+1 day')) ); ?>">
						</div>
						<div class="col-md-6 sub_form_group">
							<label for="sub_time">Preferred Time <span class="req">*</span></label>
							<select id="sub_time" name="sub_time" required>
								<option value="">-- Select a time slot --</option>
								<option value="08:00 AM">08:00 AM</option>
								<option value="09:00 AM">09:00 AM</option>
								<option value="10:00 AM">10:00 AM</option>
								<option value="11:00 AM">11:00 AM</option>
								<option value="01:00 PM">01:00 PM</option>
								<option value="02:00 PM">02:00 PM</option>
								<option value="03:00 PM">03:00 PM</option>
								<option value="04:00 PM">04:00 PM</option>
							</select>
						</div>
					</div>

					<div class="sub_form_row">
						<div class="col-md-12 sub_form_group">
							<label for="sub_address">Property Address <span class="req">*</span></label>
							<input type="text" id="sub_address" name="sub_address" placeholder="Full address of property to be secured" required maxlength="250">
						</div>
					</div>

					<div class="sub_form_row">
						<div class="col-md-12 sub_form_group">
							<label for="sub_notes">Additional Notes</label>
							<textarea id="sub_notes" name="sub_notes" rows="4" placeholder="Any additional information about your property or requirements..." maxlength="1000"></textarea>
						</div>
					</div>

					<div class="sub_form_row">
						<div class="col-md-12 sub_form_submit">
							<button type="submit" class="sub_submit_btn">Book My Schedule &rarr;</button>
							<p class="sub_form_note">Our team will reach out within 24 hours to confirm your appointment.</p>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>


<script>
(function () {
	// Pre-fill plan dropdown when Subscribe button is clicked on a plan card
	var planBtns = document.querySelectorAll('.sub_plan_btn[data-plan]');
	var planSelect = document.getElementById('sub_plan');

	planBtns.forEach(function (btn) {
		btn.addEventListener('click', function (e) {
			if (planSelect) {
				planSelect.value = btn.getAttribute('data-plan');
			}
		});
	});

	// Set date minimum to tomorrow
	var dateInput = document.getElementById('sub_date');
	if (dateInput && !dateInput.getAttribute('min')) {
		var tomorrow = new Date();
		tomorrow.setDate(tomorrow.getDate() + 1);
		dateInput.min = tomorrow.toISOString().split('T')[0];
	}
})();
</script>

<?php get_footer(); ?>
