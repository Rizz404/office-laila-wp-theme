<?php
/**
 * Template Name: 会社案内
 * 会社案内ページ（スラッグ "company" にも自動マッチ）
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span>会社案内</p>
      <p class="page-header__eyebrow">COMPANY</p>
      <h1 class="page-header__title">会社案内</h1>
      <p class="page-header__lead">
        オフィス らいら の会社概要と所在地をご案内します。
      </p>
    </div>
  </section>

  <section class="section company-summary">
    <div class="container">

      <div class="company-grid">

        <!-- 左カード：マップ + アクセス + 近隣コインパーキング
             TODO: 上記は全てApricotの旧オフィス所在地に基づく内容。
             オフィス らいら の正式住所が決まり次第、地図・アクセス・駐車場情報を作り直すこと -->
        <article class="company-card company-card--location">
          <div class="company-map">
            <!-- TODO: 正式住所が決まったら Google マップ埋め込みをここに設置 -->
          </div>

          <dl class="company-location">
            <div class="company-location__row">
              <dt>アクセス</dt>
              <dd>
                （TODO：正式住所が決まり次第、最寄り駅・アクセス情報を記載）
              </dd>
            </div>
          </dl>
        </article>

        <!-- 右カード：会社概要表 -->
        <article class="company-card company-card--info">
          <dl class="company-info">
            <div class="company-info__row">
              <dt>会社名</dt>
              <dd>オフィス らいら</dd>
            </div>
            <div class="company-info__row">
              <dt>英文名</dt>
              <dd>OFFICE LAILA</dd>
            </div>
            <div class="company-info__row">
              <dt>所在地</dt>
              <dd>
                埼玉県岩槻区金重
              </dd>
            </div>
            <div class="company-info__row">
              <dt>連絡先</dt>
              <dd>
                TEL：090-3905-5695
              </dd>
            </div>
            <div class="company-info__row">
              <dt>代表者</dt>
              <dd>（TODO：代表者名 未定）</dd>
            </div>
            <div class="company-info__row">
              <dt>創立</dt>
              <dd>（TODO：設立日 未定）</dd>
            </div>
            <div class="company-info__row">
              <dt>資本金</dt>
              <dd>（TODO：資本金 未定・該当ない場合は行ごと削除）</dd>
            </div>
            <div class="company-info__row">
              <dt>取引銀行</dt>
              <dd>（TODO：取引銀行 未定・該当ない場合は行ごと削除）</dd>
            </div>
            <div class="company-info__row">
              <dt>事業内容</dt>
              <dd>
                <ul class="company-info__list">
                  <li>（TODO：オフィス らいら の事業内容をここに記載）</li>
                </ul>
              </dd>
            </div>
          </dl>
        </article>

      </div>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">会社へのご相談・お問い合わせ</h2>
      <p class="cta__lead">
        取引・採用・提携など、どのようなご用件でもお気軽にご連絡ください。
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせする</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--ghost btn--lg">無料相談する</a>
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
