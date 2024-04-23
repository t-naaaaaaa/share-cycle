<?php
/*
Template Name: カテゴリー
*/
get_header();

$cat_id = get_query_var('cat'); // カテゴリIDを取得
$cat_info = get_category($cat_id); // カテゴリ情報を取得
?>

<main class="page-main">
    <section class="page-title-wrap">
        <h1 class="page-title">
            <?php echo esc_html($cat_info->name); // カテゴリ名を表示 
            ?>
        </h1>
    </section>
    <!-- パンクズリスト追加する -->
    <div class="breadcrumb">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>

    <div class="page-pc-wrap">
        <div class="section-wrap">
            <section class="second">
                <div class="second-wrap">
                    <div class="single-main">
                        <ul class="second-article-list">
                            <!-- 記事のループ処理開始 -->
                            <?php
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $num = wp_is_mobile() ? 3 : 5; // 表示件数
                            $args = array(
                                'post_type' => 'post',
                                'paged' => $paged,
                                'posts_per_page' => $num,
                                'category_name' => $cat_info->slug,
                            );
                            $custom_query = new WP_Query($args);
                            if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();
                            ?>
                                    <li class="second-list">
                                        <a href="<?php the_permalink(); ?>" class="second-link">
                                            <div class="second-list-wrap">
                                                <div class="second-text-wrap single-latest-page-title">
                                                    <p class="second-date">
                                                        <time datetime="<?php the_time('Y-m-d'); ?>">
                                                            <?php the_time('Y.m.d'); ?>
                                                        </time>
                                                    </p>
                                                    <div class="second-link">
                                                        <?php
                                                        $category = get_the_category();
                                                        echo '<span class="second-category">' . esc_html($category[0]->name) . '</span>';
                                                        ?>
                                                    </div>
                                                    <h2 class="second-title single-latest-page-title">
                                                        <?php the_title(); ?>
                                                    </h2>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile;
                            else : ?>
                                <p>まだ記事がありません</p>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); // クエリのリセット 
                            ?>
                        </ul>
                        <!-- ページネーション -->
                        <div class="page-notice-pagination">
                            <?php the_posts_pagination(array(
                                'prev_next' => false,
                                'prev_text' => '<i class="fas fa-chevron-left"></i>',
                                'next_text' => '<i class="fas fa-chevron-right"></i>',
                            )); ?>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="sidebar-wrap page-notice-sidebar">
            <div class="wordpress-sidebar sidebar">
                <?php if (is_active_sidebar('wordpress-sidebar')) : ?>
                    <?php dynamic_sidebar('wordpress-sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>