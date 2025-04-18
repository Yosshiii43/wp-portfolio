<?php get_header(); ?>

<main class="l-main c-entry">

  <?php if( have_posts() ): ?>
    <?php 
      while( have_posts() ): 
        the_post();
    ?>

    <div id="post-<?php the_ID(); ?>" class="p-lowerPageHeading c-bg--gray">
      <div>
        <p class="c-font--nunito">Blog</p>
      </div>
    </div><!--p-lowerPageHeading-->
    <div class="c-wrap" >
      <h1 class="c-title--circle c-lowerTitle"><?php the_title(); ?></h1>
      	
      <?php the_tags('<div class="post-tags">', ', ', '</div>'); ?>

      <?php the_content() ?>
      
      <?php wp_link_pages( array(
        'before' => '<div class="page-links">ページ:',
        'after'  => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'next_or_number' => 'number'
        ) ); 
      ?>
    </div><!--c-wrap-->

  <?php endwhile; else :?>
    <p>表示する記事がありません</p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>