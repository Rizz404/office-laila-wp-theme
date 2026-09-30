<?php
/**
 * Template Name: 事業内容 / 人材・運用支援
 * 事業内容子ページ：人材・運用支援
 * URL: /service/hr-operation/
 * （スラッグ "hr-operation" にも自動マッチ）
 *
 * @package Office Laila Theme
 *
 * TODO: 本文はApricot Company Theme（IT/システム開発業）の内容をそのまま複製した
 * プレースホルダー。オフィス らいら の実際の事業内容に合わせて全面的に書き直すこと。
 * このサービス区分（人材・運用支援）自体がオフィス らいらに存在するかも要確認。
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a><span class="breadcrumb__sep">›</span>人材・運用支援</p>
      <p class="page-header__eyebrow">06 / HR &amp; OPERATION</p>
      <h1 class="page-header__title">人材・運用支援</h1>
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
