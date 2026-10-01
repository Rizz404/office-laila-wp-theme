<?php
/**
 * Template Name: 事業内容 / Web・アプリ制作
 * 事業内容子ページ：Web・アプリ制作
 * URL: /service/web-app/
 * （スラッグ "web-app" にも自動マッチ）
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <style>
    /* Web & App 専用ヒーロー：明るめのブルー、軽やかな印象 */
    .webapp-hero {
      background:
        radial-gradient(700px 380px at 80% 0%, rgba(41,197,224,.22), transparent 60%),
        radial-gradient(600px 320px at 10% 100%, rgba(110,196,255,.14), transparent 65%),
        linear-gradient(135deg, #ECF7FC 0%, #F8FCFE 70%, #FFFFFF 100%);
      padding: 80px 0 64px;
      border-bottom: 1px solid var(--c-border);
      position: relative;
      overflow: hidden;
    }
    .webapp-hero__inner { position: relative; z-index: 1; }
    .webapp-hero .page-header__eyebrow { color: var(--c-cyan); }
    .webapp-hero h1 .accent {
      background: linear-gradient(90deg, var(--c-cyan) 0%, var(--c-blue) 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
  </style>

  <section class="webapp-hero">
    <div class="container webapp-hero__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a><span class="breadcrumb__sep">›</span>Web・アプリ制作</p>
      <p class="page-header__eyebrow">02 / WEB &amp; APP</p>
      <h1 class="page-header__title">
        <span class="accent">Web・アプリ</span>で、業務と集客をつなぐ。
      </h1>
      <p class="page-header__lead">
        企業サイト、サービスサイト、Webシステム、スマートフォン対応サイトなど、集客と業務効率化につながるWeb制作を行います。
        見た目だけのサイトではなく、業務やビジネスの目的とつながったWebをご提案します。
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>主な対応領域</h2>
      <ul>
        <li>企業サイト・コーポレートサイト制作</li>
        <li>サービスサイト・LP制作</li>
        <li>Webシステム・業務Webアプリケーション</li>
        <li>スマートフォン対応・レスポンシブWeb制作</li>
        <li>WordPressなどCMS構築・運用</li>
        <li>既存サイトのリニューアル・モダナイズ</li>
      </ul>

      <h2>システム会社が作るWebの強み</h2>
      <p>システム開発で培ったバックエンドの知見を活かし、見た目だけでなく、データベース連携・お問い合わせ管理・社内システム連携などまで含めたWeb制作が可能です。デザイン会社とシステム会社のあいだに分断されがちな領域を、一社で一気通貫で支援できます。</p>

      <h2>こんなお悩みに</h2>
      <ul>
        <li>古い会社サイトをリニューアルし、信頼感をアップしたい</li>
        <li>スマートフォン対応がされておらず、見づらい</li>
        <li>サイトと業務システムを連携させたい</li>
        <li>更新しやすいCMSベースで作り直したい</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Web制作のご相談はこちら</h2>
      <p class="cta__lead">サイトリニューアル、新規Webサービス、業務Webシステムなど幅広く対応します。</p>
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
