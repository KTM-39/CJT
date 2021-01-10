<?php get_header(); ?>

<main>
    <article>
        <div class="switching-video-wrapper">
            <section class="top">
                <div class="top__visual">
                    <video src="<?php echo get_template_directory_uri(); ?>/video/Space-start.mp4"  playinline loop muted autoplay class="video1"></video>
                </div>
                <!-- /.top__visual -->
                <div class="copy">
                    <h1 class="copy__main">夢と希望の想像へ<br>
                        〜 地域社会に調和と秩序と平等を 〜<br><br>
                        <span><?php bloginfo('name'); ?></span>
                    </h1>
                </div>
                <!-- /.copy -->
            </section>
            <!-- /.top -->
            <section class="about" id="about">

                <h2 class="chapter-title">コスモスについて</h2>

                <section class="about__cosmos" id="about__cosmos">
                    <article class="concept">
                        <div class="concept__inner">
                            <h3 class="sub-title">コスモスとは</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, aliquam doloribus perferendis consequatur. Dolorum accusantium minima eum cum architecto neque.</p>
                        </div>
                    </article>
                    <div data-aos="flip-up" data-aos-duration="500" class="cosmos-image"></div>
                    <!-- /.cosmos-image -->
                </section>
                <!-- /.about__cosmos -->

                <section class="about__works" id="about__works">
                    <div class="works-center-line">
                        <h3 class="sub-title">就労支援</h3>
                    </div>
                    <!-- /.works-center-line -->
                    <div class="flexbox-work">

                        <a data-aos="fade-right" data-aos-duration="500" class="work" href="<?php echo esc_url(home_url('/appliance')); ?>">
                            <figure class="work__img-wrapper">
                                <img class="work__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-Y1TAEMoWUb4-unsplash.jpg">
                            </figure>
                            <div class="work__body">
                                <h4 class="work__left">
                                    家電清掃
                                </h4>
                                <div class="work__right">
                                    <p class="work__view-more">詳しく見る</p>
                                    <div class="work__arrow-right"></div>
                                </div>
                                <span class="work__border"></span>
                            </div>
                            <!-- /.work__body -->
                        </a>

                        <a data-aos="fade-up" data-aos-duration="500" class="work" href="<?php echo esc_url(home_url('/accessory')); ?>">
                            <figure class="work__img-wrapper">
                                <img class="work__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-Y1TAEMoWUb4-unsplash.jpg">
                            </figure>
                            <div class="work__body">
                                <h4 class="work__left">
                                    アクセサリー制作
                                </h4>
                                <div class="work__right">
                                    <p class="work__view-more">詳しく見る</p>
                                    <div class="work__arrow-right"></div>
                                </div>
                                <span class="work__border"></span>
                            </div>
                            <!-- /.work__body -->
                        </a>

                        <a data-aos="fade-up" data-aos-duration="500" class="work" href="<?php echo esc_url(home_url('office')); ?>">
                            <figure class="work__img-wrapper">
                                <img class="work__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-Y1TAEMoWUb4-unsplash.jpg">
                            </figure>
                            <div class="work__body">
                                <h4 class="work__left">
                                    事務作業
                                </h4>
                                <div class="work__right">
                                    <p class="work__view-more">詳しく見る</p>
                                    <div class="work__arrow-right"></div>
                                </div>
                                <span class="work__border"></span>
                            </div>
                            <!-- /.work__body -->
                        </a>

                        <a data-aos="fade-up" data-aos-duration="500" class="work" href="<?php echo esc_url(home_url('pc')); ?>">
                            <figure class="work__img-wrapper">
                                <img class="work__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-Y1TAEMoWUb4-unsplash.jpg">
                            </figure>
                            <div class="work__body">
                                <h4 class="work__left">
                                    ＰＣ作業
                                </h4>
                                <div class="work__right">
                                    <p class="work__view-more">詳しく見る</p>
                                    <div class="work__arrow-right"></div>
                                </div>
                                <span class="work__border"></span>
                            </div>
                            <!-- /.work__body -->
                        </a>

                        <a data-aos="fade-up" data-aos-duration="500" class="work" href="<?php echo esc_url(home_url('restaurant')); ?>">
                            <figure class="work__img-wrapper">
                                <img class="work__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-Y1TAEMoWUb4-unsplash.jpg">
                            </figure>
                            <div class="work__body">
                                <h4 class="work__left">
                                    レストラン
                                </h4>
                                <div class="work__right">
                                    <p class="work__view-more">詳しく見る</p>
                                    <div class="work__arrow-right"></div>
                                </div>
                                <span class="work__border"></span>
                            </div>
                            <!-- /.work__body -->
                        </a>

                        <a data-aos="fade-up" data-aos-duration="500" class="work" href="<?php echo esc_url(home_url('outside-the-facility')); ?>">
                            <figure class="work__img-wrapper">
                                <img class="work__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/jon-tyson-Y1TAEMoWUb4-unsplash.jpg">
                            </figure>
                            <div class="work__body">
                                <h4 class="work__left">
                                    施設外就労
                                </h4>
                                <div class="work__right">
                                    <p class="work__view-more">詳しく見る</p>
                                    <div class="work__arrow-right"></div>
                                </div>
                                <span class="work__border"></span>
                            </div>
                            <!-- /.work__body -->
                        </a>

                    </div>
                </section>
                <!-- /.about__works-->

                <section class="about__daily-schedule" id="about__daily-schedule">
                    <h3 class="sub-title">一日の流れ</h3>
                    <section class="schedule">
                        <ul class="schedule-list">
                            <li class="schedule-list__item">
                                午前<br>09:30
                            </li>
                            <li class="schedule-list__item">
                                健康管理
                            </li>
                            <li class="schedule-list__item">
                                午前<br>9:40
                            </li>
                            <li class="schedule-list__item">
                                朝礼
                            </li>
                            <li class="schedule-list__item">
                                午前<br>10:00
                            </li>
                            <li class="schedule-list__item">
                                午前中の作業開始
                            </li>
                        </ul>
                        <ul class="schedule-list">
                            <li class="schedule-list__item">
                                午後<br>12:00
                            </li>
                            <li class="schedule-list__item">
                                昼食・休憩
                            </li>
                            <li class="schedule-list__item">
                                午後<br>13:00
                            </li>
                            <li class="schedule-list__item">
                                午後からの作業開始
                            </li>
                            <li class="schedule-list__item">
                                午後<br>15:30
                            </li>
                            <li class="schedule-list__item">
                                作業終了<br>
                                作業日報の作成<br>
                                自由時間<br>
                                帰宅準備
                            </li>
                            <li class="schedule-list__item">
                                午後<br>16:00
                            </li>
                            <li class="schedule-list__item">
                                帰宅
                            </li>
                        </ul>
                    </section>

                </section>

                <section class="about__wage" id="about__wage">
                    <h3 class="sub-title">工賃規定</h3>
                    <div class="wage-table">
                        <table class="wage-table__inner">
                            <thead class="wage-table__headers">
                                <tr class="wage-table__header-row">
                                    <th class="wage-table__header">家電清掃</th>
                                    <th class="wage-table__header">アクセサリー制作</th>
                                    <th class="wage-table__header">事務作業</th>
                                    <th class="wage-table__header">ＰＣ作業</th>
                                    <th class="wage-table__header">レストラン</th>
                                    <th class="wage-table__header">施設外就労</th>
                                </tr>
                            </thead>
                            <tbody class="wage-table__body">
                                <tr class="wage-table__body-row">
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                </tr>
                                <tr class="wage-table__body-row">
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                </tr>
                                <tr class="wage-table__body-row">
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                    <td class="wage-table__text">テキスト</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.wage-table -->
                </section>

            </section>
            <div class="center-wrapper">
                <section class="employment" id="employment">
                    <h2 class="chapter-title">就労継続支援B型について</h2>

                    <section class="employment__type-b" id="employment__type-b">
                        <h3 class="sub-title">就労継続支援B型とは</h3>
                        <article class="type-b-text">
                            <p>通常の事業所に雇用されることや、雇用契約に基づく就労が困難である人のために就労及び生産活動の機会の提供をします。
                                また、就労に必要な知識と能力の向上のために必要な訓練を行いながら、作業の対価として工賃を得ることができる障がい福祉サービスです。
                                対象は年齢・体力などから一般の企業で働くことができなくなった人やA型の仕事の内容が難しい障がい者の人です。</p>
                        </article>
                    </section>

                    <section class="employment__flow-of-use"id="employment__flow-of-use">
                        <h3 class="sub-title">利用までの流れ</h3>
                        <div class="flow-wrapper">

                            <div class="step">
                                <figure class="step__img-wrapper">
                                    <div class="icon-round">
                                        <img class="step__icon" alt="" src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
                                    </div>
                                    <img src="./img/step-next.png" alt="" class="step__next">
                                </figure>
                                <div class="step__body">
                                    <p class="step__stage">STEP1</p>
                                    <h4 class="step__title">
                                        お問い合わせ
                                    </h4>
                                    <p class="step__text">
                                        ご利用可能かを確認の上、お気軽にお電話にてお問い合わせください。
                                    </p>
                                </div>
                                <!-- /.step__body -->
                            </div>
                            <!-- /.step -->

                            <div class="step">
                                <figure class="step__img-wrapper">
                                    <div class="icon-round">
                                        <img class="step__icon" alt="" src="<?php echo get_template_directory_uri(); ?>/img/Consultation.png">
                                    </div>
                                    <img src="./img/step-next.png" alt="" class="step__next">
                                </figure>
                                <div class="step__body">
                                    <p class="step__stage">STEP2</p>
                                    <h4 class="step__title">
                                        見学・面談・体験
                                    </h4>
                                    <p class="step__text">
                                        作業の様子や、コスモスの雰囲気を見学しながら、実際に体験利用もしていただきます。
                                    </p>
                                </div>
                                <!-- /.step__body -->
                            </div>
                            <!-- /.step -->

                            <div class="step">
                                <figure class="step__img-wrapper">
                                    <div class="icon-round">
                                        <img class="step__icon" alt="" src="<?php echo get_template_directory_uri(); ?>/img/building.png">
                                    </div>
                                    <img src="./img/step-next.png" alt="" class="step__next">
                                </figure>
                                <div class="step__body">
                                    <p class="step__stage">STEP3</p>
                                    <h4 class="step__title">
                                        市役所手続き
                                    </h4>
                                    <p class="step__text">
                                        市役所窓口にて、障害福祉サービスの利用申請をします。
                                    </p>
                                </div>
                                <!-- /.step__body -->
                            </div>
                            <!-- /.step -->

                            <div class="step">
                                <figure class="step__img-wrapper">
                                    <div class="icon-round">
                                        <img class="step__icon" alt="" src="<?php echo get_template_directory_uri(); ?>/img/Contract.png">
                                    </div>
                                    <img src="./img/step-next.png" alt="" class="step__next">
                                </figure>
                                <div class="step__body">
                                    <p class="step__stage">STEP4</p>
                                    <h4 class="step__title">
                                        契約手続き
                                    </h4>
                                    <p class="step__text">
                                        ご利用の方とコスモスとで、利用契約を行います。
                                    </p>
                                </div>
                                <!-- /.step__body -->
                            </div>
                            <!-- /.step -->

                            <div class="step">
                                <figure class="step__img-wrapper">
                                    <div class="icon-round">
                                        <img class="step__icon" alt="" src="<?php echo get_template_directory_uri(); ?>/img/start.png">
                                    </div>
                                </figure>
                                <div class="step__body">
                                    <p class="step__stage">STEP5</p>
                                    <h4 class="step__title">
                                        利用開始
                                    </h4>
                                    <p class="step__text">
                                        利用計画に沿って施設をご利用いただけます。
                                    </p>
                                </div>
                                <!-- /.step__body -->
                            </div>
                            <!-- /.step -->
                        </div>
                        <!-- /.flexbox -->
                    </section>

                </section>
            </div>
            <!-- /.center-wrapper -->

            <section class="news" id="news">
                <h2 class="chapter-title">ニュース</h2>
                <ul class="news-posts">
                    <li class="news-posts__item">
                        <div class="news-posts__header">
                            <time class="news-posts__date" datetime="2019-03-29">2019/03/29</time>
                        </div>
                        <!-- /.news-posts__header -->
                        <a class="news-posts__title" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                    </li>
                    <li class="news-posts__item">
                        <div class="news-posts__header">
                            <time class="news-posts__date" datetime="2019-03-28">2019/03/28</time>
                        </div>
                        <!-- /.news-posts__header -->
                        <a class="news-posts__title" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                    </li>
                    <li class="news-posts__item">
                        <div class="news-posts__header">
                            <time class="news-posts__date" datetime="2019-03-27">2019/03/27</time>
                        </div>
                        <!-- /.news-posts__header -->
                        <a class="news-posts__title" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                    </li>
                </ul>
            </section>
            <div class="center-wrapper">
                <section class="cosmos-blog" id="cosmos-blog">
                    <div class="flexbox-blog">
                        <div class="blog-description">
                            <h3 class="chapter-title">ブログ</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis magnam dolore voluptas, fugiat maxime nam quod error impedit delectus blanditiis.
                            </p>
                        </div>
                        <!-- /.blog-description -->
                        <a href="<?php echo esc_url(home_url('/cosmos-blog')); ?>" class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog-img.jpg" alt="">
                        </a>
                        <!-- /.blog-image -->
                    </div>
                    <!-- /.flexbox-blog -->
                </section>
            </div>
            <!-- /.center-wrapper -->

            <section class="recruitment" id="recruitment">
                <h2 class="chapter-title">利用者募集</h2>
                <div class="recruitment-table">
                    <table class="recruitment-table__inner">
                        <tbody>
                            <tr class="recruitment-table__row">
                                <th class="recruitment-table__header">対象者
                                </th>
                                <td class="recruitment-table__text">北見市・訓子府・置戸・美幌に在住の18歳以上の知的・精神・身体に障害をお持ちの方</td>
                            </tr>
                            <tr class="recruitment-table__row">
                                <th class="recruitment-table__header">定員
                                </th>
                                <td class="recruitment-table__text">就労継続支援B型／20名</td>
                            </tr>
                            <tr class="recruitment-table__row">
                                <th class="recruitment-table__header">営業日
                                </th>
                                <td class="recruitment-table__text">月曜日 〜 金曜日（祝日含む）</td>
                            </tr>
                            <tr class="recruitment-table__row">
                                <th class="recruitment-table__header">時間
                                </th>
                                <td class="recruitment-table__text">午前 9:30 から 午後 4:00</td>
                            </tr>
                            <tr class="recruitment-table__row">
                                <th class="recruitment-table__header">お食事</th>
                                <td class="recruitment-table__text">昼食代　200円／1食<br>
                                    ※食事希望の方のみ</td>
                            </tr>
                            <tr class="recruitment-table__row">
                                <th class="recruitment-table__header">送迎</th>
                                <td class="recruitment-table__text">ご自宅から施設への送迎対応は行なっておりません。<br>
                                    利用者様用の駐車場はございません。</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.recruitment-table -->
                <p class="personal-information"><span>※個人情報の取り扱いについて</span><br>
                    サービスの提供にあたり知り得た個人情報の取り扱いについては、関係者以外に決して漏れることのないよう細心の注意を払い適切に使用させて頂きます。</p>
            </section>
            <!-- /.recruitment -->
            <div class="center-wrapper">
                <section class="faq" id="faq">
                    <h2 class="chapter-title">Q&amp;A</h2>
                    <dl class="accordion">
                        <div class="accordion__wrapper">
                            <dt class="accordion__title">
                                <button class="accordion__btn accordion__btn--active" type="button">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, fugiat.</button>
                            </dt>
                            <dd class="accordion__body">
                                <p class="accordion__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aperiam facere est quam impedit eum totam, laudantium nemo in nostrum.
                                </p>
                            </dd>
                        </div>
                        <!-- /.accordion__wrapper -->
                        <div class="accordion__wrapper">
                            <dt class="accordion__title">
                                <button class="accordion__btn" type="button">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, optio.</button>
                            </dt>
                            <dd class="accordion__body">
                                <p class="accordion__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quidem. Consectetur laborum ex, cum officiis aperiam itaque distinctio commodi corporis.
                                </p>
                            </dd>
                        </div>
                        <!-- /.accordion__wrapper -->
                        <div class="accordion__wrapper">
                            <dt class="accordion__title">
                                <button class="accordion__btn" type="button">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, optio.</button>
                            </dt>
                            <dd class="accordion__body">
                                <p class="accordion__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quidem. Consectetur laborum ex, cum officiis aperiam itaque distinctio commodi corporis.
                                </p>
                            </dd>
                        </div>
                        <!-- /.accordion__wrapper -->
                        <div class="accordion__wrapper">
                            <dt class="accordion__title">
                                <button class="accordion__btn" type="button">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, optio.</button>
                            </dt>
                            <dd class="accordion__body">
                                <p class="accordion__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, quidem. Consectetur laborum ex, cum officiis aperiam itaque distinctio commodi corporis.
                                </p>
                            </dd>
                        </div>
                        <!-- /.accordion__wrapper -->
                    </dl>
                </section>
                <!-- /.faq -->
            </div>

        </div>
        <!-- /.switching-video-wrapper -->
        <section class="access" id="access">
            <h2 class="chapter-title">アクセス</h2>
            <div class="address">
                <span>所　在　地</span>
                <p class="location">〒090-0037 北海道北見市山下町3丁目2-22</p>
            </div>
            <!-- /.address-->
            <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.457698349733!2d143.88620150000006!3d43.804864800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f6d5788622c5b71%3A0x398a6769ac0235d5!2z5oyH5a6a5bCx5Yq057aZ57aa5pSv5o-077yi5Z6L5LqL5qWt5omAIOiBt-alreiok-e3tOOCt-OCueODhuODoCDjgrPjgrnjg6Ljgrk!5e0!3m2!1sja!2sjp!4v1609812846061!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- /.google-map -->
        </section>
        <!-- /.access -->
        <div class="end">
            <div class="end__visual">
                <video src="<?php echo get_template_directory_uri(); ?>/video/Space-end.mp4" autoplay playinline loop muted class="video2">
                </video>
            </div>

            <section class="contact" id="contact">
                <h2 class="chapter-title">お問い合わせ</h2>
                <form action="" method="post" class="form" id="form">
                    <div class="form__name">
                        <label for="name">お名前</label><span class="required">必須</span><br>
                        <input type="text" id="name" placeholder="氏名" required>
                    </div>
                    <!-- /.form__name -->

                    <div class="form__email">
                        <label for="email">メールアドレス</label><span class="required">必須</span><br>
                        <input type="email" name="email" id="email" placeholder="メールアドレス" required/>
                    </div>
                    <!-- /.form__email -->

                    <div class="form__number">
                        <label for="tel">電話番号</label><span class="required">必須</span><br>
                        <input type="tel" name="tel" id="tel" placeholder="電話番号" required/>
                    </div>
                    <!-- /.form__number -->

                    <div class="form__summary">
                        <label for="summary">お問い合わせ内容</label><span class="required">必須</span><br>
                        <select name="summary-select" id="summary">
                            <option value="">選択してください</option>
                            <option value="example1">コスモスについて知りたい</option>
                            <option value="example2">コスモスの見学を希望したい</option>
                            <option value="example3">その他</option>
                        </select>
                    </div>
                    <!-- /.form__sumary -->

                    <div class="form__detail">
                        <label for="detail">お問い合わせ詳細</label><br>
                        <textarea name="detail" id="detail" cols="30" rows="4" placeholder="例）下記日程で見学を希望します&#13;&#10;XX月XX日　10:00~&#13;&#10;XX月XX日　13:00~&#13;&#10;XX月XX日　15:00~"></textarea>
                    </div>
                    <!-- /.form__detail -->

                    <div class="submit-btn">
                        <input type="submit" id="submit" value="送信する" disabled />
                        <p class="thanks-message">お問い合せありがとうございます</p>
                    </div>
                    <!-- /.submit-btn -->

                </form>
            </section>
            <!-- /.contact -->
        </div>
        <!-- /.end -->
        <div id="scroll-top"></div>
        <!-- /#scroll-top -->
    </article>
</main>

<?php get_footer(); ?>
