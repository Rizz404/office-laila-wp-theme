<?php
/**
 * Template Name: 事業内容 / システム受託開発
 * 事業内容子ページ：システム受託開発
 * URL: /service/system-development/
 * （スラッグ "system-development" にも自動マッチ）
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <style>
    /* System Development 専用ヒーロー：信頼感のあるブルー系 */
    .system-hero {
      background:
        radial-gradient(700px 380px at 80% 0%, rgba(26,111,224,.18), transparent 60%),
        radial-gradient(600px 320px at 0% 100%, rgba(41,197,224,.10), transparent 65%),
        linear-gradient(135deg, #E8EFF8 0%, #F4F8FD 70%, #FFFFFF 100%);
      padding: 80px 0 64px;
      border-bottom: 1px solid var(--c-border);
      position: relative;
      overflow: hidden;
    }
    .system-hero__inner { position: relative; z-index: 1; }
    .system-hero .page-header__eyebrow { color: var(--c-blue); }
    .system-hero h1 .accent {
      background: linear-gradient(90deg, var(--c-blue) 0%, var(--c-cyan) 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
  </style>

  <section class="system-hero">
    <div class="container system-hero__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a><span class="breadcrumb__sep">›</span>システム受託開発</p>
      <p class="page-header__eyebrow">01 / SYSTEM DEVELOPMENT</p>
      <h1 class="page-header__title">
        業務に合った<span class="accent">システム</span>を、現場で動く形に。
      </h1>
      <p class="page-header__lead">
        業務システム、販売管理、在庫管理、社内管理システムなど、企業の業務に合わせたシステムを設計・開発します。
        長年積み重ねてきた業務理解とシステム化のノウハウで、現場で本当に使える仕組みを構築します。
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>主な対応領域</h2>
      <ul>
        <li>業務システムの新規開発（受注・販売・在庫・生産管理など）</li>
        <li>既存システムのリプレイス・モダナイゼーション</li>
        <li>社内管理システム・基幹システムの設計・開発</li>
        <li>業務効率化のためのWebシステム構築</li>
        <li>外部システム・SaaSとの連携、API開発</li>
        <li>仕様の整理から、要件定義・設計・開発・運用までの一貫支援</li>
      </ul>

      <h2>オフィス らいらの開発の特徴</h2>
      <p>長年、企業の基幹業務を支えるシステムを開発してきた経験があります。「業務の流れをきちんと理解し、現場で運用できる形に落とす」ことを大切にしているため、機能を作って終わりではなく、実際に使い続けられるシステムを提供できることが強みです。</p>

      <h2>こんなお悩みに</h2>
      <ul>
        <li>古い基幹システムをリプレイスしたいが、業務を止められない</li>
        <li>Excel管理が限界に来ており、システム化したい</li>
        <li>複数システムが分断されており、業務効率を上げたい</li>
        <li>仕様がまだ固まっていないが、相談しながら進めたい</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">システム開発のご相談はこちら</h2>
      <p class="cta__lead">現状の業務やシステムの課題から、お気軽にご相談ください。</p>
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
