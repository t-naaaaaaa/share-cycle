<?php
/*
Template Name:会員一覧
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">会員一覧</h1>
  </section>
  <!-- パンクズリスト追加する -->
  <div class="breadcrumb">
    <?php
    if (function_exists('bcn_display')) {
      bcn_display();
    }
    ?>
  </div>
  <!-- 問い合わせフォーム -->

  <div class="page-pc-wrap">
    <div class="sidebar-wrap member-all-sidebar">
      <div class="sidebar">
        <div class="sidebar-contents">
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member')); ?>">会員募集</a></div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/all/detail/')); ?>">会員一覧詳細</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/advisor/')); ?>">顧問一覧</div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/memorandum/')); ?>">定款</a></div>
        </div>
      </div>
    </div>
    <div class="section-wrap member-all-section-wrap">
      <section class="first">
        <h2 class="first-title">会員一覧</h2>
      </section>
      <section class="second">
        <h3 class="second-title">正会員</h3>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left">IHI運搬機械株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              井上ゴム工業株式会社</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> OpenStreet株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              Creative Case by YOHO</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> サイカパーキング株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              株式会社シーディアイ</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left">
              シナネンモビリティPLUS株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              武田産業株式会社</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> ダホン　ノースアメリカ</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              中央復建コンサルタンツ株式会社</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> 蔦井株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              株式会社T-TRIKE</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> 東武不動産株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              株式会社ドコモ・バイクシェア</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> 日本サンサイクル株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              日本駐車場救急サービス株式会社</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> 株式会社福住</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              モーリスコーポレーション株式会社</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> 株式会社Luup</a>
          </p>
        </div>
      </section>
      <section class="second">
        <h3 class="second-title">賛助会員</h3>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> NCD株式会社</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              株式会社グローバルパーキングサポート</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left">
              一般社団法人自転車駐車場工業会</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              株式会社高見沢サイバネティックス</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left"> 株式会社ドーコン</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              一般社団法人日本自走式駐車場工業会</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="" class="member-all-comp member-all-comp-left">
              一般社団法人日本パーキングビジネス協会</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="" class="member-all-comp member-all-comp-right">
              パナソニックサイクルテック株式会社</a>
          </p>
        </div>
      </section>
      <section class="second second-end">
        <h3 class="second-title">協力会員</h3>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="https://www.city.koto.lg.jp/392205/kuse/sosiki/toshisebi/10081.html" class="member-all-comp member-all-comp-left">
              江東区都市整備部まちづくり推進課</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="https://www.cyclists.jp/" class="member-all-comp member-all-comp-right">
              特定非営利活動法人自転車活用推進研究会</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="https://www.jitensha-kyokai.jp/" class="member-all-comp member-all-comp-left">
              一般社団法人自転車協会</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="https://jbpi.or.jp/" class="member-all-comp member-all-comp-right">
              一般財団法人自転車産業振興協会</a>
          </p>
        </div>
        <div class="member-all-wrap">
          <p class="second-text text-1">
            <a href="https://www.bpaj.or.jp/" class="member-all-comp member-all-comp-left">
              一般財団法人日本自転車普及協会</a>
          </p>
          <p class="second-text text-2 member-all-comp-text">
            <a href="https://www.jtpa.or.jp/" class="member-all-comp member-all-comp-right">
              公益社団法人日本交通計画協会</a>
          </p>
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>