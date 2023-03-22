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
      <?php if(have_posts()): while(have_posts()): the_post();?>
      <div class="Sec-title">
        <span></span>
        <h2>
          <?php the_title(); ?>
        </h2>
      </div>

      <div class="container">
        <div class="SingleInner__Text">



          <h3><?php the_content(); ?></h3>


          <div class="SingleInner__TextSpan">
            <span><?php the_field('注意書き'); ?></span>
          </div>

          <!-- Item 1 -->

          <div class="Sec-title">
            <span></span>
            <h2>
              <?php the_field('title1'); ?>
            </h2>
          </div>

          <div class="SingleInner__TextBottom">

            <div class="SingleInner__TextBottomLeft">
              <p><?php the_field('内容1'); ?></p>
            </div>
            <div class="SingleInner__TextBottomRight">
              <h4><?php the_field('電話1'); ?></h4>
              <p>受付時間：<?php the_field('受付時間1'); ?></p>
            </div>

          </div>

          <!-- Item2 -->

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