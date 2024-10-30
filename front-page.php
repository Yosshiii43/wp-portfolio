<?php get_header(); ?>
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
                                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico_webdesign.png" alt="Webデザインのイラスト" width="500px" height="500px">
                                </p>
                                <h4>Webサイト・LPデザイン</h4>
                                <p class="p-serviceCard__caption">ユーザーに響くデザインで、Webサイトやランディングページの効果を最大化します。レスポンシブ対応であらゆるデバイスに最適化します。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico_sns.png" alt="SNS関連デザインのイラスト" width="500px" height="500px">
                                </p>
                                <h4>SNS関連デザイン</h4>
                                <p class="p-serviceCard__caption">LINEのリッチメニューやリッチ画像のデザイン、SNS広告やInstagram投稿フォーマットのデザインを通じて、企業のメッセージを効果的に伝えます。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico_namecard.png" alt="名刺・ショップカードデザインのイラスト" width="500px" height="500px">
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
                                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico_coding.png" alt="フロントエンドコーディングのイラスト" width="500px" height="500px">
                                </p>
                                <h4>フロントエンドコーディング</h4>
                                <p class="p-serviceCard__caption">HTML、CSS、JavaScriptを使用して、デザインを忠実に再現します。
                                    SASSを用いて、効率的でメンテナンス性の高いコーディングを致します。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/Ico_responsive.png" alt="レスポンシブデザイン対応のイラスト" width="500px" height="500px">
                                </p>
                                <h4>レスポンシブデザイン対応</h4>
                                <p class="p-serviceCard__caption">PC、タブレット、スマートフォンなど、あらゆるデバイスで快適に閲覧できるレスポンシブデザインに対応しています。また、ユーザーが直感的に操作できるウェブサイトを目指します。</p>
                            </a>
                        </section>
                        <section class="p-serviceCard">
                            <a href="#">
                                <p class="p-serviceCard__icon">
                                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico_wordpress.png" alt="WordPress構築のイラスト" width="500px" height="500px">
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
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_001.jpg" alt="前進する四柱推命Webの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb js-tagCodin">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                            <p class="c-title--circle">コーディング</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_002.jpg" alt="ポートフォリオの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagLp">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">LPデザイン</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_003.jpg" alt="前進する四柱推命LPの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_001.jpg" alt="前進する四柱推命Webの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb js-tagCoding">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                            <p class="c-title--circle">コーディング</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_002.jpg" alt="ポートフォリオの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagLp">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">LPデザイン</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_003.jpg" alt="前進する四柱推命LPの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_001.jpg" alt="前進する四柱推命Webの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagWeb js-tagCoding">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">Webサイトデザイン</p>
                            <p class="c-title--circle">コーディング</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_002.jpg" alt="ポートフォリオの写真"></p>
                    </div>
                    <div class="p-worksCard js-tagLp">
                        <div class="p-worksCard__tags">
                            <p class="c-title--circle">LPデザイン</p>
                        </div>
                        <p><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/flont_works_003.jpg" alt="前進する四柱推命LPの写真"></p>
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
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/portrait_sit.png" alt="Yoshinoイラスト" width="1500px" height="1444px">
                    </div>
                </div><!--"c-inner-->
            </div><!--c-wrap-->
        </section><!--p-about-->
        <section class="p-flow" id="flow">
            <div class="c-wrap">
                <h2 class="c-title--frontH2 c-font--nunito200 c-fadeIn js-fadeIn">Flow</h2>
                <div class="c-inner c-fadeIn js-fadeIn">
                <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">1</span>お問い合わせ</h3>
                        <div class="p-flow__item__text">
                            <p>サイトのお問い合わせフォームよりご連絡ください。制作内容、イメージ、スケジュール、予算など、詳しくお知らせいただくとスムーズです。初回相談は無料ですので、お気軽にどうぞ。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">2</span>ヒアリング & お見積り</h3>
                        <div class="p-flow__item__text">
                            <p>オンラインミーティングやメールで詳細なヒアリングを行います。プロジェクトの目標や納期について具体的に話し合い、内容や規模に応じたお見積りをお送りいたします。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">3</span>ご契約</h3>
                        <div class="p-flow__item__text">
                            <p>お見積りにご納得いただけましたら、契約書を締結いたします。契約内容やお支払いのスケジュールを丁寧にご説明いたしますので、安心してご依頼いただけます。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">4</span>制作開始</h3>
                        <div class="p-flow__item__text">
                            <p>デザイン・コーディング作業を開始します。進捗は定期的に共有し、確認や修正は随時行います。お客様と密にコミュニケーションを取りながら、制作を進めてまいります。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">5</span>納品 & お支払い</h3>
                        <div class="p-flow__item__text">
                            <p>完成したデザインやWebサイトをご確認いただき、ご承認後に納品となります。納品後、指定の銀行口座へお支払いをお願いいたします。領収書の発行も承ります。</p>
                        </div>
                    </section>
                    <div class="p-flow__arrow"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/ico__arrow--gray.png" alt="下向き矢印" width="40px" height="40px"></div>
                    <section class="p-flow__item c-bg--gray">
                        <h3><span class="c-title--circleNumber">6</span>アフターサポート</h3>
                        <div class="p-flow__item__text">
                            <p>納品後も運用相談や軽微な修正に柔軟に対応いたします。アフターフォローも心配ございませんので、お気軽にご相談ください。長期的なサポートを提供いたします。</p>
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
<?php get_footer(); ?>