<?php
/**
 * The footer for our theme.
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
</main>

<!-- ============== FOOTER ============== -->
<footer class="site-footer">
  <div class="container">
    <div class="site-footer__top">

      <div class="site-footer__brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__logo-link">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/footer-mark.png' ); ?>" alt="オフィス らいら ロゴマーク" class="site-footer__logo-mark">
          <span class="site-footer__logo-text">
            オフィス らいら
            <small>OFFICE LAILA</small>
          </span>
        </a>
        <address class="site-footer__address">
          埼玉県岩槻区金重
        </address>
        <p class="site-footer__tel">TEL：090-3905-5695</p>
      </div>

      <div class="site-footer__col">
        <h4>SITE MAP</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/message/' ) ); ?>">代表者挨拶</a></li>
          <li><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>">事業内容</a></li>
          <li><a href="<?php echo esc_url( home_url( '/works/' ) ); ?>">開発実績</a></li>
          <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社案内</a></li>
          <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
        </ul>
      </div>

      <div class="site-footer__col">
        <h4>RELATED</h4>
        <ul>
          <li><a href="https://apricot-j.co.jp/apricot/" target="_blank" rel="noopener noreferrer">公式サイト</a></li>
          <li><a href="http://ai.apricot-j.co.jp/" target="_blank" rel="noopener noreferrer">AI支援サイト</a></li>
          <li><a href="https://apricot-j.co.jp/apricot/company.html" target="_blank" rel="noopener noreferrer">会社案内の詳細を見る</a></li>
        </ul>
      </div>

    </div>

    <div class="site-footer__bottom">
      <span>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> OFFICE LAILA All Rights Reserved.</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
