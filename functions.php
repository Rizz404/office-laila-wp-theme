<?php
/**
 * Office Laila Theme: functions
 *
 * テーマ初期設定と CSS/JS 読み込み、ページテンプレートの安全網。
 * 固定ページは front-page.php / page-{slug}.php / page.php / index.php
 * のテンプレート階層で表示する。
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 固定ページの "正規キー"（message/service/works/company/contact/home）を返す。
 *
 * - 投稿スラッグが ASCII (message 等) ならそのまま採用
 * - 日本語タイトルから自動生成された非 ASCII スラッグ用に、タイトルでも判定
 *
 * @return string|null
 */
function office_laila_theme_page_key( $page = null ) {
    if ( ! $page ) {
        if ( ! is_page() ) {
            return null;
        }
        $page = get_queried_object();
    }
    if ( ! $page || empty( $page->post_type ) || $page->post_type !== 'page' ) {
        return null;
    }

    $slug  = isset( $page->post_name )  ? $page->post_name  : '';
    $title = isset( $page->post_title ) ? $page->post_title : '';

    // 静的サイト時代の URL/CSS と揃えるためのキー（主要ページ + service 子ページ7枚）
    $known_slugs = array(
        // 主要ページ
        'home', 'message', 'service', 'works', 'company', 'contact', 'news',
        // service 子ページ
        'system-development', 'web-app', 'it-consulting',
        'ai-support', 'global-support', 'package', 'hr-operation',
    );
    if ( in_array( $slug, $known_slugs, true ) ) {
        return $slug;
    }

    // 日本語タイトル → キーへのマッピング（管理画面で和文タイトルしか付けていない場合の救済）
    $title_map = array(
        // 主要ページ
        'ホーム'                     => 'home',
        'トップ'                     => 'home',
        '代表者挨拶'                 => 'message',
        '事業内容'                   => 'service',
        '開発実績'                   => 'works',
        '会社案内'                   => 'company',
        'お知らせ'                   => 'news',
        'お問い合わせ'               => 'contact',
        // service 子ページ
        'システム受託開発'           => 'system-development',
        'Web・アプリ制作'            => 'web-app',
        'ITコンサルティング'         => 'it-consulting',
        'AI導入支援'                 => 'ai-support',
        'グローバル支援'             => 'global-support',
        '海外進出・オフショア開発支援' => 'global-support',
        'パッケージ・サービス提供'   => 'package',
        '人材・運用支援'             => 'hr-operation',
    );
    if ( isset( $title_map[ $title ] ) ) {
        return $title_map[ $title ];
    }

    return null;
}

/**
 * テーマセットアップ
 */
function office_laila_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ) );

    register_nav_menus( array(
        'primary' => 'グローバルナビゲーション',
        'mobile'  => 'モバイルナビゲーション',
        'footer'  => 'フッターサイトマップ',
    ) );
}
add_action( 'after_setup_theme', 'office_laila_theme_setup' );

/**
 * CSS / JS の読み込み
 */
function office_laila_theme_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // Google Fonts (Noto Sans JP)
    wp_enqueue_style(
        'office-laila-google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // 共通スタイル — 静的サイト由来の assets/css/common.css をそのまま流用
    wp_enqueue_style(
        'office-laila-common',
        get_template_directory_uri() . '/assets/css/common.css',
        array( 'office-laila-google-fonts' ),
        $theme_version
    );

    // WordPress 固有の補正（管理バー・固定ヘッダー・AIチャットの z-index 等）
    wp_enqueue_style(
        'office-laila-wp-overrides',
        get_template_directory_uri() . '/assets/css/wp-overrides.css',
        array( 'office-laila-common' ),
        $theme_version
    );

    // テーマヘッダー保持用 style.css
    wp_enqueue_style(
        'office-laila-theme',
        get_stylesheet_uri(),
        array( 'office-laila-wp-overrides' ),
        $theme_version
    );

    // 共通スクリプト — defer で読み込み（ハンバーガー / AI相談チャット）
    wp_enqueue_script(
        'office-laila-common',
        get_template_directory_uri() . '/assets/js/common.js',
        array(),
        $theme_version,
        array(
            'strategy'  => 'defer',
            'in_footer' => false,
        )
    );
}
add_action( 'wp_enqueue_scripts', 'office_laila_theme_enqueue_assets' );

/**
 * 固定ページに対して、スラッグが日本語等で page-{slug}.php に当たらない場合でも、
 * 正規キー (message/service/...) に対応する page-{key}.php へフォールバックさせる。
 *
 * - スラッグが既に message 等 ASCII なら、WP の通常階層で page-message.php が拾われるため
 *   ここで上書きしても結果は同じ（同じファイルを返す）。
 * - 日本語スラッグや、親子付きスラッグで階層が想定外になった場合、ここで救済する。
 *
 * 注意：実際には page.php 側にも保険ロジック（spelling: スマートデリゲータ）を入れて
 * 二重に守っている。template_include が他プラグインに上書きされても、page.php に処理が
 * 落ちた段階で page-{key}.php を include するため、結果として子テンプレートが必ず通る。
 */
function office_laila_theme_template_include( $template ) {
    if ( ! is_page() ) {
        return $template;
    }
    $key = office_laila_theme_page_key();
    if ( ! $key || $key === 'home' ) {
        return $template; // home は front-page.php に任せる
    }
    $custom = locate_template( 'page-' . $key . '.php' );
    if ( $custom ) {
        return $custom;
    }
    return $template;
}
// PHP_INT_MAX 相当の高優先度で登録し、他プラグインが先に書き戻すケースを防ぐ
add_filter( 'template_include', 'office_laila_theme_template_include', PHP_INT_MAX );

/**
 * デバッグ補助：実際に WordPress が読み込んだトップレベルテンプレートを
 * HTML コメントとして <body> 直後に出力する。ブラウザのソース表示で
 * 「どの page-*.php が使われているか」を一目で確認できる。
 * 本番運用時に煩雑になるのを避けたい場合は、後でこの hook を外せばよい。
 */
function office_laila_theme_log_template( $template ) {
    if ( ! is_admin() ) {
        $rel = str_replace( get_template_directory(), '', (string) $template );
        // wp_head/wp_footer の手前で出すのは難しいので template_include 戻り値ベースで
        // wp_body_open に echo するクロージャを差し込む
        add_action( 'wp_body_open', function () use ( $rel ) {
            echo "\n<!-- office-laila: template_include resolved => {$rel} -->\n";
        } );
    }
    return $template;
}
add_filter( 'template_include', 'office_laila_theme_log_template', PHP_INT_MAX );

/**
 * 固定ページの正規キーから body クラスを付与（例: page-message, page-contact）
 * 静的サイト由来のページ別スタイル（.page-message ～ など）を有効化するため。
 */
function office_laila_theme_body_class( $classes ) {
    if ( is_page() ) {
        $key = office_laila_theme_page_key();
        if ( $key ) {
            $classes[] = 'page-' . sanitize_html_class( $key );
        } else {
            // フォールバック：スラッグそのもの（ASCII 化されていれば付与される）
            $slug = get_post_field( 'post_name', get_queried_object_id() );
            if ( $slug ) {
                $sanitized = sanitize_html_class( $slug );
                if ( $sanitized ) {
                    $classes[] = 'page-' . $sanitized;
                }
            }
        }
    }
    return $classes;
}
add_filter( 'body_class', 'office_laila_theme_body_class' );

/**
 * <head> 内に preconnect / theme-color メタを出力
 */
function office_laila_theme_head_meta() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<meta name="theme-color" content="#0F2A55">' . "\n";

    // フロントページ用のメタディスクリプション（暫定）
    if ( is_front_page() ) {
        $desc = 'オフィス らいらは、システム開発・Web制作・ITコンサルティングの長年の実績を活かし、企業の業務改善・AI活用・海外展開を支援するITパートナーです。';
        echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'office_laila_theme_head_meta', 1 );

/**
 * Auto-create halaman (page)
 *
 * Membuat halaman (post type page) yang sesuai dengan template page-*.php
 * secara otomatis, jadi tidak perlu bikin satu-satu manual di wp-admin.
 *
 * Ada 2 trigger:
 * 1) Saat theme ini diaktifkan (after_switch_theme) ... otomatis jalan saat install baru
 * 2) Untuk environment yang theme-nya sudah aktif duluan, ada tombol
 *    "今すぐ自動作成する" (Buat Sekarang) di notice admin dashboard
 *    (lewat admin-post.php. Manual, tapi tidak perlu tulis kode/command apa pun)
 *
 * Kalau halaman dengan slug yang sama sudah ada, otomatis di-skip, jadi
 * dijalankan berkali-kali pun tidak akan bikin duplikat.
 */
function office_laila_theme_get_page_definitions() {
    return array(
        // Halaman utama (tanpa parent)
        array( 'slug' => 'message', 'title' => '代表者挨拶',   'template' => 'page-message.php' ),
        array( 'slug' => 'service', 'title' => '事業内容',     'template' => 'page-service.php' ),
        array( 'slug' => 'works',   'title' => '開発実績',     'template' => 'page-works.php' ),
        array( 'slug' => 'company', 'title' => '会社案内',     'template' => 'page-company.php' ),
        array( 'slug' => 'news',    'title' => 'お知らせ',     'template' => 'page-news.php' ),
        array( 'slug' => 'contact', 'title' => 'お問い合わせ', 'template' => 'page-contact.php' ),

        // Child page dari 事業内容 (parent: service, URL: /service/{slug}/)
        array( 'slug' => 'system-development', 'title' => 'システム受託開発',       'template' => 'page-system-development.php', 'parent' => 'service' ),
        array( 'slug' => 'web-app',            'title' => 'Web・アプリ制作',       'template' => 'page-web-app.php',            'parent' => 'service' ),
        array( 'slug' => 'it-consulting',      'title' => 'ITコンサルティング',     'template' => 'page-it-consulting.php',      'parent' => 'service' ),
        array( 'slug' => 'ai-support',         'title' => 'AI導入支援',            'template' => 'page-ai-support.php',         'parent' => 'service' ),
        array( 'slug' => 'global-support',     'title' => 'グローバル支援',         'template' => 'page-global-support.php',     'parent' => 'service' ),
        array( 'slug' => 'package',            'title' => 'パッケージ・サービス提供', 'template' => 'page-package.php',          'parent' => 'service' ),
        array( 'slug' => 'hr-operation',       'title' => '人材・運用支援',         'template' => 'page-hr-operation.php',       'parent' => 'service' ),
    );
}

/**
 * Membuat hanya halaman yang belum ada.
 *
 * @return string[] Daftar label halaman yang baru dibuat kali ini ("Judul (/slug/)")
 */
function office_laila_theme_create_missing_pages() {
    $created     = array();
    $slug_to_id  = array();

    foreach ( office_laila_theme_get_page_definitions() as $def ) {
        $existing = get_page_by_path( $def['slug'] );
        if ( $existing ) {
            $slug_to_id[ $def['slug'] ] = $existing->ID;
            continue;
        }

        // Cari ID parent page (di array, "service" diproses lebih dulu daripada child-nya,
        // jadi biasanya bisa diambil dari $slug_to_id, tapi jaga-jaga cek DB juga)
        $parent_id = 0;
        if ( ! empty( $def['parent'] ) ) {
            if ( isset( $slug_to_id[ $def['parent'] ] ) ) {
                $parent_id = $slug_to_id[ $def['parent'] ];
            } else {
                $parent_page = get_page_by_path( $def['parent'] );
                if ( $parent_page ) {
                    $parent_id = $parent_page->ID;
                }
            }
        }

        $post_id = wp_insert_post( array(
            'post_title'  => $def['title'],
            'post_name'   => $def['slug'],
            'post_type'   => 'page',
            'post_status' => 'publish',
            'post_parent' => $parent_id,
        ), true );

        if ( is_wp_error( $post_id ) || ! $post_id ) {
            continue;
        }

        update_post_meta( $post_id, '_wp_page_template', $def['template'] );
        $slug_to_id[ $def['slug'] ] = $post_id;
        $created[] = $def['title'] . ' (/' . $def['slug'] . '/)';
    }

    return $created;
}

/**
 * Trigger 1: otomatis jalan saat theme ini diaktifkan
 */
add_action( 'after_switch_theme', 'office_laila_theme_create_missing_pages' );

/**
 * Trigger 2: tombol manual untuk environment yang theme-nya sudah aktif duluan
 * (ditampilkan sebagai notice di dashboard wp-admin)
 */
function office_laila_theme_pages_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    // Cek semua halaman cuma untuk nampilin notice ini biayanya kecil, jadi langsung dijalankan saja
    $missing = 0;
    foreach ( office_laila_theme_get_page_definitions() as $def ) {
        if ( ! get_page_by_path( $def['slug'] ) ) {
            $missing++;
        }
    }
    if ( $missing === 0 ) {
        return;
    }

    $url = wp_nonce_url(
        admin_url( 'admin-post.php?action=office_laila_create_pages' ),
        'office_laila_create_pages'
    );
    echo '<div class="notice notice-warning"><p>';
    echo 'オフィス らいらテーマ: 未作成の固定ページが ' . intval( $missing ) . ' 件あります。';
    echo ' <a href="' . esc_url( $url ) . '" class="button button-primary">今すぐ自動作成する</a>';
    echo '</p></div>';
}
add_action( 'admin_notices', 'office_laila_theme_pages_admin_notice' );

/**
 * Menangani request pembuatan halaman yang dikirim lewat tombol manual
 */
function office_laila_theme_handle_create_pages_action() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( '権限がありません。' );
    }
    check_admin_referer( 'office_laila_create_pages' );

    $created  = office_laila_theme_create_missing_pages();
    $redirect = add_query_arg(
        array( 'office_laila_pages_created' => count( $created ) ),
        admin_url( 'index.php' )
    );
    wp_safe_redirect( $redirect );
    exit;
}
add_action( 'admin_post_office_laila_create_pages', 'office_laila_theme_handle_create_pages_action' );

/**
 * Menampilkan hasil di dashboard setelah proses pembuatan selesai
 */
function office_laila_theme_pages_created_notice() {
    if ( ! isset( $_GET['office_laila_pages_created'] ) ) {
        return;
    }
    $count = intval( $_GET['office_laila_pages_created'] );
    echo '<div class="notice notice-success is-dismissible"><p>';
    echo $count > 0
        ? $count . ' 件の固定ページを自動作成しました。'
        : '作成対象の固定ページはありませんでした（すべて既に存在します）。';
    echo '</p></div>';
}
add_action( 'admin_notices', 'office_laila_theme_pages_created_notice' );
