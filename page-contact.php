<?php
/**
 * Template Name: お問い合わせ
 * お問い合わせページ（スラッグ "contact" にも自動マッチ）
 *
 * NOTE: フォームは現状 action="#" のダミー。本番公開時は Contact Form 7 等の
 * 入力プラグインのショートコードに差し替えるか、独自エンドポイントを設定すること。
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

    /* ===== フォーム本体 ===== */
    .contact-form {
      display: grid;
      gap: 18px;
      background: #fff;
      border: 1px solid var(--c-border);
      border-radius: 12px;
      padding: 28px;
    }
    @media (min-width: 600px) {
      .contact-form { padding: 32px; }
    }
    .contact-form__row { display: grid; gap: 8px; }

    .contact-form label {
      font-size: 13px;
      font-weight: 700;
      color: var(--c-navy);
      letter-spacing: .04em;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .contact-form label .req {
      background: var(--c-blue);
      color: #fff;
      font-size: 10px;
      padding: 2px 8px;
      border-radius: var(--radius-pill);
      font-weight: 700;
      letter-spacing: .04em;
    }
    .contact-form label .opt {
      background: var(--c-bg-soft-2);
      color: var(--c-text-mute);
      font-size: 10px;
      padding: 2px 8px;
      border-radius: var(--radius-pill);
      font-weight: 700;
      letter-spacing: .04em;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
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
    .contact-form input:focus,
    .contact-form select:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: var(--c-blue);
      box-shadow: 0 0 0 4px rgba(26,111,224,.12);
    }
    .contact-form textarea { resize: vertical; min-height: 180px; line-height: 1.75; }
    .contact-form__hint { font-size: 12px; color: var(--c-text-mute); line-height: 1.7; }

    /* ===== 同意チェックボックス ===== */
    .contact-form__consent {
      background: var(--c-bg-soft);
      border: 1px solid var(--c-border);
      border-radius: var(--radius);
      padding: 14px 18px;
    }
    .contact-form__checkbox {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14px;
      font-weight: 600;
      color: var(--c-text);
      cursor: pointer;
      letter-spacing: .02em;
    }
    .contact-form__checkbox input[type="checkbox"] {
      width: 18px;
      height: 18px;
      flex: 0 0 auto;
      accent-color: var(--c-blue);
      cursor: pointer;
      margin: 0;
    }
    .contact-form__checkbox .req { margin-left: 4px; }

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

        <!-- 左：フォーム -->
        <div class="contact-grid__form">
          <?php
          /*
           * フォーム本体。Contact Form 7 等を導入する場合はこのブロックを
           * `echo do_shortcode( '[contact-form-7 id="..."]' );` 等に差し替える。
           */
          ?>
          <form class="contact-form" method="post" action="#" novalidate>

            <div class="contact-form__row">
              <label for="form-company">会社名 <span class="opt">任意</span></label>
              <input type="text" id="form-company" name="company" autocomplete="organization" placeholder="株式会社○○">
            </div>

            <div class="contact-form__row">
              <label for="form-name">お名前 <span class="req">必須</span></label>
              <input type="text" id="form-name" name="name" required autocomplete="name" placeholder="山田 太郎">
            </div>

            <div class="contact-form__row">
              <label for="form-email">メールアドレス <span class="req">必須</span></label>
              <input type="email" id="form-email" name="email" required autocomplete="email" placeholder="example@example.com">
            </div>

            <div class="contact-form__row">
              <label for="form-tel">電話番号 <span class="opt">任意</span></label>
              <input type="tel" id="form-tel" name="tel" autocomplete="tel" placeholder="000-0000-0000">
            </div>

            <div class="contact-form__row">
              <label for="form-type">お問い合わせ種別 <span class="req">必須</span></label>
              <select id="form-type" name="type" required>
                <option value="">選択してください</option>
                <option>システム開発について</option>
                <option>Web制作について</option>
                <option>ITコンサルティングについて</option>
                <option>AI導入支援について</option>
                <option>グローバル支援について</option>
                <option>その他</option>
              </select>
            </div>

            <div class="contact-form__row">
              <label for="form-message">お問い合わせ内容 <span class="req">必須</span></label>
              <textarea id="form-message" name="message" required placeholder="現状のお悩みやご相談内容をご記入ください。"></textarea>
              <span class="contact-form__hint">具体的なご要望が固まっていない段階でも、まずはお気軽にご記入ください。</span>
            </div>

            <div class="contact-form__consent">
              <label class="contact-form__checkbox" for="form-consent">
                <input type="checkbox" id="form-consent" name="consent" required>
                <span>
                  個人情報の取り扱いに同意します
                  <span class="req">必須</span>
                </span>
              </label>
            </div>

            <div class="contact-form__submit">
              <button type="submit" class="btn btn--blue btn--lg btn--no-arrow">この内容で送信する</button>
              <p class="contact-form__note">送信後、担当者より3営業日以内にご返信いたします。</p>
            </div>
          </form>
        </div>

        <!-- 右：補足情報 -->
        <aside class="contact-grid__side">

          <div class="contact-side-card">
            <h2 class="contact-side-card__title">相談できる内容</h2>
            <ul class="contact-topics">
              <li>（TODO：オフィス らいら で相談できる内容を記載）</li>
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
