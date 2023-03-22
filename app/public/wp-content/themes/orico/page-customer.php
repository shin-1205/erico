<?php get_header(); ?>

<div class="pagewrap">

  <!-- sidebar -->

  <?php get_sidebar();?>

  <!-- Customer Inner start -->

  <div class="Customer" id="main">

    <section class="PageTitle">
      <li>
        <a href="<?php echo home_url('/'); ?>/">
          エリコTOP
        </a>
      </li>


      <li>
        <span></span>
        <a href="">
          <p>お客さまサポート</p>
        </a>
      </li>
    </section>


    <section class="Hero">
      <div class="Hero__Inner">

        <div class="Hero__InnerTitle">
          <h2>お客さまサポート</h2>

          <p>お客さまへの重要なお知らせや、トラブル対処方法、よくあるご質問、お問合せ窓口などについてご案内します。</p>
        </div>

        <div class="Hero__InnerTitleSP">
          <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoHero.svg" alt="">
        </div>

        <div class="container">
          <div class="Headup">

            <div class="Headup__Inner">

              <div class="Headup__InnerTitle">
                <img src="<?php echo get_theme_file_uri(); ?>/icons/注意マークのフリーアイコン.svg" alt="">
                <h2>重要なお知らせ</h2>
              </div>

              <div class="Headup__InnerList">


                <?php
                 $args = array(
                 'post_type' => 'post',
                 'category_name' => 'important', // カテゴリをスラッグで指定する場合
                 'posts_per_page' => 2,
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
                    <a href="#">
                      <?php the_title(); ?>
                    </a>
                  </dd>

                </dl>

                <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>


              </div>

            </div>

          </div>
        </div>

        <div class="pageLink">
          <ul>
            <li><a href="#"><span>トラブル・お困りのお客さま</span></a></li>
            <li><a href="#"><span>ご用件から探す</span></a></li>
            <li><a href="#"><span>よくあるご質問</span></a></li>
            <li><a href="#"><span>お問合わせ</span></a></li>
          </ul>
        </div>

      </div>
    </section>

    <!-- 1 -->

    <section class="Loan__Already">

      <div class="Sec-title">
        <span><img src="<?php echo get_theme_file_uri(); ?>/icons/注意マークのフリーアイコン.svg" alt=""></span>
        <h2>
          トラブル・お困りのお客さま
        </h2>
      </div>

      <div class="container">

        <div class="Loan__AlreadyCard">

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/No Credit Cards.svg" alt="">

              <p>カードの紛失・盗難にあった</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/Note.svg" alt="">

              <p>提携ATM/覚えのない明細がある</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/Quest.svg" alt="">

              <p>カードの暗証番号を忘れた</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/Search Chat.png" alt="">

              <p>eエリコサービスID･パスワードを忘れた</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/Money Bag.svg" alt="">

              <p>入金が間に合わなかった</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/Mobile Email.svg" alt="">

              <p>SMS(確認コード)が届かない</p>

            </a>

          </div>

        </div>

      </div>

    </section>

    <!-- 2 -->

    <section class="Loan__Already">

      <div class="Sec-title">
        <span><img src="<?php echo get_theme_file_uri(); ?>/icons/アンケート用紙のアイコン素材.svg" alt=""></span>
        <h2>
          ご用件から探す
        </h2>
      </div>

      <div class="container">

        <div class="Loan__AlreadyCard">

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Assignment.svg" alt="">

              <p>引落口座の登録・変更</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Cheque.svg" alt="">

              <p>ご利用明細・お支払い</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Paid Bill.svg" alt="">

              <p>お客さま情報の変更</p>

            </a>

          </div>


          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Sell.svg" alt="">

              <p>カードのご利用</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Create Document.svg" alt="">

              <p>カードのお申込み・更新・解約</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Debt.svg" alt="">

              <p>リボ・分割払い</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Cash Euro.svg" alt="">

              <p>キャッシング</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Return.svg" alt="">

              <p>クレジット契約のクーリング・オフ</p>

            </a>

          </div>

          <div class="Loan__AlreadyCardItem">

            <a href="">

              <img src="<?php echo get_theme_file_uri(); ?>/icons/greenicons/Internet.svg" alt="">

              <p>各種証明書のWeb申請</p>

            </a>

          </div>

        </div>

      </div>

    </section>


    <!-- Question -->

    <section class="Customer__Question">


      <div class="Sec-title">
        <span><img src="<?php echo get_theme_file_uri(); ?>/icons/Inquiry.svg" alt=""></span>
        <h2>
          よくあるご質問
        </h2>
      </div>

      <div class="container">

        <div class="LinkLeftRed">
          <a href="">
            よく見られているご質問
            <span></span>
          </a>
        </div>

        <ul>

          <li>
            <a href="">
              <span>Q</span>
              <p>eエリコサービスのID・パスワードを忘れてしまいました。</p>
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
          </li>


          <li>
            <a href="">
              <span>Q</span>
              <p>SMS（確認コード）が届きません。</p>
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
          </li>

          <li>
            <a href="">
              <span>Q</span>
              <p>可能枠一杯に利用している場合いつから利用できるようになりますか？</p>
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
          </li>

          <li>
            <a href="">
              <span>Q</span>
              <p>利用金額の一部または全額を繰上返済することはできますか？</p>
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
          </li>

          <li>
            <a href="">
              <span>Q</span>
              <p>口座引落日は何日ですか？</p>
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
          </li>

        </ul>


        <div class="Customer__QuestionSearch">

          <div class="Customer__QuestionSearchTop">

            <h3>キーワード検索</h3>

            <div class="Customer__QuestionSearchTopBox">

              <div class="Customer__QuestionSearchTopBoxLeft">

                <input type="text">
                <img src="<?php echo get_theme_file_uri(); ?>/icons/検索用の虫眼鏡アイコン素材.svg" alt="">

              </div>
              <div class="Customer__QuestionSearchTopBoxRight">
                <a href="">
                  検索
                </a>
              </div>
            </div>

          </div>

          <div class="Customer__QuestionSearchBottom">

            <div class="Customer__QuestionSearchBottomLeft">
              <h3>
                注目キーワード：
              </h3>
            </div>

            <div class="Customer__QuestionSearchBottomRight">
              <ul>
                <li>
                  <a href="">
                    入会
                  </a>
                </li>
                <li>
                  <a href="">
                    eエリコサービス
                  </a>
                </li>
                <li>
                  <a href="">
                    エリコポイント
                  </a>
                </li>
                <li>
                  <a href="">
                    暮らスマイル
                  </a>
                </li>
                <li>
                  <a href="">
                    カードローン
                  </a>
                </li>
                <li>
                  <a href="">
                    ETCカード
                  </a>
                </li>
                <li>
                  <a href="">
                    プリペイドカード
                  </a>
                </li>
                <li>
                  <a href="">
                    解約
                  </a>
                </li>

              </ul>

            </div>

          </div>


        </div>

        <div class="Customer__QuestionBtn">
          <div class="btn">
            <a href="#">
              すべてのご質問をみる
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
          </div>

        </div>


    </section>


    <!-- Support -->

    <section class="Customer__Support">

      <div class="Loan__Already">

        <div class="Sec-title">
          <span><img src="<?php echo get_theme_file_uri(); ?>/icons/Internal Call.svg" alt=""></span>
          <h2>
            お困りのお客さま
          </h2>
        </div>

        <div class="container">

          <div class="LinkLeftRed">
            <a href="">
              お問合せ窓口
              <span></span>
            </a>
          </div>

          <div class="Loan__AlreadyCard">

            <div class="Loan__AlreadyCardItem">

              <a href="">

                <img src="<?php echo get_theme_file_uri(); ?>/icons/Mobile Email.svg" alt="">

                <p>メールでのお問合せはこちら</p>

              </a>

            </div>

            <div class="Loan__AlreadyCardItem">

              <a href="">

                <img src="<?php echo get_theme_file_uri(); ?>/icons/Rotary Dial Telephone.svg" alt="">

                <p>お電話でのお問い合わせはこちら</p>

              </a>

            </div>

            <div class="Loan__AlreadyCardItem">

              <a href="">

                <img src="<?php echo get_theme_file_uri(); ?>/icons/Radio Tower.svg" alt="">

                <p>エリコテレホンサービス</p>

              </a>

            </div>

          </div>


          <div class="LinkLeftRed">
            <a href="">
              ご注意ください
              <span></span>
            </a>
          </div>

          <ul>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>当社名及び当社の類似名称を名乗る金融業者</span>
                </a>
              </div>
            </li>


            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>盗難スリ</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>「日本クレジット協会」の名称を使用した詐欺行為にご注意ください！</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>架空請求</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>警察・カード会社を装う電話にご注意ください！</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>悪徳商法</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>商品代金全額返金の悪質手口にご注意ください！</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>フィッシング</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>スキミング</span>
                </a>
              </div>
            </li>

            <li>
              <div class="TextLeftCircle">
                <a href="">
                  <span>ショッピング枠の現金化</span>
                </a>
              </div>
            </li>

          </ul>

          <article>
            <div class="LinkLeftRed">
              <a href="">
                成人を迎えられた18歳、19歳の方へ
                <span></span>
              </a>
            </div>

            <div class="Box">

              <div class="Left">

                <h3>クレジットの正しい知識と使い方を学びましょう</h3>
                <p>
                  2022年4月1日から成年年齢が引き下げられ、18歳からクレジットカードや一部ローンの契約が一人でできるようになりました。契約をするその前に！消費者トラブルに巻き込まれないために正しい知識を身に付けましょう。
                </p>

                <div class="LinkTextArrow">

                  <a href="">
                    <span>
                      「18歳になったら...何ができる？」を見る
                    </span>
                  </a>

                </div>

              </div>

              <div class="Right">

                <img src="<?php echo get_theme_file_uri(); ?>/icons/Erico1819.png" alt="">

              </div>

            </div>

          </article>

          <article>
            <div class="LinkLeftRed">
              <a href="">
                エリコの取組み
                <span></span>
              </a>
            </div>


            <ul>

              <li>
                <div class="TextLeftCircle">
                  <a href="">
                    <span>お客さまの声にお応えして</span>
                  </a>
                </div>
              </li>


              <li>
                <div class="TextLeftCircle">
                  <a href="">
                    <span>カード不正使用防止に向けた当社取組みについて</span>
                  </a>
                </div>
              </li>

              <li>
                <div class="TextLeftCircle">
                  <a href="">
                    <span>不正検知システムの導入</span>
                  </a>
                </div>
              </li>

              <li>
                <div class="TextLeftCircle">
                  <a href="">
                    <span>ご本人さま確認を実施しています</span>
                  </a>
                </div>
              </li>

            </ul>



          </article>

        </div>

      </div>

    </section>


    <div class="returnTop">
      <div class="wrapper">
        <div class="LinkTextTop">
          <a href="#top">
            <span>
              ページトップ
            </span>
          </a>
        </div>
      </div>
    </div>



  </div>

  <!-- Customer Inner finish -->

</div>

<?php get_footer(); ?>