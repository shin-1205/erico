<?php get_header(); ?>

<div class="pagewrap">

  <!-- side bar start -->

  <?php get_sidebar();?>

  <!-- main start -->

  <div class="Single">




    <section class="PageTitle">
      <li>
        <a href="<?php echo home_url('/'); ?>/">
          エリコTOP
        </a>
      </li>


      <li>
        <span></span>
        <a href="">
          <p>詳細ページ</p>
        </a>
      </li>
    </section>

    <section class="SingleInner">

      <div class="Sec-title">
        <span><img src="<?php echo get_theme_file_uri(); ?>/icons/注意マークのフリーアイコン.svg" alt=""></span>
        <h2>
          トラブル・お困りのお客さま
        </h2>
      </div>

      <div class="container">
        <div class="SingleInner__Text">
          <?php if(have_posts()): while(have_posts()): the_post();?>


          <h3>このたびの令和5年1月24日からの大雪により被害を受けられた地域の皆さまに、謹んでお見舞い申しあげます。<br>
            弊社では、被害を受けられたお客さまからのお問合せ、ご相談を承っております。<br>
            ご不便やお困りのことがございましたら、下記までお問合せのほどお願い申しあげます。<br>
            なお、お電話がつながりにくい場合もございます。何卒ご了承をお願いいたします。</h3>


          <div class="SingleInner__TextSpan">
            <span>当社は電話リレーサービスに対応しています。</span>
          </div>

          <!-- Item 1 -->

          <div class="Sec-title">
            <span></span>
            <h2>
              お支払いに関するご相談・お問合せ
            </h2>
          </div>

          <div class="SingleInner__TextBottom">

            <div class="SingleInner__TextBottomLeft">
              <p>お客さま相談室（被害を受けられた方専用）</p>
            </div>
            <div class="SingleInner__TextBottomRight">
              <h4>0120-306-182</h4>
              <p>受付時間：9:30～17:30（但し、土・日・祝日を除く）</p>
            </div>

          </div>

          <!-- Item2 -->

          <div class="Sec-title">
            <span></span>
            <h2>
              カード会員さま
            </h2>
          </div>

          <div class="SingleInner__TextBottom">

            <div class="SingleInner__TextBottomLeft">
              <p>紛失盗難ダイヤル（被害を受けられた方専用）</p>
            </div>
            <div class="SingleInner__TextBottomRight">
              <h4>0120-548-400</h4>
              <p>受付時間：24時間・年中無休</p>
            </div>

          </div>

          <?php endwhile; endif; ?>



        </div>

        <div class="SingleInner__Btn">
          <div class="btn">
            <a href="#">
              <a href="<?php echo home_url('/'); ?>news/">お知らせ一覧に戻る</a>
              <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
            </a>
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


    <!-- main finish -->

  </div>

  <!-- side bar finish -->

</div>

<?php get_footer(); ?>