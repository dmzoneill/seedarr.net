<?php
/**
 * Page template
 *
 * @package Seedarr
 */

get_header();
?>

<main class="site-content">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-header">
          <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();
