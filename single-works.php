<?php get_header(); ?>

<main class="l-main">

<?php if( have_posts() ): ?>
  <?php 
    while( have_posts() ): 
      the_post();
  ?>

  <div id="post-<?php the_ID(); ?>" class="p-lowerPageHeading c-bg--gray">
    <div>
      <p class="c-font--nunito200">Works</p>
    </div>
  </div><!-- p-lowerPageHeading -->

  <div class="c-wrap" >
    <h1 class="c-title--circle c-lowerTitle"><?php the_title(); ?></h1>

    <?php if (function_exists('get_field')): // ACFが有効の場合 ?>

    <div class="p-slider">
      <ul class="js-slick01">
        <?php
          // スライダーイメージの取得
          for ($j = 1; $j <= 3; $j++) {
            $slider_img = get_field("slider_img{$j}");
            if( !empty($slider_img) ):
        ?>
        <li><img src="<?php echo esc_url($slider_img['url']); ?>" alt="<?php echo esc_attr($slider_img['alt']); ?>" width="<?php echo esc_attr($slider_img['width']); ?>" height="<?php echo esc_attr($slider_img['height']); ?>"></li>
        <?php 
            endif;
          }
        ?>
      </ul>
    </div><!-- p-slider -->

    <div class="p-worksDetail">
      <table>
        <tbody>
          <?php
          // 「詳細」フィールドグループ内の詳細1〜詳細10のフィールドを取得
          for ($i = 1; $i <= 10; $i++) {
            // 各詳細項目と詳細内容のフィールド名
            $detail = get_field("detail{$i}");
            // フィールドがラベルも内容も空でない場合にのみ出力
            if (!empty($detail['detail_label' . $i]) && !empty($detail['detail_content' . $i])) :
          ?>
            <tr>
              <th class="p-detail__title c-title--unorderCircle"><?php echo esc_html($detail['detail_label' . $i]); ?>：</th>
              <td class="p-detail__text"><?php echo nl2br(esc_html($detail['detail_content' . $i])); ?></td>
            </tr>
          <?php 
            endif;
          } 
          ?>
        </tbody>
      </table>

      <?php 
        // リンク先ラベルとリンク先URLを取得
        $link_label = get_field("link_label");
        $link_url = get_field("link_url");
        // フィールドが空でない場合にのみ出力
        if (!empty($link_label) && !empty($link_url)) :
      ?>
      <p class="p-siteLink"><a href="<?php echo esc_url($link_url); ?>" target=”_blank”><?php echo esc_html($link_label); ?></a></p>
      <?php 
        endif;
        ?>
      <?php 
        // リンク先ラベルとリンク先URLを取得
        $link_label2 = get_field("link_label2");
        $link_url2 = get_field("link_url2");
        // フィールドが空でない場合にのみ出力
        if (!empty($link_label2) && !empty($link_url2)) :
      ?>
      <p class="p-siteLink"><a href="<?php echo esc_url($link_url2); ?>" target=”_blank”><?php echo esc_html($link_label2); ?></a></p>
      <?php 
        endif;
        ?>
    </div><!-- p-worksDetail -->

    <?php custom_post_navigation(); ?>

  <?php endif; ?><!--ACFが有効の場合-->
  

  </div><!--c-wrap-->

    <?php endwhile; else :?>
      <p>表示する記事がありません</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>