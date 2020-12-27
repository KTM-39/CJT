<?php

function theme_setup() {

    // グーテンベルクのCSSファイル有効化
    add_theme_support('wp-block-styles');

    // 縦横比を維持したレスポンシブを有効化
    add_theme_support('responsive-embeds');

    // エディタースタイルの有効化と読み込み
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );

    // ページのタイトルを有効化
    add_theme_support( 'title-tag' );

    // link、style、scriptのHTML5対応を有効化
    add_theme_support( 'html5', array(
        'style',
        'script'
    ) );

    // アイキャッチ画像を有効化
    add_theme_support( 'post-thumbnails' );

    // 全幅・幅広を有効化
    add_theme_support( 'align-wide' );

    // メニューのロケーションを登録
    register_nav_menus( array(
        'primary' => 'ナビゲーション'
    ) );
}

add_action('after_setup_theme', 'theme_setup' );

function theme_enqueue() {

    // Googlefontsの読み込み
    wp_enqueue_style(
        'GoogleFonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
        array(),
        null
    );

    // Dashiconsを読み込み
    wp_enqueue_style(
        'dashicons'
    );

    // リセットCSS読み込み
    wp_enqueue_style(
        'reset-style',
        get_theme_file_uri('reset.css'),
        array(),
        filemtime(get_theme_file_path('reset.css'))
    );

    // オリジナルCSS読み込み
    wp_enqueue_style(
        'original-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path('style.css'))
    );

    // スクリプトJS読み込み
    wp_enqueue_script(
        'javascript',
        get_theme_file_uri('/js/script.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/js/script.js'))
    );
}

add_action('wp_enqueue_scripts', 'theme_enqueue');

function theme_widgets() {

    // ウィジェットエリアを登録
	register_sidebar( array(
		'id' => 'sidebar-1',
        'name' => 'フッターメニュー',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>'
	) );
}

add_action( 'widgets_init', 'theme_widgets' );
