<?php

/**
 * Main Template File (Fallback)
 *
 * @package Seedarr
 */

get_header();
?>

<main class="site-content">
  <div class="container">
    <div class="page-header">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
    </div>

    <?php if (have_posts()) : ?>
        <?php
        while (have_posts()) :
            the_post();
            ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('template-parts/post-meta'); ?>
          <div class="entry-content">
            <?php the_excerpt(); ?>
          </div>
        </article>
            <?php
        endwhile;
        ?>

      <div class="pagination">
        <?php echo paginate_links(); ?>
      </div>
    <?php else : ?>
      <p><?php esc_html_e('No posts found.', 'seedarr'); ?></p>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
