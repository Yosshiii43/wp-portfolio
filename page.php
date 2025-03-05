<?php get_header(); ?>
    <main class="l-main">
    <?php if( have_posts() ): ?>
        <?php
        while( have_posts() ):
            the_post();
            ?>
        <div class="p-lowerPageHeading c-bg--gray">
            <div>
                <h1 class=""><?php the_title(); ?></h1>
            </div>
        </div><!--p-lowerPageHeading-->
        <div id="post-<?php the_ID(); ?>" <?php post_class('c-wrap'); ?> >
          <?php the_content(); ?>

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