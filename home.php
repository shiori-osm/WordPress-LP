<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
<?php get_header(); ?>

<main class="section-title">
  <h2 class="section-title-main ">最新の記事</h2>
  <p class="section-title-sub">New Topics</p>
  <div class="new inner">
    <?php
    $args = array(
      'posts_per_page' => 1 // 表示件数の指定
    );
    $posts = get_posts($args);
    foreach ($posts as $post) : // ループの開始
      setup_postdata($post); // 記事データの取得
    ?>
      <a href="<?php the_permalink(); ?>" class="new-container fade-in fade-in-up">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
        <?php endif; ?>

        <div class="new-container-desc">
          <p class="new-container-desc-date"><?php echo get_the_date('Y-m-d'); ?></p>
          <h2 class="new-container"><?php the_title(); ?></h2>
        </div>
      </a>
    <?php
    endforeach; // ループの終了
    wp_reset_postdata(); // 直前のクエリを復元する
    ?>
  </div>
</main>

<section class="section-title">
  <h2 class="section-title-main fade-in fade-in-up">注目の記事</h2>
  <p class="section-title-sub fade-in fade-in-up">News and Blogs</p>
</section>


<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="article">
      <div class="inner">
        <div class="article-flex">
          <a href="<?php the_permalink(); ?>" class="article-flex-container fade-in fade-in-up">
            <div class="article-flex-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>
            </div>
            <div class="article-flex-container-desc">
              <p class="article-flex-container-desc-date"><?php echo get_the_date('Y-m-d'); ?></p>
              <h2 class="article-flex-container-desc-title"><?php the_title(); ?></h2>
            </div>
          </a>

          <!-- <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail2.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2021-10-10</p>
          <h2 class="article-flex-container-desc-title">コーポレートサイトリニューアルのお知らせ</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail3.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2011/10/19</p>
          <h2 class="article-flex-container-desc-title">新型コロナウイルス感染症に関する対応について</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail4.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">在宅期間勤務延長のお知らせ</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail5.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">年末年始休業のお知らせ</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail6.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">株主総会に関するお問い合わせについて</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail7.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">プログラミングスクールCOACHTECHがサービス開始</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail7.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">プログラミングスクール「COACHTECH」ブランドリニューアル</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail7.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">共催イベントに関するお知らせ</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail7.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">COACHTECHサービス開始より1周年</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail7.jpg" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">エンジニア交流イベント開催のお知らせ</h2>
        </div>
      </a>
      <a href="" class="article-flex-container fade-in fade-in-up">
        <img class="article-flex-container-img" src="img/news-single-thumbnail8.png" alt="">
        <div class="article-flex-container-desc">
          <p class="article-flex-container-desc-date">2020/10/10</p>
          <h2 class="article-flex-container-desc-title">COACHTECH累計利用者数200名突破</h2>
        </div>
      </a> -->
    </div>
  </div>
</article>
<?php endwhile; ?>
<?php else : ?>
<p>投稿が見つかりません。</p>
<?php endif; ?>

    <hr>

    <div class="pages">
      <a href="" class="pages-link">1</a>
    </div>

    <section class="contact">
      <div class="section-title">
        <h2 class="section-title-en fade-in fade-in-up">Contact</h2>
        <p class="section-title-ja fade-in fade-in-up">お問い合わせ</p>
        <p class="section-title-p fade-in fade-in-up">採用に関するご質問、その他のお問い合わせ、お気軽にお問い合わせください。</p>
      </div>
      <div class="contact-flex">
        <a href="<?php echo home_url("service"); ?>" class="section-btn fade-in fade-in-up">採用情報はこちら</a>
        <a href="<?php echo home_url("contact"); ?>" class="section-btn section-btn-navy fade-in fade-in-up">お問い合わせフォームへ</a>
      </div>
      <p class="contact-desc fade-in fade-in-up">記入内容の確認後、2~3営業日以内にご連絡させていただきます。<br>
        お気軽にお問い合わせください。</p>
    </section>


    <?php get_footer(); ?>