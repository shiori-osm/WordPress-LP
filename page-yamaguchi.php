<?php
/*
Template Name: interview-yamaguchi
*/
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/name.css">

<?php get_header(); ?>

<main class="fv">
  <div class="fv-img">
    <img class="fv-img-img" src="<?php echo get_theme_file_uri("img/name-yamaguchi1.png"); ?>" alt="">
  </div>
</main>


<section class="name inner">
  <div class="name-flex">
    <div class="name-flex-left">
      <div class="name-flex-left-box">
        <p class="name-flex-left-box-title">営業戦略部/営業第三チーム</p>
        <p class="name-flex-left-box-name">山口太一</p>
        <p class="name-flex-left-box-join">2021年4月中途入社</p>
        <p>入社1年目の期待のエース。<br>彼女募集中。</p>
      </div>
      <div class="name-flex-left-text">
        <p class="name-flex-left-text-p">
          サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
        <p class="name-flex-left-text-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
        <p>サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
      </div>
    </div>
    <figure class="name-flex-right">
      <figcaption class="name-flex-right-caption">撮影場所：株式会社estra ワークスペース</figcaption>
      <img class="name-flex-right-img" src="<?php echo get_theme_file_uri("img/name-yamaguchi2.png"); ?>" alt="">
    </figure>
  </div>
</section>

<section class="schedule">
  <div class="section-title schedule-title">
    <h2 class="section-title-en ">Daily Schedule</h2>
    <p class="section-title-ja ">1日の流れ</p>
  </div>
  <dl class="schedule-table ">
    <dt class="schedule-table-dt">9：00</dt>
    <dd class="schedule-table-dd">リモートワーク開始<br>
      クライアント様からのメールチェック</dd>
    <dt class="schedule-table-dt">10：00</dt>
    <dd class="schedule-table-dd">サービスのKPI確認</dd>
    <dt class="schedule-table-dt">11：00</dt>
    <dd class="schedule-table-dd">会議用データのまとめ</dd>
    <dt class="schedule-table-dt">12：00</dt>
    <dd class="schedule-table-dd">昼食</dd>
    <dt class="schedule-table-dt">13：00</dt>
    <dd class="schedule-table-dd">昼食終了<br>会議用データのまとめ</dd>
    <dt class="schedule-table-dt">14：00</dt>
    <dd class="schedule-table-dd">会議<br>オンライン会議等</dd>
    <dt class="schedule-table-dt">15：00</dt>
    <dd class="schedule-table-dd">↓</dd>
    <dt class="schedule-table-dt">16：00</dt>
    <dd class="schedule-table-dd">会議<br>オンライン会議等</dd>
    <dt class="schedule-table-dt">17：00</dt>
    <dd class="schedule-table-dd">↓</dd>
    <dt class="schedule-table-dt">18：00</dt>
    <dd class="schedule-table-dd">リモートワーク終了</dd>
  </dl>
</section>

<section class="dayoff">
  <div class="section-title">
    <h2 class="section-title-en">Day Off</h2>
    <p class="section-title-ja">休日の過ごし方</p>
  </div>
  <div class="dayoff-flex inner">
    <div class="dayoff-flex-container">
      <img src="<?php echo get_theme_file_uri("img/name-card7.jpg"); ?>" alt="">
      <div class="dayoff-flex-container-desc">
        <h3 class="dayoff-flex-container-desc-title">釣りは生きがい</h3>
        <p class="dayoff-flex-container-desc-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
      </div>
    </div>
    <div class="dayoff-flex-container">
      <img src="<?php echo get_theme_file_uri("img/name-card8.jpg"); ?>" alt="">
      <div class="dayoff-flex-container-desc">
        <h3 class="dayoff-flex-container-desc-title">美味しく頂くのも楽しみ</h3>
        <p class="dayoff-flex-container-desc-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
      </div>
    </div>
    <div class="dayoff-flex-container">
      <img src="<?php echo get_theme_file_uri("img/name-card9.png"); ?>" alt="">
      <div class="dayoff-flex-container-desc">
        <h3 class="dayoff-flex-container-desc-title">ダイビング、はじめました</h3>
        <p class="dayoff-flex-container-desc-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
      </div>
    </div>
  </div>
</section>

<section class="next">
  <div class="next-flex">
    <div class="section-title next-flex-title">
      <h3 class="section-title-en">Next Interview</h3>
      <p class="section-title-ja">次のインタビュー</p>
      <div class="next-btns">
        <a href="" class="section-btn next-flex-btn">採用情報はこちら</a>
        <a href="" class="section-btn section-btn-navy ">お問い合わせフォームへ</a>
      </div>
    </div>
    <a href="<?php echo home_url("interview5-komiya"); ?>" class="next-flex-link">
      <img src="<?php echo get_theme_file_uri("img/name-next-komiya.png"); ?>">
    </a>
    <div class="next-sp-btns">
      <a href="<?php echo home_url("recruit"); ?>" class="section-btn next-flex-btn">採用情報はこちら</a>
      <a href="<?php echo home_url("contact"); ?>" class="section-btn section-btn-navy">お問い合わせフォームへ</a>
    </div>
  </div>
</section>


<?php get_footer(); ?>