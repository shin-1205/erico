<?php get_header(); ?>

<div class="pagewrap">

  <?php get_sidebar();?>

  <!-- main start -->

  <div class="Archive">




    <section class="PageTitle">
      <li>
        <a href="<?php echo home_url('/'); ?>/">
          オリコTOP
        </a>
      </li>


      <li>
        <span></span>
        <a href="">
          <p>お知らせ一覧</p>
        </a>
      </li>
    </section>

    <section class="SingleInner">

      <div class="Sec-title">
        <span></span>
        <h2>
          お知らせ一覧
        </h2>
      </div>

      <div class="ArchiveInner">
        <div class="container">


          <?php
      $args = array(
      'post_type' => 'post',
      'posts_per_page' => 100,
      'order' => 'DESC',
      );
      $query_instance = new WP_Query($args);
      ?>
          <?php if ($query_instance->have_posts()): ?>
          <?php while ( $query_instance->have_posts()): $query_instance->the_post(); ?>

          <div class="news-item">

            <div class="news-title">
              <span><?php the_time('Y.n.j'); ?>
                </a></span>
              <h4><?php the_category(); ?></a></h4>
            </div>

            <h3><a href="<?php echo get_permalink( $id );?>"><?php the_title(); ?></a></h3>

          </div>




          <?php endwhile ?>
          <?php endif ?>
          <?php wp_reset_postdata(); ?>

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



    <!-- side bar finish -->

  </div>

</div>

<?php get_footer(); ?>