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
          <img src="https://www.orico.co.jp/common/images/hdg/hdg-support-01.jpg" alt="">
        </div>

        <section class="NewsArea">

          <div class="Newswrap">

            <div class="NewsArea__title">
              <img src="https://www.orico.co.jp/common/images/pict/pict-important-01.svg" alt="">
              <h2>重要なお知らせ</h2>
            </div>

            <div class="NewsArea__list">

              <dl class="NewsArea__listItem">
                <dt>
                  2023年02月27日
                </dt>
                <dd>
                  <a href="#">
                    オリコをカルタフィッシングサイトの発生について
                  </a>
                </dd>
              </dl>

              <dl class="NewsArea__listItem">
                <dt>
                  2023年02月27日
                </dt>
                <dd>
                  <a href="#">
                    令和4年12月17日からの大雪により被害を受けられた地域の皆さまへ
                  </a>
                </dd>
              </dl>

            </div>

          </div>

        </section>

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


  </div>

  <!-- loan Inner finish -->

</div>

<?php get_footer(); ?>