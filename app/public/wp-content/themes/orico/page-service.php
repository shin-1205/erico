<?php get_header(); ?>

<div class="pagewrap">

  <!-- sidebar -->

  <?php get_sidebar();?>

  <!-- loan Inner start -->

  <div class="Loan">

    <section class="PageTitle">
      <li>
        <a href="<?php echo home_url('/'); ?>/">
          オリコTOP
        </a>
      </li>


      <li>
        <span></span>
        <a href="">
          <p>ローン</p>
        </a>
      </li>
    </section>


    <section class="Hero">
      <div class="Hero__Inner">

        <div class="Hero__InnerTitle">
          <h2>便利なサービス</h2>

          <p>意外と知らない、さまざまなサービスについてご紹介いたします。</p>
        </div>

        <div class="Hero__InnerTitleSP">
          <img src="https://www.orico.co.jp/common/images/hdg/hdg-service-01.jpg" alt="">
        </div>

        <div class="pageLink">
          <ul>
            <li><a href="#"><span>〇〇別に見るあなたにぴったりのカード</span></a></li>
            <li><a href="#"><span>こんな時に便利なオリコのサービス</span></a></li>
            <li><a href="#"><span>あらゆるお支払いに</span></a></li>
            <li><a href="#"><span>なるほど豆知識</span></a></li>
            <li><a href="#"><span>クレジット大辞典</span></a></li>
          </ul>
        </div>

      </div>
    </section>


  </div>

  <!-- loan Inner finish -->

</div>

<?php get_footer(); ?>