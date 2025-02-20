////ハンバーガーメニュー////
document.querySelector( '.js-hamburger' ).addEventListener(
	'click',
	() => {
		document.querySelector( '.js-hamburger' ).classList.toggle( 'is-open' );
		document.querySelector( '.p-header__menu' ).classList.toggle( 'is-open' );
		document.querySelector( 'body' ).classList.toggle( 'is-open' );
	}
);


////スムーススクロール////
jQuery(function () {
  jQuery('a[href*="#"]').click(function (e) {
    const targetHash = this.hash; // クリックしたリンクのハッシュ (例: #about)
    if (!targetHash) return; // ハッシュがない場合は処理しない

    const currentPath = window.location.pathname; // 現在のページのパス
    const homePath = "/"; // トップページのパス（WordPressなら "/"）

    // 現在のページがトップページかどうかを判定
    const isTopPage = (currentPath === homePath || currentPath === homePath + "index.php");

    if (isTopPage) {
      // **トップページの場合** → そのページ内でスムーススクロール
      e.preventDefault();
      smoothScroll(targetHash);

			// SP用のメニューを閉じる処理
			document.querySelector('.js-hamburger').classList.remove('is-open');
			document.querySelector('.p-header__menu').classList.remove('is-open');
			document.querySelector('body').classList.remove('is-open');

    } else {
      // **下層ページの場合** → トップページに遷移し、その後スムーススクロール
      e.preventDefault();
      sessionStorage.setItem('scrollTo', targetHash); // どこへスクロールするかを保存
      window.location.href = window.location.origin + "/"; // トップページへ遷移
    }
  });

  // **トップページがロードされたときに、スムーススクロールを実行**
  jQuery(document).ready(function () {
    const targetHash = sessionStorage.getItem('scrollTo'); // 保存されたスクロール先を取得
    if (targetHash) {
      sessionStorage.removeItem('scrollTo'); // 取得後は削除
      smoothScroll(targetHash);
    }
  });

  // **スムーススクロールの関数**
  function smoothScroll(targetHash) {
    const target = jQuery(targetHash);
    if (target.length) {
      const headerHeight = jQuery("header").outerHeight();
      const position = target.offset().top - headerHeight;
      jQuery("html, body").animate({ scrollTop: position }, 600, "swing");

      // URLのハッシュを更新
      history.pushState(null, '', targetHash);
    }
  }
});


////テキストのランダムアニメーション////
var Obj = {
	loop: false,
	minDisplayTime: 2000,// アニメーションの間隔時間
	initialDelay: 200, // アニメーション開始までの遅延時間
	autoStart: true,
	in: {
		effect: 'fadeInUp',//animate.css の中にある採用したい動きのクラス名
		delayScale: 1,// 遅延時間の指数
		delay: 100,// 文字ごとの遅延時間
		sync: false,// アニメーションをすべての文字に同時適用するかどうか
		shuffle: true,// 文字表示がランダムな順に表示されるかどうか
	},
	out: {// 終了時のアニメーション設定をしたい場合はここに追記
	}
}
var element
//初期設定
function RandomInit() {
	element= jQuery(".randomAnime");
	jQuery(element[0]).textillate(Obj);
}

function RandomAnimeControl() {
		var elemPos = jQuery(element[1]).offset().top - 50;
		var scroll = jQuery(window).scrollTop();
		var windowHeight = jQuery(window).height();

		if (scroll >= elemPos - windowHeight) {
			jQuery(element[1]).textillate(Obj);
		}
}

// 画面が読み込まれたらすぐに動かしたい場合の記述
jQuery(window).on('load', function () {
	RandomInit(); /*初期設定を読み込み*/
	RandomAnimeControl();/*アニメーション用の関数を呼ぶ*/
});//ここまで画面が読み込まれたらすぐに動かしたい場合の記述



////要素の下からのフェードイン////
jQuery(window).on('scroll load', function(){        /* ページロード時、またはスクロールされた時*/
	var scroll = jQuery(this).scrollTop();            /* 現在のスクロール量を測定 */
	var windowHeight = jQuery(window).height();       /* ウィンドウの高さを測定 */
	jQuery('.js-fadeIn').each(function(){                /* 「fadeIn」のクラスがついているものを1つずつ確認し・・・ */
	  var cntPos = jQuery(this).offset().top;         /* 対象の要素の上からの距離を測定 */
	  if(scroll > cntPos - windowHeight + windowHeight / 3){  /* 要素がある位置までスクロールされていたら */
		jQuery(this).addClass('c-fadeIn--active');              /* 「active」のクラスを付与 */
	  }
	});
});



////フロントページWorks
jQuery(document).ready(function($) {
  // 現在のフィルタ状態を保持する変数
  let currentFilter = 'js-worksAll';
  // フィルタリング中かどうかを示すフラグ
  let isFiltering = false;

  // 列数を取得する関数
  const getColumnCount = () => {
    const windowWidth = $(window).width();
    if (windowWidth >= 992) return 3;  // PC
    if (windowWidth >= 577) return 2;   // タブレット
    return 1;  // スマートフォン
  };

  // フィルタリング機能
  $('.p-works__menu__item button').on('click', function() {
    // フィルタリング中のフラグを立てる
    isFiltering = true;

    // すべてのボタンから .c-title--circle と .active を削除
    $('.p-works__menu__item button')
      .removeClass('c-title--circle')
      .removeClass('active');

    // クリックされたボタンに .c-title--circle と .active を追加
    $(this)
      .addClass('c-title--circle')
      .addClass('active');

    // クリックされたボタンのIDを取得
    currentFilter = $(this).attr('id');

    // すべてのカードを一旦非表示
    $('.p-worksCard').hide().addClass('hidden').css('opacity', 0);

    // 列数を取得
    const columnCount = getColumnCount();

    // フィルタリング処理
    let $visibleCards;
    switch(currentFilter) {
      case 'js-worksAll':
        $visibleCards = $('.p-worksCard').slice(0, 9);
        break;
      case 'js-worksDesign':
        $visibleCards = $('.p-worksCard[data-tag*="Design"]').slice(0, 9);
        break;
      case 'js-worksCoding':
        $visibleCards = $('.p-worksCard[data-tag*="Coding"]').slice(0, 9);
        break;
    }

    // カードを表示し、アニメーションを適用
    $visibleCards.each(function(index) {
      const $card = $(this);
      const windowScrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();
      const cardOffsetTop = $card.offset().top;

      // ビューポート内か判定
      const isInViewport = 
        cardOffsetTop >= windowScrollTop && 
        cardOffsetTop < windowScrollTop + windowHeight;

      $card
        .removeClass('hidden')
        .show();

      if (isInViewport) {
        // ビューポート内のカードはスムーズにopacity変更
        $card.css({
          'transition': 'opacity 0.5s ease-in-out',
          'opacity': 1
        });
      } else {
        // ビューポート外のカードは通常のフェードイン
        $card
          .removeClass('c-fadeIn--active')
          .addClass('c-fadeIn js-fadeIn')
          .css({
            'opacity': '',
            'visibility': '',
            'position': ''
          });

        // 遅延アニメーション設定
        const delay = (index % columnCount) * 0.2;
        $card.css('transition-delay', delay + 's');
      }
    });

    // 「もっと見る」ボタンの表示/非表示を制御
    const selector = currentFilter === 'js-worksAll' 
      ? '.p-worksCard.hidden' 
      : `.p-worksCard.hidden[data-tag*="${currentFilter.replace('js-works', '')}"]`;
    
    if ($(selector).length > 0) {
      $('#works__btn').show();
    } else {
      $('#works__btn').hide();
    }

    // フィルタリング完了
    setTimeout(() => {
      isFiltering = false;
      // スクロールイベントを手動で発火
      $(window).trigger('scroll');
    }, 300);
  });

  // 「もっと見る」ボタンの機能は以前と同じ
  $('#works__btn').on('click', function() {
    // フィルタに応じて次の3件を表示
    let selector = '.p-worksCard.hidden';
    switch(currentFilter) {
      case 'js-worksAll':
        selector = '.p-worksCard.hidden';
        break;
      case 'js-worksDesign':
        selector = '.p-worksCard.hidden[data-tag*="Design"]';
        break;
      case 'js-worksCoding':
        selector = '.p-worksCard.hidden[data-tag*="Coding"]';
        break;
    }

    // 現在の列数を取得
    const columnCount = getColumnCount();

    $(selector).slice(0, 3).each(function(index) {
      $(this)
        .removeClass('hidden')
        .removeClass('c-fadeIn--active')
        .addClass('c-fadeIn js-fadeIn')
        .show()
        .css({
          'opacity': '',
          'visibility': '',
          'position': ''
        });
      
      // 遅延アニメーション設定（列数に応じて動的に計算）
      const delay = (index % columnCount) * 0.2;
      
      $(this).css('transition-delay', delay + 's');
    });

    // スクロールイベントを手動で発火
    $(window).trigger('scroll');

    // すべての対象カードが表示されたらボタンを非表示
    if ($(selector).length <= 3) {
      $('#works__btn').hide();
    }
  });

  // リサイズ時に再計算
  $(window).on('resize', function() {
    // 現在のフィルタを再適用
    $('#' + currentFilter).trigger('click');
  });

  // スクロールイベント
  $(window).on('scroll', function() {
    // フィルタリング中は何もしない
    if (isFiltering) return;

    // 画面の下から100pxの位置
    const scrollTrigger = $(window).height() - 100;

    // 各カードに対して処理
    $('.p-worksCard:not(.c-fadeIn--active).js-fadeIn').each(function() {
      const position = $(this).offset().top;
      
      // スクロール位置がカードの位置を超えたら
      if ($(window).scrollTop() + scrollTrigger > position) {
        $(this)
          .addClass('c-fadeIn--active')
          .removeClass('js-fadeIn');
      }
    });
  });

  // 初期状態で「All」ボタンをアクティブに
  $('#js-worksAll').addClass('c-title--circle').addClass('active');
});



////制作実績ページスライダー(slick)////
jQuery('.js-slick01').slick({
	dots: true,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear'
});

