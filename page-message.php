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
        オフィス らいら 代表者より、ご挨拶を申し上げます。（TODO：代表者名 未定）
      </p>
    </div>
  </section>

  <!-- ============== MESSAGE BODY ============== -->
  <section class="section">
    <div class="container">
      <div class="message-grid">

        <!-- TODO: Apricot代表の実写真は転用せず外した。オフィス らいら の代表者写真が
             用意でき次第、<img>タグを復活させて差し替えること -->
        <div class="message-grid__photo">
        </div>

        <div class="message-grid__body">
          <p class="message-body__title">（TODO：役職）</p>
          <p class="message-body__name">（TODO：代表者名 未定）</p>

          <div class="message-body__text">
            <p>
              （TODO：代表者挨拶の本文をここに記載してください。以下はApricot Company Themeを
              複製した際の暫定プレースホルダーであり、オフィス らいら の実際の文章ではありません。）
            </p>
          </div>

          <p class="message-body__sign">
            オフィス らいら<br>
            （TODO：役職・代表者名）
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
