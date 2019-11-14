<?php
/**
 * Template Name: CV
 */

get_header();
?>

<div class="container">
  <div class="tabs is-centered is-small">
    <ul>
      <li role="button" data-target="work" class="is-active">
        <a>
          <span class="icon is-small">
            <i class="mdi mdi-24px mdi-briefcase"></i>
          </span>
          <span class="is-size-7"><?php echo __('Employments'); ?></span>
        </a>
      </li>
      <li role="button" data-target="education">
        <a>
          <span class="icon is-small">
            <i class="mdi mdi-24px mdi-school"></i>
          </span>
          <span class="is-size-7"><?php echo _e('Education'); ?></span>
        </a>
      </li>
    </ul>
  </div>
</div>

<section id="work" class="section">
  <div class="container">
    <div class="timeline is-centered">

    <?php
    $employments = new WP_query([
      'post_type' => 'employment'
    ]);

    if ($employments->have_posts()) {
      while ($employments->have_posts()) {
        $employments->the_post();
      
        $post_meta = get_post_meta(get_the_ID(), 'sundown_employment', true);

        if (!empty($post_meta['end'])) {
          $end = ' - ' . $post_meta['end'];
          $color = 'is-primary';
        } else {
          $end = '';
          $color = 'is-success';
        }
    ?>
      <div class="timeline-item">
        <div class="timeline-marker <?php echo $color; ?>"></div>
        <div class="timeline-content">
          <p class="heading">
            <?php echo $post_meta['title']; ?> <?php echo '[' . $post_meta['start'] . $end . ']'; ?>
          </p>
          <p>
            <?php
              echo $post_meta['description'];
            ?>
          </p>
        </div>
      </div>
    <?php
      }
    }

    wp_reset_postdata();
    ?>
    </div>
  </div>
</section>

<section id="education" class="section is-hidden">
    <div class="container">
      <div class="timeline is-centered">

      <?php
      $educations = new WP_query([
        'post_type' => 'education'
      ]);

      if ($educations->have_posts()) {
        while ($educations->have_posts()) {
          $educations->the_post();
        
          $post_meta = get_post_meta(get_the_ID(), 'sundown_education', true);

          if (!empty($post_meta['end'])) {
            $end = ' - ' . $post_meta['end'];
            $color = 'is-primary';
          } else {
            $end = '';
            $color = 'is-success';
          }
      ?>
        <div class="timeline-item">
          <div class="timeline-marker <?php echo $color; ?>"></div>
          <div class="timeline-content">
            <p class="heading">
              <?php echo $post_meta['title']; ?> <?php echo $post_meta['start'] . $end; ?>
            </p>
            <p>
              <?php
                echo $post_meta['description'];
              ?>
            </p>
          </div>
        </div>
      <?php
        }
      }

      wp_reset_postdata();
      ?>
      </div>
    </div>
  </section>

<?php
get_footer();