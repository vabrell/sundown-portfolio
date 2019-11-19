<?php

/**
 * Template Name: Projects
 */

get_header();
?>

<section class="section">
  <div class="columns">

    <?php
    $projects = new WP_query([
      'post_type' => 'project'
    ]);

    if ($projects->have_posts()) {
      while ($projects->have_posts()) {
        $projects->the_post();

        $project_meta = get_post_meta(get_the_ID(), 'sundown_project', true);

        empty($project_meta['preview']) ? $icon = 'mdi-eye-off' : $icon = 'mdi-eye';

        ?>

        <div class="column is-half-desktop is-one-quarter-widescreen">
          <div class="card">
            <div class="card-header">
              <div class="card-header-title">
                <h1 class="title is-size-4"><?php echo $project_meta['title'] ?></h1>
              </div>
            </div>

            <?php
                if (the_post_thumbnail()) {
                  ?>
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="<?php echo get_the_post_thumbnail()['url']; ?>" alt="<?php echo get_the_post_thumbnail()['alt']; ?>">
                </figure>
              </div>
            <?php
                }
                ?>

            <div class="card-content">
              <p>
                <?php
                    echo $project_meta['description'];
                    ?>
              </p>
            </div>

            <div class="card-footer">
              <a href="<?php echo $project_meta['github']; ?>" title="<?php _e('Source code', 'sundown'); ?>" target="_blank">
                <span class="icon is-large">
                  <i class="mdi mdi-24px mdi-github-circle"></i>
                </span>
              </a>

              <?php
              if (!empty($project_meta['preview'])) {
                ?>
                <a href="<?php echo $project_meta['preview']; ?>" title="<?php _e('Preview', 'sundown'); ?>" target="_blank">
                <?php
                  } else {
                    ?>
                <span>
                <?php
                    }
                    ?>
                <span class="icon is-large">
                  <i class="mdi mdi-24px <?php echo $icon; ?>"></i>
                </span>
                <?php
                if (!empty($project_meta['preview'])) {
                ?>
                </a>
                <?php
                } else {
                ?>
                </span>
                <?php
                }
                ?>
            </div>
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
