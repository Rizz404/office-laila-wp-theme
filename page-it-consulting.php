<?php
/**
 * Template Name: 事業内容 / ITコンサルティング
 * 事業内容子ページ：ITコンサルティング
 * URL: /service/it-consulting/
 * （スラッグ "it-consulting" にも自動マッチ）
 *
 * @package Office Laila Theme
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
        課題を整理し、<span class="accent">実装まで責任を持つ</span>コンサル。
      </h1>
      <p class="page-header__lead">
        既存業務やシステムの課題を整理し、最適なIT活用・DX推進を支援します。
        机上の戦略だけで終わらせず、実際に動くシステムまで責任を持ってご支援できるのが、開発会社としての強みです。
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>主な対応領域</h2>
      <ul>
        <li>現状業務・既存システムの棚卸し</li>
        <li>業務課題の整理とIT活用方針の策定</li>
        <li>システム化・リプレイス計画の策定</li>
        <li>DX推進支援、業務効率化の推進</li>
        <li>ITベンダー選定・開発要件の整理</li>
        <li>AI・新技術活用に向けた検討支援</li>
      </ul>

      <h2>オフィス らいらのコンサルの特徴</h2>
      <p>「コンサルだけ」「開発だけ」ではなく、戦略から実装、運用までを一気通貫で見られる立場でご支援します。要件が固まらない段階からの相談、現場ヒアリングを踏まえた現実的な改善案づくりが得意です。</p>

      <h2>こんなお悩みに</h2>
      <ul>
        <li>何から手を付ければよいかわからない</li>
        <li>システムが乱立しており、整理したい</li>
        <li>DXに取り組みたいが、社内に詳しい人がいない</li>
        <li>AIや海外活用も視野に入れてIT戦略を考えたい</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">ITコンサルのご相談はこちら</h2>
      <p class="cta__lead">業務の棚卸しから、システム化方針の策定までお気軽にご相談ください。</p>
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
