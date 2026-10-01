<?php
/**
 * Template Name: 開発実績
 * 開発実績ページ（スラッグ "works" にも自動マッチ）
 *
 * @package Office Laila Theme
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
        業務システム、Webシステム、パッケージソフトなど、<br class="hide-sp">
        企業の業務に合わせた開発・導入支援を行ってきました。
      </p>
    </div>
  </section>

  <section class="section works-summary">
    <div class="container">

      <div class="works-grid">

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">01</span>
            <h3 class="works-card__title">業務システム開発</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            販売管理、在庫管理、顧客管理、社内管理システムなど、
            企業ごとの業務フローに合わせたシステム開発を行います。
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">02</span>
            <h3 class="works-card__title">Webシステム・Webサイト制作</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            企業サイト、サービスサイト、予約・問い合わせフォーム、管理画面付きWebシステムなど、
            業務と集客を支えるWeb制作に対応します。
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">03</span>
            <h3 class="works-card__title">パッケージソフト・業務支援</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            既存パッケージや業務支援サービスの導入・運用を通じて、
            現場業務の効率化をサポートします。
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">04</span>
            <h3 class="works-card__title">ITコンサルティング・改善提案</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            既存システムや業務課題を整理し、最適なIT活用・DX推進・AI活用につながる
            改善提案を行います。
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">05</span>
            <h3 class="works-card__title">AI活用支援</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            生成AIやAIツールを活用した業務効率化、問い合わせ対応の自動化、
            社内業務支援などを実装します。
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">06</span>
            <h3 class="works-card__title">グローバル開発支援</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            海外人材・海外パートナーとの連携によるシステム開発・運用支援、
            多言語Web制作などに対応します。
          </p>
        </article>

      </div>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">開発実績に関するご相談</h2>
      <p class="cta__lead">
        過去の開発分野や対応領域を踏まえ、貴社の状況に合わせたご提案が可能です。<br class="hide-sp">
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
