<?php

/**
 * Post date and author line.
 *
 * @package Seedarr
 */

?>
<div class="post-meta">
  <span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span> &bull;
  <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
</div>
