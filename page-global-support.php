<?php
/**
 * Template Name: 事業内容 / グローバル支援
 * 事業内容子ページ：グローバル支援（海外進出・オフショア開発支援）
 * URL: /service/global-support/
 * （スラッグ "global-support" にも自動マッチ）
 *
 * @package Office Laila Theme
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
        海外パートナーと、<br>
        <span class="accent">コストを抑えた開発体制</span>を。
      </h1>
      <p class="page-header__lead">
        オフショア開発の活用、海外向けWeb制作、日本企業の海外進出に伴うITサポートまで、
        グローバルなプロジェクト体制づくりをご支援します。
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">海外案件を相談する</a>
        <a href="#menu" class="btn btn--ghost btn--lg">支援内容を見る</a>
      </div>
    </div>
  </section>

  <section class="section" id="menu">
    <div class="container container--narrow prose">
      <h2>主な対応領域</h2>
      <ul>
        <li>海外パートナーを活用した開発体制構築</li>
        <li>オフショア開発支援（要件整理・プロジェクト管理・品質保証）</li>
        <li>インドネシアなど海外展開に向けたWeb・IT支援</li>
        <li>多言語Webサイト制作（日英を含むマルチランゲージ対応）</li>
        <li>海外向けサービス展開支援</li>
        <li>日本企業の海外進出に伴うITサポート</li>
      </ul>

      <h2>「丸投げ」ではなく、伴走するオフショア</h2>
      <p>海外開発はコストメリットがある一方、要件のすれ違いや品質のばらつきが課題になりがちです。オフィス らいらは日本側で要件整理・設計・進行管理・品質チェックを担当し、海外パートナーと一緒に進める形でリスクを抑えます。日本国内の業務システム開発で培ったノウハウを活かし、現実的に動く体制を作ります。</p>

      <h2>こんなお悩みに</h2>
      <ul>
        <li>開発コストを抑えつつ、品質も担保したい</li>
        <li>東南アジア（インドネシア等）への進出を検討している</li>
        <li>海外向け・多言語のWebサイトを立ち上げたい</li>
        <li>すでにオフショアを活用しているが、品質・進行に課題がある</li>
      </ul>
    </div>
  </section>

  <section class="section bridge">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">GLOBAL NETWORK</span>
        <h2 class="section__title">対応国・地域</h2>
      </div>
      <div class="global-promo__inner" style="display:grid; gap:14px;">
        <div class="global-promo__country" style="background:#fff;">
          <span class="global-promo__flag">🇯🇵</span>
          <div>
            <div class="global-promo__country-name">日本（本社）</div>
            <div class="global-promo__country-note">プロジェクト管理・要件定義・設計・品質保証</div>
          </div>
        </div>
        <div class="global-promo__country" style="background:#fff;">
          <span class="global-promo__flag">🇮🇩</span>
          <div>
            <div class="global-promo__country-name">インドネシア</div>
            <div class="global-promo__country-note">オフショア開発・現地法人向けIT支援・進出支援</div>
          </div>
        </div>
        <div class="global-promo__country" style="background:#fff;">
          <span class="global-promo__flag">🌏</span>
          <div>
            <div class="global-promo__country-name">アジア各国</div>
            <div class="global-promo__country-note">多言語Web・海外向けサービス展開支援</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">海外進出・オフショアのご相談はこちら</h2>
      <p class="cta__lead">体制づくりの初期段階から、運用立ち上げまでご相談いただけます。</p>
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
