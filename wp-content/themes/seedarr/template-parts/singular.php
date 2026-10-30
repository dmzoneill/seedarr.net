<?php

/**
 * Singular page and post loop.
 *
 * @package Seedarr
 */

$seedarr_post_class = '';
$seedarr_show_meta = false;
if (isset($args) === true && is_array($args) === true) {
    if (isset($args['post_class']) === true && is_string($args['post_class']) === true) {
        $seedarr_post_class = $args['post_class'];
    }
    if (isset($args['show_meta']) === true && $args['show_meta'] === true) {
        $seedarr_show_meta = true;
    }
}
?>

<main class="site-content">
  <div class="container">
    <?php
    while (have_posts() === true) :
        the_post();
        ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class($seedarr_post_class); ?>>
        <div class="page-header">
          <h1 class="page-title"><?php the_title(); ?></h1>
            <?php
            if ($seedarr_show_meta === true) {
                get_template_part('template-parts/post-meta');
            }
            ?>
        </div>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
        <?php
    endwhile;
    ?>
  </div>
</main>
