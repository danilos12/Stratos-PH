<?php

add_theme_support( 'post-thumbnails' );

function testimonials() {
    register_post_type('Case-Study',
        array(
            'labels' => array(
                'name' => __('Case Study'),
                'singular_name' => __('case-study'),
            ),
            'taxonomies' => array('category'),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
            'show_in_menu' => false
        )
    );
}
add_action('init', 'testimonials');

function stratos_enqueue_styles() {
    // Frameworks and fonts
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/framework/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('linearicons', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css');
    wp_enqueue_style('fs-matthew', get_template_directory_uri() . '/assets/fonts/fs-matthew/stylesheet.css');
  // Used by CircularGallery canvas text
  wp_enqueue_style('google-font-figtree', 'https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('selectric', get_template_directory_uri() . '/assets/css/selectric.css');
    
    // Enqueue React bundle with cache busting
    $bundle_url = get_template_directory_uri() . '/assets/js/dist/bundle.js';
    $bundle_path = get_template_directory() . '/assets/js/dist/bundle.js';
    $version = file_exists($bundle_path) ? filemtime($bundle_path) : '1.0';
    
    // Debug: Log when script is being enqueued
    error_log('📦 Enqueuing React bundle: ' . $bundle_url . ' | Version: ' . $version);
    
    wp_enqueue_script('react-bundle', $bundle_url, array(), $version, true);
    
    // Localize script with REST API URL - works on all environments
    wp_localize_script('react-bundle', 'stratoConfig', array(
      'restUrl' => rest_url('stratos/v1/gallery-items')
    ));

    // ✅ Main stylesheet with auto cache-busting
    wp_enqueue_style(
        'stratos-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'stratos_enqueue_styles');


add_action('rest_api_init', function() {
  register_rest_route('stratos/v1', '/gallery-items', array(
    'methods' => 'GET',
    'callback' => 'get_gallery_items',
    'permission_callback' => '__return_true'
  ));
});

function get_gallery_items() {
  $items = array(
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_1.jpg',
      'text' => 'Burglar & Alarm System',
      'url' => home_url('/services/burglar-and-alarm-system/')
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_2.jpg',
      'text' => 'Access Control System',
      'url' => home_url('/services/access-control-system/')
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_3.jpg',
      'text' => 'Video Surveillance & Analytics',
      'url' => home_url('/services/video-surveilance-analytics/')
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_4.jpg',
      'text' => 'Fire Alarm Active Monitoring',
      'url' => home_url('/services/fire-alarm-active-monitoring/'),
    
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_5.jpg',
      'text' => '24/7 Central Monitoring',
      'url' => home_url('/services/central-management-system/'),
    ),
    array(
      'image' => get_template_directory_uri() . '/assets/img/service_6.jpg',
      'text' => 'First Responders',
      'url' => home_url('/services/first-responders/'),
    ),
  );
  
  return rest_ensure_response($items);
}


/* ================================================================
   SUBSCRIPTION BOOKING FORM HANDLER
   POST via admin-post.php → action=stratos_book_schedule
   ================================================================ */
add_action( 'admin_post_stratos_book_schedule',        'stratos_handle_booking' );
add_action( 'admin_post_nopriv_stratos_book_schedule', 'stratos_handle_booking' );

function stratos_handle_booking() {
  // 1. Verify nonce
  if ( ! isset( $_POST['stratos_schedule_nonce'] )
    || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['stratos_schedule_nonce'] ) ), 'stratos_book_schedule' )
  ) {
    wp_die( 'Security check failed.', 'Error', array( 'response' => 403 ) );
  }

  // 2. Sanitise & validate required fields
  $redirect = isset( $_POST['redirect_url'] )
    ? esc_url_raw( wp_unslash( $_POST['redirect_url'] ) )
    : home_url( '/subscription/' );

  $plan_codes = array( 'A', 'B', 'C', 'D' );
  $plan_labels = array(
    'A' => 'Alarm Monitoring Subscription Only',
    'B' => 'CCTV Monitoring Subscription Only',
    'C' => 'Alarm & CCTV Monitoring Subscription Only',
    'D' => 'GPS Monitoring Services',
  );

  $name    = isset( $_POST['sub_name'] )    ? sanitize_text_field( wp_unslash( $_POST['sub_name'] ) )    : '';
  $email   = isset( $_POST['sub_email'] )   ? sanitize_email( wp_unslash( $_POST['sub_email'] ) )        : '';
  $phone   = isset( $_POST['sub_phone'] )   ? sanitize_text_field( wp_unslash( $_POST['sub_phone'] ) )   : '';
  $plan    = isset( $_POST['sub_plan'] )    ? sanitize_text_field( wp_unslash( $_POST['sub_plan'] ) )    : '';
  $date    = isset( $_POST['sub_date'] )    ? sanitize_text_field( wp_unslash( $_POST['sub_date'] ) )    : '';
  $time    = isset( $_POST['sub_time'] )    ? sanitize_text_field( wp_unslash( $_POST['sub_time'] ) )    : '';
  $address = isset( $_POST['sub_address'] ) ? sanitize_textarea_field( wp_unslash( $_POST['sub_address'] ) ) : '';
  $notes   = isset( $_POST['sub_notes'] )   ? sanitize_textarea_field( wp_unslash( $_POST['sub_notes'] ) )  : '';

  // Basic required-field check
  if ( ! $name || ! is_email( $email ) || ! $phone
    || ! in_array( $plan, $plan_codes, true ) || ! $date || ! $time || ! $address
  ) {
    wp_safe_redirect( add_query_arg( 'sub_status', 'error', $redirect ) );
    exit;
  }

  // Reject dates in the past
  $booking_ts = strtotime( $date );
  if ( $booking_ts === false || $booking_ts < strtotime( 'tomorrow' ) ) {
    wp_safe_redirect( add_query_arg( 'sub_status', 'error', $redirect ) );
    exit;
  }

  $plan_label = $plan_labels[ $plan ];

  // 3. Build notification email
  $admin_email = get_option( 'admin_email' );
  $subject     = 'New Subscription Booking — ' . $plan_label;

  $body  = "A new subscription schedule has been booked via the website.\n\n";
  $body .= "Name:    {$name}\n";
  $body .= "Email:   {$email}\n";
  $body .= "Phone:   {$phone}\n";
  $body .= "Plan:    [{$plan}] {$plan_label}\n";
  $body .= "Date:    {$date}\n";
  $body .= "Time:    {$time}\n";
  $body .= "Address: {$address}\n";
  if ( $notes ) {
    $body .= "Notes:   {$notes}\n";
  }

  $headers = array(
    'Content-Type: text/plain; charset=UTF-8',
    'Reply-To: ' . $name . ' <' . $email . '>',
  );

  wp_mail( $admin_email, $subject, $body, $headers );

  // 4. Send confirmation to the client
  $confirm_subject = 'Your Appointment Request — Stratos Security';
  $confirm_body  = "Hi {$name},\n\n";
  $confirm_body .= "Thank you for booking a schedule with Stratos Security!\n\n";
  $confirm_body .= "Here are your appointment details:\n";
  $confirm_body .= "  Plan:    {$plan_label}\n";
  $confirm_body .= "  Date:    {$date}\n";
  $confirm_body .= "  Time:    {$time}\n";
  $confirm_body .= "  Address: {$address}\n\n";
  $confirm_body .= "Our team will contact you within 24 hours to confirm your appointment.\n\n";
  $confirm_body .= "Stratos Security\n" . home_url() . "\n";

  wp_mail( $email, $confirm_subject, $confirm_body, array( 'Content-Type: text/plain; charset=UTF-8' ) );

  // 5. Redirect back with success flag
  wp_safe_redirect( add_query_arg( 'sub_status', 'success', $redirect ) );
  exit;
}

/* ================================================================
   IT SUPPORT TICKETS — DB TABLE, API, FORM HANDLER
   ================================================================ */

function stratos_create_tickets_table() {
  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';
  $charset = $wpdb->get_charset_collate();

  $sql = "CREATE TABLE $table (
    id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    ticket_number varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    phone varchar(50) DEFAULT '',
    department varchar(100) NOT NULL,
    category varchar(100) NOT NULL,
    priority varchar(50) NOT NULL DEFAULT 'Medium',
    subject varchar(500) NOT NULL,
    description longtext NOT NULL,
    attachment varchar(500) DEFAULT '',
    google_name varchar(255) DEFAULT '',
    google_email varchar(255) DEFAULT '',
    google_avatar varchar(500) DEFAULT '',
    status varchar(50) NOT NULL DEFAULT 'Open',
    created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY  (id),
    UNIQUE KEY ticket_number (ticket_number),
    KEY status (status),
    KEY email (email)
  ) $charset;";

  require_once ABSPATH . 'wp-admin/includes/upgrade.php';
  dbDelta( $sql );
}
register_activation_hook( __FILE__, 'stratos_create_tickets_table' );
add_action( 'after_switch_theme', 'stratos_create_tickets_table' );

add_action( 'after_setup_theme', function() {
  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';
  if ( $wpdb->get_var( "SHOW TABLES LIKE '$table'" ) !== $table ) {
    stratos_create_tickets_table();
  }
});

function stratos_generate_ticket_number() {
  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';
  $prefix = 'STR-' . date( 'ymd' ) . '-';
  $last = $wpdb->get_var( "SELECT ticket_number FROM $table WHERE ticket_number LIKE '{$prefix}%' ORDER BY id DESC LIMIT 1" );
  if ( $last ) {
    $seq = intval( substr( $last, -4 ) ) + 1;
  } else {
    $seq = 1;
  }
  return $prefix . str_pad( $seq, 4, '0', STR_PAD_LEFT );
}

/* ---------- REST API: Create Ticket ---------- */
add_action( 'rest_api_init', function() {
  register_rest_route( 'stratos/v1', '/tickets', array(
    'methods'             => 'POST',
    'callback'            => 'stratos_api_create_ticket',
    'permission_callback' => '__return_true',
  ) );

  register_rest_route( 'stratos/v1', '/tickets/(?P<id>\d+)', array(
    'methods'             => 'GET',
    'callback'            => 'stratos_api_get_ticket',
    'permission_callback' => 'stratos_api_permission_check',
  ) );

  register_rest_route( 'stratos/v1', '/tickets', array(
    'methods'             => 'GET',
    'callback'            => 'stratos_api_list_tickets',
    'permission_callback' => 'stratos_api_permission_check',
  ) );

  register_rest_route( 'stratos/v1', '/tickets/(?P<id>\d+)', array(
    'methods'             => 'PUT',
    'callback'            => 'stratos_api_update_ticket',
    'permission_callback' => 'stratos_api_permission_check',
  ) );
});

function stratos_api_permission_check() {
  $api_key = defined( 'STRATOS_API_KEY' ) ? STRATOS_API_KEY : '';
  $header_key = isset( $_SERVER['HTTP_X_STRATOS_API_KEY'] ) ? sanitize_text_field( wp_unslash( $_SERVER['HTTP_X_STRATOS_API_KEY'] ) ) : '';
  if ( $api_key && $header_key === $api_key ) {
    return true;
  }
  return current_user_can( 'manage_options' );
}

function stratos_api_create_ticket( WP_REST_Request $request ) {
  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';

  $params = $request->get_json_params();
  if ( ! $params ) {
    $params = $request->get_body_params();
  }

  $required = array( 'name', 'email', 'department', 'category', 'priority', 'subject', 'description' );
  $missing = array();
  foreach ( $required as $field ) {
    if ( empty( $params[ $field ] ) ) {
      $missing[] = $field;
    }
  }
  if ( ! empty( $missing ) ) {
    return new WP_Error( 'missing_fields', 'Missing required fields: ' . implode( ', ', $missing ), array( 'status' => 400 ) );
  }

  if ( ! is_email( $params['email'] ) ) {
    return new WP_Error( 'invalid_email', 'Invalid email address', array( 'status' => 400 ) );
  }

  $valid_priorities = array( 'Low', 'Medium', 'High', 'Critical' );
  if ( ! in_array( $params['priority'], $valid_priorities, true ) ) {
    return new WP_Error( 'invalid_priority', 'Priority must be one of: ' . implode( ', ', $valid_priorities ), array( 'status' => 400 ) );
  }

  $valid_categories = array( 'Hardware', 'Software', 'Network', 'Email & Comms', 'Access & Permissions', 'Other' );
  if ( ! in_array( $params['category'], $valid_categories, true ) ) {
    return new WP_Error( 'invalid_category', 'Category must be one of: ' . implode( ', ', $valid_categories ), array( 'status' => 400 ) );
  }

  $ticket_number = stratos_generate_ticket_number();

  $inserted = $wpdb->insert( $table, array(
    'ticket_number' => $ticket_number,
    'name'          => sanitize_text_field( $params['name'] ),
    'email'         => sanitize_email( $params['email'] ),
    'phone'         => isset( $params['phone'] ) ? sanitize_text_field( $params['phone'] ) : '',
    'department'    => sanitize_text_field( $params['department'] ),
    'category'      => sanitize_text_field( $params['category'] ),
    'priority'      => sanitize_text_field( $params['priority'] ),
    'subject'       => sanitize_text_field( $params['subject'] ),
    'description'   => sanitize_textarea_field( $params['description'] ),
    'attachment'    => '',
    'google_name'   => isset( $params['google_name'] ) ? sanitize_text_field( $params['google_name'] ) : '',
    'google_email'  => isset( $params['google_email'] ) ? sanitize_email( $params['google_email'] ) : '',
    'google_avatar' => isset( $params['google_avatar'] ) ? esc_url_raw( $params['google_avatar'] ) : '',
    'status'        => 'Open',
  ), array( '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s' ) );

  if ( ! $inserted ) {
    return new WP_Error( 'db_error', 'Failed to create ticket', array( 'status' => 500 ) );
  }

  $ticket_id = $wpdb->insert_id;

  $admin_email = get_option( 'admin_email' );
  $subject = "[Stratos IT Support] New Ticket #{$ticket_number} — " . sanitize_text_field( $params['subject'] );
  $body  = "A new IT support ticket has been submitted.\n\n";
  $body .= "Ticket #:   {$ticket_number}\n";
  $body .= "Name:       " . sanitize_text_field( $params['name'] ) . "\n";
  $body .= "Email:      " . sanitize_email( $params['email'] ) . "\n";
  $body .= "Phone:      " . ( isset( $params['phone'] ) ? sanitize_text_field( $params['phone'] ) : 'N/A' ) . "\n";
  $body .= "Department: " . sanitize_text_field( $params['department'] ) . "\n";
  $body .= "Category:   " . sanitize_text_field( $params['category'] ) . "\n";
  $body .= "Priority:   " . sanitize_text_field( $params['priority'] ) . "\n";
  $body .= "Subject:    " . sanitize_text_field( $params['subject'] ) . "\n";
  $body .= "Description:\n" . sanitize_textarea_field( $params['description'] ) . "\n";
  wp_mail( $admin_email, $subject, $body, array( 'Content-Type: text/plain; charset=UTF-8' ) );

  $confirm_subject = "Your IT Support Ticket #{$ticket_number} — Stratos Security";
  $confirm_body  = "Hi " . sanitize_text_field( $params['name'] ) . ",\n\n";
  $confirm_body .= "Thank you for contacting our IT Support team.\n\n";
  $confirm_body .= "Your ticket reference number is: {$ticket_number}\n";
  $confirm_body .= "We will get back to you within 4 business hours.\n\n";
  $confirm_body .= "Stratos Security IT Support\n" . home_url() . "\n";
  wp_mail( sanitize_email( $params['email'] ), $confirm_subject, $confirm_body, array( 'Content-Type: text/plain; charset=UTF-8' ) );

  return rest_ensure_response( array(
    'success'       => true,
    'ticket_id'     => $ticket_id,
    'ticket_number' => $ticket_number,
    'status'        => 'Open',
    'message'       => 'Ticket created successfully',
  ) );
}

function stratos_api_get_ticket( WP_REST_Request $request ) {
  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';
  $id = intval( $request['id'] );
  $ticket = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE id = %d", $id ), ARRAY_A );
  if ( ! $ticket ) {
    return new WP_Error( 'not_found', 'Ticket not found', array( 'status' => 404 ) );
  }
  return rest_ensure_response( $ticket );
}

function stratos_api_list_tickets( WP_REST_Request $request ) {
  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';

  $where = '1=1';
  $values = array();

  if ( $request->get_param( 'status' ) ) {
    $where .= ' AND status = %s';
    $values[] = sanitize_text_field( $request->get_param( 'status' ) );
  }
  if ( $request->get_param( 'email' ) ) {
    $where .= ' AND email = %s';
    $values[] = sanitize_email( $request->get_param( 'email' ) );
  }
  if ( $request->get_param( 'category' ) ) {
    $where .= ' AND category = %s';
    $values[] = sanitize_text_field( $request->get_param( 'category' ) );
  }
  if ( $request->get_param( 'priority' ) ) {
    $where .= ' AND priority = %s';
    $values[] = sanitize_text_field( $request->get_param( 'priority' ) );
  }

  $per_page = min( intval( $request->get_param( 'per_page' ) ) ?: 20, 100 );
  $page = max( intval( $request->get_param( 'page' ) ) ?: 1, 1 );
  $offset = ( $page - 1 ) * $per_page;

  if ( ! empty( $values ) ) {
    $total = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $table WHERE $where", $values ) );
    $tickets = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table WHERE $where ORDER BY created_at DESC LIMIT %d OFFSET %d", array_merge( $values, array( $per_page, $offset ) ) ), ARRAY_A );
  } else {
    $total = $wpdb->get_var( "SELECT COUNT(*) FROM $table" );
    $tickets = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table ORDER BY created_at DESC LIMIT %d OFFSET %d", $per_page, $offset ), ARRAY_A );
  }

  return rest_ensure_response( array(
    'total'     => intval( $total ),
    'page'      => $page,
    'per_page'  => $per_page,
    'tickets'   => $tickets ?: array(),
  ) );
}

function stratos_api_update_ticket( WP_REST_Request $request ) {
  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';
  $id = intval( $request['id'] );

  $ticket = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE id = %d", $id ), ARRAY_A );
  if ( ! $ticket ) {
    return new WP_Error( 'not_found', 'Ticket not found', array( 'status' => 404 ) );
  }

  $params = $request->get_json_params();
  if ( ! $params ) {
    $params = $request->get_body_params();
  }

  $allowed_statuses = array( 'Open', 'In Progress', 'Resolved', 'Closed' );
  $data = array();
  $formats = array();

  $updatable = array(
    'status'      => 'sanitize_text_field',
    'priority'    => 'sanitize_text_field',
    'category'    => 'sanitize_text_field',
    'department'  => 'sanitize_text_field',
    'subject'     => 'sanitize_text_field',
    'description' => 'sanitize_textarea_field',
    'phone'       => 'sanitize_text_field',
  );

  foreach ( $updatable as $field => $sanitizer ) {
    if ( isset( $params[ $field ] ) ) {
      if ( $field === 'status' && ! in_array( $params['status'], $allowed_statuses, true ) ) {
        return new WP_Error( 'invalid_status', 'Status must be one of: ' . implode( ', ', $allowed_statuses ), array( 'status' => 400 ) );
      }
      if ( $field === 'priority' ) {
        $valid_priorities = array( 'Low', 'Medium', 'High', 'Critical' );
        if ( ! in_array( $params['priority'], $valid_priorities, true ) ) {
          return new WP_Error( 'invalid_priority', 'Priority must be one of: ' . implode( ', ', $valid_priorities ), array( 'status' => 400 ) );
        }
      }
      if ( $field === 'category' ) {
        $valid_categories = array( 'Hardware', 'Software', 'Network', 'Email & Comms', 'Access & Permissions', 'Other' );
        if ( ! in_array( $params['category'], $valid_categories, true ) ) {
          return new WP_Error( 'invalid_category', 'Category must be one of: ' . implode( ', ', $valid_categories ), array( 'status' => 400 ) );
        }
      }
      $data[ $field ] = call_user_func( $sanitizer, wp_unslash( $params[ $field ] ) );
      $formats[] = '%s';
    }
  }

  if ( empty( $data ) ) {
    return new WP_Error( 'no_data', 'No valid fields to update', array( 'status' => 400 ) );
  }

  $data['updated_at'] = current_time('mysql');
  $formats[] = '%s';

  $updated = $wpdb->update( $table, $data, array( 'id' => $id ), $formats, array( '%d' ) );

  if ( $updated === false ) {
    return new WP_Error( 'db_error', 'Failed to update ticket', array( 'status' => 500 ) );
  }

  $updated_ticket = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE id = %d", $id ), ARRAY_A );

  return rest_ensure_response( array(
    'success' => true,
    'message' => 'Ticket updated successfully',
    'ticket'  => $updated_ticket,
  ) );
}

/* ---------- Frontend Form Handler ---------- */
add_action( 'admin_post_stratos_submit_ticket',        'stratos_handle_ticket_submission' );
add_action( 'admin_post_nopriv_stratos_submit_ticket', 'stratos_handle_ticket_submission' );

function stratos_handle_ticket_submission() {
  if ( ! isset( $_POST['stratos_ticket_nonce'] )
    || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['stratos_ticket_nonce'] ) ), 'stratos_submit_ticket' )
  ) {
    wp_die( 'Security check failed.', 'Error', array( 'response' => 403 ) );
  }

  $redirect = isset( $_POST['redirect_url'] )
    ? esc_url_raw( wp_unslash( $_POST['redirect_url'] ) )
    : home_url( '/support/' );

  $required = array( 'ticket_name', 'ticket_email', 'ticket_department', 'ticket_category', 'ticket_priority', 'ticket_subject', 'ticket_description' );
  foreach ( $required as $field ) {
    if ( empty( $_POST[ $field ] ) ) {
      wp_safe_redirect( add_query_arg( 'ticket_status', 'error', $redirect ) );
      exit;
    }
  }

  $email = sanitize_email( wp_unslash( $_POST['ticket_email'] ) );
  if ( ! is_email( $email ) ) {
    wp_safe_redirect( add_query_arg( 'ticket_status', 'error', $redirect ) );
    exit;
  }

  global $wpdb;
  $table = $wpdb->prefix . 'stratos_tickets';
  $ticket_number = stratos_generate_ticket_number();

  $attachment_path = '';
  if ( ! empty( $_FILES['ticket_attachment']['name'] ) ) {
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';
    $upload = wp_handle_upload( $_FILES['ticket_attachment'], array( 'test_form' => false ) );
    if ( ! isset( $upload['error'] ) ) {
      $attachment_path = $upload['url'];
    }
  }

  $inserted = $wpdb->insert( $table, array(
    'ticket_number' => $ticket_number,
    'name'          => sanitize_text_field( wp_unslash( $_POST['ticket_name'] ) ),
    'email'         => $email,
    'phone'         => isset( $_POST['ticket_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['ticket_phone'] ) ) : '',
    'department'    => sanitize_text_field( wp_unslash( $_POST['ticket_department'] ) ),
    'category'      => sanitize_text_field( wp_unslash( $_POST['ticket_category'] ) ),
    'priority'      => sanitize_text_field( wp_unslash( $_POST['ticket_priority'] ) ),
    'subject'       => sanitize_text_field( wp_unslash( $_POST['ticket_subject'] ) ),
    'description'   => sanitize_textarea_field( wp_unslash( $_POST['ticket_description'] ) ),
    'attachment'    => $attachment_path,
    'google_name'   => isset( $_POST['google_name'] ) ? sanitize_text_field( wp_unslash( $_POST['google_name'] ) ) : '',
    'google_email'  => isset( $_POST['google_email'] ) ? sanitize_email( wp_unslash( $_POST['google_email'] ) ) : '',
    'google_avatar' => isset( $_POST['google_avatar'] ) ? esc_url_raw( wp_unslash( $_POST['google_avatar'] ) ) : '',
    'status'        => 'Open',
  ), array( '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s' ) );

  if ( ! $inserted ) {
    wp_safe_redirect( add_query_arg( 'ticket_status', 'error', $redirect ) );
    exit;
  }

  $name = sanitize_text_field( wp_unslash( $_POST['ticket_name'] ) );
  $admin_email = get_option( 'admin_email' );
  $subject = "[Stratos IT Support] New Ticket #{$ticket_number} — " . sanitize_text_field( wp_unslash( $_POST['ticket_subject'] ) );
  $body  = "A new IT support ticket has been submitted.\n\n";
  $body .= "Ticket #:   {$ticket_number}\n";
  $body .= "Name:       {$name}\n";
  $body .= "Email:      {$email}\n";
  $body .= "Department: " . sanitize_text_field( wp_unslash( $_POST['ticket_department'] ) ) . "\n";
  $body .= "Category:   " . sanitize_text_field( wp_unslash( $_POST['ticket_category'] ) ) . "\n";
  $body .= "Priority:   " . sanitize_text_field( wp_unslash( $_POST['ticket_priority'] ) ) . "\n";
  $body .= "Subject:    " . sanitize_text_field( wp_unslash( $_POST['ticket_subject'] ) ) . "\n";
  $body .= "Description:\n" . sanitize_textarea_field( wp_unslash( $_POST['ticket_description'] ) ) . "\n";
  wp_mail( $admin_email, $subject, $body, array( 'Content-Type: text/plain; charset=UTF-8' ) );

  $confirm_subject = "Your IT Support Ticket #{$ticket_number} — Stratos Security";
  $confirm_body  = "Hi {$name},\n\n";
  $confirm_body .= "Thank you for contacting our IT Support team.\n\n";
  $confirm_body .= "Your ticket reference number is: {$ticket_number}\n";
  $confirm_body .= "We will get back to you within 4 business hours.\n\n";
  $confirm_body .= "Stratos Security IT Support\n" . home_url() . "\n";
  wp_mail( $email, $confirm_subject, $confirm_body, array( 'Content-Type: text/plain; charset=UTF-8' ) );

  wp_safe_redirect( add_query_arg( 'ticket_status', 'success', $redirect ) . '#support-form' );
  exit;
}
