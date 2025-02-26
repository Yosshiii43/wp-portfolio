<?php get_header(); ?>

    <main class="l-main">

        <div class="p-lowerPageHeading c-bg--gray">
          <div>
            <p class="c-font--nunito200"> 404 Not Found</p>
          </div>
        </div><!--p-lowerPageHeading-->
        
        <section class="c-wrap">
          <div class="p-404">
            <h1 class="c-title--circle c-lowerTitle">ご指定のページが見つかりません</h1>
            <div class="p-404__text">
              <p>申し訳ありません。</p>
              <p>アクセスされたページは見つかりませんでした。</p>
              <p>ページが移動または削除されたか、URLの入力間違いの可能性があります。</p>
            </div>
            <p class="p-siteLink"><a href="<?php echo esc_url( home_url() ); ?>">トップページへ戻る</a></p>
          </div>
        </section><!--c-wrap-->

    </main>

<?php get_footer(); ?>