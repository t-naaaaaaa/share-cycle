<?php
/*
Template Name: 協会について
*/
get_header();
?>

<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">協会について</h1>
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

  <main class="page-main">
    <div class="page-pc-wrap">
      <div class="sidebar-wrap">
        <div class="sidebar">
          <div class="sidebar-contents">
            <div class="sidebar-contents-items">設立趣意</div>
            <div class="sidebar-contents-items">事業目的</div>
            <div class="sidebar-contents-items">組織図</div>
          </div>
        </div>
      </div>
      <div class="section-wrap">
        <section class="first page-first">
          <h2 class="first-title">設立趣意書</h2>
          <p class="first-text">
            昨今、シェアサイクル（コミュニティサイクル、レンタサイクル等）は日本においては、札幌、仙台、新潟、富山、金沢、東京、横浜、名古屋、大阪、岡山、広島、高松、松山、福岡、鹿児島等々日本各地で採り入れられております。<br />
            規模においては自転車数で、100～500台程度、運用期間も数か月～数年（3～5年）程度で、社会実験の域を出ていませんでしたが、シェアサイクルにおいては全国324都市(国交省2022年度末:本格導⼊269、社会実験55)で導入されております。<br />
            一方、世界では、パリは20,000台、ロンドンは13,850台、ニューヨークは18,000台、モントリオールは6,250台、バルセロナは6,500台、台北は13,000台が導入されるなど大規模な運営が展開されています。<br /><br />
            海外と日本の差を考えると、欧米における自転車に対する考え方に大きな違いがあるように思われます。<br />
            欧米では、自転車利用に明確な目的意識を持っています。<br /><br />
            <span class="contents-txt-1">①環境問題 （自動車による交通渋滞、温室効果ガス排出抑制）<br /></span>
            <span class="contents-txt-2">②エネルギー問題 （化石燃料の節約）<br /></span>
            <span class="contents-txt-3">③健康問題 （体力増進による医療費の節減）<br /></span>
            <span class="contents-txt-4">④地域貢献 （街の活性化）<br /></span>
            です。<br />
            勿論、これ以外にもスポーツやレジャー、あるいは観光、街乗りに便利等、利点は沢山あります。<br /><br />
            日本においては、上記のような目的意識は一般市民の中には未だ希薄なように感じられますが、これらの目的は、遠からず日本でも必要になることは明白であります。<br />
            では、自転車は都市の交通システムの中でどのような役割を果たしているのでしょうか。<br />
            都市交通システムには短距離鉄道（トラム）、地下鉄、路面電車、バス、タクシー等があります。これらは重要な公共交通システムと言えますが、これらを補強するのが第3の公共交通システム、シェアサイクルであります。<br />
            このシェアサイクルは同時に、観光促進やまちの活性化等、地域貢献に対しても役割を果たすものと考えております。<br /><br />
            シェアサイクルは、これからの成熟した都市交通システムの中で、救世主的役割を果たすものと期待されるところであります。<br />
            我々『一般社団法人
            日本シェアサイクル協会』はこの素晴らしいシェアサイクルシステムを日本全国に持続的なシステムとして発展させるべく、種々の研究を進め、もって、我が国の都市交通システムの発展に寄与しようとするものであります。<br />
          </p>
        </section>
        <section class="first page-first">
          <h2 class="first-title">事業目的</h2>
          <p class="first-text">
            ①シェアサイクルの業界関係者が本協会の会員としてまとまり、日本のシェアサイクルの発展に寄与する。<br />
            ②日本のシェアサイクル発展のため、官公庁・各自治体・交通運営機関・各団体等との
            連携及び協働組織として活動する。<br />
            ③自転車活用推進法「目的・基本理念」に則した活動を通じ、
            各自治体へのシェアサイクル導入と更なる促進、拡大に向けて活動する。<br />
            ④技術的問題及び経営的問題の研究及び提言と実施に向けて活動する。<br />
            ⑤シェアサイクルを持続可能な事業とするための経営に関わる諸問題の研究を進める。<br />
          </p>
        </section>
        <section class="first page-first page-first-end">
          <h2 class="first-title">2023年度組織図</h2>
          <div class="first-img association-map">
            <img src="<?php echo get_theme_file_uri('/img/soshiki_2023_02.png'); ?>" alt="" class="first-img" />
          </div>
        </section>
      </div>
    </div>
  </main>
</main>

<?php get_footer(); ?>