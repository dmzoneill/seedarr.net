<?php
/**
 * Single post template
 *
 * @package Seedarr
 */

get_header();
?>

<main class="site-content">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
        <div class="page-header">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <div class="post-meta">
            <span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> &bull;
            <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
          </div>
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
