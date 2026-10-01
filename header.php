<?php
/**
 * The header for our theme.
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ============== HEADER ============== -->
<header class="site-header">
  <div class="site-header__inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo" aria-label="オフィス らいら トップへ">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apricot-logo.png' ); ?>" alt="オフィス らいら ロゴ" class="site-header__logo-img">
    </a>

    <nav class="site-nav" aria-label="グローバルナビゲーション">
      <ul class="site-nav__list">
        <li class="site-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-nav__link">トップ</a></li>
        <li class="site-nav__item"><a href="<?php echo esc_url( home_url( '/message/' ) ); ?>" class="site-nav__link">代表者挨拶</a></li>
        <li class="site-nav__item"><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="site-nav__link">事業内容</a></li>
        <li class="site-nav__item"><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="site-nav__link">開発実績</a></li>
        <li class="site-nav__item"><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="site-nav__link">会社案内</a></li>
        <li class="site-nav__item"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="site-nav__link">お知らせ</a></li>
        <li class="site-nav__item"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="site-nav__link">お問い合わせ</a></li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--blue btn--sm site-nav__cta btn--no-arrow">無料相談する</a>
    </nav>

    <button class="hamburger" type="button" data-hamburger aria-label="メニューを開く" aria-expanded="false" aria-controls="mobile-nav">
      <span class="hamburger__lines" aria-hidden="true"><span></span><span></span><span></span></span>
    </button>
  </div>

  <nav class="mobile-nav" id="mobile-nav" data-mobile-nav aria-label="モバイルナビゲーション">
    <ul class="mobile-nav__list">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-nav__link">トップ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/message/' ) ); ?>" class="mobile-nav__link">代表者挨拶</a></li>
      <li><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="mobile-nav__link">事業内容</a></li>
      <li><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="mobile-nav__link">開発実績</a></li>
      <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" class="mobile-nav__link">会社案内</a></li>
      <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="mobile-nav__link">お知らせ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mobile-nav__link">お問い合わせ</a></li>
    </ul>
    <div class="mobile-nav__cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--blue">無料相談する</a>
    </div>
  </nav>
</header>

<main id="main">
