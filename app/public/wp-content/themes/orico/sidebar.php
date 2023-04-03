<!-- sidebar -->

<div class="sidebar">
  <div class="sidebar__Inner">


    <?php if(is_home() || is_front_page()): ?>

    <ul>
      <li><a href="<?php echo home_url('/'); ?>/">トップ</a></li>
      <li><a href="<?php echo home_url('/'); ?>news/">お知らせ一覧</a></li>
      <li><a href="<?php echo home_url('/'); ?>creditcard/">クレジットカード</a></li>
      <li><a href="<?php echo home_url('/'); ?>loan/">ローン</a></li>
      <li><a href="<?php echo home_url('/'); ?>customer/">お客さまサポート</a></li>
      <li><a href="<?php echo home_url('/'); ?>service/">サービス</a></li>
    </ul>

    <?php elseif(is_page('creditcard')): ?>

    <ul>
      <li><a href="<?php echo home_url('/'); ?>/">トップ <br>(クレジットページ用)</a></li>
      <li><a href="<?php echo home_url('/'); ?>news/">お知らせ一覧</a></li>
      <li><a href="<?php echo home_url('/'); ?>creditcard/">クレジットカード</a></li>
      <li><a href="<?php echo home_url('/'); ?>loan/">ローン</a></li>
      <li><a href="<?php echo home_url('/'); ?>customer/">お客さまサポート</a></li>
      <li><a href="<?php echo home_url('/'); ?>service/">サービス</a></li>
    </ul>

    <?php elseif(is_page('loan')): ?>

    <ul>
      <li><a href="<?php echo home_url('/'); ?>/">トップ <br>(ローンページ用)</a></li>
      <li><a href="<?php echo home_url('/'); ?>news/">お知らせ一覧</a></li>
      <li><a href="<?php echo home_url('/'); ?>creditcard/">クレジットカード</a></li>
      <li><a href="<?php echo home_url('/'); ?>loan/">ローン</a></li>
      <li><a href="<?php echo home_url('/'); ?>customer/">お客さまサポート</a></li>
      <li><a href="<?php echo home_url('/'); ?>service/">サービス</a></li>
    </ul>

    <?php elseif(is_page('customer')): ?>

    <ul>
      <li><a href="<?php echo home_url('/'); ?>/">トップ <br>(お客様サポート用)</a></li>
      <li><a href="<?php echo home_url('/'); ?>news/">お知らせ一覧</a></li>
      <li><a href="<?php echo home_url('/'); ?>creditcard/">クレジットカード</a></li>
      <li><a href="<?php echo home_url('/'); ?>loan/">ローン</a></li>
      <li><a href="<?php echo home_url('/'); ?>customer/">お客さまサポート</a></li>
      <li><a href="<?php echo home_url('/'); ?>service/">サービス</a></li>
    </ul>

    <?php elseif(is_page('service')): ?>

    <ul>
      <li><a href="<?php echo home_url('/'); ?>/">トップ <br>(サービスページ用)</a></li>
      <li><a href="<?php echo home_url('/'); ?>news/">お知らせ一覧</a></li>
      <li><a href="<?php echo home_url('/'); ?>creditcard/">クレジットカード</a></li>
      <li><a href="<?php echo home_url('/'); ?>loan/">ローン</a></li>
      <li><a href="<?php echo home_url('/'); ?>customer/">お客さまサポート</a></li>
      <li><a href="<?php echo home_url('/'); ?>service/">サービス</a></li>
    </ul>

    <?php endif; ?>

  </div>
</div>