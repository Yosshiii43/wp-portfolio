<?php get_header(); ?>
    <main class="l-main">
    <?php if( have_posts() ): ?>
        <?php 
            while( have_posts() ): 
                the_post();
        ?>
        <div id="post-<?php the_ID(); ?>" class="p-lowerPageHeading c-bg--gray">
            <div>
                <p class="c-font--nunito200">Blog</p>
            </div>
        </div><!--p-lowerPageHeading-->
        <div class="c-wrap" >
            <h1 class="c-title--circle c-lowerTitle"><?php the_title(); ?></h1>
            <?php the_content() ?>
        </div><!--c-wrap-->
    <?php endwhile; else :?>
        <p>表示する記事がありません</p>
    <?php endif; ?>
    </main>
<?php get_footer(); ?>