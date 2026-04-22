<?php get_header(); /*Template Name: Contact Page */ ?>

<!-- HERO -->
<section class="contact-hero">
<div class="container">
<ol class="breadcrumb contact-breadcrumb">
<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
<li class="active">Contact</li>
</ol>
<div class="contact-hero-inner">
<span class="contact-eyebrow"><i class="fa fa-shield"></i> Get In Touch</span>
<h1>Let's Secure Your Property</h1>
<p>Reach out for a free consultation, request a quote, or subscribe to one of our monitoring plans below.</p>
</div>
</div>
</section>

<!-- PRICING PLANS -->
<section class="contact-plans">
<div class="container">
<div class="contact-plans-head">
<span class="contact-section-label"><i class="fa fa-shield"></i> Monthly Monitoring Plans</span>
<h2>Choose the right plan for your property</h2>
<p>Professional security monitoring tailored for commercial and residential clients. Cancel anytime.</p>
</div>

<div class="contact-plans-grid">

<div class="cp-card">
<div class="cp-icon"><i class="fa fa-map-marker"></i></div>
<h3 class="cp-name">GPS Monitoring</h3>
<p class="cp-desc">Real-time vehicle and asset tracking</p>
<div class="cp-price"><span class="cp-amount">&#8369;1,200</span><span class="cp-period">/ month</span></div>
<a href="#contact-form" class="cp-btn" data-code="D">Subscribe &rarr;</a>
<ul class="cp-features">
<li><i class="fa fa-check"></i> Real-time GPS tracking</li>
<li><i class="fa fa-check"></i> Route history &amp; playback</li>
<li><i class="fa fa-check"></i> Geo-fence alerts</li>
<li><i class="fa fa-check"></i> Monthly fleet reports</li>
</ul>
</div>

<div class="cp-card">
<div class="cp-icon"><i class="fa fa-bell"></i></div>
<h3 class="cp-name">Alarm Monitoring</h3>
<p class="cp-desc">Round-the-clock intrusion detection</p>
<div class="cp-price"><span class="cp-amount">&#8369;1,500</span><span class="cp-period">/ month</span></div>
<a href="#contact-form" class="cp-btn" data-code="A">Subscribe &rarr;</a>
<ul class="cp-features">
<li><i class="fa fa-check"></i> 24/7 alarm monitoring</li>
<li><i class="fa fa-check"></i> Emergency response alerts</li>
<li><i class="fa fa-check"></i> SMS &amp; email notifications</li>
<li><i class="fa fa-check"></i> Monthly status reports</li>
</ul>
</div>

<div class="cp-card">
<div class="cp-icon"><i class="fa fa-video-camera"></i></div>
<h3 class="cp-name">CCTV Monitoring</h3>
<p class="cp-desc">Professional video surveillance</p>
<div class="cp-price"><span class="cp-amount">&#8369;2,000</span><span class="cp-period">/ month</span></div>
<a href="#contact-form" class="cp-btn" data-code="B">Subscribe &rarr;</a>
<ul class="cp-features">
<li><i class="fa fa-check"></i> 24/7 CCTV monitoring</li>
<li><i class="fa fa-check"></i> Live feed access</li>
<li><i class="fa fa-check"></i> Incident recording</li>
<li><i class="fa fa-check"></i> Monthly reports</li>
</ul>
</div>

<div class="cp-card cp-card--featured">
<span class="cp-popular">Most Popular</span>
<div class="cp-icon"><i class="fa fa-shield"></i></div>
<h3 class="cp-name">Alarm &amp; CCTV</h3>
<p class="cp-desc">Complete security monitoring bundle</p>
<div class="cp-price"><span class="cp-amount">&#8369;3,000</span><span class="cp-period">/ month</span></div>
<a href="#contact-form" class="cp-btn cp-btn--featured" data-code="C">Subscribe &rarr;</a>
<ul class="cp-features">
<li><i class="fa fa-check"></i> Everything in Alarm &amp; CCTV</li>
<li><i class="fa fa-check"></i> Priority support</li>
<li><i class="fa fa-check"></i> Advanced analytics</li>
<li><i class="fa fa-check"></i> Incident playback</li>
<li><i class="fa fa-check"></i> Volume discount eligible</li>
</ul>
</div>

</div>
</div>
</section>

<!-- CONTACT / ENQUIRY -->
<section class="contact-enquiry" id="contact-form" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-map.jpg') center/cover no-repeat;">
<div class="contact-enquiry-overlay"></div>
<div class="container ceq-container">

<div class="contact-enquiry-head">
<span class="contact-section-label"><i class="fa fa-envelope"></i> Send a Message</span>
<h2>Enquire on Stratos' Security Services</h2>
</div>

<div class="contact-enquiry-body">

<div class="ceq-info">

<div class="ceq-info-item">
<div class="ceq-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-mail.png" alt=""></div>
<div>
<span class="ceq-info-label">General Inquiries</span>
<a href="mailto:<?php the_field('general_email'); ?>"><?php the_field('general_email'); ?></a>
</div>
</div>

<div class="ceq-info-item">
<div class="ceq-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-user.png" alt=""></div>
<div>
<span class="ceq-info-label">HR and Recruitment</span>
<a href="mailto:<?php the_field('hr_email'); ?>"><?php the_field('hr_email'); ?></a>
</div>
</div>

<div class="ceq-info-item">
<div class="ceq-info-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/c-map.png" alt=""></div>
<div>
<span class="ceq-info-label">Our Location</span>
<a href="<?php the_field('google_map'); ?>">View on Google Maps</a>
</div>
</div>

<div class="ceq-info-divider"></div>

<div class="ceq-office">
<h5>Office Address</h5>
<p><?php the_field('office_address'); ?></p>
<a class="ceq-gmap" href="<?php the_field('google_map'); ?>"><i class="fa fa-map-marker"></i> Open in Maps</a>
</div>

<div class="ceq-contacts">
<h5>Direct Contacts</h5>
<p>
<i class="fa fa-phone"></i> <a href="tel:<?php the_field('tel'); ?>"><?php the_field('tel'); ?></a><br>
<i class="fa fa-fax"></i> <a href="tel:<?php the_field('fax'); ?>"><?php the_field('fax'); ?></a><br>
<i class="fa fa-envelope"></i> <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a>
</p>
</div>

</div>

<div class="ceq-form">
<div class="ceq-plan-notice" id="ceq-plan-notice" style="display:none;">
<i class="fa fa-tag"></i>&nbsp; Enquiring about: <strong id="ceq-plan-label"></strong>
<button class="ceq-plan-clear" id="ceq-plan-clear" title="Clear">&times;</button>
</div>
<h4>Your Enquiry</h4>
<?php echo do_shortcode('[contact-form-7 id="141" title="Contact"]'); ?>
</div>

</div>
</div>
</section>

<script>
(function () {
var planLabels = {
A: 'Alarm Monitoring Subscription',
B: 'CCTV Monitoring Subscription',
C: 'Alarm & CCTV Monitoring Subscription',
D: 'GPS Monitoring Services'
};
var notice   = document.getElementById('ceq-plan-notice');
var labelEl  = document.getElementById('ceq-plan-label');
var clearBtn = document.getElementById('ceq-plan-clear');

document.querySelectorAll('.cp-btn[data-code]').forEach(function (btn) {
btn.addEventListener('click', function () {
var label = planLabels[btn.getAttribute('data-code')];
if (notice && labelEl && label) {
labelEl.textContent = label;
notice.style.display = 'flex';
}
});
});

if (clearBtn) {
clearBtn.addEventListener('click', function () {
notice.style.display = 'none';
labelEl.textContent = '';
});
}
})();
</script>

<?php get_footer(); ?>
