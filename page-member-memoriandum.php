<?php
/*
Template Name:定款
*/
get_header();
?>
<main class="page-main">
  <section class="page-title-wrap">
    <h1 class="page-title">定款</h1>
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
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/all/')); ?>">会員一覧</a></div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/advisor/')); ?>">顧問一覧</div>
          <div class="sidebar-contents-items"><a href="<?php echo esc_url(home_url('/home/member/memorandum/')); ?>">定款</a></div>
        </div>
      </div>
    </div>
    <div class="section-wrap member-all-section-wrap">
      <section class="first">
        <h2 class="first-title">定款</h2>
      </section>
      <section class="memorandum">
        <h3 class="memorandum-title" class="memorandum">第1章&nbsp;&nbsp;総則</h3>
        <br />
        <p>
          （名称）<br />
          第１条&nbsp;
          本協会は、一般社団法人日本シェアサイクル協会（以下「本協会」という。）と称する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２英文名はJapan&nbsp;Share-Cycle&nbsp;Association(JSCA)と称する。<br />
        </p>
        <p>
          （事務所）<br />
          第２条 &nbsp;本協会は、主たる事務所を東京都中央区に置く。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第2章&nbsp;&nbsp;目的及び事業</h3>
        <br />
        <p>
          （目的）<br />
          第３条&nbsp;
          本協会は、シェアサイクル（コミュニティサイクル、レンタサイクル等自転車を共同利用する<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交通システム）に関する調査研究及びその進歩改善を図るとともに、シェアサイクルに関する知識を<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;普及し、もって新しい交通機関としてのシェアサイクルの発展を図ることを目的とする。<br />
        </p>

        <p>
          （事業）<br />
          第４条 本協会は、前条の目的を達成するため、次の事業を行う。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）シェアサイクルの技術的及び経済的諸問題の調査研究<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）シェアサイクルの計画及び建設に関する調査、設計等の受託<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（３）シェアサイクルの計画及び建設を進めている自治体への協力<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（４）シェアサイクルに関する資料の収集<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（５）シェアサイクルに関する意見の公表及び関係機関に対する意見の開陳<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（６）シェアサイクルに関する図書、パンフレット等の刊行、研究会、講習会、展示会等の開催<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;その他シェアサイクルに関する知識の普及に関すること<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（７）その他本協会の目的を達成するために必要な事業<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２前項の事業は、本邦及び海外において行うものとする。
        </p>
        <br />
        <h3 class="memorandum-title">第３章&nbsp;&nbsp;会員</h3>
        <br />
        <p>
          （種別）<br />
          第５条&nbsp; 本協会に次の会員を置く。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）正会員&nbsp;&nbsp;本協会の目的に賛同して入会した個人又は団体<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）賛助会員&nbsp;&nbsp;本協会の事業を賛助するため入会した個人又は団体<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（３）協力会員&nbsp;&nbsp;本協会の事業を遂行するために協力支援を行う個人又は団体・自治体等で<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;理事会において推薦された者<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（４）名誉会員&nbsp;&nbsp;本協会に功労のあった者又は学識経験者で総会において推薦された者<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２前項の会員のうち正会員をもって一般社団法人及び一般財団法人に関する<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法律（以下「一般社団・財団法人法」という。）上の社員とする。<br />
        </p>

        <p>
          （入会）<br />
          第６条&nbsp;
          &nbsp;正会員又は賛助会員として入会しようとする者は、理事会の議決を経て会長が別に定める<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;入会申込書により、会長に申し込まなければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;入会は、理事会においてその可否を決定し、会長が本人に通知するものとする。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;３&nbsp;団体たる会員にあっては、団体の代表者として本協会に対してその権利を行使する者<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          （1人に限る。以下「指定代表者」という。）を定め、会長に届け出なければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;４&nbsp;指定代表者を変更した場合は、速やかに別に定める変更届を会長に提出しなければならない。<br />
        </p>

        <p>
          （入会金及び会費）<br />
          第７条&nbsp;
          正会員は、総会において別に定める入会金及び会費を納入しなければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;賛助会員は、総会において別に定める入会金及び賛助会費を納入しなければならない。<br />
        </p>

        <p>
          （任意退会）<br />
          第８条&nbsp;
          正会員及び賛助会員は、会長が別に定める退会届を会長に提出して、任意に退会することができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;退会しようとする者は、所定の義務を完了しなければならない。<br />
        </p>

        <p>
          （除名）<br />
          第９条&nbsp;
          会員が次の各号の一に該当する場合には、総会の議決に基づき、除名することができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;この場合、その会員に対し、議決の前に弁明の機会を与えなければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）本協会の定款、規則又は総会の議決に違反したとき<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）本協会の名誉を傷つけ、又は目的に反する行為をしたとき<br />
        </p>
        <p>
          （会員の資格喪失）<br />
          第10条&nbsp;
          前２条の場合のほか、会員は次のいずれかに該当するに至ったときは、その資格を喪失する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）第７条の支払義務を２年以上履行しなかったとき<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）総正会員が同意したとき<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（３）後見開始又は保佐開始の審判を受けたとき<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（４）当該会員が死亡し、又は会員である団体が消滅したとき<br />
        </p>
        <p>
          （拠出金品の不返還）<br />
          第11条&nbsp;既納の入会金、会費及びその他の拠出金品は、返還しない。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第４章&nbsp;&nbsp;総会</h3>
        <br />
        <p>
          （種別）<br />
          第12条&nbsp;本協会の総会は、通常総会及び臨時総会の2種とする。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の通常総会をもって一般社団・財団法人法上の定時社員総会とする。<br />
        </p>

        <p>
          （構成）<br />
          第13条&nbsp;総会は、正会員をもって構成する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の総会をもって一般社団・財団法人法上の社員総会とする。<br />
        </p>

        <p>
          （権限）<br />
          第14条&nbsp;総会は、次の事項について決議する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）会員の除名<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）理事及び監事の選任又は解任<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（３）理事の報酬等の額<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（４）貸借対照表及び損益計算書（正味財産増減計算書）の承認<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（５）定款の変更<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（６）解散及び残余財産の処分<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（７）その他、総会で決議するものとして法令又はこの定款で定められた事項
        </p>
        <p>
          （開催）<br />
          第15条&nbsp;
          通常総会は、毎事業年度終了後３箇月以内に１回開催するほか、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          必要がある場合に臨時総会を開催する。<br />
        </p>
        <p>
          （招集）<br />
          第16条&nbsp;
          総会は、法令に別段の定めがある場合を除き、理事会の決議に基づき会長が招集する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;総正会員の議決権の５分の１以上の議決権を有する正会員は、会長に対し、
          総会の目的である<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;事項及び招集の理由を示して、総会の招集を請求することができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;３&nbsp;会長は、前項の規定による請求があったときは、その日から６週間以内の日を開催日とする<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;臨時総会を招集しなければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;４&nbsp;
          総会を招集するときは、会議の日時、場所、目的及び審議事項を記載した書面をもって、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;少なくとも開催日の７日前までに正会員に通知を発しなければならない。
        </p>
        <p>
          （議長）<br />
          第17条&nbsp;
          総会の議長は、会長がこれに当たり、会長に事故もしくは支障がある場合は、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;あらかじめ会長の定めた順序により他の理事がこれに代わる。
        </p>
        <p>
          （議決権）<br />
          第18条&nbsp;総会における議決権は、正会員１名につき１個とする。<br />
        </p>
        <p>
          （決議）<br />
          第19条&nbsp;
          総会の決議は、総正会員の議決権の過半数を有する正会員が出席し、出席した当該会員の議決権の<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;過半数をもって行う。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の規定にかかわらず、次の決議は、総正会員の半数以上であって、総正会員の議決権の<br />　　　
          &nbsp;&nbsp;３分の２以上に当たる多数をもって行う。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）会員の除名<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）役員の解任<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（３）定款の変更<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（４）解散<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（５）その他法令に定められた事項<br />
        </p>
        <p>
          （議決権の代理行使）<br />
          第20条&nbsp;
          総会に出席できない正会員は、他の正会員若しくは議長を代理人として表決を委任することができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の場合における前条の規定の適用については、その正会員は出席したものとみなす。<br />
        </p>
        <p>
          （決議の省略）<br />
          第21条&nbsp;
          理事又は役員が社員総会の目的である事項について提案をした場合において、当該提案につき<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;社員（当該事項について議決権を行使する事ができる者に限る）の全員が書面又は電磁的記録により<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;同意の意思表示をしたときは、当該提案を可決する旨の社員総会の決議があったものとみなす。<br />
        </p>

        <p>
          （議事録）<br />
          第22条&nbsp;
          総会の議事については、法令で定めるところにより、議事録を作成する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;議長及び総会において選任された議事録署名人２名以上が、前項の議事録に記名押印する。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第５章 役員等</h3>
        <br />
        <p>
          （役員の設置）<br />
          第23条&nbsp;本協会に、次の役員を置く。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）理事
          ３名以上２０名以内<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）監事
          ２名以内<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;理事のうち、1名を会長、3名以内を副会長、1名を専務理事とする。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;３&nbsp;前項の会長及び専務理事をもって一般社団・財団法人法上の代表理事とする。<br />
        </p>

        <p>
          （役員の選任）<br />
          第24条&nbsp;理事及び監事は、総会の決議によって選定する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;会長、副会長、専務理事は、理事の中から理事会の決議により選定する。<br />
        </p>

        <p>
          （理事の職務及び権限）<br />
          第25条&nbsp;
          理事は、理事会を構成し、法令及びこの定款で定めるところにより、職務を執行する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;会長は、法令及びこの定款で定めるところにより本協会を代表してその業務を執行し、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;副会長は会長を補佐し、専務理事は会長及び副会長を補佐して本協会の常務を統括する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;３&nbsp;会長、副会長、専務理事は、毎事業年度に４箇月を超える間隔で２回以上、その職務の執行状況を<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;理事会に報告しなければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;４&nbsp;会長に事故もしくは支障がある場合は、あらかじめ会長の定めた順序により他の理事がこれに代わる。<br />
        </p>

        <p>
          （監事の職務及び権限）<br />
          第26条&nbsp;
          監事は、理事の職務の執行を監査し、法令で定めるところにより、監査報告を作成する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;監事は、いつでも、理事及び使用人に対して事業の報告を求め、本協会の業務及び財産の状況の<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;調査をすることができる。
        </p>

        <p>
          （役員の任期）<br />
          第27条&nbsp;
          理事の任期は、選任後２年以内に終了する事業年度のうち最終のものに関する通常総会の<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;終結の時までとする。ただし、再任を妨げない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;監事の任期は、選任後２年以内に終了する事業年度のうち最終のものに関する通常総会の<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;終結の時までとする。ただし、再任は妨げない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;３&nbsp;補欠又は増員により選任された理事の任期は、前任者又は現任者の任期の満了する時までとする。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;４&nbsp;補欠により選任された監事の任期は、前任者の任期の満了する時までとする。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;５&nbsp;理事又は監事は、第２３条に定める定数に足りなくなるときは、任期の満了又は辞任により<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;退任した後も、新たに選任された者が就任するまで、なお理事又は監事としての権利義務を有する。<br />
        </p>

        <p>
          （役員の解任）<br />
          第28条&nbsp;
          役員が次の各号の一に該当するときは、総会において、正会員の半数以上であって、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;総正会員の議決権の３分の２以上の議決に基づいて解任することができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;この場合、その役員に対し、議決の前に弁明の機会を与えなければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）心身の故障のため職務の執行に堪えないと認められるとき<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）職務上の義務違反その他役員としてふさわしくない行為があると認められるとき<br />
        </p>

        <p>
          （報酬等）<br />
          第29条&nbsp;
          理事及び監事は、無報酬とする。ただし、常勤の理事に対しては、総
          会の議決によって定められた額を<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          報酬等として支給することができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;役員には費用を弁償することができる。<br />
        </p>

        <p>
          （顧問）<br />
          第30条&nbsp;本協会に、顧問を若干名置くことができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;顧問は、理事会の同意を得て、学識経験者等から会長が委嘱する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;３&nbsp;顧問は、会長の諮問に応じ意見を述べ又は理事会及び総会に出席して意見を述べることができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;４&nbsp;顧問には、第２７条第１項の規定を準用する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;この場合において、この規定中「理事」とあるのは「顧問」と読み替えるものとする。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第６章&nbsp;&nbsp;理事会</h3>
        <br />
        <p>
          （構成）<br />
          第31条&nbsp;本協会に理事会を置く。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;理事会は、すべての理事をもって構成する。<br />
        </p>

        <p>
          （権限）<br />
          第32条&nbsp;理事会は次の職務を行う。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）本協会の業務執行の決定<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）理事の職務の執行の監督<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（３）会長、副会長、専務理事の選定及び解職<br />
        </p>

        <p>
          （招集）<br />
          第33条&nbsp;理事会は会長が招集する。<br />
        </p>

        <p>
          （議長）<br />
          第34条&nbsp;理事会の議長は、会長がこれに当たる。<br />
        </p>

        <p>
          （決議）<br />
          第35条&nbsp;
          理事会の決議は、決議について特別の利害関係を有する理事を除く理事の過半数が出席し、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;その過半数をもって行う。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の規定にかかわらず、一般社団・財団法人法第９６条の要件を満たしたときは、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;理事会の決議があったものとみなす。<br />
        </p>

        <p>
          （議事録）<br />
          第36条&nbsp;
          理事会の議事については、法令で定めるところにより、議事録を作成する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;出席した代表理事及び監事は、前項の議事録に記名押印する。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第７章&nbsp;&nbsp;資産及び会計</h3>
        <br />
        <p>
          （事業年度）<br />
          第37条
          本協会の事業年度は、毎年４月１日に始まり翌年３月３１日に終わる。<br />
        </p>

        <p>
          （事業計画及び収支予算）<br />
          第38条&nbsp;
          本協会の事業計画書、収支予算書については、毎事業年度の開始の日の前日までに、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会長が作成し理事会の承認を受けなければならない。
          これを変更する場合も、同様とする。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の書類については、事務所において当該事業年度が終了するまでの間備え置くものとする。
        </p>

        <p>
          （暫定予算）<br />
          第39条&nbsp;
          前条の規定にかかわらず、やむを得ない理由により予算が成立しないときは、<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会長は、理事会の議決を経て、予算成立の日まで前年度の予算に準じ収入支出をすることができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の収入支出は、新たに成立した予算の収入支出とみなす。<br />
        </p>

        <p>
          （事業報告及び決算）<br />
          第40条&nbsp;
          本協会の事業報告及び決算については、毎事業年度終了後、会長が次の書類を作成し、監事の監査を<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;受けたうえで、理事会の承認を経て、第
          １号、第３号及び第４号の書類を通常総会に提出し、第１号の<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;書類についてはその内容を報告し、第３号及び第４号の書類については承認を受けなければならない。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（１）事業報告<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（２）事業報告の附属明細書<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（３）貸借対照表<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（４）損益計算書（正味財産増減計算書）<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（５）貸借対照表及び損益計算書（正味財産増減計算書）の附属明細書<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;前項の書類及び監査報告は事務所に５年間備え置くとともに、定款、正会員名簿を事務所に<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;備え置くものとする。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第８章&nbsp;&nbsp;定款の変更及び解散</h3>
        <br />
        <p>
          （定款の変更）<br />
          第41条&nbsp;この定款は、総会の決議によって変更することができる。<br />
        </p>

        <p>
          （解散）<br />
          第42条&nbsp;
          本協会は、総会の決議その他法令で定められた事由により解散する。<br />
        </p>

        <p>
          （剰余金）<br />
          第43条&nbsp;本協会は、剰余金の分配を行うことができない。<br />
        </p>

        <p>
          （残余財産の処分）<br />
          第44条&nbsp;
          本協会が清算をする場合において有する残余財産は、総会の決議を経て、公益社団法人及び<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公益財団法人の認定等に関する法律第５条第１７項に掲げる法人又は国若しくは地方公共団体に<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贈与するものとする。
        </p>
        <br />
        <h3 class="memorandum-title">第９章&nbsp;&nbsp;公告の方法</h3>
        <br />
        <p>
          （公告の方法）<br />
          第45条&nbsp;
          本協会の公告は、主たる事務所の公衆の見えやすい場所に掲示する方法により行う。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第１０章&nbsp;&nbsp;事務局</h3>
        <br />
        <p>
          （設置等）<br />
          第46条&nbsp;本協会の事務を処理するため、事務局を設置する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;２&nbsp;事務局には、事務局長及び所要の職員を置くことができる。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;３&nbsp;事務局長は、理事会の決議を経て会長が任免し、職員は、会長が任免する。<br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;４&nbsp;事務局の組織及び運営に関し必要な事項は、総会の議決を経て、会長が別に定める。<br />
        </p>
        <br />
        <h3 class="memorandum-title">第１１章&nbsp;&nbsp;附 則</h3>
        <br />
        <p>
          （最初の事業年度）<br />
          第47条&nbsp;
          本協会の最初の事業年度は、本協会成立の日から平成２７年３月３１日までとする。<br />
        </p>
        <br />
        <p>
          一般社団法人&nbsp;&nbsp;日本シェアサイクル協会&nbsp;&nbsp;事務局<br />
          東京都中央区日本橋小網町7-2&nbsp;&nbsp;ぺんてるビル7F<br />
          TEL.03-3663-6281&nbsp;&nbsp;FAX.03-3667-9637<br />
        </p>
        <br />
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>