<?php
/*
Template Name: IT Support Page
*/
get_header();
?>

<!-- HERO -->
<section class="support-hero">
  <div class="container">
    <ol class="breadcrumb support-breadcrumb">
      <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
      <li class="active">IT Support</li>
    </ol>
    <div class="support-hero-inner">
      <span class="support-eyebrow"><i class="fa fa-life-ring"></i> IT Support Center</span>
      <h1>Report an IT Issue</h1>
      <p>Experiencing a technical problem? Sign in with your Google account and submit a ticket — our IT team will get back to you shortly.</p>
    </div>
  </div>
</section>

<!-- GOOGLE SIGN-IN SECTION -->
<section class="support-auth" id="support-auth">
  <div class="container">
    <div class="support-auth-card">
      <div class="support-auth-icon"><i class="fa fa-user-circle"></i></div>
      <h3>Sign in to Submit a Ticket</h3>
      <p>Use your Google account to auto-fill your details and track your ticket status.</p>
      <div id="google-btn-container"></div>
      <div id="google-signin-error" style="display:none; color:#CC1A42; font-size:13px; margin-top:8px;"></div>
      <div class="support-auth-divider"><span>or continue as guest</span></div>
    </div>
  </div>
</section>

<!-- TICKET FORM -->
<section class="support-form-section" id="support-form" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-map.jpg') center/cover no-repeat;">
  <div class="support-form-overlay"></div>
  <div class="container sf-container">

    <div class="support-form-head">
      <span class="support-section-label"><i class="fa fa-ticket"></i> Submit a Ticket</span>
      <h2>Describe Your IT Issue</h2>
    </div>

    <div class="support-form-body">

      <div class="sf-info">
        <div class="sf-info-item">
          <div class="sf-info-icon"><i class="fa fa-clock-o"></i></div>
          <div>
            <span class="sf-info-label">Response Time</span>
            <p>Within 4 business hours</p>
          </div>
        </div>
        <div class="sf-info-item">
          <div class="sf-info-icon"><i class="fa fa-shield"></i></div>
          <div>
            <span class="sf-info-label">Secure Submission</span>
            <p>Your data is encrypted</p>
          </div>
        </div>
        <div class="sf-info-item">
          <div class="sf-info-icon"><i class="fa fa-envelope"></i></div>
          <div>
            <span class="sf-info-label">Email Updates</span>
            <p>Track status via email</p>
          </div>
        </div>
        <div class="sf-info-divider"></div>
        <div class="sf-info-categories">
          <h5>Issue Categories</h5>
          <ul>
            <li><i class="fa fa-desktop"></i> Hardware</li>
            <li><i class="fa fa-code"></i> Software</li>
            <li><i class="fa fa-wifi"></i> Network</li>
            <li><i class="fa fa-envelope-o"></i> Email &amp; Comms</li>
            <li><i class="fa fa-key"></i> Access &amp; Permissions</li>
            <li><i class="fa fa-question-circle"></i> Other</li>
          </ul>
        </div>
      </div>

      <div class="sf-form">
        <div id="sf-user-badge" style="display:none;">
          <img id="sf-user-avatar" src="" alt="">
          <div>
            <strong id="sf-user-name"></strong>
            <span id="sf-user-email"></span>
          </div>
          <button type="button" id="sf-user-clear" title="Sign out">&times;</button>
        </div>

        <form id="support-ticket-form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" enctype="multipart/form-data">
          <input type="hidden" name="action" value="stratos_submit_ticket">
          <input type="hidden" name="stratos_ticket_nonce" value="<?php echo esc_attr( wp_create_nonce('stratos_submit_ticket') ); ?>">
          <input type="hidden" name="redirect_url" value="<?php echo esc_url( get_permalink() ); ?>">
          <input type="hidden" name="google_name" id="google_name" value="">
          <input type="hidden" name="google_email" id="google_email" value="">
          <input type="hidden" name="google_avatar" id="google_avatar" value="">

          <?php $status = isset($_GET['ticket_status']) ? sanitize_text_field(wp_unslash($_GET['ticket_status'])) : ''; ?>
          <?php if ($status === 'success'): ?>
            <div class="sf-alert sf-alert--success">
              <i class="fa fa-check-circle"></i> Your ticket has been submitted! Our IT team will reach out shortly.
            </div>
          <?php elseif ($status === 'error'): ?>
            <div class="sf-alert sf-alert--error">
              <i class="fa fa-exclamation-circle"></i> Something went wrong. Please check your inputs and try again.
            </div>
          <?php endif; ?>

          <div class="sf-row">
            <div class="sf-field">
              <label for="ticket_name">Full Name <span class="sf-required">*</span></label>
              <input type="text" id="ticket_name" name="ticket_name" required placeholder="e.g. Juan Dela Cruz">
            </div>
            <div class="sf-field">
              <label for="ticket_email">Email Address <span class="sf-required">*</span></label>
              <input type="email" id="ticket_email" name="ticket_email" required placeholder="e.g. juan@stratos.ph">
            </div>
          </div>

          <div class="sf-row">
            <div class="sf-field">
              <label for="ticket_phone">Phone Number</label>
              <input type="tel" id="ticket_phone" name="ticket_phone" placeholder="e.g. +63 917 123 4567">
            </div>
            <div class="sf-field">
              <label for="ticket_department">Department <span class="sf-required">*</span></label>
              <select id="ticket_department" name="ticket_department" required>
                <option value="">— Select —</option>
                <option value="Operations">Operations</option>
                <option value="Finance">Finance</option>
                <option value="HR">HR</option>
                <option value="Marketing">Marketing</option>
                <option value="Engineering">Engineering</option>
                <option value="Management">Management</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="sf-row">
            <div class="sf-field">
              <label for="ticket_category">Issue Category <span class="sf-required">*</span></label>
              <select id="ticket_category" name="ticket_category" required>
                <option value="">— Select —</option>
                <option value="Hardware">Hardware</option>
                <option value="Software">Software</option>
                <option value="Network">Network</option>
                <option value="Email & Comms">Email &amp; Communications</option>
                <option value="Access & Permissions">Access &amp; Permissions</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="sf-field">
              <label for="ticket_priority">Priority Level <span class="sf-required">*</span></label>
              <select id="ticket_priority" name="ticket_priority" required>
                <option value="">— Select —</option>
                <option value="Low">Low — Minor inconvenience</option>
                <option value="Medium">Medium — Workaround available</option>
                <option value="High">High — Significant impact</option>
                <option value="Critical">Critical — System down</option>
              </select>
            </div>
          </div>

          <div class="sf-field">
            <label for="ticket_subject">Subject <span class="sf-required">*</span></label>
            <input type="text" id="ticket_subject" name="ticket_subject" required placeholder="Brief summary of the issue">
          </div>

          <div class="sf-field">
            <label for="ticket_description">Detailed Description <span class="sf-required">*</span></label>
            <textarea id="ticket_description" name="ticket_description" rows="5" required placeholder="Describe the issue, including any error messages, steps to reproduce, and when it started."></textarea>
          </div>

          <div class="sf-field sf-file-upload">
            <label for="ticket_attachment">Attach Screenshot (optional)</label>
            <div class="sf-file-upload-area" id="sf-file-upload-area">
              <input type="file" id="ticket_attachment" name="ticket_attachment" accept="image/*,.pdf,.doc,.docx,.txt">
              <div class="sf-file-upload-content" id="sf-file-upload-placeholder">
                <i class="fa fa-cloud-upload"></i>
                <span class="sf-file-upload-text">Click to upload or drag and drop</span>
                <span class="sf-file-upload-hint">Max 5 MB. Accepted: images, PDF, DOC, TXT</span>
              </div>
              <div class="sf-file-preview" id="sf-file-preview" style="display:none;">
                <div class="sf-file-preview-inner">
                  <img id="sf-file-preview-image" src="" alt="" style="display:none; max-width:200px; max-height:150px; border-radius:8px; margin-bottom:12px;">
                  <div class="sf-file-preview-info">
                    <i class="fa fa-file-o" id="sf-file-preview-icon"></i>
                    <div>
                      <span class="sf-file-preview-name" id="sf-file-preview-name"></span>
                      <span class="sf-file-preview-size" id="sf-file-preview-size"></span>
                    </div>
                  </div>
                  <button type="button" class="sf-file-preview-remove" id="sf-file-preview-remove" title="Remove file">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <button type="submit" class="sf-submit-btn">
            <i class="fa fa-paper-plane"></i> Submit Ticket
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- GOOGLE SIGN-IN SCRIPT -->
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
(function() {
  var GOOGLE_CLIENT_ID = '<?php echo esc_js( defined("GOOGLE_CLIENT_ID") ? GOOGLE_CLIENT_ID : "" ); ?>';

  function handleGoogleSignIn(response) {
    try {
      var payload = JSON.parse(atob(response.credential.split('.')[1]));
      document.getElementById('google_name').value = payload.name || '';
      document.getElementById('google_email').value = payload.email || '';
      document.getElementById('google_avatar').value = payload.picture || '';

      document.getElementById('ticket_name').value = payload.name || '';
      document.getElementById('ticket_email').value = payload.email || '';

      var badge = document.getElementById('sf-user-badge');
      document.getElementById('sf-user-avatar').src = payload.picture || '';
      document.getElementById('sf-user-name').textContent = payload.name || '';
      document.getElementById('sf-user-email').textContent = payload.email || '';
      badge.style.display = 'flex';

      document.getElementById('navbar-user-avatar').src = payload.picture || '';
      document.getElementById('navbar-user-name').textContent = payload.name || '';
      document.getElementById('navbar-user-status').style.display = 'block';

      document.getElementById('support-auth').style.display = 'none';
      console.log('Google Sign-In successful:', payload.email);
    } catch (e) {
      console.error('Google sign-in parse error:', e);
      var errEl = document.getElementById('google-signin-error');
      if (errEl) {
        errEl.textContent = 'Sign-in failed. Please try again or continue as guest.';
        errEl.style.display = 'block';
      }
    }
  }
  window.handleGoogleSignIn = handleGoogleSignIn;

  function initGoogleSignIn() {
    if (typeof google === 'undefined' || !google.accounts || !google.accounts.id) {
      return false;
    }
    google.accounts.id.initialize({
      client_id: GOOGLE_CLIENT_ID,
      callback: handleGoogleSignIn,
      auto_prompt: false
    });
    var container = document.getElementById('google-btn-container');
    if (container) {
      google.accounts.id.renderButton(container, {
        type: 'standard',
        size: 'large',
        theme: 'outline',
        text: 'sign_in_with',
        shape: 'rectangular',
        logo_alignment: 'left',
        width: container.offsetWidth || 300
      });
    }
    console.log('Google Sign-In initialized');
    return true;
  }

  var initAttempts = 0;
  var maxAttempts = 40;
  var initInterval = setInterval(function() {
    initAttempts++;
    if (initGoogleSignIn()) {
      clearInterval(initInterval);
    } else if (initAttempts >= maxAttempts) {
      clearInterval(initInterval);
      console.warn('Google Sign-In library failed to load after ' + maxAttempts + ' attempts');
      var errEl = document.getElementById('google-signin-error');
      if (errEl) {
        errEl.textContent = 'Google Sign-In is unavailable. Please continue as guest.';
        errEl.style.display = 'block';
      }
    }
  }, 500);

  document.getElementById('sf-user-clear').addEventListener('click', function() {
    document.getElementById('sf-user-badge').style.display = 'none';
    document.getElementById('navbar-user-status').style.display = 'none';
    document.getElementById('google_name').value = '';
    document.getElementById('google_email').value = '';
    document.getElementById('google_avatar').value = '';
    document.getElementById('ticket_name').value = '';
    document.getElementById('ticket_email').value = '';
    document.getElementById('support-auth').style.display = '';
    if (typeof google !== 'undefined' && google.accounts && google.accounts.id) {
      google.accounts.id.prompt();
    }
  });

  document.getElementById('navbar-logout-btn').addEventListener('click', function() {
    document.getElementById('sf-user-badge').style.display = 'none';
    document.getElementById('navbar-user-status').style.display = 'none';
    document.getElementById('google_name').value = '';
    document.getElementById('google_email').value = '';
    document.getElementById('google_avatar').value = '';
    document.getElementById('ticket_name').value = '';
    document.getElementById('ticket_email').value = '';
    document.getElementById('support-auth').style.display = '';
    if (typeof google !== 'undefined' && google.accounts && google.accounts.id) {
      google.accounts.id.prompt();
    }
  });

  var fileInput = document.getElementById('ticket_attachment');
  var uploadArea = document.getElementById('sf-file-upload-area');
  var placeholder = document.getElementById('sf-file-upload-placeholder');
  var preview = document.getElementById('sf-file-preview');
  var previewImage = document.getElementById('sf-file-preview-image');
  var previewIcon = document.getElementById('sf-file-preview-icon');
  var previewName = document.getElementById('sf-file-preview-name');
  var previewSize = document.getElementById('sf-file-preview-size');
  var removeBtn = document.getElementById('sf-file-preview-remove');

  function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    var k = 1024;
    var sizes = ['Bytes', 'KB', 'MB', 'GB'];
    var i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
  }

  function showFilePreview(file) {
    placeholder.style.display = 'none';
    preview.style.display = 'block';
    uploadArea.style.borderColor = '#bbf7d0';
    uploadArea.style.background = '#f0fdf4';

    previewName.textContent = file.name;
    previewSize.textContent = formatFileSize(file.size);

    if (file.type.startsWith('image/')) {
      var reader = new FileReader();
      reader.onload = function(e) {
        previewImage.src = e.target.result;
        previewImage.style.display = 'block';
        previewIcon.style.display = 'none';
      };
      reader.readAsDataURL(file);
    } else {
      previewImage.style.display = 'none';
      previewIcon.style.display = 'block';
      var ext = file.name.split('.').pop().toLowerCase();
      if (ext === 'pdf') {
        previewIcon.className = 'fa fa-file-pdf-o';
      } else if (ext === 'doc' || ext === 'docx') {
        previewIcon.className = 'fa fa-file-word-o';
      } else if (ext === 'txt') {
        previewIcon.className = 'fa fa-file-text-o';
      } else {
        previewIcon.className = 'fa fa-file-o';
      }
    }
  }

  function clearFilePreview() {
    fileInput.value = '';
    placeholder.style.display = 'block';
    preview.style.display = 'none';
    uploadArea.style.borderColor = '';
    uploadArea.style.background = '';
    previewImage.src = '';
  }

  fileInput.addEventListener('change', function() {
    if (this.files && this.files[0]) {
      showFilePreview(this.files[0]);
    }
  });

  removeBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    clearFilePreview();
  });

  uploadArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    this.style.borderColor = '#CC1A42';
    this.style.background = '#fff';
  });

  uploadArea.addEventListener('dragleave', function(e) {
    e.preventDefault();
    if (!fileInput.files || !fileInput.files[0]) {
      this.style.borderColor = '';
      this.style.background = '';
    }
  });

  uploadArea.addEventListener('drop', function(e) {
    e.preventDefault();
    if (e.dataTransfer.files && e.dataTransfer.files[0]) {
      fileInput.files = e.dataTransfer.files;
      showFilePreview(e.dataTransfer.files[0]);
    }
  });
})();
</script>

<?php get_footer(); ?>