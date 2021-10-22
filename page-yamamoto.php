<?php
/*
Template Name: interview-yamamoto
*/
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/name.css">
<?php get_header(); ?>

<main class="fv">
  <div class="fv-img">
    <img class="fv-img-img" src="<?php echo get_theme_file_uri("img/name-yamamoto1.png"); ?>" alt="">
  </div>
</main>


<section class="name inner">
  <div class="name-flex">
    <div class="name-flex-left">
      <div class="name-flex-left-box">
        <p class="name-flex-left-box-title">営業戦略部/営業第一チーム</p>
        <p class="name-flex-left-box-name">山本太郎</p>
        <p class="name-flex-left-box-join">2020年12月中途入社</p>
        <p>入社1年目の期待のエース。<br>1児のパパ。</p>
      </div>
      <div class="name-flex-left-text">
        <p class="name-flex-left-text-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
        <p class="name-flex-left-text-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
        <p>サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
      </div>
    </div>
    <figure class="name-flex-right">
      <figcaption class="name-flex-right-caption">撮影場所：株式会社estra 休憩室</figcaption>
      <img class="name-flex-right-img" src="<?php echo get_theme_file_uri("img/name-yamamoto2.png"); ?>" alt="">
    </figure>
  </div>
</section>

<section class="schedule">
  <div class="section-title schedule-title">
    <h2 class="section-title-en">Daily Schedule</h2>
    <p class="section-title-ja">1日の流れ</p>
  </div>
  <dl class="schedule-table">
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
      <img src="<?php echo get_theme_file_uri("img/name-card1.png"); ?>" alt="">
      <div class="dayoff-flex-container-desc">
        <h3 class="dayoff-flex-container-desc-title">子どもの成長が幸せ</h3>
        <p class="dayoff-flex-container-desc-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
      </div>
    </div>
    <div class="dayoff-flex-container">
      <img src="<?php echo get_theme_file_uri("img/name-card2.png"); ?>" alt="">
      <div class="dayoff-flex-container-desc">
        <h3 class="dayoff-flex-container-desc-title">音楽は心の癒し</h3>
        <p class="dayoff-flex-container-desc-p">サンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入りますサンプルテキストが入ります</p>
      </div>
    </div>
    <div class="dayoff-flex-container">
      <img src="<?php echo get_theme_file_uri("img/name-card3.png"); ?>" alt="">
      <div class="dayoff-flex-container-desc">
        <h3 class="dayoff-flex-container-desc-title">カメラ、はじめました</h3>
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
        <a href="" class="section-btn next-flex-btn ">採用情報はこちら</a>
        <a href="" class="section-btn section-btn-navy ">お問い合わせフォームへ</a>
      </div>
    </div>
    <a href="<?php echo home_url("interview2-kakimoto"); ?>" class="next-flex-link">
      <img src="<?php echo get_theme_file_uri("img/name-next-kakimoto.png"); ?>">
    </a>
    <div class="next-sp-btns">
      <a href="<?php echo home_url("recruit"); ?>" class="section-btn next-flex-btn">採用情報はこちら</a>
      <a href="<?php echo home_url("contact"); ?>" class="section-btn section-btn-navy">お問い合わせフォームへ</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>