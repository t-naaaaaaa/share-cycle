<?php
/*
Template Name:お知らせページ
*/
get_header();
?>
<main class="page-main">
    <section class="page-title-wrap">
        <h1 class="page-title">お知らせ</h1>
    </section>
    <!-- パンクズリスト追加する -->
    <div class="breadcrumb">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </div>

    <div class="page-pc-wrap ">
        <section class="second notice-second">
            <div class="second-wrap">
                <div class="single-main">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <!-- 投稿日 -->
                            <p class="single-main-date">
                                <time datetime=" <?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>
                            </p>
                            <!-- タイトル -->
                            <h2 class="single-main-title">
                                <?php the_title(); ?>
                            </h2>
                            <!-- 本文(全文) -->
                            <div class="single-main-text">
                                <?php the_content(); ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                    <div class="single-latest-title second-title">最新記事
                    </div>
                    <ul class="second-article-list">
                        <!-- 記事のループ処理開始 -->
                        <?php
                        if (wp_is_mobile()) {
                            $num = 3; // スマホの表示数(全件は-1)
                        } else {
                            $num = 5; // PCの表示数(全件は-1)
                        }
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $args = [
                            'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
                            'paged' => $paged, // ページネーションがある場合に必要
                            'posts_per_page' => $num, // 表示件数
                        ];
                        $wp_query = new WP_Query($args);
                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>

                                <li class="second-list">

                                    <!-- 記事へのリンク -->
                                    <a href="<?php the_permalink(); ?>" class="second-link">
                                        <div class="second-list-wrap">
                                            <div class="second-text-wrap single-latest-page-title">
                                                <p class="second-date">
                                                    <!-- 投稿日 -->
                                                    <time datetime="<?php the_time('Y.n.j'); ?>">
                                                        <?php the_time('Y.m.d'); ?>
                                                    </time>
                                                </p>
                                                <!-- カテゴリー表示 -->
                                                <div class="second-link">
                                                    <?php
                                                    $categories = get_the_category();
                                                    if (!empty($categories)) {
                                                        echo '<span class="second-category">' . esc_html($categories[0]->name) . '</span>';
                                                    }
                                                    ?>
                                                </div>
                                                <h2 class="second-title single-latest-page-title">
                                                    <!-- タイトル -->
                                                    <?php the_title(); ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </a>

                                </li>
                            <?php endwhile;
                        else : ?>
                            <p>まだ記事がありません</p>
                        <?php endif ?>
                        <?php wp_reset_postdata(); ?>
                        <!-- 記事のループ処理終了 -->
                    </ul>
                </div>
            </div>
        </section>
        <div class="sidebar-wrap page-notice-sidebar">
            <div class="wordpress-sidebar sidebar">
                <?php if (is_active_sidebar('wordpress-sidebar')) : ?>
                    <?php dynamic_sidebar('wordpress-sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
</main>
<?php get_footer(); ?>