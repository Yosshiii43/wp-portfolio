<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" >
    <script>
        (function(d) {
          var config = {
            kitId: 'hff0ssr',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script><!--Adobe Fontsより筑紫A丸ゴシック-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css"><!--メインビジュアル内アニメーション用-->
    <link rel="stylesheet" type="text/css" href="./js/slick-1.8.1/slick/slick.css"><!--スライダー(slick)用-->
    <link rel="stylesheet" type="text/css" href="./js/slick-1.8.1/slick/slick-theme.css"><!--スライダー(slick)用-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Yoshino’s Portfolio Site</title>
</head>
<body class="home c-body">
    <div class="p-loadingOverlay">
        <div class="p-loader"></div>
    </div>
    <header class="l-header p-header" id="header">
        <p class="p-header__title">
            <a href="#">
                <img src="./img/header__title.png" alt="Yoshino's portfolio site" width="116px" height="57px">
            </a>
        </p>
        <div class="p-header__menu">
            <button class="p-hamburger js-hamburger">
                <span>menuボタン</span>
            </button>
            <ul class="p-gmenu c-font--nunito200">
                <li class="p-gmenu__item"><a href="#service">Service</a></li>
                <li class="p-gmenu__item"><a href="#works">Works</a></li>
                <li class="p-gmenu__item"><a href="#about">About</a></li>
                <li class="p-gmenu__item"><a href="#flow">Flow</a></li>
                <li class="p-gmenu__item"><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <main class="l-main">
        <div class="p-mainVisual c-bg--gray">
            <div>
                <div class="p-mainVisual__title">
                    <h1 class="p-mainVisual__title__top c-font--nunito200 randomAnime">Yoshino’s Portfolio Site</h1>
                    <p class="p-mainVisual__title__bottom randomAnime c-font--tsukuarg200">Webデザイン / コーディング</p>
                </div>
            </div>
        </div>
        <section class="p-concept">
            <div class="c-wrap">
                <h2 class="p-concept__title">感動を<span>心</span>に、結果を<span>形</span>に</h2>
                <div class="p-concept__text">
                    <p>私は、お客様の大切な価値をユーザーに届け、人々の心に響く体験を提供することを目指しています。</p>
                    <p>デザインとコーディングを通じて、ユーザーの感動を生み出し、その感動を具体的な行動に繋げ、成果を確かな形にするために取り組みます。</p>
                    <p>すべてのプロジェクトにおいて、誠実さを大切にし、どんな仕事でも丁寧に取り組むことをお約束します。</p>
                </div>
            </div>
        </section>
        <section class="p-service c-bg--gray" id="service">
            <div class="c-wrap">
                <h2 class="c-title--frontH2 c-font--nunito200 c-fadeIn js-fadeIn">Service</h2>
                <section class="p-service__content">
                    <h3 class="p-service__content__title c-fadeIn js-fadeIn">デザイン</h3>
                    <div class="p-service__content__gallery c-fadeIn js-fadeIn">
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="./img/ico_webdesign.png" alt="Webデザインのイラスト" width="500px" height="500px">
                                </p>
                                <h4>Webサイト・LPデザイン</h4>
                                <p class="p-serviceCard__caption">ユーザーに響くデザインで、Webサイトやランディングページの効果を最大化します。レスポンシブ対応であらゆるデバイスに最適化します。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="./img/ico_sns.png" alt="SNS関連デザインのイラスト" width="500px" height="500px">
                                </p>
                                <h4>SNS関連デザイン</h4>
                                <p class="p-serviceCard__caption">LINEのリッチメニューやリッチ画像のデザイン、SNS広告やInstagram投稿フォーマットのデザインを通じて、企業のメッセージを効果的に伝えます。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="./img/ico_namecard.png" alt="名刺・ショップカードデザインのイラスト" width="500px" height="500px">
                                </p>
                                <h4>名刺・ショップカードデザイン</h4>
                                <p class="p-serviceCard__caption">印象に残る名刺やショップカードのデザインで、あなたのブランドの魅力をしっかりと伝えます。</p>
                            </a>
                        </section>
                    </div>
                </section>
                <section class="p-service__content">
                    <h3 class="p-service__content__title c-fadeIn js-fadeIn">コーディング</h3>
                    <div class="p-service__content__gallery c-fadeIn js-fadeIn">
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="./img/ico_coding.png" alt="フロントエンドコーディングのイラスト" width="500px" height="500px">
                                </p>
                                <h4>フロントエンドコーディング</h4>
                                <p class="p-serviceCard__caption">HTML、CSS、JavaScriptを使用して、デザインを忠実に再現します。
                                    SASSを用いて、効率的でメンテナンス性の高いコーディングを致します。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="./img/Ico_responsive.png" alt="レスポンシブデザイン対応のイラスト" width="500px" height="500px">
                                </p>
                                <h4>レスポンシブデザイン対応</h4>
                                <p class="p-serviceCard__caption">PC、タブレット、スマートフォンなど、あらゆるデバイスで快適に閲覧できるレスポンシブデザインに対応しています。また、ユーザーが直感的に操作できるウェブサイトを目指します。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="./img/ico_wordpress.png" alt="WordPress構築のイラスト" width="500px" height="500px">
                                </p>
                                <h4>WordPress構築</h4>
                                <p class="p-serviceCard__caption">WordPressを用いたウェブサイト構築で、管理のしやすさと柔軟性を両立したサイトを提供します。
                                    オリジナルテーマによるWordPressサイト構築が可能です。</p>
                            </a>
                        </section>
                    </div><!--p-service__content__gallery-->
                </section><!--p-service__content-->
            </div><!--c-wrap-->
        </section><!--p-service-->
        <section class="p-works" id="works">
            <div class="c-wrap">
                <h2 class="c-title--frontH2 c-font--nunito200 c-fadeIn js-fadeIn">Works</h2>
                <ul class="p-works__menu c-fadeIn js-fadeIn">
                    <li class="p-works__menu__item"><button class="js-worksAll">ALL</button></li>
                    <li class="p-works__menu__item"><button class="js-worksAll">Webサイト</button></li>
                    <li class="p-works__menu__item"><button class="js-worksAll">LP</button></li>
                    <li class="p-works__menu__item"><button class="js-worksAll">LINE</button></li>
                    <li class="p-works__menu__item"><button class="js-worksAll">バナー</button></li>
                    <li class="p-works__menu__item"><button class="js-worksAll">名刺</button></li>
                    <li class="p-works__menu__item"><button class="js-worksAll">コーディング</button></li>
                </ul>
                <div class="p-works__gallery c-fadeIn js-fadeIn">
                    <div class="p-worksCard js-tagWeb">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                        </div>
                        <p><img src="./img/flont_works_001.jpg" alt="前進する四柱推命Webの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb js-tagCodin">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                            <p class="c-title--circle">コーディング</p>
                        </div>
                        <p><img src="./img/flont_works_002.jpg" alt="ポートフォリオの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagLp">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">LPデザイン</p>
                        </div>
                        <p><img src="./img/flont_works_003.jpg" alt="前進する四柱推命LPの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                        </div>
                        <p><img src="./img/flont_works_001.jpg" alt="前進する四柱推命Webの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb js-tagCoding">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                            <p class="c-title--circle">コーディング</p>
                        </div>
                        <p><img src="./img/flont_works_002.jpg" alt="ポートフォリオの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagLp">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">LPデザイン</p>
                        </div>
                        <p><img src="./img/flont_works_003.jpg" alt="前進する四柱推命LPの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                        </div>
                        <p><img src="./img/flont_works_001.jpg" alt="前進する四柱推命Webの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb js-tagCoding">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                            <p class="c-title--circle">コーディング</p>
                        </div>
                        <p><img src="./img/flont_works_002.jpg" alt="ポートフォリオの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagLp">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">LPデザイン</p>
                        </div>
                        <p><img src="./img/flont_works_003.jpg" alt="前進する四柱推命LPの写真"></p>
                    </div>
                </div><!--p-works__gallery-->
                <button class="p-works__more">もっと見る</button>
            </div><!--c-wrap-->
        </section><!--p-Works-->
        <section class="p-about c-bg--gray" id="about">
            <div class="c-wrap">
                <h2 class="c-title--frontH2 c-font--nunito200 c-fadeIn js-fadeIn">About</h2>
                <div class="c-inner c-fadeIn js-fadeIn">
                    <div class="p-about__text">
                        <p class="c-matginBottom--1em">Yoshino</p>
                        <p class="c-matginBottom--1em">愛知県在住</p>
                        <p class="c-matginBottom--1em">Webデザイナー / コーダー</p>
                        <p>　スイーツが大好きで、長く洋菓子店で働いていました。</p>
                        <p class="c-matginBottom--1em">　新商品のおすすめやお客様へのメッセージなどを日々黒板に描いてお客様が反応してくれる様子をみているうちに、ビジュアルで魅力を伝える仕事に興味が湧き、Web制作の世界に飛び込みました。</p>
                        <p>　商品やサービスの魅力が伝わり、誰かの心を揺さぶる。そしてそれが集客や売り上げにつながる。そんなデザインを求めて制作に励んでいます。</p>
                        <p class="c-matginBottom--1em">　また、より操作性が良く、メンテナンス性も良いサイト構築ができるよう、コーダーとしても日々勉強の毎日です。</p>
                        <p>　折りたたみの小さな自転車BROMPTONに乗って、甘いものを食べに出かけることが、最近のお気に入りです。</p>
                    </div>
                    <div class="p-about__img">
                        <img src="./img/portrait_sit.png" alt="Yoshinoイラスト" width="1500px" height="1444px">
                    </div>
                </div><!--"c-inner-->
            </div><!--c-wrap-->
        </section><!--p-about-->
        <section class="p-flow" id="flow">
            <div class="c-wrap">
                <h2 class="c-title--frontH2 c-font--nunito200 c-fadeIn js-fadeIn">Flow</h2>
                <div class="c-inner c-fadeIn js-fadeIn">
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">1</span>お問い合わせ ・ヒアリング</h3>
                        <div class="p-flow__item__text">
                            <p>まずはお問い合わせフォームからご連絡ください。3営業日以内にご返信いたします。</p>
                            <p>その後、メールまたはオンラインミーティングで詳しいご依頼内容をお伺いします。</p>
                            <p>初回のご相談は無料ですので、どんな小さなご相談でもお気軽にお問い合わせください。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="./img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">2</span>見積もり・契約</h3>
                        <div class="p-flow__item__text">
                            <p>ヒアリング内容をもとに、内容や規模に応じた費用を算出し、見積もりをお送りします。</p>
                            <p>お見積もりにご納得いただけましたら、契約書を締結します。</p>
                            <p>契約内容やお支払いのスケジュールについても丁寧にご説明しますので、安心してご依頼いただけます。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="./img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">3</span>制作・確認</h3>
                        <div class="p-flow__item__text">
                            <p>デザインやコーディングの制作を開始します。</p>
                            <p>進捗は定期的に共有し、お客様からの修正依頼やフィードバックを反映させながら進めます。</p>
                            <p>最終確認時に、必要に応じて細かい調整を行い、納得いただける完成形に仕上げます。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="./img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">4</span>納品・お支払い</h3>
                        <div class="p-flow__item__text">
                            <p>最終的なデザインやWebサイトの確認が完了しましたら、納品を行います。</p>
                            <p>納品後に請求書を発行し、お支払いをお願いしております。お支払いが確認でき次第、プロジェクトは完了となります。</p>
                            <p>納品後のサポートも引き続き対応いたしますので、アフターフォローもお任せください。</p>
                        </div>
                    </section>
                </div><!--c-inner-->
            </div><!--c-wrap-->
        </section><!--p-flow-->
        <section class="p-contact c-bg--gray" id="contact">
            <div class="c-wrap">
                <h2 class="c-title--frontH2 c-font--nunito200 c-fadeIn js-fadeIn">Contact</h2>
                <div class="c-fadeIn js-fadeIn">
                    <div class="p-contact__text">
                        <p>　お仕事のご依頼、ご相談は下記のお問い合わせフォームよりご連絡ください。</p>
                        <p>　3営業日以内に返信させていただきます。</p>
                        <p>　万が一、返信が届かない場合は、お手数ですが迷惑メールフォルダもご確認くださいますよう、お願い申し上げます。</p>
                    </div>
                    <form class="p-contact_form p-contactForm">
                        <div class="p-contactForm__item p-contactForm__item--required">
                            <label for="name">お名前</label>
                            <input type="text" name="name" placeholder="山田　太郎" required tabindex="1">
                        </div>
                        <div class="p-contactForm__item">
                            <label for="furigana">ふりがな</label>
                            <input type="text" name="furigana" placeholder="やまだ　たろう"  tabindex="2">
                        </div>
                        <div class="p-contactForm__item p-contactForm__item--required">
                            <label for="company-name">会社名・担当部署など</label>
                            <input type="text" name="company-name" placeholder="◯◯株式会社　広報部" required tabindex="3">
                        </div>
                        <div class="p-contactForm__item p-contactForm__item--required">
                            <label for="email">メールアドレス</label>
                            <input type="text" name="email" placeholder="sample@gmail.com" required tabindex="4">
                        </div>
                        <div class="p-contactForm__item p-contactForm__item--required">
                            <label for="details">お問い合わせ内容</label>
                            <textarea name="details" rows="4" required tabindex="5"></textarea>
                        </div>
                        <div class="p-contactForm__privacyPolicy">
                            <input name="privacy" type="checkbox" required>
                            <label for="privacy"><a href="">プライバシーポリシーに同意する</a></label>
                        </div>
                        <div class="p-contactForm__button">
                            <input name="submit" type="submit" value="確認画面">
                        </div>
                    </form>
                </div>
            </div><!--c-wrap-->
        </section><!--p-contact-->
    </main>
    <footer class="p-footer c-bg--yellow">
        <div>
            <ul class="p-footer__menu c-font--nunito200">
                <li class="p-footer__menu__item"><a href="#service">Service</a></li>
                <li class="p-footer__menu__item"><a href="#works">Works</a></li>
                <li class="p-footer__menu__item"><a href="#about">About</a></li>
                <li class="p-footer__menu__item"><a href="#flow">Flow</a></li>
                <li class="p-footer__menu__item"><a href="#contact">Contact</a></li>
            </ul>
            <p class="p-footer__copyright c-textSmall c-font--nunito200">&copy;2024 ️Yoshino Sumi</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script><!--メインビジュアル内アニメーション用-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"></script><!--メインビジュアル内アニメーション用-->
    <script src="js/jquery.lettering.js"></script><!--メインビジュアル内アニメーション用-->
    <script src="./js/slick-1.8.1/slick/slick.js"></script><!--スライダー(slick)用-->
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>