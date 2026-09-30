<?php
/**
 * Template Name: 事業内容 / パッケージ・サービス提供
 * 事業内容子ページ：パッケージ・サービス提供
 * URL: /service/package/
 * （スラッグ "package" にも自動マッチ）
 *
 * @package Office Laila Theme
 *
 * TODO: 本文はApricot Company Theme（IT/システム開発業）の内容をそのまま複製した
 * プレースホルダー。オフィス らいら の実際の事業内容に合わせて全面的に書き直すこと。
 * このサービス区分（パッケージ・サービス提供）自体がオフィス らいらに存在するかも要確認。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <style>
    /* Package Service 専用ヒーロー：白＋薄いブルー、信頼感のあるトーン */
    .pkg-hero {
      background:
        radial-gradient(700px 380px at 80% 0%, rgba(26,111,224,.16), transparent 60%),
        radial-gradient(600px 320px at 10% 100%, rgba(41,197,224,.12), transparent 65%),
        linear-gradient(135deg, #EAF0FB 0%, #F4F8FD 70%, #FFFFFF 100%);
      padding: 80px 0 64px;
      border-bottom: 1px solid var(--c-border);
      position: relative;
      overflow: hidden;
    }
    .pkg-hero__inner { position: relative; z-index: 1; }
    .pkg-hero .page-header__eyebrow { color: var(--c-blue); }
    .pkg-hero h1 .accent {
      background: linear-gradient(90deg, var(--c-blue) 0%, var(--c-cyan) 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }

    /* リード型のリストセクション（白／bg-soft で交互背景） */
    .pkg-section--soft { background: var(--c-bg-soft); }

    .pkg-list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 10px;
      grid-template-columns: 1fr;
    }
    @media (min-width: 768px) {
      .pkg-list { grid-template-columns: repeat(2, 1fr); column-gap: 24px; }
    }
    .pkg-list li {
      position: relative;
      padding: 12px 14px 12px 32px;
      background: #fff;
      border: 1px solid var(--c-border);
      border-radius: var(--radius);
      font-size: 14.5px;
      color: var(--c-text);
      line-height: 1.7;
      letter-spacing: .02em;
    }
    .pkg-list li::before {
      content: "";
      position: absolute;
      left: 14px;
      top: 19px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--c-blue) 0%, var(--c-cyan) 100%);
    }
    .pkg-section--soft .pkg-list li { background: #fff; }

    /* 導入の流れ（ステップ） */
    .pkg-flow {
      background: #fff;
    }
    .pkg-flow__list {
      counter-reset: pkgstep;
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 16px;
      grid-template-columns: 1fr;
    }
    @media (min-width: 640px) { .pkg-flow__list { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 1000px) { .pkg-flow__list { grid-template-columns: repeat(5, 1fr); } }
    .pkg-flow__item {
      background: var(--c-bg-soft);
      border: 1px solid var(--c-border);
      border-radius: var(--radius);
      padding: 22px 20px;
      counter-increment: pkgstep;
      position: relative;
    }
    .pkg-flow__item::before {
      content: counter(pkgstep, decimal-leading-zero);
      display: block;
      font-size: 22px;
      font-weight: 800;
      color: var(--c-blue);
      letter-spacing: .04em;
      margin-bottom: 8px;
      line-height: 1;
    }
    .pkg-flow__item h3 {
      font-size: 15px;
      font-weight: 700;
      color: var(--c-navy);
      margin: 0;
      line-height: 1.5;
    }
  </style>

  <section class="pkg-hero">
    <div class="container pkg-hero__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a><span class="breadcrumb__sep">›</span>パッケージ・サービス提供</p>
      <p class="page-header__eyebrow">06 / PACKAGE SERVICE</p>
      <h1 class="page-header__title">
        （TODO：このサービスの見出し）
      </h1>
      <p class="page-header__lead">
        （TODO：このサービスの説明文をここに記載してください。）
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">相談する</a>
        <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--ghost btn--lg">事業内容一覧へ戻る</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow">
      <div class="section__head">
        <span class="section__eyebrow">SERVICE AREA</span>
        <h2 class="section__title">主な対応領域</h2>
      </div>
      <ul class="pkg-list">
        <li>（TODO：対応領域1）</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">まずはご相談ください。</h2>
      <p class="cta__lead">
        （TODO：お問い合わせセクションのリード文。）
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせする</a>
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
