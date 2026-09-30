<?php
/**
 * Template Name: 事業内容 / ITコンサルティング
 * 事業内容子ページ：ITコンサルティング
 * URL: /service/it-consulting/
 * （スラッグ "it-consulting" にも自動マッチ）
 *
 * @package Office Laila Theme
 *
 * TODO: 本文はApricot Company Theme（IT/システム開発業）の内容をそのまま複製した
 * プレースホルダー。オフィス らいら の実際の事業内容に合わせて全面的に書き直すこと。
 * このサービス区分（ITコンサルティング）自体がオフィス らいらに存在するかも要確認。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <style>
    /* IT Consulting 専用ヒーロー：知的なブルーグレー */
    .consult-hero {
      background:
        radial-gradient(700px 380px at 80% 0%, rgba(90,123,168,.20), transparent 60%),
        radial-gradient(600px 320px at 0% 100%, rgba(26,111,224,.10), transparent 65%),
        linear-gradient(135deg, #ECEFF4 0%, #F4F6FA 70%, #FFFFFF 100%);
      padding: 80px 0 64px;
      border-bottom: 1px solid var(--c-border);
      position: relative;
      overflow: hidden;
    }
    .consult-hero__inner { position: relative; z-index: 1; }
    .consult-hero .page-header__eyebrow { color: #5A7BA8; }
    .consult-hero h1 .accent {
      background: linear-gradient(90deg, #5A7BA8 0%, var(--c-blue) 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
  </style>

  <section class="consult-hero">
    <div class="container consult-hero__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a><span class="breadcrumb__sep">›</span>ITコンサルティング</p>
      <p class="page-header__eyebrow">03 / IT CONSULTING</p>
      <h1 class="page-header__title">
        （TODO：このサービスの見出し）
      </h1>
      <p class="page-header__lead">
        （TODO：このサービスの説明文をここに記載してください。）
      </p>
    </div>
  </section>

  <section class="section">
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
