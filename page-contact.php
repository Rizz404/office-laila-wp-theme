<?php
/**
 * Template Name: お問い合わせ
 * お問い合わせページ（スラッグ "contact" にも自動マッチ）
 *
 * フォーム本体は Contact Form 7（プラグイン）で管理する。
 * wp-admin > お問い合わせ > フォームで「お問い合わせフォーム」という
 * タイトルのフォームを作成すると、下の [contact-form-7] が自動的にそれを表示する。
 * 送信先メールアドレス等は CF7 のフォーム編集画面「メール」タブで設定する
 * （テーマのコードを触る必要はない）。
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <style>
    /* ===== 2カラムレイアウト（左：フォーム / 右：補足情報） ===== */
    .contact-grid {
      display: grid;
      gap: 32px;
      grid-template-columns: 1fr;
      align-items: start;
    }
    @media (min-width: 900px) {
      .contact-grid {
        grid-template-columns: 1.6fr 1fr;
        gap: 48px;
      }
    }
    .contact-grid__form { min-width: 0; }
    .contact-grid__side {
      min-width: 0;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    /* ===== フォーム本体（Contact Form 7 が生成する <form class="wpcf7-form"> をスタイリング） ===== */
    .contact-grid__form .wpcf7-form {
      display: grid;
      gap: 18px;
      background: #fff;
      border: 1px solid var(--c-border);
      border-radius: 12px;
      padding: 28px;
    }
    @media (min-width: 600px) {
      .contact-grid__form .wpcf7-form { padding: 32px; }
    }
    .contact-form__row { display: grid; gap: 8px; }

    .contact-grid__form .wpcf7-form label {
      font-size: 13px;
      font-weight: 700;
      color: var(--c-navy);
      letter-spacing: .04em;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .contact-grid__form .wpcf7-form label .req {
      background: var(--c-blue);
      color: #fff;
      font-size: 10px;
      padding: 2px 8px;
      border-radius: var(--radius-pill);
      font-weight: 700;
      letter-spacing: .04em;
    }
    .contact-grid__form .wpcf7-form label .opt {
      background: var(--c-bg-soft-2);
      color: var(--c-text-mute);
      font-size: 10px;
      padding: 2px 8px;
      border-radius: var(--radius-pill);
      font-weight: 700;
      letter-spacing: .04em;
    }

    /* CF7 は各入力を <span class="wpcf7-form-control-wrap"> で包む。ブロック化してレイアウト崩れを防ぐ */
    .contact-grid__form .wpcf7-form .wpcf7-form-control-wrap { display: block; }

    .contact-grid__form .wpcf7-form input.wpcf7-form-control,
    .contact-grid__form .wpcf7-form select.wpcf7-form-control,
    .contact-grid__form .wpcf7-form textarea.wpcf7-form-control {
      width: 100%;
      padding: 14px 16px;
      font-size: 15px;
      border: 1px solid var(--c-border-2);
      border-radius: var(--radius);
      background: #fff;
      color: var(--c-text);
      font-family: inherit;
      letter-spacing: .02em;
      transition: border-color .2s var(--ease), box-shadow .2s var(--ease);
    }
    .contact-grid__form .wpcf7-form input.wpcf7-form-control:focus,
    .contact-grid__form .wpcf7-form select.wpcf7-form-control:focus,
    .contact-grid__form .wpcf7-form textarea.wpcf7-form-control:focus {
      outline: none;
      border-color: var(--c-blue);
      box-shadow: 0 0 0 4px rgba(26,111,224,.12);
    }
    .contact-grid__form .wpcf7-form textarea.wpcf7-form-control { resize: vertical; min-height: 180px; line-height: 1.75; }
    .contact-form__hint { font-size: 12px; color: var(--c-text-mute); line-height: 1.7; }

    /* ===== 同意チェックボックス ===== */
    .contact-form__consent {
      background: var(--c-bg-soft);
      border: 1px solid var(--c-border);
      border-radius: var(--radius);
      padding: 14px 18px;
    }
    /*
     * 同意チェックボックスは CF7 の [acceptance] タグが自動で
     * <span class="wpcf7-list-item"><label><input type="checkbox">…テキスト…</label></span>
     * を生成するため、その内側の label / input を直接スタイリングする。
     */
    .contact-form__consent label {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14px;
      font-weight: 600;
      color: var(--c-text);
      cursor: pointer;
      letter-spacing: .02em;
    }
    .contact-form__consent input[type="checkbox"] {
      width: 18px;
      height: 18px;
      flex: 0 0 auto;
      accent-color: var(--c-blue);
      cursor: pointer;
      margin: 0;
    }
    .contact-form__consent .req { margin-left: 4px; }

    /* ===== エラー表示（CF7 のバリデーション出力） ===== */
    .contact-grid__form .wpcf7-form-control.wpcf7-not-valid {
      border-color: #d92d20;
      box-shadow: none;
    }
    .contact-grid__form .wpcf7-not-valid-tip {
      display: block;
      margin-top: 6px;
      font-size: 12px;
      font-weight: 700;
      color: #d92d20;
      letter-spacing: .02em;
    }

    /* ===== 送信結果アラート（CF7 のレスポンス出力） ===== */
    .contact-grid__form .wpcf7-response-output {
      grid-column: 1 / -1;
      margin: 0;
      border-radius: var(--radius);
      padding: 14px 18px;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: .02em;
      line-height: 1.7;
    }
    .contact-grid__form .wpcf7-form.sent .wpcf7-response-output {
      background: #ECFDF3;
      border: 1px solid #ABEFC6;
      color: #067647;
    }
    .contact-grid__form .wpcf7-form.invalid .wpcf7-response-output,
    .contact-grid__form .wpcf7-form.spam .wpcf7-response-output,
    .contact-grid__form .wpcf7-form.failed .wpcf7-response-output,
    .contact-grid__form .wpcf7-form.aborted .wpcf7-response-output {
      background: #FEF3F2;
      border: 1px solid #FECDCA;
      color: #B42318;
    }

    /* ===== 送信ボタン ===== */
    .contact-form__submit {
      text-align: center;
      margin-top: 8px;
    }
    .contact-form__submit .btn { min-width: 240px; }
    .contact-form__note {
      margin: 12px 0 0;
      font-size: 12px;
      color: var(--c-text-mute);
      letter-spacing: .02em;
    }

    /* ===== 右側サイドカード ===== */
    .contact-side-card {
      background: var(--c-bg-soft);
      border: 1px solid var(--c-border);
      border-radius: 12px;
      padding: 22px 24px;
    }
    .contact-side-card__title {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .18em;
      color: var(--c-text-mute);
      margin: 0 0 14px;
      padding-bottom: 12px;
      border-bottom: 1px solid var(--c-border);
      text-transform: uppercase;
    }

    /* 相談できる内容のリスト */
    .contact-topics {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .contact-topics li {
      position: relative;
      padding: 7px 0 7px 18px;
      font-size: 13.5px;
      font-weight: 600;
      color: var(--c-navy);
      line-height: 1.55;
      letter-spacing: .02em;
      border-bottom: 1px dashed var(--c-border);
    }
    .contact-topics li:last-child { border-bottom: none; }
    .contact-topics li::before {
      content: "";
      position: absolute;
      left: 2px;
      top: 14px;
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--c-blue);
    }

    /* 会社情報 */
    .contact-side-card__company {
      margin: 0 0 8px;
      font-size: 14px;
      font-weight: 700;
      color: var(--c-navy);
      letter-spacing: .04em;
    }
    .contact-side-card__address {
      margin: 0 0 10px;
      font-style: normal;
      font-size: 13px;
      color: var(--c-text-sub);
      line-height: 1.85;
      letter-spacing: .02em;
    }
    .contact-side-card__tel {
      margin: 0;
      font-size: 13px;
      font-weight: 600;
      color: var(--c-navy);
      letter-spacing: .04em;
    }
  </style>

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a><span class="breadcrumb__sep">›</span>お問い合わせ</p>
      <p class="page-header__eyebrow">CONTACT</p>
      <h1 class="page-header__title">お問い合わせ</h1>
      <p class="page-header__lead">
        システム開発、Web制作、ITコンサルティング、AI導入支援、グローバル支援など、お気軽にご相談ください。<br class="hide-sp">
        内容を確認のうえ、担当者よりご連絡いたします。
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">

      <div class="contact-grid">

        <!-- 左：フォーム（Contact Form 7） -->
        <div class="contact-grid__form">
          <?php
          if ( shortcode_exists( 'contact-form-7' ) ) {
              // wp-admin > お問い合わせ で「お問い合わせフォーム」というタイトルのフォームを
              // 作成すると、ここに自動で表示される（フォームの中身・宛先メール等は wp-admin 側で管理）。
              echo do_shortcode( '[contact-form-7 title="お問い合わせフォーム"]' );
          } elseif ( current_user_can( 'activate_plugins' ) ) {
              // 管理者にだけ見えるセットアップ案内（一般訪問者には表示しない）
              echo '<p class="contact-form__hint">Contact Form 7 プラグインを有効化し、「お問い合わせフォーム」という名前のフォームを作成してください。</p>';
          }
          ?>
        </div>

        <!-- 右：補足情報 -->
        <aside class="contact-grid__side">

          <div class="contact-side-card">
            <h2 class="contact-side-card__title">相談できる内容</h2>
            <ul class="contact-topics">
              <li>業務システム開発</li>
              <li>Webサイト制作</li>
              <li>Webシステム開発</li>
              <li>ITコンサルティング</li>
              <li>AI導入支援</li>
              <li>海外人材・グローバル連携</li>
            </ul>
          </div>

          <div class="contact-side-card">
            <h2 class="contact-side-card__title">会社情報</h2>
            <p class="contact-side-card__company">オフィス らいら</p>
            <address class="contact-side-card__address">
              埼玉県岩槻区金重
            </address>
            <p class="contact-side-card__tel">TEL：090-3905-5695</p>
          </div>

        </aside>

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
