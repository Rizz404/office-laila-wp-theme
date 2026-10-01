<?php
/**
 * Template Name: お知らせ
 * お知らせ一覧ページ（スラッグ "news" にも自動マッチ）
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <!-- ============== PAGE HEADER ============== -->
  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span>お知らせ</p>
      <p class="page-header__eyebrow">NEWS</p>
      <h1 class="page-header__title">お知らせ</h1>
      <p class="page-header__lead">
        オフィス らいらからのお知らせ、サービス情報、更新情報をご案内します。
      </p>
    </div>
  </section>

  <!-- ============== NEWS LIST ============== -->
  <section class="section">
    <div class="container">
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

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-04-01">2026.04.01</time>
            <span class="news-list__cat news-list__cat--service">サービス</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="<?php echo esc_url( home_url( '/service/global-support/' ) ); ?>">グローバル支援サービスの提供を開始しました</a>
            </h3>
            <p class="news-list__desc">
              海外人材・海外パートナーとの連携を活かし、海外進出やオフショア開発を支援する新サービスの提供を開始しました。
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-02-16">2026.02.16</time>
            <span class="news-list__cat news-list__cat--info">お知らせ</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="<?php echo esc_url( home_url( '/works/' ) ); ?>">開発実績ページを更新しました</a>
            </h3>
            <p class="news-list__desc">
              業務システム開発・Webシステム制作・パッケージソフト導入支援など、分野別の実績紹介を追加しました。
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-01-06">2026.01.06</time>
            <span class="news-list__cat news-list__cat--info">お知らせ</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">年始のご挨拶</h3>
            <p class="news-list__desc">
              旧年中は格別のご高配を賜り、厚く御礼申し上げます。本年もオフィス らいらをよろしくお願い申し上げます。
            </p>
          </div>
        </li>

      </ul>
    </div>
  </section>

  <!-- ============== CTA ============== -->
  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">お問い合わせはこちら</h2>
      <p class="cta__lead">
        システム開発・Web制作・ITコンサルティング・AI導入支援・海外進出支援に関するご相談を承っています。
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせフォームへ</a>
        <a href="<?php echo esc_url( home_url( '/service/' ) ); ?>" class="btn btn--ghost btn--lg">事業内容を見る</a>
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
