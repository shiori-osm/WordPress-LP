<?php
/*
* Template Name: お問い合わせページ
* Template Post Type: page
*/
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">

<?php get_header(); ?>

<div class="section-title">
  <h2 class="section-title-main">お問い合わせ</h2>
  <p class="section-title-sub">Contact</p>
</div>

<?php echo do_shortcode('[contact-form-7 id="47" title="お問い合わせフォーム"]'); ?>

<?php get_footer(); ?>