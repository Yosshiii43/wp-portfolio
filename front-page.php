<?php get_header(); ?>

  <main class="l-main">
    <div class="p-mainVisual">
      <div class="inner">
        <div class="p-mainVisual__copy">
          <h1 class="p-mainVisual__copy__top c-delay c-delay200">Webサイトを、<br class="u-none--pc u-none--tab">確かな品質で</h1>
          <p class="p-mainVisual__copy__bottom c-delay c-delay600">デザインから<br class="u-none--pc u-none--tab">構築まで、<br class="u-none--pc u-none--tab">丁寧に仕上げます</p>
        </div>
      </div>
    </div>

    <?php get_template_part( 'template-parts/service' ); ?>

    <?php get_template_part( 'template-parts/works' ); ?>

    <?php get_template_part( 'template-parts/about' ); ?>

    <?php get_template_part( 'template-parts/contact' ); ?>

  </main>

<?php get_footer(); ?>