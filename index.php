<?php get_header(); ?>
    
    <main class="l-main">
        <div class="p-mainvisual">
            <img class="p-mainvisual__img" src="<?php echo get_theme_file_uri('./images/mainvisual-pc.jpg')?>" alt="サイトのメイン画像">
            <h1 class="p-mainvisual__title">ダミーサイト</h1>
        </div>
        
        <?php the_content(); ?>
       
    </main>

    
    <?php get_sidebar(); ?>
    

<?php get_footer(); ?>