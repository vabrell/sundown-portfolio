<?php
/**
 * Template Name: About me
 */

get_header();
?>

<section class="section">
      <div class="columns">
        <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              $profile_meta = get_post_meta(get_the_ID(), 'sundown_profile', true);
              ?>
        <div class="column">

          <h1 class="title"><?php _e('Profile', 'sundown'); ?></h1>
          <p>
            <?php
              echo $profile_meta['summary'];
            ?>
          </p>
          <div class="section">
            <ul class="about-list">
              <li>
                <h2 class="title is-5"><?php _e('Name', 'sundown'); ?></h2>
                <h3 class="has-text-grey subtitle is-6">
                  <?php
                    echo $profile_meta['name'];
                  ?>
                </h3>
              </li>
              <li>
                <h2 class="title is-5"><?php _e('Current location', 'sundown'); ?></h2>
                <h3 class="has-text-grey subtitle is-6">
                  <?php
                    echo $profile_meta['location'];
                  ?>
                </h3>
              </li>
              <li>
                <h2 class="title is-5"><?php _e('Date of birth', 'sundown'); ?></h2>
                <h3 class="has-text-grey subtitle is-6">
                  <?php
                    echo $profile_meta['dob'];
                  ?>
                </h3>
              </li>
              <li>
                <h2 class="title is-5"><?php _e('Current job', 'sundown'); ?></h2>
                <h3 class="has-text-grey subtitle is-6">
                  <?php
                    echo $profile_meta['job'];
                  ?>
                </h3>
              </li>
              <li>
                <h2 class="title is-5"><?php _e('E-mail', 'sundown'); ?></h2>
                <h3 class="has-text-grey subtitle is-6">
                  <?php
                    echo $profile_meta['email'];
                  ?>
                </h3>
              </li>
            </ul>
          </div>
        </div>
        <div class="column">
          <h1 class="title"><?php _e('Skills', 'sundown'); ?></h1>
          <p>
            <?php
              echo $profile_meta['skill_summary'];
            ?>
          </p>
          <div class="section">
            <ul class="about-list">
              <?php
              $skills = new WP_query([
                'post_type' => 'skill',
                'posts_per_page' => -1,
                'orderby' => 'name',
                'order' => 'ASC'
              ]);

              if ($skills->have_posts()) {
                while ($skills->have_posts()) {
                  $skills->the_post();

                  $skill_meta = get_post_meta(get_the_ID(), 'sundown_skill', true);

                  $status = $skill_meta['progress'] > 50
                    ? 'is-success'
                    : 'is-warning';
                  ?>
              
              <li>
                <h2 class="title is-5">
                  <span class="icon is-medium">
                    <i class="mdi mdi-36px <?php echo $skill_meta['icon']; ?>"></i>
                  </span>
                  <?php echo $skill_meta['title']; ?>
                </h2>
                <progress
                  class="progress subtitle <?php echo $status; ?>"
                  value="<?php echo $skill_meta['progress']; ?>"
                  max="100"
                ></progress>
              </li>

                  <?php
                }
              }
              ?>
            </ul>
          </div>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </section>


<?php
get_footer();