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
        オフィス らいらの会社概要と所在地をご案内します。
      </p>
    </div>
  </section>

  <section class="section company-summary">
    <div class="container">

      <div class="company-grid">

        <!-- 左カード：マップ + アクセス + 近隣コインパーキング -->
        <article class="company-card company-card--location">
          <div class="company-map">
            <iframe
              src="https://maps.google.com/maps?q=%E5%9F%BC%E7%8E%89%E7%9C%8C%E5%B2%A9%E6%A7%BB%E5%8C%BA%E9%87%91%E9%87%8D&t=&z=16&ie=UTF8&iwloc=&output=embed"
              title="オフィス らいら 所在地マップ"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen></iframe>
          </div>

          <dl class="company-location">
            <div class="company-location__row">
              <dt>アクセス</dt>
              <dd>
                JR山手線・東急目黒線<br>
                東京メトロ南北線・都営三田線<br>
                目黒駅周辺
              </dd>
            </div>

            <div class="company-location__row company-location__row--parking">
              <dt>近隣コイン<br>パーキング例</dt>
              <dd>
                <ul class="company-parking__list">
                  <li>
                    <span class="company-parking__name">三井のリパーク 下目黒１丁目第３ 駐車場</span>
                    <span class="company-parking__addr">〒153-0064 東京都目黒区下目黒１丁目５−４</span>
                  </li>
                  <li>
                    <span class="company-parking__name">GSパーク下目黒１丁目</span>
                    <span class="company-parking__addr">〒153-0064 東京都目黒区下目黒１丁目３−２７</span>
                  </li>
                </ul>
                <p class="company-parking__note">
                  ※駐車場は提携駐車場ではありません。営業時間・料金・空き状況は各駐車場の案内をご確認ください。
                </p>
              </dd>
            </div>
          </dl>

          <a class="company-location__link"
             href="https://www.google.com/maps?q=%E5%9F%BC%E7%8E%89%E7%9C%8C%E5%B2%A9%E6%A7%BB%E5%8C%BA%E9%87%91%E9%87%8D"
             target="_blank" rel="noopener noreferrer">
            Googleマップで開く
          </a>
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
                TEL：090-3905-5695<br>
                FAX：03-6264-8941
              </dd>
            </div>
            <div class="company-info__row">
              <dt>代表取締役</dt>
              <dd>鏑木 孝和</dd>
            </div>
            <div class="company-info__row">
              <dt>創立</dt>
              <dd>平成元年4月20日</dd>
            </div>
            <div class="company-info__row">
              <dt>資本金</dt>
              <dd>3,500万円</dd>
            </div>
            <div class="company-info__row">
              <dt>取引銀行</dt>
              <dd>三井住友銀行 旗の台支店</dd>
            </div>
            <div class="company-info__row">
              <dt>事業内容</dt>
              <dd>
                <ul class="company-info__list">
                  <li>コンピュータシステムの企画・調査・設計・開発</li>
                  <li>コンピュータソフトウェアの設計・開発・販売</li>
                  <li>WEB系システムの企画・調査・設計・開発</li>
                  <li>コンピュータその他の事務機器の販売</li>
                  <li>IT技術に関するコンサルティング</li>
                  <li>ホームページの企画・デザイン・制作・開発</li>
                </ul>
              </dd>
            </div>
            <div class="company-info__row">
              <dt>公式サイト</dt>
              <dd>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" rel="noopener noreferrer">
                  公式サイトを見る
                </a>
              </dd>
            </div>
            <div class="company-info__row">
              <dt>AI支援サイト</dt>
              <dd>
                <a href="<?php echo esc_url( 'https://ai.office-laila.biz/' ); ?>" target="_blank" rel="noopener noreferrer">
                  AI支援サイトを見る
                </a>
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
