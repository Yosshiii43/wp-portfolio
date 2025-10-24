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


////テキストのじわっと出現////
// blurTriggerにblurというクラス名を付ける定義

function BlurTextAnimeControl() {
	$('.js-blurTrigger').each(function(){ //blurTriggerというクラス名が
		var elemPos = $(this).offset().top-50;//要素より、50px上の
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('c-blur');// 画面内に入ったらblurというクラス名を追記
		}else{
		$(this).removeClass('c-blur');// 画面外に出たらblurというクラス名を外す
		}
		});
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	BlurTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	BlurTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述



////要素の下からのフェードイン////
jQuery(window).on('scroll load', function(){        // ページロード時、またはスクロールされた時
	let scroll = jQuery(this).scrollTop();            // 現在のスクロール量を測定 
	let windowHeight = jQuery(window).height();       // ウィンドウの高さを測定 
	jQuery('.js-fadeIn').each(function(){             // 「fadeIn」のクラスがついているものを1つずつ確認し・・・ 
	  let cntPos = jQuery(this).offset().top;         // 対象の要素の上からの距離を測定
	  if(scroll > cntPos - windowHeight + windowHeight / 3){  // 要素が画面の1/3くらいの位置までスクロールされていたら 
		jQuery(this).addClass('c-fadeIn--active');              // 「active」のクラスを付与 
	  }
	});
});


//// フロントページWorks
jQuery(function($) {
  const $items = $('.js-galleryItem');
  const $moreBtn = $('.js-moreBtn');
  const itemsPerPage = 9; // 初期表示件数
  const addCount = 3;     // もっと見るで追加する件数
  let currentCount = itemsPerPage;
  let filteredItems = $items; // 現在表示中のフィルタ対象

  // --- 初期状態 ---
  $items.addClass('is-hidden');
  filteredItems.slice(0, itemsPerPage).removeClass('is-hidden');
  toggleMoreBtn();

  // --- もっと見る ---
  $moreBtn.on('click', function() {
    const hiddenItems = filteredItems.filter('.is-hidden');
    const $newItems = hiddenItems.slice(0, addCount);

    // 新しい要素を表示
    $newItems.removeClass('is-hidden');

    // is-visible を外す
    $newItems.removeClass('is-hidden is-visible');
    // 新しく出た要素にだけ順次ディレイを設定（0.2秒ずつ）
    $newItems.each(function(i) {
      const delay = i * 0.2;
      $(this).css('transition-delay', `${delay}s`);

      // すでに画面内なら即アニメ開始
      const rect = this.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        $(this).addClass('is-visible');
      }

      observer.observe(this);
    });

    currentCount += addCount;
    toggleMoreBtn();
  });

  // --- タグ切り替え（ここをフェード対応） ---
  $('.p-works__menu button').on('click', function() {
    const tag = $(this).attr('id').replace('js-works', '').toLowerCase();

    // ボタン見た目切り替え
    $('.p-works__menu button').removeClass('c-title--circle');
    $(this).addClass('c-title--circle');

    // ギャラリーを一旦フェードアウトしてから切り替え
    $('.p-works__gallery').fadeTo(200, 0, function() {
      // 絞り込み
      if (tag === 'all') {
        filteredItems = $items;
      } else {
        filteredItems = $items.filter(function() {
          const tags = $(this).data('tag');
          return tags && tags.toLowerCase().includes(tag);
        });
      }

      // 一旦全て非表示
      $items.addClass('is-hidden is-visible');
      // 絞り込み後に最初の9件だけ表示
      filteredItems.slice(0, itemsPerPage).removeClass('is-hidden');
      currentCount = itemsPerPage;
      toggleMoreBtn();

      // 0.2秒間隔でフェードイン
      filteredItems.slice(0, itemsPerPage).each(function(i) {
        const delay = i * 0.2;
        $(this).css('transition-delay', `${delay}s`);
        setTimeout(() => $(this).addClass('is-visible'), delay * 1000);
        observer.observe(this);
      });

      // ギャラリーを再フェードイン
      $('.p-works__gallery').fadeTo(300, 1);
    });
  });

  // --- ボタンのON/OFF ---
  function toggleMoreBtn() {
    const hiddenCount = filteredItems.filter('.is-hidden').length;
    $moreBtn.toggle(hiddenCount > 0);
  }

  // --- Intersection Observerで順番フェード ---
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const $target = $(entry.target);
        if (!$target.hasClass('is-visible')) {
          $target.addClass('is-visible');
          observer.unobserve(entry.target);
        }
      }
    });
  }, { threshold: 0.1 });

  // 各アイテムに監視設定とディレイ付与
  $items.each(function(i) {
    const delay = i * 0.2;
    $(this).css({
      transitionDelay: `${delay}s`
    });
    observer.observe(this);
  });
});


////制作実績ページスライダー(slick)////
jQuery('.js-slick01').slick({
	dots: true,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear'
});


///コンタクトフォーム7///
//チェックボックスをキーボード操作でチェックする
document.addEventListener('DOMContentLoaded', () => {
  const checkboxes = document.querySelectorAll('.wpcf7-form input[type="checkbox"]');
  
  checkboxes.forEach(checkbox => {
    // エンターキーでチェックボックスをトグル
    checkbox.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') {
        e.preventDefault(); // デフォルトの動作を防止
        checkbox.checked = !checkbox.checked; // チェック状態を切り替え
      }
    });

    // スペースキーでもチェックボックスをトグル
    checkbox.addEventListener('keyup', (e) => {
      if (e.key === ' ') {
        e.preventDefault(); // デフォルトの動作を防止
        checkbox.checked = !checkbox.checked; // チェック状態を切り替え
      }
    });
  });
});



////Contact Form 7内のタブナビゲーション
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.wpcf7-form');
  if (form) {
    const focusableElements = form.querySelectorAll(
      'input, textarea, select, button, [tabindex="0"]'
    );
    
    form.addEventListener('keydown', (e) => {
      if (e.key === 'Tab') {
        const lastElement = focusableElements[focusableElements.length - 1];
        const firstElement = focusableElements[0];

        // フォーム内でのタブ移動
        if (e.shiftKey && document.activeElement === firstElement) {
          lastElement.focus();
          e.preventDefault();
        } else if (!e.shiftKey && document.activeElement === lastElement) {
          // デフォルトの動作を許可（フォーム外へ移動）
          return;
        }
      }
    });

    // タブインデックスを確実に設定
    focusableElements.forEach(element => {
      element.setAttribute('tabindex', '0');
    });
  }
});