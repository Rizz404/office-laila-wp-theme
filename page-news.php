<?php
/**
 * Template Name: お知らせ
 * お知らせ一覧ページ（スラッグ "news" にも自動マッチ）
 *
 * @package Office Laila Theme
 *
 * TODO: 以下のお知らせ項目はApricot Company Themeを複製した際のダミー（架空の日付・
 * 内容）。オフィス らいら の実際のお知らせに差し替えるか、それまでは非表示にすること。
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
        オフィス らいら からのお知らせ、サービス情報、更新情報をご案内します。
      </p>
    </div>
  </section>

  <!-- ============== NEWS LIST ============== -->
  <section class="section">
    <div class="container">
      <ul class="news-list">

        <!-- TODO: サンプル表示用のダミー項目。正式なお知らせに差し替えてください -->
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
    </div>
  </section>

  <!-- ============== CTA ============== -->
  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">お問い合わせはこちら</h2>
      <p class="cta__lead">
        （TODO：お問い合わせセクションのリード文。）
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
