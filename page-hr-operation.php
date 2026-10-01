<?php
/**
 * Template Name: 事業内容 / 人材・運用支援
 * 事業内容子ページ：人材・運用支援
 * URL: /service/hr-operation/
 * （スラッグ "hr-operation" にも自動マッチ）
 *
 * @package Office Laila Theme
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
        IT人材支援、Web運用、システム保守、業務運用の改善をサポートします。
        作って終わりではなく「使い続ける」フェーズまで、長期的なパートナーとして伴走します。
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>主な対応領域</h2>
      <ul>
        <li>IT人材支援（プロジェクトごとのアサイン、技術支援）</li>
        <li>Web運用代行・更新代行</li>
        <li>システム保守・運用サポート</li>
        <li>業務運用フローの改善支援</li>
        <li>社内ITヘルプ・問い合わせ対応支援</li>
        <li>AI・自動化を含めた運用負荷軽減</li>
      </ul>

      <h2>長く付き合えるITパートナーとして</h2>
      <p>システムやWebは「作って終わり」ではなく、運用し続けることが本番です。オフィス らいらは、開発実績を持つチームがそのまま運用にも入れるため、トラブル対応や改善提案までスピーディーに対応できます。</p>

      <h2>こんなお悩みに</h2>
      <ul>
        <li>社内にIT担当がおらず、サイトやシステムの運用が止まりがち</li>
        <li>保守ベンダーの対応が遅い・属人化している</li>
        <li>運用フローを整理し、自動化できるところは効率化したい</li>
        <li>AI・新しい技術を、運用に少しずつ取り入れたい</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">運用・保守のご相談はこちら</h2>
      <p class="cta__lead">既存システムの保守引き継ぎ、Web運用、運用改善まで、まずはお気軽にご相談ください。</p>
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
