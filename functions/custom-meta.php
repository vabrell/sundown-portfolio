<?php

/**
 * Theme custom post meta
 */


/**
 * Register boxes
 */

function sundown_register_meta_boxes()
{
  // Education
  add_meta_box(
    'sundown_education',
    __('Education', 'sundown'),
    'sundown_education_markup',
    'education'
  );

  // Employment
  add_meta_box(
    'sundown_employment',
    __('Employment', 'sundown'),
    'sundown_employment_markup',
    'employment'
  );

  // Project
  add_meta_box(
    'sundown_project',
    __('Project', 'sundown'),
    'sundown_project_markup',
    'project'
  );

  // Skill
  add_meta_box(
    'sundown_skill',
    __('Skill', 'sundown'),
    'sundown_skill_markup',
    'skill'
  );

  // Profile
  if (get_page_template_slug() === 'template-about.php') {
    add_meta_box(
      'sundown_profile',
      __('Profile', 'sundown'),
      'sundown_profile_markup',
      'page'
    );
  }
}

/**
 * Defaults
 */

function sundown_education_defaults()
{
  return [
    'title' => '',
    'start' => '',
    'end' => '',
    'description' => ''
  ];
}

function sundown_employment_defaults()
{
  return [
    'title' => '',
    'start' => '',
    'end' => '',
    'description' => ''
  ];
}

function sundown_project_defaults()
{
  return [
    'title' => '',
    'description' => '',
    'github' => '',
    'preview' => '',
  ];
}

function sundown_skill_defaults()
{
  return [
    'title' => '',
    'icon' => 'mdi-angular',
    'progress' => '',
  ];
}

function sundown_profile_defaults() {
  return [
    'summary' => '',
    'name' => '',
    'location' => '',
    'dob' => '',
    'job' => '',
    'email' => '',
    'skill_summary' => ''
  ];
}

/**
 * Markup
 */

// Education markup
function sundown_education_markup($post)
{

  $saved_data = get_post_meta($post->ID, 'sundown_education', true);
  $defaults = sundown_education_defaults();
  $details = wp_parse_args($saved_data, $defaults);

  ?>

  <fieldset>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Education', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_education[title]" class="input" value="<?php echo esc_attr($details['title']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Start', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_education[start]" class="input" value="<?php echo esc_attr($details['start']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('End', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_education[end]" class="input" value="<?php echo esc_attr($details['end']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Description', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <textarea name="sundown_education[description]" class="textarea"><?php echo esc_attr($details['description']); ?></textarea>
      </div>
    </div>

  </fieldset>

<?php

  // Security field
  wp_nonce_field('sundown_form_metabox_nonce', 'sundown_form_metabox_process');
}

// Employment markup
function sundown_employment_markup($post)
{

  $saved_data = get_post_meta($post->ID, 'sundown_employment', true);
  $defaults = sundown_employment_defaults();
  $details = wp_parse_args($saved_data, $defaults);

  ?>

  <fieldset>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Employment', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_employment[title]" class="input" value="<?php echo esc_attr($details['title']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Start', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_employment[start]" class="input" value="<?php echo esc_attr($details['start']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('End', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_employment[end]" class="input" value="<?php echo esc_attr($details['end']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Description', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <textarea name="sundown_employment[description]" class="textarea"><?php echo esc_attr($details['description']); ?></textarea>
      </div>
    </div>

  </fieldset>

<?php

  // Security field
  wp_nonce_field('sundown_form_metabox_nonce', 'sundown_form_metabox_process');
}

// Project markup
function sundown_project_markup($post)
{

  $saved_data = get_post_meta($post->ID, 'sundown_project', true);
  $defaults = sundown_project_defaults();
  $details = wp_parse_args($saved_data, $defaults);

  ?>

  <fieldset>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Project', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_project[title]" class="input" value="<?php echo esc_attr($details['title']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Description', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <textarea name="sundown_project[description]" class="textarea is-grey"><?php echo esc_attr($details['description']); ?></textarea>
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Github URL', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="url" name="sundown_project[github]" class="input" value="<?php echo esc_attr($details['github']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Preview URL', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="url" name="sundown_project[preview]" class="input" value="<?php echo esc_attr($details['preview']); ?>">
      </div>
    </div>

  </fieldset>

<?php

  // Security field
  wp_nonce_field('sundown_form_metabox_nonce', 'sundown_form_metabox_process');
}

// Skill markup
function sundown_skill_markup($post)
{

  $saved_data = get_post_meta($post->ID, 'sundown_skill', true);
  $defaults = sundown_skill_defaults();
  $details = wp_parse_args($saved_data, $defaults);

  wp_enqueue_script('sundown_skill_editor', get_template_directory_uri() . '/js/skill-editor.js');

  function is_selected($icon, $set_icon) {
    

    return '';
  }

  $skill_list = [
    'HTML5'       => 'mdi-language-html5',
    'CSS3'        => 'mdi-language-css3',
    'Bootstrap'   => 'mdi-bootstrap',
    'Sass'        => 'mdi-sass',
    'JavaScript'  => 'mdi-language-javascript',
    'Angular'     => 'mdi-angularjs',
    'React'       => 'mdi-react',
    'VueJS'       => 'mdi-vuejs',
    'Vuetify'     => 'mdi-vuetify',
    'jQuery'      => 'mdi-jquery',
    'C'           => 'mdi-language-c',
    'C++'         => 'mdi-language-cpp',
    'C#'          => 'mdi-language-csharp',
    'GO'          => 'mdi-language-go',
    'PHP'         => 'mdi-language-php',
    'Drupal'      => 'mdi-drupal',
    'Laravel'     => 'mdi-laravel',
    'WordPress'   => 'mdi-wordpress',
    'Haskell'     => 'mdi-language-haskell',
    'Lua'         => 'mdi-language-lua',
    'Java'        => 'mdi-language-java',
    'Python'      => 'mdi-language-python',
    'Swift'       => 'mdi-language-swift',
    'R'           => 'mdi-language-r',
    'Ruby'        => 'mdi-language-ruby',
    'TypeScript'  => 'mdi-language-typescript',
    'PowerShell'  => 'mdi-powershell'
  ];

  ksort($skill_list);

  function render_skill_list(Array $skill_list, $details) {
    
    $option_list = '';

    foreach ($skill_list as $name => $icon) {

      $icon === $details['icon'] 
        ? $is_selected = 'selected'
        : $is_selected = '';

      $option_list .= "<option value='$icon' $is_selected>$name</option>";
    }

    return $option_list;
  }

  ?>

  <fieldset>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Skill', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <input type="text" name="sundown_skill[title]" class="input" value="<?php echo esc_attr($details['title']); ?>">
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Icon', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <div class="control has-icons-left">
          <div class="select">
            <select id="iconSelect" name="sundown_skill[icon]">
              <?php 
                echo render_skill_list($skill_list, $details);
              ?>
            </select>
          </div>
          <span class="icon is-left is-medium has-text-primary">
            <i id="selectIcon" class="mdi mdi-24px <?php echo $details['icon']; ?>"></i>
          </span>
        </div>
      </div>
    </div>

    <div class="field">
      <div class="field-label has-text-left">
        <label class="label"><?php _e('Progress', 'sundown'); ?></label>
      </div>
      <div class="field-body">
        <div class="control has-icons-left">
          <input type="number" min="0" max="100" name="sundown_skill[progress]" class="input" value="<?php echo esc_attr($details['progress']); ?>">
          <span class="icon is-left has-text-primary">%</span>
        </div>
      </div>
    </div>

  </fieldset>

<?php

  // Security field
  wp_nonce_field('sundown_form_metabox_nonce', 'sundown_form_metabox_process');
}

// Profile markup
function sundown_profile_markup($post) {
  $saved_data = get_post_meta($post->ID, 'sundown_profile', true);
  $defaults = sundown_profile_defaults();
  $details = wp_parse_args($saved_data, $defaults);
  ?>

  <fieldset>

  <div class="field">
    <div class="field-label has-text-left">
      <label class="label"><?php _e('Short description about me', 'sundown'); ?></label>
    </div>
    <div class="field-body">
      <textarea name="sundown_profile[summary]" class="textarea"><?php echo esc_attr($details['summary']); ?></textarea>
    </div>
  </div>

  <div class="field">
    <div class="field-label has-text-left">
      <label class="label"><?php _e('Name', 'sundown'); ?></label>
    </div>
    <div class="field-body">
      <input class="input" type="text" name="sundown_profile[name]" value="<?php echo esc_attr($details['name']); ?>">
    </div>
  </div>

  <div class="field">
    <div class="field-label has-text-left">
      <label class="label"><?php _e('Current location', 'sundown'); ?></label>
    </div>
    <div class="field-body">
      <input class="input" type="text" name="sundown_profile[location]" value="<?php echo esc_attr($details['location']); ?>">
    </div>
  </div>

  <div class="field">
    <div class="field-label has-text-left">
      <label class="label"><?php _e('Date of birth', 'sundown'); ?></label>
    </div>
    <div class="field-body">
      <input class="input" type="text" name="sundown_profile[dob]" value="<?php echo esc_attr($details['dob']); ?>">
    </div>
  </div>

  <div class="field">
    <div class="field-label has-text-left">
      <label class="label"><?php _e('Current job', 'sundown'); ?></label>
    </div>
    <div class="field-body">
      <input class="input" type="text" name="sundown_profile[job]" value="<?php echo esc_attr($details['job']); ?>">
    </div>
  </div>

  <div class="field">
    <div class="field-label has-text-left">
      <label class="label"><?php _e('E-mail', 'sundown'); ?></label>
    </div>
    <div class="field-body">
      <input class="input" type="text" name="sundown_profile[email]" value="<?php echo esc_attr($details['email']); ?>">
    </div>
  </div>


  <div class="field">
    <div class="field-label has-text-left">
      <label class="label"><?php _e('Short description of my skills', 'sundown'); ?></label>
    </div>
    <div class="field-body">
      <textarea name="sundown_profile[skill_summary]" class="textarea"><?php echo esc_attr($details['skill_summary']); ?></textarea>
    </div>
  </div>

  </fieldset>

  <?php
  // Security field
  wp_nonce_field('sundown_form_metabox_nonce', 'sundown_form_metabox_process');
}

/**
 * Save data
 */

// Education save
function sundown_save_education($post_id, $post)
{

  // Verify that our security field exists. If not, bail.
  if (!isset($_POST['sundown_form_metabox_process'])) return;

  // Verify data came from edit/dashboard screen
  if (!wp_verify_nonce($_POST['sundown_form_metabox_process'], 'sundown_form_metabox_nonce')) {
    return $post->ID;
  }
  // Verify user has permission to edit post
  if (!current_user_can('edit_post', $post->ID)) {
    return $post->ID;
  }

  // Check that our custom fields are being passed along
  // This is the `name` value array. We can grab all
  // of the fields and their values at once.
  if (!isset($_POST['sundown_education'])) {
    return $post->ID;
  }
  /**
   * Sanitize all data
   * This keeps malicious code out of our database.
   */
  // Set up an empty array
  $sanitized = array();
  // Loop through each of our fields

  foreach ($_POST['sundown_education'] as $key => $detail) {
    // Sanitize the data and push it to our new array
    // `wp_filter_post_kses` strips our dangerous server values
    // and allows through anything you can include a post.
    $sanitized[$key] = wp_filter_post_kses($detail);
  }
  // Save our submissions to the database
  update_post_meta($post->ID, 'sundown_education', $sanitized);
}

// Employment save
function sundown_save_employment($post_id, $post)
{

  // Verify that our security field exists. If not, bail.
  if (!isset($_POST['sundown_form_metabox_process'])) return;

  // Verify data came from edit/dashboard screen
  if (!wp_verify_nonce($_POST['sundown_form_metabox_process'], 'sundown_form_metabox_nonce')) {
    return $post->ID;
  }
  // Verify user has permission to edit post
  if (!current_user_can('edit_post', $post->ID)) {
    return $post->ID;
  }

  // Check that our custom fields are being passed along
  // This is the `name` value array. We can grab all
  // of the fields and their values at once.
  if (!isset($_POST['sundown_employment'])) {
    return $post->ID;
  }
  /**
   * Sanitize all data
   * This keeps malicious code out of our database.
   */
  // Set up an empty array
  $sanitized = array();
  // Loop through each of our fields

  foreach ($_POST['sundown_employment'] as $key => $detail) {
    // Sanitize the data and push it to our new array
    // `wp_filter_post_kses` strips our dangerous server values
    // and allows through anything you can include a post.
    $sanitized[$key] = wp_filter_post_kses($detail);
  }
  // Save our submissions to the database
  update_post_meta($post->ID, 'sundown_employment', $sanitized);
}

// Projekt save
function sundown_save_project($post_id, $post)
{

  // Verify that our security field exists. If not, bail.
  if (!isset($_POST['sundown_form_metabox_process'])) return;

  // Verify data came from edit/dashboard screen
  if (!wp_verify_nonce($_POST['sundown_form_metabox_process'], 'sundown_form_metabox_nonce')) {
    return $post->ID;
  }
  // Verify user has permission to edit post
  if (!current_user_can('edit_post', $post->ID)) {
    return $post->ID;
  }

  // Check that our custom fields are being passed along
  // This is the `name` value array. We can grab all
  // of the fields and their values at once.
  if (!isset($_POST['sundown_project'])) {
    return $post->ID;
  }
  /**
   * Sanitize all data
   * This keeps malicious code out of our database.
   */
  // Set up an empty array
  $sanitized = array();
  // Loop through each of our fields

  foreach ($_POST['sundown_project'] as $key => $detail) {
    // Sanitize the data and push it to our new array
    // `wp_filter_post_kses` strips our dangerous server values
    // and allows through anything you can include a post.
    $sanitized[$key] = wp_filter_post_kses($detail);
  }
  // Save our submissions to the database
  update_post_meta($post->ID, 'sundown_project', $sanitized);
}

// Skill save
function sundown_save_skill($post_id, $post)
{

  // Verify that our security field exists. If not, bail.
  if (!isset($_POST['sundown_form_metabox_process'])) return;

  // Verify data came from edit/dashboard screen
  if (!wp_verify_nonce($_POST['sundown_form_metabox_process'], 'sundown_form_metabox_nonce')) {
    return $post->ID;
  }
  // Verify user has permission to edit post
  if (!current_user_can('edit_post', $post->ID)) {
    return $post->ID;
  }

  // Check that our custom fields are being passed along
  // This is the `name` value array. We can grab all
  // of the fields and their values at once.
  if (!isset($_POST['sundown_skill'])) {
    return $post->ID;
  }
  /**
   * Sanitize all data
   * This keeps malicious code out of our database.
   */
  // Set up an empty array
  $sanitized = array();
  // Loop through each of our fields

  foreach ($_POST['sundown_skill'] as $key => $detail) {
    // Sanitize the data and push it to our new array
    // `wp_filter_post_kses` strips our dangerous server values
    // and allows through anything you can include a post.
    $sanitized[$key] = wp_filter_post_kses($detail);
  }
  // Save our submissions to the database
  update_post_meta($post->ID, 'sundown_skill', $sanitized);
}

// Profile save
function sundown_save_profile($post_id, $post)
{

  // Verify that our security field exists. If not, bail.
  if (!isset($_POST['sundown_form_metabox_process'])) return;

  // Verify data came from edit/dashboard screen
  if (!wp_verify_nonce($_POST['sundown_form_metabox_process'], 'sundown_form_metabox_nonce')) {
    return $post->ID;
  }
  // Verify user has permission to edit post
  if (!current_user_can('edit_post', $post->ID)) {
    return $post->ID;
  }

  // Check that our custom fields are being passed along
  // This is the `name` value array. We can grab all
  // of the fields and their values at once.
  if (!isset($_POST['sundown_profile'])) {
    return $post->ID;
  }
  /**
   * Sanitize all data
   * This keeps malicious code out of our database.
   */
  // Set up an empty array
  $sanitized = array();
  // Loop through each of our fields

  foreach ($_POST['sundown_profile'] as $key => $detail) {
    // Sanitize the data and push it to our new array
    // `wp_filter_post_kses` strips our dangerous server values
    // and allows through anything you can include a post.
    $sanitized[$key] = wp_filter_post_kses($detail);
  }
  // Save our submissions to the database
  update_post_meta($post->ID, 'sundown_profile', $sanitized);
}
