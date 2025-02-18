////ローディングアニメーション////
/*
document.addEventListener("DOMContentLoaded", function () {
	// localStorageに"visited"フラグがあるかを確認
	const isVisited = localStorage.getItem("visited");
  
	if (isVisited) {
	  // 一度訪問済みの場合はローディングアニメーションを非表示
	  document.querySelector(".p-loadingOverlay").style.display = "none";
	} else {
	  // 初回訪問の場合はローディングアニメーションを表示し、フラグを設定
	  setTimeout(() => {
		document.querySelector(".p-loadingOverlay").style.display = "none";
		localStorage.setItem("visited", "true");
	  }, 2000); // アニメーションの表示時間を設定（例: 2秒）
	}
  });
*/

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

///トップページWorksフィルタリング
document.addEventListener("DOMContentLoaded", function() {
	const worksCards = document.querySelectorAll(".p-worksCard");

	// ボタンの取得
	const btnAll = document.getElementById("js-worksAll");
	const btnDesign = document.getElementById("js-worksDesign");
	const btnCoding = document.getElementById("js-worksCoding");
	
	// すべてのボタンを配列にする
	const buttons = [btnAll, btnDesign, btnCoding];

	// フィルタリング関数
	function filterWorks(filter, activeButton) {
			worksCards.forEach(card => {
					const tags = card.getAttribute("data-tag").split(",");

					if (filter === "all" || tags.includes(filter)) {
							card.style.display = "block"; // 表示
					} else {
							card.style.display = "none"; // 非表示
					}
			});

			// すべてのボタンから .c-title--circle を削除し、選択されたボタンだけに追加
			buttons.forEach(button => button.classList.remove("c-title--circle"));
			activeButton.classList.add("c-title--circle");
	}

	// 各ボタンにクリックイベントを設定
	btnAll.addEventListener("click", () => filterWorks("all", btnAll));
	btnDesign.addEventListener("click", () => filterWorks("design", btnDesign));
	btnCoding.addEventListener("click", () => filterWorks("coding", btnCoding));
});

////制作実績ページスライダー(slick)////
jQuery('.js-slick01').slick({
	dots: true,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear'
});

////フロントページWorksもっと見る機能
jQuery(document).ready(function($) {
	var postCount = 9; // 初期表示件数

	$('#works__btn').on('click', function() {
			postCount += 3; // クリックごとに3件増加
			$('.p-worksCard.hidden').slice(0, 3).removeClass('hidden'); // 次の3件を表示

			// すべての記事が表示されたらボタンを非表示にする
			if ($('.p-worksCard.hidden').length === 0) {
					$('#works__btn').hide();
			}
	});
});