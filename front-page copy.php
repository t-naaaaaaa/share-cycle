<?php get_header(); ?>
<section class="kv">
  <div class="kv_index">
    <div class="kv-img">
      <img src="<?php echo get_theme_file_uri('/img/docomo_big.jpg'); ?>" alt="スライド1" class="kv-img-img kv-slider1" />
      <img src="<?php echo get_theme_file_uri('/img/momochari_big.jpg'); ?>" alt="スライド2" class="kv-img-img kv-slider2" />
      <img src="<?php echo get_theme_file_uri('/img/derachari.jpg'); ?>" alt="スライド3" class="kv-img-img kv-slider3" />
      <img src="<?php echo get_theme_file_uri('/img/machinori.jpg'); ?>" alt="スライド3" class="kv-img-img kv-slider4" />
      <img src="<?php echo get_theme_file_uri('/img/saitama.jpg'); ?>" alt="スライド3" class="kv-img-img kv-slider5" />
    </div>
    </a>
  </div>
  <div class="kv-info">
    <div>
      <!-- 記事のループ処理開始 -->
      <?php
      if (wp_is_mobile()) {
        $num = 1; //スマホの表示数(全件は-1)
      } else {
        $num = 1; //PCの表示数(全件は-1)
      }
      $args = [
        'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
        'posts_per_page' => $num, // 表示件数
      ];
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <li class="kv-info-list">
            <div class="kv-info-wrap">
              <!-- 記事へのリンク -->
              <a href="<?php the_permalink(); ?>" class="kv-info-text">
                <!-- アイキャッチ -->
                <div class="kv-info-wrap2">
                  <span class="kv-info-icon">〇</span>
                  <p class="kv-info-date">
                    <!-- 投稿日 -->
                    <time datetime="<?php the_time('Y.n.j'); ?>">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </p>
                  <h2 class="kv-info-title">
                    <!-- タイトル -->
                    <?php the_title(); ?>
                  </h2>
                </div>
              </a>
            </div>
          </li>
        <?php endwhile;
      else : ?>
        <p>まだ記事がありません</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
</section>

<section class="graph">
  <div class="kv-graph">
    <div class="kv-graph-wrap graph-wrap-1">
      <div class="scroll-in kv-graph-main graph-main-1">
        <div class="kv-circle">
          <div class="pie">
            <span class="pie-span1">ポート数 </span><span class="pie-span2">6,406箇所</span>
          </div>
        </div>
        <div class="kv-graph-title"></div>
      </div>
      <div class="scroll-in kv-graph-main graph-main-reverse">
        <div class="kv-circle">
          <div class="pie">
            <span class="pie-span1">ユーザー数</span><span class="pie-span2">50万人</span>
          </div>
        </div>
        <!-- <div class="kv-graph-title">ユーザー数</div> -->
      </div>
    </div>
    <div class="kv-graph-wrap graph-wrap-2">
      <div class="scroll-in kv-graph-main graph-main-3">
        <div class="kv-circle">
          <div class="pie">
            <span class="pie-span1">導入都道府県数</span><span class="pie-span2">
              69都道府県</span>
          </div>
        </div>
        <!-- <div class="kv-graph-title">導入都道府県数</div> -->
      </div>
      <div class="scroll-in kv-graph-main graph-main-reverse graph-main-4">
        <div class="kv-circle">
          <div class="pie">
            <span class="pie-span1">導入自治体数</span><span class="pie-span2">166自治体</span>
          </div>
        </div>
        <!-- <div class="kv-graph-title title-4">導入自治体数</div> -->
      </div>
    </div>
  </div>
</section>
<div class="kv-graph-source-wrap">
  <p class="kv-graph-source">
    ※ 会員6社<br />
    ※ GBFS データ公開済事業者について<br />
    掲載(2023 年 12 月末時点)
  </p>
</div>
<section class="whats">
  <div class="whats-wrap">
    <button class="whats-title-button btn" onclick="location.href='/home/whats-share-cycle'">
      What's&nbsp;シェアサイクル？
    </button>
  </div>
</section>
<section class="scroll-in introduction section-main-wrap" id="introduction">
  <div class="scroll-in section-sub-wrap">
    <h2 class="introduction-title">導入の手引き</h2>
    <div class="introduction-wrap ">
      <button onclick="location.href='/home/coming-soon/'" class="introduction-contents animation-button" id="animation-button">
        <div class="introduction-sub-wrap">
          <div class="introduction-contents-img">
            <img src="<?php echo get_theme_file_uri('/img/gov_icon.png'); ?>" alt="" class="contents-img" />
          </div>
          <div class="contents-wrap">
            <div class="introduction-contents-title">自治体向け</div>
            <!-- <p class="introduction-contents-text">
              はじめての方はスタートアップガイドからご覧くだああああああああああああああああああああああああああああああああああああああああ
            </p> -->
          </div>
        </div>
      </button>
      <button onclick="location.href='/home/coming-soon/'" class="introduction-contents contents-2 introduction-title2 animation-button" id="animation-button">
        <div class="introduction-sub-wrap">
          <div class="introduction-contents-img">
            <img src="<?php echo get_theme_file_uri('/img/sannyuu_icon.png'); ?>" alt="" class="contents-img" />
          </div>
          <div class="contents-wrap">
            <div class="introduction-contents-title">参入事業者向け</div>
            <!-- <p class="introduction-contents-text">
              はじめての方はスタートアップガイドからご覧くだあああああああああああああああああああああああああああああああああああああああああ
            </p> -->
          </div>
        </div>
      </button>
    </div>
  </div>
</section>
<section class="move section-main-wrap" id="move">
  <div class="scroll-in section-sub-wrap">
    <h2 class="move-title">国や自治体の動き</h2>
    <div class="move-wrap">
      <button onclick="location.href='/home/low'" class="move-contents move-title2  animation-button" id="animation-button">
        <div class="move-contents-wrap">
          <img src="<?php echo get_theme_file_uri('/img/bike_icon.png'); ?>" alt="" class="move-contents-icon" />
          <div class="move-contents-title">自転車活用<br />推進法</div>
        </div>
      </button>
      <button onclick="location.href='/home/helmet'" class="move-contents move-title2 animation-button" id="animation-button">
        <div class="move-contents-wrap">
          <img src="<?php echo get_theme_file_uri('/img/helmet_icon.png'); ?>" alt="" class="move-contents-icon" />
          <div class="move-contents-title move-helmet-title">
            ヘルメット着用<br class="contents-blank" />努力義務化
          </div>
        </div>
      </button>

      <button onclick="location.href='/home/coming-soon/'" class="move-contents move-title2 animation-button" id="animation-button">
        <div class="move-contents-wrap">
          <img src="<?php echo get_theme_file_uri('/img/road_icon.png'); ?>" alt="" class="move-contents-icon" />
          <div class="move-contents-title">道交法改正</div>
        </div>
      </button>
    </div>
  </div>
</section>
<section class="example section-main-wrap">
  <div class="scroll-in section-sub-wrap">
    <h2 class="example-title">導入事例</h2>
    <div class="wrapper">
      <span id="prev" class="prev"></span>
      <span id="next" class="next"></span>
      <!-- <ul class="indicator">
            <li id="list1"></li>
            <li id="list2"></li>
            <li id="list3"></li>
            <li id="list4"></li>
          </ul> -->
      <div id="slider" class="slider slider1">
        <div class="content content1">
          <a href="<?php echo esc_url(home_url('/home/example-1/')); ?>">
            <div class="example-contents">
              <img src="<?php echo get_theme_file_uri('/img/example-1.jpg'); ?>" alt="導入事例" class="example-contents-img" />
              <div class="example-contents-wrap">
                <h3 class="example-contents-title">狭小地のポート化</h3>
                <p class="example-contents-text">
                  シェアサイクルの認知拡大と都市交通インフラとしての普及を背景に、近年は狭小･･･
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="content content2">
          <a href="<?php echo esc_url(home_url('/home/example-2/')); ?>">
            <div class="example-contents">
              <img src="<?php echo get_theme_file_uri('/img/example-2.jpg'); ?>" alt="導入事例" class="example-contents-img" />
              <div class="example-contents-wrap">
                <h3 class="example-contents-title">朝霞市</h3>
                <p class="example-contents-text">
                  朝霞市民の交通利便性向上を目的に官民連携でステーション数を拡大してきました。
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="content content3">
          <a href="<?php echo esc_url(home_url('/home/example-3/')); ?>">
            <div class="example-contents">
              <img src="<?php echo get_theme_file_uri('/img/example-3.png'); ?>" alt="導入事例" class="example-contents-img" />
              <div class="example-contents-wrap">
                <h3 class="example-contents-title">
                  観光利用
                </h3>
                <p class="example-contents-text">
                  2017年2月から導入されたHELLO&emsp;CYCLINGは、小豆島の観光体験をよ･･･
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="content content4">
          <a href="<?php echo esc_url(home_url('/home/example-4/')); ?>">
            <div class="example-contents">
              <img src="<?php echo get_theme_file_uri('/img/example-4.png'); ?>" alt="導入事例" class="example-contents-img" />
              <div class="example-contents-wrap">
                <h3 class="example-contents-title">複数事業者混在</h3>
                <p class="example-contents-text">
                  東京都では、東京都環境局の主導により、OpenStreet、
                  Luup、ドコモ・バイ･･･
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="more-button-wrap">
        <button onclick="location.href='/home/coming-soon/'" class="more-button btn">もっと見る</button>
      </div>
    </div>
  </div>
</section>

<section class="notice section-main-wrap">
  <h2 class="notice-title" id="notice">お知らせ</h2>
  <div class="notice-wrap">
    <div class="notice-contents-main-wrap">
      <div class="notice-contents">
        <?php
        if (wp_is_mobile()) {
          $num = 3; //スマホの表示数(全件は-1)
        } else {
          $num = 3; //PCの表示数(全件は-1)
        }
        $args = [
          'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
          'posts_per_page' => $num, // 表示件数
        ];
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <li class="notice-contents-wrap">
              <div class="notice-item-wrap">
                <!-- 記事へのリンク -->
                <a href="<?php the_permalink(); ?>" class="notice-item-text">
                  <!-- アイキャッチ -->
                  <div class="notice-date-wrap">
                    <div class="notice-date-icon">⚪︎</div>
                    <p class="notice-date">
                      <!-- 投稿日 -->
                      <time datetime="<?php the_time('Y.n.j'); ?>">
                        <?php the_time('Y.m.d'); ?>
                      </time>
                    </p>
                  </div>
                  <h2 class="notice-contents-title">
                    <!-- タイトル -->
                    <?php the_title(); ?>
                  </h2>
                </a>
              </div>
            </li>
          <?php endwhile;
        else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="more-button-wrap notice-button">
        <button onclick="location.href='/home/notice'" class="more-button btn">もっと見る</button>
      </div>
    </div>
  </div>
</section>

<section class="member section-main-wrap">
  <h2 class="member-title">会員募集</h2>
  <div class="member-wrap">
    <div class="member-main-wrap">
      <div class="member-contents-text-wrap">
        <div class="member-contents-title">
          シェアサイクル事業者や国交省などの国の機関、関連事業者との情報交換や最新情報の取得が可能に
        </div>
        <p class="member-contents-text"></p>
      </div>

      <!-- <div class="member-sub-wrap">
            <div class="member-contents-sub-title">会員一覧</div>
            <div class="member-contents-sub-title sub-title-pc">顧問一覧</div>
            <div class="member-contents-sub-title sub-title-pc">定款</div>
          </div> -->
      <div class="div member-contents-button-wrap">
        <button onclick="location.href='/home/member'" class="more-button member-contents-button btn">
          会員登録
        </button>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>