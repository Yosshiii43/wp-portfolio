<?php get_header(); ?>
    <main class="l-main">
    <?php if( have_posts() ): ?>
        <?php 
            while( have_posts() ): 
                the_post();
        ?>
        <div class="p-lowerPageHeading c-bg--gray">
            <div>
                <h1 class="c-font--nunito200">Works</h1>
            </div>
        </div><!--p-lowerPageHeading-->
        <div <?php post_class('c-wrap'); ?> >
                <?php the_content(); ?>
        </div>
    <?php endwhile; else :?>
        <p>表示する記事がありません</p>
    <?php endif; ?>
    </main>
<?php get_footer(); ?>