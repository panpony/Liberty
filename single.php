<?php

/**
 * Template Name: 投稿ページテンプレート
 * @Template Post Type: post, page,
 * @subpackage Liberty
 */
get_header(); ?>

<div class="inner">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
  ?>

  <?php the_content() ?>

  <?php  }
  } ?>

</div>

<?php get_footer();