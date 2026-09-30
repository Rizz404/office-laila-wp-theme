<?php
/**
 * Template Name: 開発実績
 * 開発実績ページ（スラッグ "works" にも自動マッチ）
 *
 * @package Office Laila Theme
 *
 * TODO: 本文はApricot Company Theme（IT/システム開発業）の内容をそのまま複製した
 * プレースホルダー。オフィス らいら の実際の実績・事業内容に合わせて全面的に書き直すこと。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span>開発実績</p>
      <p class="page-header__eyebrow">WORKS</p>
      <h1 class="page-header__title">開発実績</h1>
      <p class="page-header__lead">
        （TODO：オフィス らいら の実績紹介文をここに記載してください。）
      </p>
    </div>
  </section>

  <section class="section works-summary">
    <div class="container">

      <div class="works-grid">

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">01</span>
            <h3 class="works-card__title">（TODO：実績分野1）</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            （TODO：説明文）
          </p>
        </article>

      </div>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">開発実績に関するご相談</h2>
      <p class="cta__lead">
        まずはお気軽にご相談ください。
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせする</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">無料相談する</a>
      </div>
    </div>
  </section>

  <!-- ============== BACK NAV ============== -->
  <nav class="back-nav" aria-label="ページナビゲーション">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>トップページへ戻る</a>
    </div>
  </nav>

<?php get_footer(); ?>
