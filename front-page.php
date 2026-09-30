<?php
/**
 * Front Page (トップページ)
 *
 * @package Office Laila Theme
 *
 * TODO: このページの本文は Apricot Company Theme を複製した際の暫定プレースホルダー。
 * オフィス らいら の実際の事業内容・強み・実績・お知らせが確定し次第、内容を差し替えること。
 * HTML構造・クラス名は共通CSS（assets/css/common.css）のレイアウトに依存しているため、
 * 文言を差し替える際もタグ構造・要素数（カード3枚/4項目など）はできるだけ維持すること。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <!-- ============== HERO ============== -->
  <section class="hero">
    <div class="container hero__inner">

      <div class="hero__copy">
        <span class="hero__eyebrow">TODO: キャッチコピー</span>
        <h1 class="hero__title">
          （TODO：オフィス らいら の<br>
          <span class="accent">キャッチコピー</span>を<br>
          ここに設定してください。）
        </h1>
        <p class="hero__lead">
          （TODO：オフィス らいら の事業内容・強みの紹介文をここに記載してください。<br class="hide-sp">
          正式な会社情報が揃うまでの仮テキストです。）
        </p>
        <div class="hero__ctas">
          <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--primary btn--lg">事業内容を見る</a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">お問い合わせする</a>
        </div>
        <div class="hero__meta">
          <div class="hero__meta-item">
            <span class="hero__meta-num">TODO<small>実績</small></span>
            <span class="hero__meta-label">TODO</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">TODO<small>事業領域</small></span>
            <span class="hero__meta-label">TODO</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">TODO</span>
            <span class="hero__meta-label">TODO</span>
          </div>
        </div>
      </div>

      <div class="hero__visual" aria-hidden="true">
        <!-- TODO: 画像はApricotから流用したストック素材。ライセンス範囲を確認のうえ、
             オフィス らいら 用のビジュアルに差し替えるか、利用継続の可否を確認すること -->
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-ai-visual.png' ); ?>" alt="" class="hero__visual-img">
      </div>

    </div>
  </section>

  <!-- ============== STRENGTHS ============== -->
  <section class="section strengths" id="strengths">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">OUR STRENGTHS</span>
        <h2 class="section__title">オフィス らいら の<span class="accent">強み（TODO）</span></h2>
        <p class="section__lead">
          （TODO：オフィス らいら の強みを紹介する文章をここに記載してください。）
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
          <p class="strength-card__eyebrow">TODO</p>
          <h3 class="strength-card__title">（TODO：強み1のタイトル）</h3>
          <p class="strength-card__text">
            （TODO：強み1の説明文をここに記載してください。）
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
          <p class="strength-card__eyebrow">TODO</p>
          <h3 class="strength-card__title">（TODO：強み2のタイトル）</h3>
          <p class="strength-card__text">
            （TODO：強み2の説明文をここに記載してください。）
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
          <p class="strength-card__eyebrow">TODO</p>
          <h3 class="strength-card__title">（TODO：強み3のタイトル）</h3>
          <p class="strength-card__text">
            （TODO：強み3の説明文をここに記載してください。）
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
          （TODO：オフィス らいら の事業内容の概要をここに記載してください。）
        </p>
      </div>

      <div class="svc-summary__grid">
        <article class="svc-summary__item">
          <span class="svc-summary__num">01</span>
          <h3 class="svc-summary__title">（TODO：事業1）</h3>
          <p class="svc-summary__text">
            （TODO：事業1の説明文。）
          </p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">02</span>
          <h3 class="svc-summary__title">（TODO：事業2）</h3>
          <p class="svc-summary__text">
            （TODO：事業2の説明文。）
          </p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">03</span>
          <h3 class="svc-summary__title">（TODO：事業3）</h3>
          <p class="svc-summary__text">
            （TODO：事業3の説明文。）
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
            （TODO：オフィス らいら の実績紹介文をここに記載してください。）
          </p>
          <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>" class="btn btn--primary wks-summary__cta-btn">開発実績を見る</a>
        </div>

        <ul class="wks-summary__list">
          <li>
            <span class="wks-summary__num">01</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">（TODO：実績分野1）</span>
              <span class="wks-summary__sub">（TODO：補足）</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">02</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">（TODO：実績分野2）</span>
              <span class="wks-summary__sub">（TODO：補足）</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">03</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">（TODO：実績分野3）</span>
              <span class="wks-summary__sub">（TODO：補足）</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">04</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">（TODO：実績分野4）</span>
              <span class="wks-summary__sub">（TODO：補足）</span>
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
          オフィス らいら からのお知らせ、サービス情報、更新情報をご案内します。
        </p>
      </div>

      <ul class="news-list">

        <!-- TODO: 以下はサンプル表示用のダミー項目。正式なお知らせに差し替えるか、
             未確定の間は非表示（コメントアウト）にしてください -->
        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-01-01">YYYY.MM.DD</time>
            <span class="news-list__cat news-list__cat--info">お知らせ</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">（TODO：お知らせタイトル）</h3>
            <p class="news-list__desc">
              （TODO：お知らせ本文。）
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
        （TODO：お問い合わせセクションの見出し）
      </h2>
      <p class="cta__lead">
        （TODO：お問い合わせセクションのリード文。）
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせする</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">無料相談する</a>
      </div>
      <p class="cta__meta">初回相談・お見積もりは無料です</p>
    </div>
  </section>

<?php get_footer(); ?>
