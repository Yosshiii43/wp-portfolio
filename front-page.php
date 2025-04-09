<?php get_header(); ?>

  <main class="l-main">
    <div class="p-mainVisual c-bg--gray">
      <div class="inner">
        <div class="p-mainVisual__title">
          <h1 class="p-mainVisual__title__top c-font--nunito randomAnime">Yoshino Sumi Portfolio</h1>
          <p class="p-mainVisual__title__bottom randomAnime">Webデザイン / コーディング</p>
        </div>
      </div>
    </div>

    <?php get_template_part( 'template-parts/concept' ); ?>

    <?php get_template_part( 'template-parts/service' ); ?>

    <?php get_template_part( 'template-parts/works' ); ?>

    <?php get_template_part( 'template-parts/about' ); ?>

    <?php
      //get_template_part( 'template-parts/flow' ); 
    ?>

    <?php get_template_part( 'template-parts/contact' ); ?>

  </main>

<?php get_footer(); ?>