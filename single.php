<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
<?php get_header(); ?>



<section class="news">
  <div class="inner">
    <?php get_header(); ?>
    <?php if (have_posts()) : the_post(); ?>
      <article class="news-article">
        <p class="news-article-date"><?php echo get_the_date('Y-m-d'); ?><span class="news-article-date-new">New</span></p>
        <h3 class="news-article-title"><?php the_title(); ?></h3>
        <div class="news-article-thumbnail">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-noimages.png" alt="no-img">
          <?php endif; ?>
          <!-- <img src="img/news-single-thumbnail.jpg" alt=""> -->
        </div>
        <div class="news-article-text">
          <?php the_content(); ?>
          <!-- <p>こんにちは！株式会社etsra人事部の山蔭です。<br>
          今estraの募集を見て、どんな会社なのかな？と思っている方。<br>
          弊社で働くイメージを持って頂くために、オフィスをご紹介致します！</p>
        <p>代々木にある弊社オフィスは昨年12月に移転したばかりで、とても綺麗です！<br>
          私の自慢のオフィスですので、どうぞご覧ください！</p>

        <p>【エントランス】到着した方は、こちらにて受付をお願いします！</p>
        <p>【受付】では、受付します！</p>
        <img class="news-article-text-img" src="img/news-article1.png" alt="">

        <p>【会議室】ここで経営会議、部署会議などみんなで集まり、会議の場として使用しています！</p>
        <img class="news-article-text-img" src="img/news-article2.png" alt="">

        <p>【メインルーム】弊社ではフリーアドレススタイルなので、どこに座ってもOKです！</p>
        <img class="news-article-text-img" src="img/news-article3.png" alt="">

        <p>【集中ルーム】ここはオンライン面談や集中したい時に使用しています！</p>
        <img class="news-article-text-img" src="img/news-article4.png" alt="">

        <p>【休憩スペース】みんなでよく息抜きしつつ、おしゃべりをします！</p>
        <img class="news-article-text-img" src="img/news-article5.png" alt="">

        <p>【会議スペース】会議をするお部屋です！</p>
        <img class="news-article-text-img" src="img/news-article6.png" alt="">

        <p>以上、オフィス紹介でした！estraで働くイメージは湧きましたでしょうか？</p>
        <p>気になった方、是非ご連絡くださいませ！</p> -->
          <hr>
        </div>
        <div class="news-article-rel">
          <a href="" class="news-article-rel-prev">PREV</a>
          <a href="<?php echo home_url("news"); ?>" class="news-article-rel-totop">ニュース一覧へ</a>
        </div>
      <?php endif; ?>
      </article>
  </div>
</section>

<div class="section-title">
  <h2 class="section-title-main">その他のニュース</h2>
  <p class="section-title-sub">Other Topics</p>
</div>
<div class="new inner60">
  <?php
  $args = array(
    'posts_per_page' => 3 // 表示件数の指定
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
        <h2 class="new-container-desc-title"><?php the_title(); ?></h2>
      </div>
    </a>
  <?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
  ?>
</div>

<section class="contact">
  <div class="section-title">
    <h2 class="section-title-en">Contact</h2>
    <p class="section-title-ja">お問い合わせ</p>
    <p class="section-title-p">採用に関するご質問、その他のお問い合わせ、お気軽にお問い合わせください。</p>
  </div>
  <div class="contact-flex">
    <a href="<?php echo home_url("service"); ?>" class="section-btn">採用情報はこちら</a>
    <a href="<?php echo home_url("contact"); ?>" class="section-btn section-btn-navy">お問い合わせフォームへ</a>
  </div>
  <p class="contact-desc">記入内容の確認後、2~3営業日以内にご連絡させていただきます。<br>
    お気軽にお問い合わせください。</p>
</section>

<?php get_footer(); ?>