<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/icons/EricoFab.png">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />



  <title>Erico</title>


  <?php wp_head(); ?>
</head>

<body>

  <header id="#top">
    <div class="l-header">


      <div class="l-header__loginSP">

        <a href="">
          <img src="https://www.orico.co.jp/common/images/icon/icon-login-01.svg" alt="">
          <p>ログイン</p>
        </a>

      </div>



      <div class="l-header__logo">
        <a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/icons/Erico3.png" alt="">
        </a>
      </div>

      <nav class="l-header__nav">
        <ul class="l-header__navTop">

          <li class="l-header__navTopItem">
            <a href="#">
              <span>
                法人・個人事業主のお客さま
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </span>
            </a>
          </li>


          <li class="l-header__navTopItem">
            <a href="#">
              <span>
                加盟店サービス
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </span>
            </a>
          </li>

          <li class="l-header__navTopItem">
            <a href="#">
              <span>
                企業情報サイト
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </span>
            </a>
          </li>

          <li class="l-header__navTopItem">
            <a class="l-header__navTopItemSearch" href="#">
              <input type="text" placeholder="サイト内検索">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/検索用の虫眼鏡アイコン素材.svg" alt="">

            </a>
          </li>

        </ul>

        <ul class="l-header__navBottom tab">
          <li class="l-header__navBottomItem active">
            <a href="<?php echo home_url('/'); ?>" class="active">
              <span>
                トップ
              </span>
            </a>
          </li>
          <li class="l-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>creditcard/">
              <span>
                クレジットカード
              </span>
            </a>
          </li>
          <li class="l-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>loan/">
              <span>
                ローン
              </span>
            </a>
          </li>
          <li class="l-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>customer/">
              <span>
                お客さまサポート
              </span>
            </a>
          </li>
          <li class="l-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>service/">
              <span>
                便利なサービス
              </span>
            </a>
          </li>
        </ul>

      </nav>

      <div class="l-header__login">
        <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoBlack.png" alt="">
        <p>会員の方</p>
        <a href="">
          ログインする

          <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙.svg" alt="">
        </a>
      </div>



      <!-- search bar -->

      <ul class="l-header__Search">
        <input type="text" placeholder="サイト内検索">
        <span></span>
      </ul>

      <!-- toggle -->

      <div class="l-header__Toggle">
        <div class="btn-trigger" id="btn01">
          <span></span>
          <span></span>
          <span></span>

          <p>メニュー</p>

        </div>

      </div>



    </div>



    <div class="s-header product-popup">

      <div class="s-header__logo">
        <a href="#">
          <img src="<?php echo get_theme_file_uri(); ?>/icons/Erico3.png" alt="">
        </a>
      </div>

      <nav class="s-header__nav">
        <ul class="s-header__navTop">

          <li class="s-header__navTopItem">
            <a href="#">
              <span>
                法人・個人事業主のお客さま
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </span>
            </a>
          </li>


          <li class="s-header__navTopItem">
            <a href="#">
              <span>
                加盟店サービス
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </span>
            </a>
          </li>

          <li class="s-header__navTopItem">
            <a href="#">
              <span>
                企業情報サイト
                <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙の書類ファイルアイコン.svg" alt="">
              </span>
            </a>
          </li>

          <li class="s-header__navTopItem">
            <a class="s-header__navTopItemSearch" href="#">
              <input type="text" placeholder="サイト内検索">
              <img src="<?php echo get_theme_file_uri(); ?>/icons/検索用の虫眼鏡アイコン素材.svg" alt="">

            </a>
          </li>

        </ul>

        <ul class="s-header__navBottom tab">
          <li class="s-header__navBottomItem active">
            <a href="#" class="active">
              <span>
                トップ
              </span>
            </a>
          </li>
          <li class="s-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>creditcard/">
              <span>
                クレジットカード
              </span>
            </a>
          </li>
          <li class="s-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>loan/">
              <span>
                ローン
              </span>
            </a>
          </li>
          <li class="s-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>customer/">
              <span>
                お客さまサポート
              </span>
            </a>
          </li>
          <li class="s-header__navBottomItem">
            <a href="<?php echo home_url('/'); ?>service/">
              <span>
                便利なサービス
              </span>
            </a>
          </li>
        </ul>

      </nav>

      <div class="s-header__login">
        <img src="<?php echo get_theme_file_uri(); ?>/icons/EricoWhite.png" alt="">

        <a href="">
          ログインする

          <img src="<?php echo get_theme_file_uri(); ?>/icons/白紙.svg" alt="">
        </a>
      </div>

    </div>



  </header>