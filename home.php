<?php
/*
Template Name: お知らせ1
*/
get_header();
?>

<main class="page-main">
    <section class="page-title-wrap">
        <h1 class="page-title">お知らせ</h1>
    </section>
    <div class="breadcrumb">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </div>

    <div class="page-pc-wrap">
        <div class="section-wrap">
            <section class="second">
                <div class="second-wrap">
                    <div class="single-main">
                        <div class="single-latest-ttl first-title">お知らせ</div>
                        <ul class="second-article-list">
                            <!-- 記事のループ処理開始 -->
                            <?php
                            if (wp_is_mobile()) {
                                $num = 3; // スマホの表示数
                            } else {
                                $num = 5; // PCの表示数
                            }
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args = [
                                'post_type' => 'post', // 投稿タイプ
                                'paged' => $paged, // ページネーション
                                'posts_per_page' => $num, // 表示件数
                            ];
                            $wp_query = new WP_Query($args);
                            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
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
                                                        <?php the_title(); ?>
                                                    </h2>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endwhile;
                            else : ?>
                                <p>まだ記事がありません</p>
                            <?php endif;
                            wp_reset_postdata(); ?>
                            <!-- 記事のループ処理終了 -->
                        </ul>
                        <!-- ページネーション -->
                        <div class="page-notice-pagination">
                            <?php the_posts_pagination(
                                array(
                                    'prev_next' => false,
                                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                                )
                            ); ?>
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