<!DOCTYPE html>
<html lang="ja">

<head>
  <title>美容室テンプレート4 | お知らせ一覧</title>
  <?php get_header(); ?>
</head>

<body>
  <div id="news-wrapper" class="superwrapper animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo inview"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo inview"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span>staff</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/recruite')); ?>"><span>recruit</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>news</span></a>
            </li>
            <li class="pc-nav-item">
              <a target="_blank" class="pc-nav-link reserve-btn"
                href="https://beauty.hotpepper.jp/"><span>reserve</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li>
            <a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a>
          </li>
          <li>
            <a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.header -->
    <div class="c-top-view">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling__2.jpg" alt="">
    </div>
    <!-- /.c-top-view -->
    <section class="c-news">
      <div class="c-container">
        <h3 class="c-news__title">
          <span class="c-txt-lr">News</span>
        </h3>
        <ul class="c-news__list">
          <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <li class="c-news__item">
              <a href="<?php the_permalink(); ?>" class="c-news__link animsition-link">
                <?php the_post_thumbnail('thumbnail'); ?>
                <span class="c-news__date"><?php echo get_the_date(); ?></span>
                <p class="c-news__tit"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- pagination -->
        <?php if( function_exists ("the_pagination")) the_pagination(); ?>
      </div>
    </section>
    <!-- /.news-top -->
    <footer class="footer">
      <div class="c-container">
        <ul class="sns item">
          <li>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
          </li>
          <li>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-3x"></i></a>
          </li>
        </ul>
        <div class="copy-right item">
          <span>&copy;RivRound.inc</span>
        </div>
      </div>
    </footer>
    <!-- /.footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">TOP</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">STAFF</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/recruite')); ?>">RECRUIT</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
          </li>
        </ul>
      </nav>
      <div class="reserve-btn-wrap">
        <div class="reserve-btn-tel">
          <h4>電話予約はこちら</h4>
          <div class="reserve-btn">
            <a href="tel:092-686-7954"><span>092-686-7954</span></a>
          </div>
        </div>
        <div class="reserve-btn-net">
          <h4>ネット予約はこちら</h4>
          <div class="reserve-btn">
            <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>