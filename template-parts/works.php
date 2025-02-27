<section class="p-works" id="works">

  <div class="c-wrap">
      <h2 class="c-title--frontH2 c-font--nunito200 c-fadeIn js-fadeIn">Works</h2>

      <ul class="p-works__menu c-fadeIn js-fadeIn">
        <li class="p-works__menu__item"><button class="c-title--circle" id="js-worksAll" tabindex="0">All</button></li>
        <li class="p-works__menu__item"><button id="js-worksDesign" tabindex="0">Design</button></li>
        <li class="p-works__menu__item"><button id="js-worksCoding" tabindex="0">Coding</button></li>
      </ul>

    <?php
      $args = array(
        'post_type'      => 'works',
        'posts_per_page' => -1,  // すべての投稿を取得
        'meta_key'       => 'post_order',
      );
      $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()): ?>

      <div class="p-works__gallery">
        <?php 
          $post_count = 0;
          while($the_query->have_posts()) : 
            $the_query->the_post(); 
            $post_count++;
        ?>
          <?php 
            $tags = get_field('tag');
            $tag_classes = $tags ? implode(' ', $tags) : '';
            $tag_data = $tags ? implode(',', $tags) : '';
          ?>
          <div class="p-worksCard js-tagDsign c-fadeIn js-fadeIn <?php if($post_count > 9) echo 'hidden'; ?>" data-tag="<?php echo esc_attr($tag_data); ?>">
            <a href="<?php the_permalink(); ?>" tabindex="0" class="p-works__item">
              <?php
                $worksImage = get_field('slider_img1');
                if( !empty( $worksImage ) ):
              ?>
                <p><img src="<?php echo esc_url($worksImage['url']); ?>" alt="<?php echo esc_html($worksImage['alt']); ?>" width="<?php echo esc_attr($worksImage['width']); ?>" height="<?php echo esc_attr($worksImage['height']); ?>"/></p>
              <?php else: ?>
                <p><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/img/works_noImage.jpg" alt="No Image" /></p>
              <?php endif; ?>
              <div class="p-worksCard__text">
                <p class="p-worksCard__text__tag">
                  <?php if ($tags) { echo esc_html(implode(' / ', $tags)); } ?>
                </p>
                <h3 class="shop-title"><?php the_title(); ?></h3>
              </div>
            </a>
          </div><!-- p-worksCard -->
        <?php endwhile; ?>

      </div><!-- p-works__gallery -->

      <?php if ($the_query->post_count > 9): ?>
        <div class="tc mt20">
          <button class="p-works__more" id="works__btn" tabindex="0">もっと見る</button>
        </div>
      <?php endif; ?>

    <?php else: ?>
      <p>掲載情報がありません。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div><!--c-wrap-->

</section><!--p-Works-->