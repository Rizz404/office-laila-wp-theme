<?php
/**
 * Template Name: 事業内容 / AI導入支援
 * 事業内容子ページ：AI導入支援
 * URL: /service/ai-support/
 * （スラッグ "ai-support" にも自動マッチ）
 *
 * @package Office Laila Theme
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
        AIを、<span class="accent">現場で使える仕組み</span>に変える。
      </h1>
      <p class="page-header__lead">
        ChatGPT・Claudeなどの生成AIを、営業・事務・問い合わせ対応・Web集客に活用。
        長年の業務システム開発で培った「現場業務を理解する力」を活かし、
        中小企業に合わせた現実的なAI導入をご支援します。
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--blue btn--lg">無料AI診断を相談する</a>
        <a href="#flow" class="btn btn--ghost btn--lg" style="background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.3); color:#fff;">導入の流れを見る</a>
      </div>
    </div>
  </section>

  <section class="section ai-services" id="menu">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">SERVICE MENU</span>
        <h2 class="section__title">AI導入支援メニュー</h2>
        <p class="section__lead">業務内容に合わせ、必要なところからスモールスタートできます。</p>
      </div>

      <div class="ai-services__grid">
        <div class="ai-service-card">
          <div class="ai-service-card__icon">01</div>
          <h3 class="ai-service-card__title">ChatGPT / Claude の業務活用支援</h3>
          <p class="ai-service-card__text">生成AIをどの業務で・どう使うかを整理し、社内で安全に使える形に落とし込みます。利用ルール作成や社内研修にも対応。</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">02</div>
          <h3 class="ai-service-card__title">AIチャットボット導入</h3>
          <p class="ai-service-card__text">Webサイトや社内ポータルに、自社情報を踏まえて答えるAIチャットを導入。よくある質問対応や1次対応を自動化します。</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">03</div>
          <h3 class="ai-service-card__title">問い合わせ対応の自動化</h3>
          <p class="ai-service-card__text">フォーム・メール・電話の一次対応をAIで効率化。担当者の対応時間を削減し、漏れのない対応につなげます。</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">04</div>
          <h3 class="ai-service-card__title">営業文・資料作成のAI活用</h3>
          <p class="ai-service-card__text">提案書、営業メール、議事録、ブログ記事などの作成を、品質を保ったままAIで効率化します。</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">05</div>
          <h3 class="ai-service-card__title">社内業務の効率化</h3>
          <p class="ai-service-card__text">日々の定型業務をAI＋自動化ツールで省力化。Excelや既存システムと組み合わせた現実的な仕組みづくりが得意です。</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">06</div>
          <h3 class="ai-service-card__title">AIエージェント構築支援</h3>
          <p class="ai-service-card__text">複数のツールやデータをまたいで、AIに業務を任せられる仕組みを設計・実装します。社内ナレッジを活用した高度な活用にも対応。</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">07</div>
          <h3 class="ai-service-card__title">中小企業向けAI導入診断</h3>
          <p class="ai-service-card__text">業務内容や規模に合わせて、現実的に使えるAI活用ポイントを整理。導入の優先順位までご提案します。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section ai-flow" id="flow">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">FLOW</span>
        <h2 class="section__title">AI導入の流れ</h2>
        <p class="section__lead">いきなり大きく始めるのではなく、小さく試してから定着させる進め方を大切にしています。</p>
      </div>
      <ol class="ai-flow__list">
        <li class="ai-flow__item">
          <h3>無料相談・ヒアリング</h3>
          <p>業務内容・お悩み・期待効果をお聞きします。費用や難しい話は不要です。</p>
        </li>
        <li class="ai-flow__item">
          <h3>AI活用ポイント整理</h3>
          <p>導入効果が見込める業務を、優先順位とともに整理してご提示します。</p>
        </li>
        <li class="ai-flow__item">
          <h3>小さく試す（PoC）</h3>
          <p>まずは小さな範囲で試し、現場で本当に使えるかを確認しながら進めます。</p>
        </li>
        <li class="ai-flow__item">
          <h3>本格導入・運用支援</h3>
          <p>社内展開、運用ルール作成、定着までを継続してご支援します。</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>システム開発会社が、AI支援まで対応する理由</h2>
      <p>オフィス らいらは元々、業務システムを長年作り続けてきた会社です。AIを「最新の流行り」として扱うのではなく、これまでの業務システム開発・Web制作・ITコンサルティングの延長線上として、現場で本当に使える形に落とすことを大切にしています。</p>
      <p>システムを設計・実装してきた知見があるからこそ、AIを「単なるチャット」で終わらせず、既存業務やシステムと連携した現実的な仕組みとして組み上げられます。</p>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">AI活用、まずは相談から。</h2>
      <p class="cta__lead">初回相談・AI導入診断は無料です。専門知識はなくて大丈夫です。</p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">無料AI相談へ</a>
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
