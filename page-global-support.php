<?php
/**
 * Template Name: 事業内容 / グローバル支援
 * 事業内容子ページ：グローバル支援（海外進出・オフショア開発支援）
 * URL: /service/global-support/
 * （スラッグ "global-support" にも自動マッチ）
 *
 * @package Office Laila Theme
 *
 * TODO: 本文はApricot Company Theme（IT/システム開発業、日本-インドネシアのオフショア開発）の
 * 内容をそのまま複製したプレースホルダー。オフィス らいら の実際の事業内容に合わせて
 * 全面的に書き直すこと。このサービス区分（グローバル支援）自体が存在するかも要確認。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <style>
    .global-hero {
      background:
        radial-gradient(700px 380px at 80% 0%, rgba(31,181,165,.18), transparent 60%),
        linear-gradient(135deg, #E8F5F2 0%, #F5FAFA 70%, #FFFFFF 100%);
      padding: 80px 0 64px;
      border-bottom: 1px solid var(--c-border);
      position: relative;
      overflow: hidden;
    }
    .global-hero .page-header__eyebrow { color: var(--c-teal); }
    .global-hero h1 .accent { color: var(--c-teal); }
    .global-hero__inner { position: relative; z-index: 1; }
  </style>

  <section class="global-hero">
    <div class="container global-hero__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a><span class="breadcrumb__sep">›</span>海外進出・オフショア開発支援</p>
      <p class="page-header__eyebrow">05 / GLOBAL SUPPORT</p>
      <h1 class="page-header__title">
        （TODO：このサービスの見出し）
      </h1>
      <p class="page-header__lead">
        （TODO：このサービスの説明文をここに記載してください。）
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">相談する</a>
        <a href="#menu" class="btn btn--ghost btn--lg">支援内容を見る</a>
      </div>
    </div>
  </section>

  <section class="section" id="menu">
    <div class="container container--narrow prose">
      <h2>（TODO：見出し）</h2>
      <ul>
        <li>（TODO：対応領域1）</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">ご相談はこちら</h2>
      <p class="cta__lead">まずはお気軽にご相談ください。</p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせ</a>
        <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--ghost btn--lg">事業内容一覧へ</a>
      </div>
    </div>
  </section>

  <!-- ============== BACK NAV ============== -->
  <nav class="back-nav" aria-label="ページナビゲーション">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>事業内容一覧へ戻る</a>
    </div>
  </nav>

<?php get_footer(); ?>
