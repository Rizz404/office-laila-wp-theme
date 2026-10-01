<?php
/**
 * Front Page (トップページ)
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <!-- ============== HERO ============== -->
  <section class="hero">
    <div class="container hero__inner">

      <div class="hero__copy">
        <span class="hero__eyebrow">SYSTEM × AI × GLOBAL</span>
        <h1 class="hero__title">
          長年のシステム開発実績に、<br>
          <span class="accent">AIとグローバル支援</span>を加え、<br>
          企業の次の成長をサポートします。
        </h1>
        <p class="hero__lead">
          オフィス らいらは、システム開発・Web制作・ITコンサルティングの実績を活かし、<br class="hide-sp">
          企業の業務改善、AI活用、海外展開を支援するITパートナーです。
        </p>
        <div class="hero__ctas">
          <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--primary btn--lg">事業内容を見る</a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">お問い合わせする</a>
        </div>
        <div class="hero__meta">
          <div class="hero__meta-item">
            <span class="hero__meta-num">創業以来<small>長年</small></span>
            <span class="hero__meta-label">SYSTEM DEVELOPMENT</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">6<small>事業領域</small></span>
            <span class="hero__meta-label">SERVICE AREA</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">AI + Global</span>
            <span class="hero__meta-label">NEW CAPABILITY</span>
          </div>
        </div>
      </div>

      <div class="hero__visual" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-ai-visual.png' ); ?>" alt="" class="hero__visual-img">
      </div>

    </div>
  </section>

  <!-- ============== STRENGTHS ============== -->
  <section class="section strengths" id="strengths">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">OUR STRENGTHS</span>
        <h2 class="section__title">オフィス らいらの<span class="accent">3つの強み</span></h2>
        <p class="section__lead">
          オフィス らいらは、長年のシステム開発・Web制作・ITコンサルティングの経験を活かし、<br class="hide-sp">
          企業の業務改善・AI活用・海外展開を総合的に支援します。
        </p>
      </div>

      <div class="strengths__grid">

        <article class="strength-card strength-card--system">
          <span class="strength-card__num">01</span>
          <div class="strength-card__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="7.5" height="7.5" rx="1.5"/>
              <rect x="13.5" y="3" width="7.5" height="7.5" rx="1.5"/>
              <rect x="3" y="13.5" width="7.5" height="7.5" rx="1.5"/>
              <rect x="13.5" y="13.5" width="7.5" height="7.5" rx="1.5"/>
            </svg>
          </div>
          <p class="strength-card__eyebrow">System</p>
          <h3 class="strength-card__title">長年のシステム開発実績</h3>
          <p class="strength-card__text">
            業務システム、Webシステム、ITコンサルティングなど、
            企業の業務に合わせた開発・改善支援を行ってきた実績があります。
          </p>
        </article>

        <article class="strength-card strength-card--ai">
          <span class="strength-card__num">02</span>
          <div class="strength-card__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 3 12.9 8.6 18.5 10.5 12.9 12.4 11 18 9.1 12.4 3.5 10.5 9.1 8.6 11 3z"/>
              <path d="M18.5 16.5 19.3 18.2 21 19 19.3 19.8 18.5 21.5 17.7 19.8 16 19 17.7 18.2 18.5 16.5z"/>
            </svg>
          </div>
          <p class="strength-card__eyebrow">AI Support</p>
          <h3 class="strength-card__title">AI活用・業務改善への対応</h3>
          <p class="strength-card__text">
            これまでのIT支援の経験を活かし、生成AIやデジタルツールを活用した
            業務改善にも対応しています。
          </p>
        </article>

        <article class="strength-card strength-card--global">
          <span class="strength-card__num">03</span>
          <div class="strength-card__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="9"/>
              <path d="M3 12h18"/>
              <path d="M12 3a13.5 13.5 0 0 1 0 18"/>
              <path d="M12 3a13.5 13.5 0 0 0 0 18"/>
            </svg>
          </div>
          <p class="strength-card__eyebrow">Global</p>
          <h3 class="strength-card__title">海外人材・グローバル連携</h3>
          <p class="strength-card__text">
            海外人材や海外パートナーとの連携により、開発・制作・運用支援を
            柔軟に行える体制を整えています。
          </p>
        </article>

      </div>
    </div>
  </section>

  <!-- ============== SERVICE SUMMARY ============== -->
  <section class="section svc-summary">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">SERVICE</span>
        <h2 class="section__title">事業内容</h2>
        <p class="section__lead">
          システム開発、Web制作、ITコンサルティングを中心に、AI導入支援やグローバル連携まで、<br class="hide-sp">
          企業の成長を支えるITサービスを提供しています。
        </p>
      </div>

      <div class="svc-summary__grid">
        <article class="svc-summary__item">
          <span class="svc-summary__num">01</span>
          <h3 class="svc-summary__title">システム開発・IT支援</h3>
          <p class="svc-summary__text">
            業務システム、Webシステム、ITコンサルティングを通じて、企業の業務改善を支援します。
          </p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">02</span>
          <h3 class="svc-summary__title">Web・アプリ制作</h3>
          <p class="svc-summary__text">
            企業サイト、サービスサイト、Webシステムなど、集客と業務効率化につながる制作を行います。
          </p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">03</span>
          <h3 class="svc-summary__title">AI・グローバル支援</h3>
          <p class="svc-summary__text">
            生成AIの活用支援や海外人材・海外パートナーとの連携により、新しい業務体制づくりを支援します。
          </p>
        </article>
      </div>

      <div class="section-cta">
        <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--primary">事業内容を詳しく見る</a>
      </div>
    </div>
  </section>

  <!-- ============== WORKS SUMMARY ============== -->
  <section class="section wks-summary">
    <div class="container">

      <div class="wks-summary__inner">
        <div class="wks-summary__intro">
          <span class="section__eyebrow">WORKS</span>
          <h2 class="section__title section__title--left">開発実績</h2>
          <p class="wks-summary__desc">
            業務システム、Webシステム、パッケージソフトなど、企業の業務に合わせた開発・導入支援を行ってきました。
            具体的な社名や案件名ではなく、対応分野別に実績をご紹介しています。
          </p>
          <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="btn btn--primary wks-summary__cta-btn">開発実績を見る</a>
        </div>

        <ul class="wks-summary__list">
          <li>
            <span class="wks-summary__num">01</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">業務システム開発</span>
              <span class="wks-summary__sub">販売管理・在庫管理・社内管理など</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">02</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">Webシステム制作</span>
              <span class="wks-summary__sub">企業サイト・Webシステム・管理画面など</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">03</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">パッケージソフト導入支援</span>
              <span class="wks-summary__sub">業務支援サービスの導入・運用支援</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">04</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">ITコンサルティング</span>
              <span class="wks-summary__sub">業務課題の整理と改善提案</span>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <!-- ============== NEWS ============== -->
  <section class="section news-summary" id="news">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">NEWS</span>
        <h2 class="section__title">お知らせ</h2>
        <p class="section__lead">
          オフィス らいらからのお知らせ、サービス情報、更新情報をご案内します。
        </p>
      </div>

      <ul class="news-list">

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--info">お知らせ</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">オフィス らいら コーポレートサイトをリニューアルしました</h3>
            <p class="news-list__desc">
              事業内容、開発実績、会社案内をより分かりやすく整理し、企業情報を見やすく更新しました。
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--service">サービス</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="https://ai.office-laila.biz/" target="_blank" rel="noopener noreferrer">
                AI導入支援サービスページを公開しました
              </a>
            </h3>
            <p class="news-list__desc">
              長年のシステム開発・Web制作・ITコンサルティングの経験を活かし、企業向けAI導入支援サービスの案内を開始しました。
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--update">更新情報</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="<?php echo esc_url( home_url( '/message/' ) ); ?>">代表者挨拶ページを更新しました</a>
            </h3>
            <p class="news-list__desc">
              代表者挨拶ページを新しいデザインに合わせて整備しました。
            </p>
          </div>
        </li>

      </ul>

      <div class="news-summary__cta">
        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="btn btn--ghost">お知らせ一覧を見る</a>
      </div>
    </div>
  </section>

  <!-- ============== CONTACT CTA ============== -->
  <section class="section cta" id="contact">
    <div class="container container--narrow">
      <h2 class="cta__title">
        システム開発から、AI・海外支援まで。<br>
        まずはお気軽にご相談ください。
      </h2>
      <p class="cta__lead">
        業務システム開発、Web制作、ITコンサルティング、AI導入支援、グローバル連携など、<br class="hide-sp">
        企業の課題に合わせたご相談を承ります。
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせする</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">無料相談する</a>
      </div>
      <p class="cta__meta">初回相談・お見積もりは無料です</p>
    </div>
  </section>

<?php get_footer(); ?>
