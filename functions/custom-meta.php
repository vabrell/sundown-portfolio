<?php

/**
 * Theme custom post meta
 */


/**
 * Register boxes
 */

function sundown_register_meta_boxes() {
  // Education
  add_meta_box(
    'sundown_education',
    __('Education'),
    'sundown_education_markup',
    'education'
  );

  // Education
  add_meta_box(
    'sundown_employment',
    __('Employment'),
    'sundown_employment_markup',
    'employment'
  );
}

/**
 * Defaults
 */

function sundown_education_defaults() {
  return [
    'title' => '',
    'start' => '',
    'end' => '',
    'description' => ''
  ];
}

function sundown_employment_defaults() {
  return [
    'title' => '',
    'start' => '',
    'end' => '',
    'description' => ''
  ];
}

/**
 * Markup
 */

function sundown_education_markup($post) {
  
  $saved_data = get_post_meta($post->ID, 'sundown_education', true);
  $defaults = sundown_education_defaults();
  $details = wp_parse_args($saved_data, $defaults);

  ?>

  <fieldset>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('Education'); ?></label>
      </div>
      <div class="field-body">
        <input type="text"
              name="sundown_education[title]"
              class="input"
              value="<?php echo esc_attr($details['title']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('Start'); ?></label>
      </div>
      <div class="field-body">
        <input type="text"
              name="sundown_education[start]"
              class="input"
              value="<?php echo esc_attr($details['start']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('End'); ?></label>
      </div>
      <div class="field-body">
        <input type="text"
              name="sundown_education[end]"
              class="input"
              value="<?php echo esc_attr($details['end']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('Description'); ?></label>
      </div>
      <div class="field-body">
        <textarea name="sundown_education[description]" class="textarea"><?php echo esc_attr($details['description']); ?></textarea>
      </div>
    </div>


  </fieldset>

  <?php

  // Security field
  wp_nonce_field( 'sundown_form_metabox_nonce', 'sundown_form_metabox_process' );
}

function sundown_employment_markup($post) {
  
  $saved_data = get_post_meta($post->ID, 'sundown_employment', true);
  $defaults = sundown_education_defaults();
  $details = wp_parse_args($saved_data, $defaults);

  ?>

  <fieldset>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('Employment'); ?></label>
      </div>
      <div class="field-body">
        <input type="text"
              name="sundown_employment[title]"
              class="input"
              value="<?php echo esc_attr($details['title']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('Start'); ?></label>
      </div>
      <div class="field-body">
        <input type="text"
              name="sundown_employment[start]"
              class="input"
              value="<?php echo esc_attr($details['start']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('End'); ?></label>
      </div>
      <div class="field-body">
        <input type="text"
              name="sundown_employment[end]"
              class="input"
              value="<?php echo esc_attr($details['end']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php echo __('Description'); ?></label>
      </div>
      <div class="field-body">
        <textarea name="sundown_employment[description]" class="textarea"><?php echo esc_attr($details['description']); ?></textarea>
      </div>
    </div>


  </fieldset>

  <?php

  // Security field
  wp_nonce_field( 'sundown_form_metabox_nonce', 'sundown_form_metabox_process' );
}

/**
 * Save data
 */

function sundown_save_education( $post_id, $post ) {

  // Verify that our security field exists. If not, bail.
  if ( !isset( $_POST['sundown_form_metabox_process'] ) ) return;

  // Verify data came from edit/dashboard screen
  if ( !wp_verify_nonce( $_POST['sundown_form_metabox_process'], 'sundown_form_metabox_nonce' ) ) {
    return $post->ID;
  }
  // Verify user has permission to edit post
  if ( !current_user_can( 'edit_post', $post->ID )) {
    return $post->ID;
  }
  
  // Check that our custom fields are being passed along
  // This is the `name` value array. We can grab all
  // of the fields and their values at once.
  if ( !isset( $_POST['sundown_education'] ) ) {
    return $post->ID;
  }
  /**
   * Sanitize all data
   * This keeps malicious code out of our database.
   */
  // Set up an empty array
  $sanitized = array();
  // Loop through each of our fields

  foreach ( $_POST['sundown_education'] as $key => $detail ) {
    // Sanitize the data and push it to our new array
    // `wp_filter_post_kses` strips our dangerous server values
    // and allows through anything you can include a post.
    $sanitized[$key] = wp_filter_post_kses( $detail );
  }
  // Save our submissions to the database
  update_post_meta( $post->ID, 'sundown_education', $sanitized );
}

function sundown_save_employment( $post_id, $post ) {

  // Verify that our security field exists. If not, bail.
  if ( !isset( $_POST['sundown_form_metabox_process'] ) ) return;

  // Verify data came from edit/dashboard screen
  if ( !wp_verify_nonce( $_POST['sundown_form_metabox_process'], 'sundown_form_metabox_nonce' ) ) {
    return $post->ID;
  }
  // Verify user has permission to edit post
  if ( !current_user_can( 'edit_post', $post->ID )) {
    return $post->ID;
  }
  
  // Check that our custom fields are being passed along
  // This is the `name` value array. We can grab all
  // of the fields and their values at once.
  if ( !isset( $_POST['sundown_employment'] ) ) {
    return $post->ID;
  }
  /**
   * Sanitize all data
   * This keeps malicious code out of our database.
   */
  // Set up an empty array
  $sanitized = array();
  // Loop through each of our fields

  foreach ( $_POST['sundown_employment'] as $key => $detail ) {
    // Sanitize the data and push it to our new array
    // `wp_filter_post_kses` strips our dangerous server values
    // and allows through anything you can include a post.
    $sanitized[$key] = wp_filter_post_kses( $detail );
  }
  // Save our submissions to the database
  update_post_meta( $post->ID, 'sundown_employment', $sanitized );
}