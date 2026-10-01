<?php
/**
 * Template Name: 事業内容
 * 事業内容一覧ページ（スラッグ "service" にも自動マッチ）
 *
 * 子ページ（ai-support, global-support, hr-operation, it-consulting,
 * package, system-development, web-app）は別途対応。本テンプレートからは
 * 子ページのスラッグ /service/{slug}/ へのリンクのみ生成する。
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span>事業内容</p>
      <p class="page-header__eyebrow">SERVICE</p>
      <h1 class="page-header__title">事業内容</h1>
      <p class="page-header__lead">
        オフィス らいらは、システム開発、Web制作、ITコンサルティングを中心に、AI導入支援やグローバル連携まで、<br class="hide-sp">
        企業の業務改善と成長を支えるITサービスを提供しています。
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="services__list">

        <a href="<?php echo esc_url( home_url( '/service/system-development/' ) ); ?>" class="service-item">
          <span class="service-item__num">01</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">SYSTEM</p>
            <h3 class="service-item__title">システム受託開発</h3>
            <p class="service-item__text">
              業務システム、販売管理、在庫管理、顧客管理、社内管理システムなど、企業ごとの業務フローに合わせたシステムを設計・開発します。
            </p>
            <p class="service-item__examples-label">対応例</p>
            <ul class="service-item__examples">
              <li>販売管理・在庫管理システム</li>
              <li>社内管理・顧客管理システム</li>
              <li>既存システムの改善・改修</li>
            </ul>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/web-app/' ) ); ?>" class="service-item">
          <span class="service-item__num">02</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">WEB &amp; APP</p>
            <h3 class="service-item__title">Web・アプリ制作</h3>
            <p class="service-item__text">
              企業サイト、サービスサイト、Webシステム、スマートフォン対応サイトなど、集客と業務効率化につながる制作を行います。
            </p>
            <p class="service-item__examples-label">対応例</p>
            <ul class="service-item__examples">
              <li>コーポレートサイト・サービスサイト</li>
              <li>予約・問い合わせフォーム付き Web</li>
              <li>管理画面付き Web システム</li>
            </ul>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/it-consulting/' ) ); ?>" class="service-item">
          <span class="service-item__num">03</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">CONSULTING</p>
            <h3 class="service-item__title">ITコンサルティング</h3>
            <p class="service-item__text">
              既存業務やシステムの課題を整理し、最適なIT活用・DX推進を支援します。
              机上の戦略だけでなく、実際の業務に即した改善提案を行います。
            </p>
            <p class="service-item__examples-label">相談できる内容</p>
            <ul class="service-item__examples">
              <li>業務課題の整理・IT活用方針の策定</li>
              <li>既存システムのリプレイス検討</li>
              <li>DX推進・新技術活用の検討</li>
            </ul>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/ai-support/' ) ); ?>" class="service-item">
          <span class="service-item__num">04</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">AI SUPPORT</p>
            <h3 class="service-item__title">AI導入支援</h3>
            <p class="service-item__text">
              生成AIやAIツールを活用し、問い合わせ対応、資料作成、営業支援、社内業務効率化など、
              実務に使える形での導入をご支援します。
            </p>
            <p class="service-item__examples-label">対応例</p>
            <ul class="service-item__examples">
              <li>ChatGPT・Claudeの業務活用支援</li>
              <li>AIチャットボット導入・問い合わせ自動化</li>
              <li>社内ナレッジ活用・業務自動化</li>
            </ul>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/global-support/' ) ); ?>" class="service-item">
          <span class="service-item__num">05</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">GLOBAL</p>
            <h3 class="service-item__title">グローバル支援</h3>
            <p class="service-item__text">
              海外人材や海外拠点との連携を活かし、開発・制作・運用体制の構築をご支援します。
              コストを抑えながら品質を担保する体制づくりが得意です。
            </p>
            <p class="service-item__examples-label">対応例</p>
            <ul class="service-item__examples">
              <li>オフショア開発体制の構築</li>
              <li>多言語Webサイト制作</li>
              <li>海外進出企業向けITサポート</li>
            </ul>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/package/' ) ); ?>" class="service-item">
          <span class="service-item__num">06</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">PACKAGE</p>
            <h3 class="service-item__title">パッケージ・サービス提供</h3>
            <p class="service-item__text">
              既存のパッケージソフトや業務支援サービスの導入・運用を通じて、企業の業務改善をご支援します。
              ゼロから作るのではなく、既存資産を活かす進め方もご提案できます。
            </p>
            <p class="service-item__examples-label">対応例</p>
            <ul class="service-item__examples">
              <li>業務支援パッケージの導入</li>
              <li>既存パッケージのカスタマイズ</li>
              <li>導入後の運用・保守サポート</li>
            </ul>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

        <a href="<?php echo esc_url( home_url( '/service/hr-operation/' ) ); ?>" class="service-item">
          <span class="service-item__num">07</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">HR OPERATION</p>
            <h3 class="service-item__title">人材・運用支援</h3>
            <p class="service-item__text">
              海外人材やパートナーとの連携、運用体制づくり、業務サポートを通じて、企業の継続的な成長を支援します。
            </p>
            <p class="service-item__examples-label">対応例</p>
            <ul class="service-item__examples">
              <li>海外人材・パートナー連携</li>
              <li>運用体制構築・業務サポート</li>
              <li>継続的な改善・運用支援</li>
            </ul>
            <span class="service-item__link">詳しく見る</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">
        どのようなご相談でも、<br class="hide-sp">
        まずはお気軽にお問い合わせください。
      </h2>
      <p class="cta__lead">
        システム開発、Web制作、IT活用、AI導入支援など、課題が明確でない段階でもご相談いただけます。<br class="hide-sp">
        現在の業務内容を整理しながら、最適な進め方をご提案します。
      </p>
      <div class="cta__buttons">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary btn--lg">お問い合わせする</a>
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
