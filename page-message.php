<?php
/**
 * Template Name: 代表者挨拶
 * 代表者挨拶ページ（スラッグ "message" にも自動マッチ）
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <!-- ============== PAGE HEADER ============== -->
  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span>代表者挨拶</p>
      <p class="page-header__eyebrow">MESSAGE</p>
      <h1 class="page-header__title">代表者挨拶</h1>
      <p class="page-header__lead">
        オフィス らいら 代表取締役 鏑木 孝和より、ご挨拶を申し上げます。
      </p>
    </div>
  </section>

  <!-- ============== MESSAGE BODY ============== -->
  <section class="section">
    <div class="container">
      <div class="message-grid">

        <div class="message-grid__photo">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/representative-kaburagi.png' ); ?>"
               alt="オフィス らいら 代表取締役 鏑木 孝和"
               class="message-photo-img"
               loading="lazy"
               decoding="async">
        </div>

        <div class="message-grid__body">
          <p class="message-body__title">代表取締役</p>
          <p class="message-body__name">鏑木 孝和</p>

          <div class="message-body__text">
            <p>
              インターネットの発展とともに、Webや情報システムは企業経営に不可欠なインフラとして、その役割を年々大きく変化させてまいりました。
            </p>
            <p>
              オフィス らいらは、創業以来、お客さまの視点に立ったWEB制作・システム開発を通じて、企業の業務改善と価値向上に貢献してまいりました。私たちはこれまで蓄積してきた経験と技術力を活かし、現場で本当に使える仕組みづくりを大切にしています。
            </p>
            <p>
              近年では、生成AIやデジタルツールの活用、グローバルな開発体制との連携など、企業を取り巻くIT環境はさらに大きく変化しています。私たちは、こうした変化を新しい価値創出の機会と捉え、お客さまと共に挑戦してまいります。
            </p>
            <p>
              これからもオフィス らいらは、システム開発・Web制作・ITコンサルティングの経験を土台に、AI活用やグローバル連携も含めた幅広い支援を通じて、企業の成長と国際社会への貢献を目指してまいります。
            </p>
          </div>

          <p class="message-body__sign">
            オフィス らいら<br>
            代表取締役　鏑木 孝和
          </p>
        </div>

      </div>
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
