<?php
/**
 * Template Name: 事業内容 / AI導入支援
 * 事業内容子ページ：AI導入支援
 * URL: /service/ai-support/
 * （スラッグ "ai-support" にも自動マッチ）
 *
 * @package Office Laila Theme
 *
 * TODO: 本文はApricot Company Theme（IT/システム開発業）の内容をそのまま複製した
 * プレースホルダー。オフィス らいら の実際の事業内容に合わせて全面的に書き直すこと。
 * このサービス区分（AI導入支援）自体がオフィス らいらに存在するかも要確認。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <style>
    /* AI support 専用アクセント */
    .ai-hero-bg {
      background:
        radial-gradient(800px 400px at 80% 0%, rgba(41,197,224,.15), transparent 60%),
        radial-gradient(700px 400px at 0% 100%, rgba(26,111,224,.18), transparent 60%),
        linear-gradient(135deg, #0B1B3B 0%, #0F2A55 60%, #155CC2 130%);
      color: #fff;
      padding: 80px 0 72px;
      position: relative;
      overflow: hidden;
    }
    .ai-hero-bg::before {
      content: "";
      position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px);
      background-size: 40px 40px;
      pointer-events: none;
    }
    .ai-hero-bg .breadcrumb,
    .ai-hero-bg .breadcrumb a { color: #B6C8E8; }
    .ai-hero-bg .breadcrumb a:hover { color: #fff; }
    .ai-hero-bg .page-header__eyebrow { color: #6EC4FF; }
    .ai-hero-bg h1 { color: #fff; }
    .ai-hero-bg h1 .accent {
      background: linear-gradient(90deg, #6EC4FF 0%, #29C5E0 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .ai-hero-bg .page-header__lead { color: #D0DAEC; }
    .ai-hero-bg__inner { position: relative; z-index: 1; }

    .ai-services {
      background: var(--c-bg-soft);
    }
    .ai-services__grid {
      display: grid;
      gap: 18px;
      grid-template-columns: 1fr;
    }
    @media (min-width: 640px) { .ai-services__grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 1000px) { .ai-services__grid { grid-template-columns: repeat(3, 1fr); } }
    .ai-service-card {
      background: #fff;
      border: 1px solid var(--c-border);
      border-radius: var(--radius-lg);
      padding: 24px 22px;
      transition: transform .2s var(--ease), box-shadow .2s var(--ease), border-color .2s var(--ease);
    }
    .ai-service-card:hover { transform: translateY(-3px); box-shadow: var(--shadow); border-color: #C0E4FF; }
    .ai-service-card__icon {
      width: 40px; height: 40px;
      border-radius: 10px;
      background: linear-gradient(135deg, var(--c-blue) 0%, var(--c-cyan) 100%);
      color: #fff;
      display: grid; place-items: center;
      font-weight: 800;
      font-size: 14px;
      margin-bottom: 14px;
    }
    .ai-service-card__title { font-size: 16px; font-weight: 800; margin-bottom: 8px; }
    .ai-service-card__text { font-size: 13px; color: var(--c-text-sub); line-height: 1.85; }

    .ai-flow {
      background: #fff;
    }
    .ai-flow__list {
      counter-reset: step;
      display: grid; gap: 16px;
      grid-template-columns: 1fr;
    }
    @media (min-width: 768px) { .ai-flow__list { grid-template-columns: repeat(4, 1fr); } }
    .ai-flow__item {
      background: var(--c-bg-soft);
      border: 1px solid var(--c-border);
      border-radius: var(--radius);
      padding: 22px 20px;
      counter-increment: step;
      position: relative;
    }
    .ai-flow__item::before {
      content: "STEP " counter(step);
      display: block;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .18em;
      color: var(--c-blue);
      margin-bottom: 8px;
    }
    .ai-flow__item h3 { font-size: 15px; margin-bottom: 6px; }
    .ai-flow__item p { font-size: 13px; color: var(--c-text-sub); line-height: 1.8; }
  </style>

  <section class="ai-hero-bg">
    <div class="container ai-hero-bg__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a><span class="breadcrumb__sep">›</span>AI導入支援</p>
      <p class="page-header__eyebrow">04 / AI SUPPORT</p>
      <h1 class="page-header__title">
        （TODO：このサービスの見出し）
      </h1>
      <p class="page-header__lead">
        （TODO：このサービスの説明文をここに記載してください。）
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--blue btn--lg">相談する</a>
        <a href="#flow" class="btn btn--ghost btn--lg" style="background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.3); color:#fff;">導入の流れを見る</a>
      </div>
    </div>
  </section>

  <section class="section ai-services" id="menu">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">SERVICE MENU</span>
        <h2 class="section__title">（TODO：メニュー見出し）</h2>
        <p class="section__lead">（TODO：リード文）</p>
      </div>

      <div class="ai-services__grid">
        <div class="ai-service-card">
          <div class="ai-service-card__icon">01</div>
          <h3 class="ai-service-card__title">（TODO：メニュー1）</h3>
          <p class="ai-service-card__text">（TODO：説明文）</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">02</div>
          <h3 class="ai-service-card__title">（TODO：メニュー2）</h3>
          <p class="ai-service-card__text">（TODO：説明文）</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">03</div>
          <h3 class="ai-service-card__title">（TODO：メニュー3）</h3>
          <p class="ai-service-card__text">（TODO：説明文）</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section ai-flow" id="flow">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">FLOW</span>
        <h2 class="section__title">（TODO：導入の流れ見出し）</h2>
        <p class="section__lead">（TODO：リード文）</p>
      </div>
      <ol class="ai-flow__list">
        <li class="ai-flow__item">
          <h3>（TODO：ステップ1）</h3>
          <p>（TODO：説明）</p>
        </li>
        <li class="ai-flow__item">
          <h3>（TODO：ステップ2）</h3>
          <p>（TODO：説明）</p>
        </li>
        <li class="ai-flow__item">
          <h3>（TODO：ステップ3）</h3>
          <p>（TODO：説明）</p>
        </li>
        <li class="ai-flow__item">
          <h3>（TODO：ステップ4）</h3>
          <p>（TODO：説明）</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>（TODO：見出し）</h2>
      <p>（TODO：オフィス らいら がこのサービスを提供する理由をここに記載してください。）</p>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">まずは相談から。</h2>
      <p class="cta__lead">初回相談は無料です。</p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">相談する</a>
        <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--ghost btn--lg">他の事業も見る</a>
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
