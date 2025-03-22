<?php get_header(); ?>

<main class="l-main">

<?php if( have_posts() ): ?>
  <?php 
    while( have_posts() ): 
      the_post();
  ?>

  <div id="post-<?php the_ID(); ?>" class="p-lowerPageHeading c-bg--gray">
    <div>
      <p class="c-font--nunito">Works</p>
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
            // 各詳細項目と詳細内容のフィールド名取得
            $detail = get_field("detail{$i}");
            // フィールドがラベルも内容も空でない場合にのみ出力
            if (!empty($detail['detail_label' . $i]) && !empty($detail['detail_content' . $i])) :
              
            // 改行で分割
            $lines = explode("\n", $detail['detail_content' . $i]);

            // 各行の種類を判定する配列を作成
            $formatted_lines = [];
            foreach ($lines as $line) {
                $trimmed_line = trim($line);
                if ($trimmed_line === '') {
                    // 空行の場合も追加
                    $formatted_lines[] = ['type' => 'empty', 'content' => ''];
                } elseif (!empty($trimmed_line)) {
                    if (strpos($trimmed_line, '・') === 0) {
                        $formatted_lines[] = ['type' => 'bulleted', 'content' => $trimmed_line];
                    } else {
                        $formatted_lines[] = ['type' => 'normal', 'content' => $trimmed_line];
                    }
                }
            }
            ?>
            <tr>
              <th class="p-detail__title c-title--unorderCircle"><?php echo esc_html($detail['detail_label' . $i]); ?>：</th>
              <td class="p-detail__text">
                <?php 
                // 元の順序を保持して出力
                $current_ul = false;
                foreach ($formatted_lines as $line) {
                  if ($line['type'] === 'bulleted') {
                    // 箇条書きリストの開始
                    if (!$current_ul) {
                      echo '<ul>';
                      $current_ul = true;
                    }
                    echo '<li>' . esc_html($line['content']) . '</li>';
                  } elseif ($line['type'] === 'empty') {
                    // 空行の場合
                    if ($current_ul) {
                      echo '</ul>';
                      $current_ul = false;
                    }
                    echo '<br>'; // 空行を<br>タグで表現
                  } else {
                    // 箇条書きリストの終了
                    if ($current_ul) {
                      echo '</ul>';
                      $current_ul = false;
                    }
                    // 通常の行
                    echo nl2br(esc_html($line['content']) . "\n");
                  }
                }
                
                // 最後にリストが開いたままの場合は閉じる
                if ($current_ul) {
                  echo '</ul>';
                }
                ?>
              </td>
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