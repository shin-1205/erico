<?php get_header(); ?>

<main id="main">


  <section class="hero">


    <!-- Slider main container  -->
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/lp-enlighten-01-1360x453.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/new-normal-01-1360x453.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/apple-pay-01-1360x453.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/lp-oricocity2030-01-1360x453.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/thepointupty-01-1360x453.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/thepointpremiumgold-01-1360x450.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/crest-01-1360x453.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="https://www.orico.co.jp/common/images/bnr/other/webmeisai-01-1360x453.png" alt="">
        </div>
      </div>


      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <!-- Progressbar -->

    </div>

    <div class="swiper-progress-bar">
      <span class="slide_progress-bar"></span>

      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

    </div>





  </section>


  <section class="NewsArea">

    <div class="Newswrap">

      <div class="NewsArea__title">
        <img src="https://www.orico.co.jp/common/images/pict/pict-important-01.svg" alt="">
        <h2>重要なお知らせ</h2>
      </div>

      <div class="NewsArea__list">



        <?php
        $args = array(
        'post_type' => 'post',
        'category_name' => 'important', // カテゴリをスラッグで指定する場合
        'posts_per_page' => 3,
        'order' => 'DESC',
        );
        $query_instance = new WP_Query($args);
        ?>
        <?php if ($query_instance->have_posts()): ?>
        <?php while ( $query_instance->have_posts()): $query_instance->the_post(); ?>

        <dl class="NewsArea__listItem">

          <dt>
            <?php the_time('Y年m月d日'); ?>
          </dt>
          <dd>
            <a href="<?php echo get_permalink( $id );?>">
              <?php the_title(); ?>
            </a>
          </dd>

        </dl>

        <?php endwhile ?>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>






      </div>

    </div>

  </section>


  <section class="CardArea">

    <div class="wrapper">

      <div class="CardArea__title">
        <div class="CardArea__titleImg">
          <img src="https://www.orico.co.jp/common/images/pict/pict-info-01.svg" alt="">
        </div>
        <h2>新たにカードの申し込みご検討の方</h2>
      </div>

      <div class="CardArea__list">

        <div class="CardArea__listInner">

          <div class="CardArea__listImage">
            <img src="https://www.orico.co.jp/common/images/card/thepoint/thepoint-01-mastercard.png" alt="">
          </div>

          <div class="CardArea__listTitle">
            Orico Card THE POINT
          </div>

          <div class="CardArea__listDescription">
            年会費無料のポイント高還元率カード
          </div>

        </div>


        <div class="CardArea__listInner">

          <div class="CardArea__listImage">
            <img
              src="https://www.orico.co.jp/common/images/card/thepointpremiumgold/thepointpremiumgold-01-mastercard.png"
              alt="">
          </div>

          <div class="CardArea__listTitle">
            Orico Card THE POINT <br>
            PREMIUM GOLD
          </div>

          <div class="CardArea__listDescription">
            オリコポイントがたまる高還元率カード
          </div>

        </div>
        <div class="CardArea__listInner">

          <div class="CardArea__listImage">
            <img src="https://www.orico.co.jp/common/images/card/thepointupty/thepointupty-01-master.png" alt="">
          </div>

          <div class="CardArea__listTitle">
            Orico Card THE POINT UPty
          </div>

          <div class="CardArea__listDescription">
            リボ払い専用！自由払い型のポイント高還元率カード
          </div>

        </div>
        <div class="CardArea__listInner">

          <div class="CardArea__listImage">
            <img src="https://www.orico.co.jp/common/images/card/platinum/platinum-01-mastercard.png" alt="">
          </div>

          <div class="CardArea__listTitle">
            Orico Card THE PLATNIUM
          </div>

          <div class="CardArea__listDescription">
            最強パフォーマンス！『Orico Card THE PLATNIUM』
          </div>

        </div>

      </div>
    </div>



    <div class="CardArea__btn">

      <div class="btn">
        <a href="">
          <span>
            ぴったりのクレジットカードを探す
          </span>
        </a>
      </div>

      <div class="btn">
        <a href="">
          <span>
            クレジットカードについて知る
          </span>
        </a>
      </div>

    </div>

  </section>


  <section class="ArticleArea">

    <div class="wrapper">


      <div class="ArticleArea__title">
        <div class="ArticleArea__titleImg">
          <img src="https://www.orico.co.jp/common/images/pict/pict-recommend-02.svg" alt="">
        </div>
        <h2>おすすめ情報</h2>
      </div>

    </div>

    <article class="ArticleArea__card">

      <div class="ArticleArea__cardList">
        <a href="#">

          <div class="ArticleArea__cardImage">
            <img src="https://www.orico.co.jp/common/images/bnr/campaign/200901-mynumbercardpoint-01-860x534.png"
              alt="">
          </div>
          <div class="ArticleArea__cardDate">
            期間：2022/1/1〜2023/5/31
          </div>
          <div class="ArticleArea__cardTitle">
            <p>マイナポイント事業</p>
          </div>

        </a>
      </div>


      <div class="ArticleArea__cardList">
        <a href="#">

          <div class="ArticleArea__cardImage">
            <img src="https://www.orico.co.jp/common/images/bnr/campaign/2301170416-thanksgiving-01-860x534.jpg" alt="">
          </div>
          <div class="ArticleArea__cardDate">
            期間：2022/1/1〜2023/5/31
          </div>
          <div class="ArticleArea__cardTitle">
            <p>マイナポイント事業</p>
          </div>

        </a>
      </div>


      <div class="ArticleArea__cardList">
        <a href="#">

          <div class="ArticleArea__cardImage">
            <img src="https://www.orico.co.jp/common/images/bnr/campaign/2210030331-sprivo-01-860x534.jpg" alt="">
          </div>
          <div class="ArticleArea__cardDate">
            期間：2022/1/1〜2023/5/31
          </div>
          <div class="ArticleArea__cardTitle">
            <p>マイナポイント事業</p>
          </div>

        </a>
      </div>


      <div class="ArticleArea__cardList">
        <a href="#">

          <div class="ArticleArea__cardImage">
            <img src="https://www.orico.co.jp/common/images/bnr/campaign/2209300531-welcome-01-860x534.jpg" alt="">
          </div>
          <div class="ArticleArea__cardDate">
            期間：2022/1/1〜2023/5/31
          </div>
          <div class="ArticleArea__cardTitle">
            <p>マイナポイント事業</p>
          </div>

        </a>
      </div>



    </article>



    <div class="ArticleArea__btn">

      <div class="btn">
        <a href="#">
          <span>
            新規入会キャンペーン
          </span>
        </a>
      </div>

      <div class="btn">
        <a href="#">
          <span>
            会員さま入会キャンペーン
          </span>
        </a>
      </div>

    </div>


    <div class="ArticleArea__topics">

      <h3>トピック・コンテンツ</h3>

      <div class="ArticleArea__topicsImage">
        <a href="">
          <img src="https://www.orico.co.jp/common/images/bnr/other/lp-oricocity2030-01-280x174.jpg" alt="">
        </a>
        <a href="">
          <img src="https://www.orico.co.jp/common/images/bnr/other/lp-enlighten-01-280x174.png" alt="">
        </a>
        <a href="">
          <img src="https://www.orico.co.jp/common/images/bnr/other/oricotori-01-280x174.jpg" alt="">
        </a>
        <a href="">
          <img src="https://www.orico.co.jp/common/images/bnr/other/furusato-01-280x174.jpg" alt="">
        </a>
      </div>


    </div>



  </section>


  <section class="LoginArea">

    <div class="wrapper">

      <div class="LoginArea__title">
        <div class="LoginArea__titleImg">
          <img src="https://www.orico.co.jp/common/images/pict/pict-card-03.svg" alt="">
        </div>
        <h2>
          すでにカードをお持ちの方
        </h2>
      </div>


      <div class="LoginArea__bottom">


        <!-- left -->

        <div class="LoginArea__bottomLeft">

          <div class="LoginArea__bottomLeftWrap">


            <img src="https://www.orico.co.jp/common/images/logo/e-orico/e-orico-02.svg" alt="">
            <h3>ご利用明細の確認、ポイント(スマイル)の交換、各種手続きなどインターネットで簡単にできます。</h3>


            <div class="LoginArea__bottomLeftOrico">
              <span>
                <a href="">
                  eオリコサービスとは
                </a>
              </span>
            </div>



            <a class="LoginArea__bottomLeftButton">
              <p href="" class="LoginArea__bottomLeftButton1">
                ログインする
              </p>
              <img src="https://www.orico.co.jp/common/images/icon/icon-window-02.svg" alt="">

            </a>


            <a class="LoginArea__bottomLeftButton">
              <p href="" class="LoginArea__bottomLeftButton2">

                ご利用登録
              </p>
              <img src="https://www.orico.co.jp/common/images/icon/icon-window-01.svg" alt="">

            </a>


            <div class="LoginArea__bottomLeftLink">

              <a href="">
                <span>登録方法</span>
              </a>

              <a href="">
                <span>ログインできない方</span>
              </a>

            </div>
          </div>
        </div>



        <!-- right -->

        <div class="LoginArea__bottomRight">

          <div class="LoginArea__bottomRightCard">

            <div class="LoginArea__bottomRightCardTitle">
              <img src="https://www.orico.co.jp/common/images/pict/pict-point-03.svg" alt="">
              <h3>ためたポイントを使う</h3>
            </div>

            <div class="LoginArea__bottomRightCardImage">
              <img class="img-pc" src="https://www.orico.co.jp/common/images/logo/oricopoint/oricopoint-02-430x534.jpg"
                alt="PC表示">
              <img class="img-sp" src="https://www.orico.co.jp/common/images/logo/oricopoint/oricopoint-02-860x534.jpg"
                alt="SP表示">
            </div>

            <div class="LoginArea__bottomRightCardName">
              <h4>
                オリコポイントゲートウェイ
              </h4>
              <img src="https://www.orico.co.jp/common/images/icon/icon-window-01.svg" alt="">
            </div>

            <div class="LoginArea__bottomRightCardText">
              ためたオリコポイントを、いろいろポイントやギフト券に交換できます！
            </div>

          </div>

          <div class="LoginArea__bottomRightCard">

            <div class="LoginArea__bottomRightCardTitle">
              <img src="https://www.orico.co.jp/common/images/pict/pict-point-05.svg" alt="">
              <h3>ポイントをためる</h3>
            </div>

            <div class="LoginArea__bottomRightCardImage">
              <img class="img-pc" src="https://www.orico.co.jp/common/images/logo/orico-mall/orico-mall-01-430x534.jpg"
                alt="PC表示">
              <img class="img-sp" src="https://www.orico.co.jp/common/images/logo/orico-mall/orico-mall-01-860x534.jpg"
                alt="SP表示">
            </div>

            <div class="LoginArea__bottomRightCardName">
              <h4>
                オリコモール
              </h4>
              <img src="https://www.orico.co.jp/common/images/icon/icon-window-01.svg" alt="">
            </div>

            <div class="LoginArea__bottomRightCardText">
              オリコモール経由のショッピングでポイントをおトクにためよう！
            </div>

          </div>

        </div>


      </div>


      <div class="LoginArea__app">


        <div class="LoginArea__appImage">
          <div class="LoginArea__appImageWrap">

            <div class="LoginArea__appImageIcon">
              <img src="https://www.orico.co.jp/common/images/logo/app/app-01.png" alt="">
            </div>


            <div class="LoginArea__appImageText">
              <h3>
                オリコ更新アプリをダウンロード
              </h3>
              <p>
                ご請求総額やご利用明細の確認はもちろんたまったポイントもラクラク管理!
              </p>
            </div>
          </div>

          <div class="LoginArea__appImageBtn">

            <a href="">
              <img src="https://www.orico.co.jp/common/images/logo/applestore/applestore-01.svg" alt="">
            </a>

            <a href="">
              <img src="https://www.orico.co.jp/common/images/logo/googlestore/googlestore-01.svg" alt="">
            </a>
          </div>
        </div>


        <div class="LoginArea__appDiscript">

          <div class="LinkTextArrow">
            <a href="">
              <span>
                オリコ更新アプリについて
              </span>
            </a>
          </div>

          <div class="LoginArea__appDiscript">
            <p>
              ※　Apple、Apple ロゴ、iPhoneは米国および他の国々で登録された Apple Inc. の商標です。
            </p>
            <p>
              ※　App Store は Apple Inc. のサービスマークです。
            </p>
            <p>
              ※　Android、Google PlayはGoogle LLCの商標または登録商標です。
            </p>
          </div>

        </div>


        <div class="LoginArea__appBtn">
          <div class="btn">
            <a href="#">
              よくある質問はこちらから
              <img src="https://www.orico.co.jp/common/images/icon/icon-window-01.svg" alt="">
            </a>
          </div>
        </div>

      </div>

    </div>

  </section>

  <section class="NewsArea1">

    <div class="container">


      <div class="NewsArea1__tab">



        <?php
         $add_post = 'post';     // カスタム投稿のスラッグ
         $add_cat = 'category';  // カテゴリー（タクソノミー）のスラッグ
         ?>
        <div class="tab">

          <ul class="tab-catList">

            <div class="NewsArea1__1">
              <div class="NewsArea1__1Img">
                <img src="https://www.orico.co.jp/common/images/pict/pict-news-01.svg" alt="">
              </div>
              <h2>お知らせ</h2>
            </div>

            <div class="TabBox">
              <?php /*------- すべて -------*/ ?>
              <li><span>すべて</span></li>
              <?php /*------- 各カテゴリー -------*/ ?>
              <?php
                 $terms = get_terms($add_cat);
                 foreach ((array)$terms as $term) : ?>
              <li><span><?php echo $term->name; ?></span></li>
              <?php endforeach; ?>
            </div>
          </ul>


          <?php /*------- すべて -------*/ ?>
          <div class="tab-box">
            <?php
              $args = array(
                'post_type' => $add_post,
                'posts_per_page' => 6,
              );
              ?>
            <?php $wp_query = new WP_Query($args); ?>
            <?php if ($wp_query->have_posts()) : ?>
            <ul class="tab-boxList">
              <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <li>
                <div class="tab-boxList__date">
                  <p><?php the_time('Y年m月d日'); ?></p>
                </div>
                <div class="tab-boxList__cat">
                  <?php
                $listTerms = get_the_terms($post->ID, $add_cat);
                foreach ((array)$listTerms as $listTerm) {
                  $cat_name = $listTerm->name;
                  $cat_link = get_term_link($listTerm);
                }
                ?>
                  <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
                </div>
                <div class="tab-boxList__title">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php else : ?>
            <p>このタブに記事はありません。</p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>


          <?php /*------- 各カテゴリー -------*/ ?>
          <?php
    $terms = get_terms($add_cat);
    foreach ((array)$terms as $term) : ?>
          <div class="tab-box">
            <?php
        $args = array(
          'post_type' => $add_post,
          'posts_per_page' => 6,
          'tax_query' => array(
            'relation' => 'OR',
            array(
              'taxonomy' => $add_cat,
              'terms' => $term->slug,
              'field' => 'slug',
              'operator' => 'IN'
            ),
          )
        );
        ?>
            <?php $wp_query = new WP_Query($args); ?>
            <?php if ($wp_query->have_posts()) : ?>
            <ul class="tab-boxList">
              <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <li>
                <div class="tab-boxList__date">
                  <p><?php the_time('Y年m月d日'); ?></p>
                </div>
                <div class="tab-boxList__cat">
                  <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                </div>
                <div class="tab-boxList__title">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php else : ?>
            <p>このタブに記事はありません。</p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>


      <div class="NewsArea1__Btn">
        <div class="btn">
          <a href="#">
            <a href="<?php echo home_url('/'); ?>news/">お知らせ一覧</a>
            <img src="https://www.orico.co.jp/common/images/icon/icon-window-01.svg" alt="">
          </a>
        </div>

      </div>

    </div>

  </section>

  <section class="Caution">
    <div class="wrapper">

      <div class="Caution__Inner">

        <div class="Caution__InnerLeft">
          <img src="https://www.orico.co.jp/common/images/pict/pict-attention-01.svg" alt="">
          <h2>ご注意ください</h2>
        </div>


        <div class="Caution__InnerRight">

          <div class="Caution__InnerRightTop">

            <div class="LinkTextArrow">
              <a href="">
                <span>
                  カードのご利用にあたって
                </span>
              </a>
            </div>

            <div class="LinkTextArrow">
              <a href="">
                <span>
                  カード不正使用防止に向けた当社の取組みについて
                </span>
              </a>
            </div>

          </div>

          <div class="Caution__InnerRightMid menu">

            <ul>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      商品代金全額返金の悪質手口にご注意ください
                    </span>
                  </a>
                </div>
              </li>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      当社名称及び当社の類似名称を名乗る金融業者
                    </span>
                  </a>
                </div>
              </li>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      フィッシング
                    </span>
                  </a>
                </div>
              </li>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      ご本人さま確認を実施しています
                    </span>
                  </a>
                </div>
              </li>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      貸金業法が変わりました
                    </span>
                  </a>
                </div>
              </li>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      住所変更手続きのお願い
                    </span>
                  </a>
                </div>
              </li>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      本人確認資料を紛失・盗難された場合
                    </span>
                  </a>
                </div>
              </li>

              <li>
                <div class="LinkTextCircle">
                  <a href="">
                    <span>
                      インターネットギャンブルの利用について
                    </span>
                  </a>
                </div>
              </li>

            </ul>

          </div>

          <div class="Caution__InnerRightBottom menu">


            <ul>
              <li>
                <a href="">
                  <img src="https://www.orico.co.jp/common/images/bnr/other/attention-320x100.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="https://www.orico.co.jp/common/images/bnr/other/securebrain-01-238x75.png" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="https://www.orico.co.jp/common/images/bnr/other/j-credit-01-238x75.png" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="https://www.orico.co.jp/common/images/bnr/other/customer-updates-01-238x75.png" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="https://www.orico.co.jp/common/images/bnr/other/pin-01-238x75.png" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="https://www.orico.co.jp/common/images/bnr/other/encashment-01-238x75.png" alt="">
                </a>
              </li>
            </ul>
          </div>


          <!-- SP hide button -->

          <div class="Caution__InnerRightHide menu-btn nav-open">

            <span>さらに表示</span>

          </div>


        </div>

      </div>

    </div>
  </section>

  <!-- トップに戻るリンク -->

  <div class="returnTop">
    <div class="wrapper">
      <div class="LinkTextTop">
        <a href="#">
          <span>
            ページトップ
          </span>
        </a>
      </div>
    </div>
  </div>


</main>

<?php get_footer(); ?>