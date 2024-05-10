<?php
/*
Template Name:事例１
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">狭小地のポート化</h1>
  </section>

  <!-- パンクズリスト追加する -->
  <div class="breadcrumb">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
  <!-- サイドバー追加する -->

  <div class="page-pc-wrap">
    <div class="sidebar-wrap">
      <div class="sidebar">
        <div class="sidebar-contents">
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-1')); ?>">総会資料</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-2')); ?>">2023年度事業方針、2023年度ロードマップ</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-3')); ?>">2024年度組織図</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/page-member-all')); ?>">役員、正会員、賛助会員、協力会員　名簿</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-4')); ?>">議事録</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-5')); ?>">研修会・勉強会等資料</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-6')); ?>">月間「自転車・バイク・自動車&nbsp;&nbsp;パーキングプレス」掲載記事</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-7')); ?>">出版物紹介</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/only-member/only-member-8')); ?>">アンケート回答結果</a> </div>

        </div>
      </div>
    </div>
    <div class="section-wrap">
      <section class="first">
        <h2 class="first-title">狭小地のポート化（マンション・軒先等）</h2>
        <p class="first-text">
          シェアサイクルの認知拡大と都市交通インフラとしての普及を背景に、近年は狭小地へのステーション設置要望が増えてきています。<br />
          HELLO CYCLINGでは、利用者と土地オーナーからのステーション設置の要望に応えつつ、風雨や接触による車両転倒など設置に伴う懸念を解消するため、狭いスペースにもフィットするシェアサイクルステーションの開発・設置を進めています。<br />
          最小で自転車2台分のラックが設置できるスペースがあることを条件に、現地調査を行ったうえで安全性を考慮した設置レイアウトや台数の提案を行っています。<br />
          また、地域の不動産事業者が自らシェアサイクル事業に参入し、HELLO CYCLINGの運営事業者になる事例も増えています。<br />
          海外では、シェアサイクルの普及が地域の不動産価値の向上に貢献しているという研究結果も出ており、例えば従来は遠かった鉄道駅や主要施設、地域商店等へのアクセスがシェアサイクル設置により改善されるなど、その設置メリットは大きいです。<br />
          狭小地へのシェアサイクルステーション設置は単に遊休用地の収益化という直接的な収益効果を超えて、不動産価値の向上や地域経済の活性化など、街全体への好循環を生み出す可能性を秘めています。
        </p>
        <div class="first-img-wrap">
          <img src="<?php echo get_theme_file_uri('/img/example-1-1.png'); ?>" alt="" class="first-img" />
          <img src="<?php echo get_theme_file_uri('/img/example-1-2.png'); ?>" alt="" class="first-img" />
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>