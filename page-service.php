<?php
/**
 * Template Name: 事業内容
 * 事業内容一覧ページ（スラッグ "service" にも自動マッチ）
 *
 * 子ページ（ai-support, global-support, hr-operation, it-consulting,
 * package, system-development, web-app）は別途対応。本テンプレートからは
 * 子ページのスラッグ /service/{slug}/ へのリンクのみ生成する。
 *
 * @package Office Laila Theme
 *
 * TODO: 本文・7つのサービス区分はApricot Company Theme（IT/システム開発業）の
 * 内容をそのまま複製したプレースホルダー。オフィス らいら の実際の事業内容が
 * 何区分あるか（7つとは限らない）から見直し、全面的に書き直すこと。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span>事業内容</p>
      <p class="page-header__eyebrow">SERVICE</p>
      <h1 class="page-header__title">事業内容</h1>
      <p class="page-header__lead">
        （TODO：オフィス らいら の事業内容の概要をここに記載してください。）
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="services__list">

        <a href="<?php echo esc_url( home_url( '/service/system-development/' ) ); ?>" class="service-item">
          <span class="service-item__num">01</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">TODO</p>
            <h3 class="service-item__title">（TODO：事業1）</h3>
            <p class="service-item__text">（TODO：説明文）</p>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/web-app/' ) ); ?>" class="service-item">
          <span class="service-item__num">02</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">TODO</p>
            <h3 class="service-item__title">（TODO：事業2）</h3>
            <p class="service-item__text">（TODO：説明文）</p>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/it-consulting/' ) ); ?>" class="service-item">
          <span class="service-item__num">03</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">TODO</p>
            <h3 class="service-item__title">（TODO：事業3）</h3>
            <p class="service-item__text">（TODO：説明文）</p>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/ai-support/' ) ); ?>" class="service-item">
          <span class="service-item__num">04</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">TODO</p>
            <h3 class="service-item__title">（TODO：事業4）</h3>
            <p class="service-item__text">（TODO：説明文）</p>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/global-support/' ) ); ?>" class="service-item">
          <span class="service-item__num">05</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">TODO</p>
            <h3 class="service-item__title">（TODO：事業5）</h3>
            <p class="service-item__text">（TODO：説明文）</p>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/package/' ) ); ?>" class="service-item">
          <span class="service-item__num">06</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">TODO</p>
            <h3 class="service-item__title">（TODO：事業6）</h3>
            <p class="service-item__text">（TODO：説明文）</p>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/hr-operation/' ) ); ?>" class="service-item">
          <span class="service-item__num">07</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">TODO</p>
            <h3 class="service-item__title">（TODO：事業7）</h3>
            <p class="service-item__text">（TODO：説明文）</p>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">
        まずはお気軽にお問い合わせください。
      </h2>
      <p class="cta__lead">
        （TODO：お問い合わせセクションのリード文。）
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせする</a>
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
