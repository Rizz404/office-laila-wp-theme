<?php
/**
 * 固定ページ用テンプレート（スマートデリゲータ + フォールバック）
 *
 * - 親子付き固定ページ（例: /service/system-development/）等で
 *   WordPress 標準のテンプレート階層から page-{slug}.php が拾われない場合や、
 *   functions.php の template_include フィルタが他プラグインに上書きされた場合の
 *   "確実に専用テンプレートを通す保険" として、ここで明示的に include する。
 *
 * - 該当する page-{key}.php が無い場合のみ、デフォルトの the_title() + the_content() を出す。
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/* -----------------------------------------------------------------------
 * 1) 対応する page-{key}.php があれば、それを include して終了する。
 *    office_laila_theme_page_key() は functions.php で定義
 *    （スラッグ / 日本語タイトル双方から正規キーを返す）。
 * --------------------------------------------------------------------- */
if ( function_exists( 'office_laila_theme_page_key' ) ) {
    $office_laila_key = office_laila_theme_page_key();
    if ( $office_laila_key && $office_laila_key !== 'home' ) {
        $office_laila_custom = locate_template( 'page-' . $office_laila_key . '.php' );
        if ( $office_laila_custom ) {
            // デバッグ用：どの経路で読み込まれたか HTML コメントで残す
            echo "\n<!-- office-laila: page.php delegated to page-{$office_laila_key}.php -->\n";
            include $office_laila_custom;
            return;
        }
    }
}

/* -----------------------------------------------------------------------
 * 2) 対応する専用テンプレートが無い固定ページ用のフォールバック表示
 * --------------------------------------------------------------------- */
get_header();
echo "\n<!-- office-laila: page.php default fallback (no page-{key}.php matched) -->\n";
?>

  <section class="page-header">
    <div class="container page-header__inner">
      <?php the_title( '<h1 class="page-header__title">', '</h1>' ); ?>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <?php
      if ( have_posts() ) :
          while ( have_posts() ) :
              the_post();
              the_content();
          endwhile;
      endif;
      ?>
    </div>
  </section>

<?php get_footer(); ?>
