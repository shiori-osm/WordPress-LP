<?php
/*
Template Name: index.html
*/
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php get_header(); ?>
<main class="frontfv">
  <img class="frontfv-img" src="<?php echo get_theme_file_uri("img/index-main.png"); ?>" alt="">
  <img class="frontfv-sp-img" src="<?php echo get_theme_file_uri("img/indexメインsp.png"); ?>" alt="">
  <div class="frontfv-desc">
    <p class="frontfv-desc-en">Commit to the growth for everyone</p>
    <p class="frontfv-desc-ja">全ての人の成長にコミットする</p>
  </div>
  <a href="" class="frontfv-news">
    <p class="frontfv-news-title"><span class="frontfv-news-title-en">News</span><span>新代々木オフィス昨年12月に移転しました</span></p>
  </a>
</main>
<section class="techcoach">
  <div class="inner">
    <h2 class="techcoach-title fade-in fade-in-up">新しい教育の常識を作り多くの人々に幸せを届ける</h2>
    <div class="techcoach-flex technology">
      <div class="techcoach-flex-img  fade-in fade-in-up "><img src="<?php echo get_theme_file_uri("img/indextechnology.png"); ?>" alt=""></div>
      <div class="techcoach-flex-desc ">
        <div class="desc">
          <h3 class="techcoach-flex-desc-title fade-in fade-in-up">Technology</h3>
          <p class="techcoach-flex-desc-p fade-in fade-in-up">株式会社estraは<br>デジタル化が遅れている教育業界に<br>
            最新のテクノロジーを導入することによって<br>
            教育のDXを実現します。</p>
        </div>
      </div>
    </div>
    <div class="techcoach-flex">
      <div class="techcoach-flex-desc ">
        <div class="desc">
          <h3 class="techcoach-flex-desc-title fade-in fade-in-up">Coaching</h3>
          <p class="techcoach-flex-desc-p fade-in fade-in-up">独自のオペレーションと<br>コーチングを融合した
            新しい教育の仕組みにより、<br>
            一人ひとりに合わせた最適な教育を提供します。</p>
        </div>
      </div>
      <div class="techcoach-flex-img  fade-in fade-in-up"><img src="<?php echo get_theme_file_uri("img/indexcoaching.png"); ?>" alt=""></div>
    </div>
  </div>
</section>

<section class="service">
  <div class="inner">
    <div class="section-title">
      <h2 class="section-title-en fade-in fade-in-up">Service</h2>
      <p class="section-title-ja fade-in fade-in-up ">事業紹介</p>
      <p class="section-title-p fade-in fade-in-up ">株式会社estraの代表的な実績をご紹介します</p>
    </div>
    <div class="service-flex">
      <a href="" class="service-flex-link fade-in fade-in-up ">
        <div class="service-flex-link-img">
          <img src="<?php echo get_theme_file_uri("img/indexCoachtechbtn.png"); ?>" alt="">
        </div>
        <div class="service-flex-link-desc">
          <h3 class="service-flex-link-desc-title">COACHTECH</h3>
          <p>フリーランス特化型<br>プログラミングスクール</p>
        </div>
      </a>
      <a href="" class="service-flex-link fade-in fade-in-up ">
        <div class="service-flex-link-img">
          <img src="<?php echo get_theme_file_uri("img/indexStageebtn.png"); ?>" alt="">
        </div>
        <div class="service-flex-link-desc">
          <h3 class="service-flex-link-desc-title">Stagee</h3>
          <p>教育機関向け<br>業務効率化支援ツール</p>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="recruit">
  <div class="section-title">
    <h2 class="section-title-en fade-in fade-in-up">Recruit</h2>
    <p class="section-title-ja fade-in fade-in-up ">採用情報</p>
    <p class="section-title-p fade-in fade-in-up">履歴書・職務経歴書を送付の上、<br>お問い合わせフォームよりご応募ください。</p>
  </div>
  <div class="recruit-desc">
    <h3 class="recruit-desc-title fade-in fade-in-up ">日本の教育を変革する最前線で活躍する人材に</h3>
    <p class="recruit-desc-p fade-in fade-in-up ">全員がリスクを恐れずにチャレンジし、<br>
      社員一人一人が活躍できる環境を<br>
      みんなで作り上げる</p>
  </div>
  <a href="<?php echo home_url("service"); ?>" class="section-btn fade-in fade-in-up">採用情報はこちら</a>
</section>

<section class="contact">
  <div class="section-title">
    <h2 class="section-title-en fade-in fade-in-up">Contact</h2>
    <p class="section-title-ja fade-in fade-in-up">お問い合わせ</p>
    <p class="section-title-p  fade-in fade-in-up">採用に関するご質問、その他のお問い合わせ、お気軽にお問い合わせください。</p>
  </div>
  <a href="" class="section-btn section-btn-navy fade-in fade-in-up">お問い合わせフォームへ</a>
  <p class="contact-desc fade-in fade-in-up ">記入内容の確認後、2~3営業日以内にご連絡させていただきます。<br>
    お気軽にお問い合わせください。</p>
</section>

<?php get_footer(); ?>