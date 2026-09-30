<?php
/**
 * メインフォールバック（テンプレート階層の最終手段）
 *
 * @package Office Laila Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

  <section class="page-header">
    <div class="container page-header__inner">
      <h1 class="page-header__title">
        <?php
        if ( is_home() && ! is_front_page() ) {
            single_post_title();
        } elseif ( is_archive() ) {
            the_archive_title();
        } elseif ( is_search() ) {
            printf( '「%s」の検索結果', esc_html( get_search_query() ) );
        } else {
            echo 'お知らせ';
        }
        ?>
      </h1>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <ul class="news-list">
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="news-list__item">
              <div class="news-list__meta">
                <time class="news-list__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time>
              </div>
              <div class="news-list__body">
                <h3 class="news-list__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <?php if ( has_excerpt() ) : ?>
                  <p class="news-list__desc"><?php echo esc_html( get_the_excerpt() ); ?></p>
                <?php endif; ?>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <div class="container container--narrow prose">
          <p>表示できる投稿がまだありません。</p>
          <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">トップへ戻る</a></p>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php get_footer(); ?>
