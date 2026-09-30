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
        <!-- TODO: Apricotの実ロゴマーク画像は転用せず外した。正式ロゴが決まり次第 <img> に戻す -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__logo-link">
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

      <!-- TODO: 元のApricot向け「公式サイト／AI支援サイト」外部リンク列はApricot固有のため削除。
           オフィス らいら用の関連リンクが決まったらここに追加する -->

    </div>

    <div class="site-footer__bottom">
      <span>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> OFFICE LAILA All Rights Reserved.</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
