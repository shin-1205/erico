<?php get_header(); ?>

<main id="main swup">

  <div class="wrap transition-fade">

    <section class="hero">


      <!-- Slider main container  -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="<?php echo get_theme_file_uri(); ?>/icons/Banner.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoWeb2.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoCard6.png" alt="">
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
          <img src="<?php echo get_theme_file_uri(); ?>/icons/注意マークのフリーアイコン.svg" alt="">
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
            <img src="<?php echo get_theme_file_uri(); ?>/icons/おこづかいアイコン4.svg" alt="">
          </div>
          <h2>新たにカードの申し込みご検討の方</h2>
        </div>

        <div class="CardArea__list">

          <div class="CardArea__listInner">

            <div class="CardArea__listImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/Card2.png" alt="">
            </div>

            <div class="CardArea__listTitle">
              Erico Card THE POINT
            </div>

            <div class="CardArea__listDescription">
              年会費無料のポイント高還元率カード
            </div>

          </div>


          <div class="CardArea__listInner">

            <div class="CardArea__listImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/Card1.png" alt="">
            </div>

            <div class="CardArea__listTitle">
              Erico Card THE POINT <br>
              PREMIUM GOLD
            </div>

            <div class="CardArea__listDescription">
              エリコポイントがたまる高還元率カード
            </div>

          </div>
          <div class="CardArea__listInner">

            <div class="CardArea__listImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/Card3.png" alt="">
            </div>

            <div class="CardArea__listTitle">
              Erico Card THE POINT UPty
            </div>

            <div class="CardArea__listDescription">
              リボ払い専用！自由払い型のポイント高還元率カード
            </div>

          </div>
          <div class="CardArea__listInner">

            <div class="CardArea__listImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/Card3.png" alt="">
            </div>

            <div class="CardArea__listTitle">
              Erico Card THE PLATNIUM
            </div>

            <div class="CardArea__listDescription">
              最強パフォーマンス！『Erico Card THE PLATNIUM』
            </div>

          </div>

        </div>
      </div>



      <div class="CardArea__btn">

        <div class="btn">
          <a href="<?php echo home_url('/'); ?>creditcard/">
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
            <img src="<?php echo get_theme_file_uri(); ?>/icons/愛アイコン2.svg" alt="">
          </div>
          <h2>おすすめ情報</h2>
        </div>

      </div>

      <article class="ArticleArea__card">

        <div class="ArticleArea__cardList">
          <a href="#">

            <div class="ArticleArea__cardImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/mainapoint.gif" alt="">
            </div>
            <div class="ArticleArea__cardDate">
              期間：2023/3/4〜2023/6/31
            </div>
            <div class="ArticleArea__cardTitle">
              <p>マイナポイント事業</p>
            </div>

          </a>
        </div>


        <div class="ArticleArea__cardList">
          <a href="#">

            <div class="ArticleArea__cardImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/camani.gif" alt="">
            </div>
            <div class="ArticleArea__cardDate">
              期間：2023/2/1〜2023/5/25
            </div>
            <div class="ArticleArea__cardTitle">
              <p>総勢250名にあたる!リボ払いご利用キャンペーン!</p>
            </div>

          </a>
        </div>


        <div class="ArticleArea__cardList">
          <a href="#">

            <div class="ArticleArea__cardImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/giffycanvas.gif" alt="">
            </div>
            <div class="ArticleArea__cardDate">
              期間：2023/1/17〜2023/4/16
            </div>
            <div class="ArticleArea__cardTitle">
              <p>エリコ感謝祭〜第1弾〜</p>
            </div>

          </a>
        </div>


        <div class="ArticleArea__cardList">
          <a href="#">

            <div class="ArticleArea__cardImage">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/7000.gif" alt="">
            </div>
            <div class="ArticleArea__cardDate">
              期間：2023/1/1〜2024/5/31
            </div>
            <div class="ArticleArea__cardTitle">
              <p>ウェルカムキャンペーン</p>
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




    </section>


    <section class="LoginArea">

      <div class="wrapper">

        <div class="LoginArea__title">
          <div class="LoginArea__titleImg">
            <img src="<?php echo get_theme_file_uri(); ?>/icons/公文書の書類アイコン.svg" alt="">
          </div>
          <h2>
            すでにカードをお持ちの方
          </h2>
        </div>


        <div class="LoginArea__bottom">


          <!-- left -->

          <div class="LoginArea__bottomLeft">

            <div class="LoginArea__bottomLeftWrap">


              <img src="<?php echo get_theme_file_uri(); ?>/icons/e-Erico.png" alt="">
              <h3>ご利用明細の確認、ポイント(スマイル)の交換、各種手続きなどインターネットで簡単にできます。</h3>


              <div class="LoginArea__bottomLeftOrico">
                <span>
                  <a href="">
                    エリコサービスとは
                  </a>
                </span>
              </div>



              <a class="LoginArea__bottomLeftButton">
                <p href="" class="LoginArea__bottomLeftButton1">
                  ログインする
                </p>
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙.svg" alt="">

              </a>


              <a class="LoginArea__bottomLeftButton">
                <p href="" class="LoginArea__bottomLeftButton2">

                  ご利用登録
                </p>
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">

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
                <img src="<?php echo get_theme_file_uri(); ?>/icons/積み上げられたポイントアイコン.svg" alt="">
                <h3>ためたポイントを使う</h3>
              </div>

              <div class="LoginArea__bottomRightCardImage">
                <img class="img-pc" src="<?php echo get_theme_file_uri(); ?>/icons/EricoGate.png" alt="PC表示">
                <img class="img-sp" src="<?php echo get_theme_file_uri(); ?>/icons/EricoGate.png" alt="SP表示">
              </div>

              <div class="LoginArea__bottomRightCardName">
                <h4>
                  エリコポイントゲートウェイ
                </h4>
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </div>

              <div class="LoginArea__bottomRightCardText">
                エリコポイントを、いろいろポイントやギフト券に交換できます！
              </div>

            </div>

            <div class="LoginArea__bottomRightCard">

              <div class="LoginArea__bottomRightCardTitle">
                <img src="<?php echo get_theme_file_uri(); ?>/icons/ブタの貯金箱の線画アイコン.svg" alt="">
                <h3>ポイントをためる</h3>
              </div>

              <div class="LoginArea__bottomRightCardImage">
                <img class="img-pc" src="<?php echo get_theme_file_uri(); ?>/icons/E-erioco.png" alt=" PC表示">
                <img class="img-sp" src="<?php echo get_theme_file_uri(); ?>/icons/E-erioco.png" alt=" SP表示">
              </div>

              <div class="LoginArea__bottomRightCardName">
                <h4>
                  エリコモール
                </h4>
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </div>

              <div class="LoginArea__bottomRightCardText">
                エリコモール経由のショッピングでポイントをおトクにためよう！
              </div>

            </div>

          </div>


        </div>


        <div class="LoginArea__app">


          <div class="LoginArea__appImage">
            <div class="LoginArea__appImageWrap">

              <div class="LoginArea__appImageIcon">
                <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoApp.png" alt="">
              </div>


              <div class="LoginArea__appImageText">
                <h3>
                  エリコ更新アプリをダウンロード
                </h3>
                <p>
                  ご請求総額やご利用明細の確認はもちろんたまったポイントもラクラク管理!
                </p>
              </div>
            </div>

            <div class="LoginArea__appImageBtn">

              <a href="">
                <img src="<?php echo get_theme_file_uri(); ?>/icons/applestore-01.svg" alt="">
              </a>

              <a href="">
                <img src="<?php echo get_theme_file_uri(); ?>/icons/googlestore-01.svg" alt="">
              </a>
            </div>
          </div>


          <div class="LoginArea__appDiscript">

            <div class="LinkTextArrow">
              <a href="">
                <span>
                  エリコ更新アプリについて
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
                  <img src="<?php echo get_theme_file_uri(); ?>/icons/Note.svg" alt="">
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
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
          </div>

        </div>

      </div>

    </section>

    <section class="Caution">
      <div class="wrapper">

        <div class="Caution__Inner">

          <div class="Caution__InnerLeft">
            <img src="<?php echo get_theme_file_uri(); ?>/icons/注意マークのフリーアイコン.svg" alt="">
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
                    <img src="<?php echo get_theme_file_uri(); ?>/icons/CardGif.gif" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="<?php echo get_theme_file_uri(); ?>/icons/sakura.gif" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoWeb2.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoCard6.png" alt="">
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

  </div>

</main>

<?php get_footer(); ?>