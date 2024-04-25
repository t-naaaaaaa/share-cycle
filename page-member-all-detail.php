<?php
/*
Template Name:会員一覧詳細
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">会員一覧詳細</h1>
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
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/all/')); ?>">会員一覧</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/all/detail/')); ?>">会員一覧詳細</a> </div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/advisor/')); ?>">顧問一覧</div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/memorandum/')); ?>">定款</a></div>
        </div>
      </div>
    </div>
    <div class="section-wrap member-all-section-wrap">
      <section class="first">
        <h2 class="first-title">会員一覧詳細</h2>
      </section>
      <section class="second">
        <h3 class="second-title">正会員</h3>

        <p class="second-text text-1">
          <a href="#iuk" class="member-all-comp member-all-comp-left member-detail-title" id="iuk">IHI運搬機械株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒104-0044<br>
            東京都中央区赤石町８番1号<br>
            聖路加タワー23F<br>
            TEL:03-5550-5159<br>
            FAX:03-5550-5396<br>
            URL:<a href="http://www.iuk.co.jp/" target="_blank">http://www.iuk.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              パーキングシステム、運搬機械の企画・開発・設計・製造・販売・賃貸・据付・メンテナンス・改修・運営・管理事業
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">設備メーカー</p>
              <p class="member-detail-content-item">運営システムメーカー</p>
              <p class="member-detail-content-item">建設コンサルタント・開発・企画・デザイン・設計業者</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#irc-tire" class="member-all-comp member-all-comp-left member-detail-title" id="irc-tire">井上ゴム工業株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒450-0003<br>
            愛知県名古屋市中村区名駅南二丁目13番4号<br>
            TEL:050-3145-6019<br>
            FAX:052-686-1395<br>
            URL:<a href="http://www.irc-tire.com/" target="_blank">http://www.irc-tire.com/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">
            <p class="member-detail-content-title">事業内容</p>
            </p>
            <p class="member-detail-content-text">
              自転車及びオートバイタイヤチューブの製造販売
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#hellocycling" class="member-all-comp member-all-comp-left member-detail-title" id="hellocycling">OpenStreet株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒105-0021<br>
            東京都港区東新橋一丁目9番2号<br>
            URL:<a href="http://www.hellocycling.jp/" target="_blank">http://www.hellocycling.jp/</a>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              シェアサイクリング事業者へのシステム提供、コンサルティング業務<br>
              シェアサイクル事業の運営<br>
              通信サービスの提供業務&nbsp;&nbsp;等<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">運営システムメーカー</p>
              <p class="member-detail-content-item">建設コンサルタント・開発・企画・デザイン・設計業者</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#c-case" class="member-all-comp member-all-comp-left member-detail-title" id="c-case">Creative Case by YOHO</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒213-0022<br>
            神奈川県川崎市高津区千年541-4<br>
            TEL:044-754-0851<br>
            FAX:044-754-0853<br>
            URL:<a href="http://www.c-case.co.jp/" target="_blank">http://www.c-case.co.jp/</a>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              駐輪場機器販売・運営・管理・メンテナンス<br>
              シェアサイクル・レンタサイクル販売・運営・管理・メンテナンス<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">自転車メーカー</p>
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">設備メーカー</p>
              <p class="member-detail-content-item">運営システムメーカー</p>
              <p class="member-detail-content-item">関連設備商社、総合請負業者</p>
              <p class="member-detail-content-item">メンテナンス業者</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#cyca" class="member-all-comp member-all-comp-left member-detail-title" id="cyca">サイカパーキング株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒103-0016<br>
            東京都中央区日本橋小網町7-2<br>
            ぺんてるビル7F<br>
            TEL:03-3667-9635<br>
            FAX:03-3667-9637<br>
            URL:<a href="https://www.cyca.co.jp/" target="_blank">https://www.cyca.co.jp/</a>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              駐輪場の総合サービス事業<br>
              駐輪場の管理運営<br>
              放置自転車の防止指導、撤去、保管<br>
              シェアサイクルの運営・管理<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">建設コンサルタント・開発・企画・デザイン・設計業者</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#cdi" class="member-all-comp member-all-comp-left member-detail-title" id="cdi">株式会社シーディーアイ</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒491-0922<br>
            愛知県一宮市大和町妙興寺字丹波12番<br>
            TEL:0586-27-0123<br>
            FAX:0586-27-0138<br>
            URL:<a href="https://www.cdi.jpn.com/" target="_blank">https://www.cdi.jpn.com/</a>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              駐輪システム・防犯カメラ・LED灯など特販事業<br>
              ファクトリーオートメーション事業<br>
              SR事業およびアンテナショップ運営<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">設備メーカー</p>
              <p class="member-detail-content-item">設備附属品メーカー</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#sinanen-mplus" class="member-all-comp member-all-comp-left member-detail-title" id="sinanen-mplus">シナネンモビリティPLUS株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒108-6306<br>
            東京都港区三田3-5-27<br>
            住友不動産三田ツインビル西館6階<br>
            TEL:03-6478-7906<br>
            FAX:03-6478-7907<br>
            URL:<a href="http://www.sinanen-mplus.com/" target="_blank">http://www.sinanen-mplus.com/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              シェアサイクルステーションの開発・設置・運営<br>
              シェアサイクル導入の支援<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#takedasangyo" class="member-all-comp member-all-comp-left member-detail-title" id="takedasangyo">武田産業株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒277-0863<br>
            千葉県柏市豊四季339-39<br>
            TEL:04-7141-8501<br>
            FAX:04-7141-8502<br>
            URL:<a href="https://www.takedasangyo.net/" target="_blank">https://www.takedasangyo.net/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              全国8か所に拠点を持つ全国規模の卸売商社<br>
              メーカー型輸入卸売商社として、自転車の規格・デザインから製造・販売等の一連の事業<br>
              取扱ブランド：エアレスタイヤ自転車「CHACLE」(自社ブランド)、DAHON、YAMAHA、サイクルパーツ<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item"></p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#dahon" class="member-all-comp member-all-comp-left member-detail-title" id="dahon">ダホン　ノースアメリカ</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒177-0054<br>
            東京都練馬区立野町23-5<br>
            TEL:050-1137-2592<br>
            FAX:050-1137-2592<br>
            URL:<a href="http://dahon.com/" target="_blank">http://dahon.com/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              折りたたみ自転車（電動ｱｼｽﾄ含む）の開発、生産、販売
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">自転車メーカー</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#cfk" class="member-all-comp member-all-comp-left member-detail-title" id="cfk">中央復建コンサルタンツ株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒102-0083<br>
            東京都千代田区麹町2-10-13<br>
            TEL:03-3511-2030<br>
            FAX:03-3511-2033<br>
            URL:<a href="https://www.cfk.co.jp/" target="_blank">https://www.cfk.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              建設コンサルタント業（交通計画、都市・地域計画、事業計画、官民連携計画等）<br>
              事業運営（コミュニティサイクル等）<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">建設コンサルタント・開発・企画・デザイン・設計業者</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#tsutai" class="member-all-comp member-all-comp-left member-detail-title" id="tsutai">蔦井&nbsp;&nbsp;株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒451-0083<br>
            愛知県名古屋市西区新福寺町1-57<br>
            TEL:052-521-9134<br>
            FAX:052-521-9139<br>
            URL:<a href="http://www.tsutai.co.jp/" target="_blank">http://www.tsutai.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              自転車駐車場及びコミュニティサイクルの設置運営管理を行う駐輪事業<br>
              幼児向け英語教室の運営を行う子育て支援事業<br>
              高速道路のパーキングエリアを運営する売店事業<br>
              名古屋高速道路の維持管理を行うメンテナンス事業<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">設備メーカー</p>
              <p class="member-detail-content-item">運営システムメーカー</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#tobu-re" class="member-all-comp member-all-comp-left member-detail-title" id="tobu-re">東武不動産株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒130-0002<br>
            東京都墨田区業平3-14-4<br>
            ノブカワビル2F<br>
            TEL:03-3623-8107<br>
            FAX:03-3624-3164<br>
            URL:<a href="http://www.tobu-re.co.jp/" target="_blank">http://www.tobu-re.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              パーキング事業<br>
              ソリューション事業<br>
              賃貸事業<br>
              法人アレンジメントサービス事業<br>
              仲介事業<br>
              受託販売事業<br>
              開発事業<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#d-bikeshare" class="member-all-comp member-all-comp-left member-detail-title" id="d-bikeshare">株式会社ドコモ・バイクシェア</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒105-0001<br>
            東京都港区虎ノ門三丁目八番八号<br>
            NTT虎ノ門ビル六階<br>
            URL:<a href="https://www.d-bikeshare.com/" target="_blank">https://www.d-bikeshare.com/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              サイクルシェアリング事業の運営<br>
              サイクルシェアリング運営事業者（コミュニティサイクル、レンタサイクル運営事業者等）へのシステム提供、コンサルティング業務<br>
              各種イベントの企画運営業務&nbsp;&nbsp;等<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">運営システムメーカー</p>
              <p class="member-detail-content-item">建設コンサルタント・開発・企画・デザイン・設計業者</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#sancycle" class="member-all-comp member-all-comp-left member-detail-title" id="sancycle">日本サンサイクル株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒103-0014<br>
            東京都中央区日本橋蛎殻町1-7-9<br>
            TEL:03-3639-4911<br>
            FAX:03-3639-4913<br>
            URL:<a href="http://www.sancycle.co.jp/" target="_blank">http://www.sancycle.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              自転車駐輪施設&nbsp;&nbsp;設計・施工・管理運営<br>
              自動車駐車施設&nbsp;&nbsp;設計・施工・管理運営<br>
              環境、eco関連商品の販売・施工<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">工事施工業者</p>
              <p class="member-detail-content-item">関連設備商社、総合請負業者</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#ihi" class="member-all-comp member-all-comp-left member-detail-title" id="jafs99">日本駐車場救急サービス株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒103-0014<br>
            東京都中央区日本橋蛎殻町1-6-1<br>
            VORT茅場町&#8544;6F<br>
            TEL:03-3663-1755<br>
            FAX:03-3663-1750<br>
            URL:<a href="http://www.jafs99.co.jp/" target="_blank">http://www.jafs99.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              駐車場・駐輪場の設備のメンテナンス<br>
              駐車場・駐輪場の24時間遠隔監視及び警備業務<br>
              駐車場・駐輪場の建設及びリフォーム<br>
              駐車場・駐輪場の運営・管理<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">工事施工業者</p>
              <p class="member-detail-content-item">関連設備商社、総合請負業者</p>
              <p class="member-detail-content-item">メンテナンス業者</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#fukuju" class="member-all-comp member-all-comp-left member-detail-title" id="fukuju">株式会社&nbsp;&nbsp;福住</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒810-0001<br>
            福岡市中央区天神2-4-15<br>
            TEL:092-712-0245<br>
            FAX:092-712-4350<br>
            URL:<a href="http://www.fukuju.co.jp/" target="_blank">http://www.fukuju.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              総合不動産業<br>
              （不動産売買仲介、賃貸仲介、賃貸管理、テナントオフィス賃貸仲介、コインパーキング事業、自社開発事業、マンスリーマンション運営&nbsp;&nbsp;他）<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#morris-corp" class="member-all-comp member-all-comp-left member-detail-title" id="morris-corp">モーリスコーポレーション株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒103-0014<br>
            東京都中央区日本橋蛎殻町1-6-3<br>
            VORT茅場町Ⅰビル8F<br>
            TEL:03-3663-5455<br>
            FAX:03-3633-5466<br>
            URL:<a href="http://www.morris-corp.co.jp/" target="_blank">http://www.morris-corp.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              駐車場運営・管理<br>
              機器販売<br>
              コールセンター<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">関連設備商社、総合請負業者</p>
              <p class="member-detail-content-item">コールセンター</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#luup" class="member-all-comp member-all-comp-left member-detail-title" id="luup">株式会社Luup</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒101-0025<br>
            東京都千代田区神田佐久間町三丁目21番地24<br>
            AKIHABARA CENTRAL SQUARE ４階<br>
            TEL:03-6452-6720<br>
            FAX:03-6800-3205<br>
            URL:<a href="http://luup.sc/" target="_blank">http://luup.sc/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              電動マイクロモビリティのシェアリングサービス
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item"></p>
            </div>
          </div>
        </div>

      </section>
      <section class="second second-end">
        <h3 class="second-title">賛助会員</h3>
        <p class="second-text text-1">
          <a href="#ncd" class="member-all-comp member-all-comp-left member-detail-title" id="ncd">NCD株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒190-0031<br>
            東京都品川区西五反田4-32-1<br>
            TEL:03-5437-1031<br>
            FAX:03-5437-1032<br>
            URL:<a href="http://www.ncd.co.jp/" target="_blank">http://www.ncd.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              パーキングシステム（自転車駐車場関連）企画・設計・施工・管理等全般<br>
              そのほか自転車関連事業全般<br>
              システムコンサルティング・開発・保守<br>
              サポート&nbsp;&nbsp;サービス<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">設備メーカー</p>
              <p class="member-detail-content-item">運営システムメーカー</p>
              <p class="member-detail-content-item">関連設備商社、総合請負業者</p>
              <p class="member-detail-content-item">コールセンター</p>
              <p class="member-detail-content-item">メンテナンス業者</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#gpsupport" class="member-all-comp member-all-comp-left member-detail-title" id="gpsupport">株式会社グローバルパーキングサポート</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒222-0033<br>
            神奈川県横浜市港北区新横浜2-7-19<br>
            竹生第２ビル５F<br>
            TEL:045-473-8044<br>
            FAX:045-473-8046<br>
            URL:<a href="http://www.gpsupport.co.jp/" target="_blank">http://www.gpsupport.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              コールセンター業<br>
              通信システム<br>
              広告コミュニケーション<br>
              運営管理<br>
              保険<br>
              駐輪場機器システム販売及びメンテナンス<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">運営業者</p>
              <p class="member-detail-content-item">コールセンター</p>
              <p class="member-detail-content-item">メンテナンス業者</p>
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#jichuko" class="member-all-comp member-all-comp-left member-detail-title" id="jichuko">一般社団法人自転車駐車場工業会</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒101-0025<br>
            東京都千代田区神田佐久間町三丁目21番地24<br>
            AKIHABARA CENTRAL SQUARE ４階<br>
            TEL:03-6452-6720<br>
            FAX:03-6800-3205<br>
            URL:<a href="http://luup.sc/" target="_blank">http://luup.sc/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              自転車駐車場事業の育成指導<br>
              自転車駐車場問題に関する調査研究および資料収集<br>
              自転車駐車場普及のための広報啓発活動<br>
              自転車駐車場普及のための技術指導<br>
              会員相互の連絡調整<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#tacy" class="member-all-comp member-all-comp-left member-detail-title" id="tacy">株式会社高見沢サイバネティックス</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒164-0011<br>
            東京都中野区中央2-48-5<br>
            TEL:03-3227-9255<br>
            FAX:03-3227-3464<br>
            URL:<a href="https://www.tacy.co.jp/" target="_blank">https://www.tacy.co.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              駐輪場管理システムの製作、販売、運営管理<br>
              交通事業者向駅務省力化製品の製作、販売、保守<br>
              自動販売機等に搭載されるユニット製品の製作、販売、保守<br>
              ゲート関連機器、入退場管理システムの製作、販売、保守<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">設備メーカー</p>
              <p class="member-detail-content-item">設備附属品メーカー</p>
              <p class="member-detail-content-item">メンテナンス業者</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#docon" class="member-all-comp member-all-comp-left member-detail-title" id="docon">株式会社ドーコン</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒060-0042<br>
            札幌市中央区大通西４丁目１番地<br>
            新大通ビル3階<br>
            TEL:011-801-1517 （交通事業本部&nbsp;&nbsp;直通）<br>
            FAX:011-801-1521 （交通事業本部&nbsp;&nbsp;直通）<br>
            URL:<a href="https://www.docon.jp/" target="_blank">https://www.docon.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              建設コンサルタント業<br>
              土木関係の企画・測量・調査・計画・設計及び管理<br>
              土木施設及び周辺環境の景観デザイン<br>
              地域計画・都市計画に関する企画・測量・調査・設計及び管理<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">建設コンサルタント・開発・企画・デザイン・設計業者</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#purepa" class="member-all-comp member-all-comp-left member-detail-title" id="purepa">一般社団法人日本自走式駐車場工業会</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒108-0014<br>
            東京都港区芝5-26-20<br>
            建築会館５F<br>
            TEL:03-3456-0781<br>
            FAX:03-3456-0788<br>
            URL:<a href="http://www.purepa.or.jp/" target="_blank">http://www.purepa.or.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              駐車場及び関連施設の技術開発及び調査研究<br>
              良質かつ低廉な駐車場の供給及び調査研究<br>
              駐車問題に関する調査研究<br>
              駐車場事業に関するコンサルタント業務<br>
              会員企業に対する駐車場事業に関する情報、技術及び物資の提供<br>
              会員企業に対する損害保険の代理業務<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#gia-jpb" class="member-all-comp member-all-comp-left member-detail-title" id="gia-jpb">一般社団法人日本パーキングビジネス協会</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒100-0014<br>
            東京都千代田区永田町2-17-17<br>
            アイオス永田町320号室<br>
            TEL:03-3663-6282<br>
            FAX:03-6257-1010<br>
            URL:<a href="http://www.gia-jpb.jp/" target="_blank">http://www.gia-jpb.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              コインパーキング(以下CP)等の駐車場にかかわる利用者向けの情報提供<br>
              CP等に関する企画・設計・設置と運営に関する相談、助言<br>
              CPの実態調査<br>
              CPにかかわる新ビジネスモデルや設備機器の会員への情報提供等<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">その他</p>
            </div>
          </div>
        </div>
        <p class="second-text text-1">
          <a href="#panasonic" class="member-all-comp member-all-comp-left member-detail-title" id="panasonic">パナソニックサイクルテック株式会社</a>
        </p>
        <div class="member-detail-wrap">
          <p class="member-detail-address">
            〒140-0002<br>
            東京都品川区東品川1丁目3番12号<br>
            パナソニック東品川ビル3階<br>
            TEL:050-3537-2967<br>
            FAX:03-5781-2602<br>
            URL:<a href="http://cycle.panasonic.jp/" target="_blank">http://cycle.panasonic.jp/</a><br>
          </p>
          <div class="member-detail-content">
            <p class="member-detail-content-title">事業内容</p>
            <p class="member-detail-content-text">
              自転車の製造販売<br>
              一般自転車・電動アシスト自転車・電動アシスト三輪車<br>
              電動ユニット(輸出)<br>
              補修パーツ<br>
            </p>
            <div class="member-detail-content2">
              <p class="member-detail-content-item">自転車メーカー</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>