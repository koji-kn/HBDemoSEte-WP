<?php get_header(); ?>
    
    <main class="l-main">
    <div class="p-mainvisual p-mainvisual--single">
            <img class="p-mainvisual__img inview" src="<?php echo get_theme_file_uri('./images/title/arcive-mask.jpg') ?>" alt="">
            <dl class="p-mainvisual__title">
                <dt><h1 class="p-mainvisual__title--single">404 Not Found</h1></dt>
            </dl>
        </div>
        
        <section class="page-error">
            <p>お探しのページは見つかりませんでした。</p>
            <div class="home-link">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPへ戻る</a>
            </div>
        </section>
        
    </main>

    <aside class="l-side">
        <h2 class="l-side__title">Menu</h2>
        <nav class="p-gmenu">
            <div class="list">
                
            <?php wp_nav_menu(array('theme_location' => '404-nav')); ?>
                
            </div>
            <div class="mask"></div>
        </nav>
    </aside>
    

<?php get_footer(); ?>