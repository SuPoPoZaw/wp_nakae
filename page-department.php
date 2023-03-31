<?php
/*
template name:department
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">部門紹介</h2>
            <span class="sub-mv-txt">Category Information</span>
        </div>
    </div>
</section>
<!-- <div class="m-w860">
    <span id="dpt-sec01"></span>
    <ul class="dpt-tabs mt60 mt25-sp">
        <li class="dpt-tab active" id="nursing-department">
            <a class="" href="#left-dept">
                <span class="arrow-dow"></span>
                <div class="dpt-tab-txt-block">
                    <div class="dpt-tab-icon on"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/department/left-tab-img-wh.png" alt="入院されるとき"></div>
                    <div class="dpt-tab-icon off"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/department/left-tab-img.png" alt="入院されるとき"></div>
                    <p class="dpt-tab-description">看護部門</p>
                </div>
            </a>
        </li>
        <li class="dpt-tab" id="medical-tech-department">
            <a class="" href="#right-dept">
                <span class="arrow-dow"></span>
                <div class="dpt-tab-txt-block">
                    <div class="dpt-tab-icon on"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/department/right-tab-img-wh.png" alt="入院されるとき"></div>
                    <div class="dpt-tab-icon off"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/department/right-tab-img.png" alt="入院されるとき"></div>
                    <p class="dpt-tab-description">医療技術部門</p>
                </div>
            </a>
        </li>
    </ul>
</div> -->

<div class="dep-sec panels dept-border">
    <section class="page-anchor mb90 mb50-sp mt60-sp dpt-right-tab pt50-sp">
        <!-- TODO section with many buttons will go here -->
        <div class="container m-w800 pt-80">
            <ul class="anchor-list">
                <li>
                    <a class="goto" href="#item01-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">看護部</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item02-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">訪問看護</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item03-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">相談室</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item04-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">心理室</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item05-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">作業療法</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="goto" href="#item06-sec">
                        <div class="goto-left-side">
                            <p class="goto-description">地域連携室（相談室）</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section id="item01-sec" class="item01-sec item-sec-border-sp bg-gray">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">看護部</h2>
            <div class="recruit-info-gp" id="page_navi ">
                <p class="mb20 procedure-ttl">このページでは次の情報をご案内しています。</p>
                <ul class="recruit-info-li">
                    <li>
                        <a href="#page-ttl-a01">精神科看護の特色</a>
                    </li>
                    <li>
                        <a href="#page-ttl-a02">看護部の理念</a>
                    </li>
                    <li>
                        <a href="#page-ttl-a03">基本方針</a>
                    </li>
                    <li>
                        <a href="#page-ttl-a04">看護体制［勤務体制］</a>
                    </li>
                    <li>
                        <a href="#page-ttl-a05">院内研修制度</a>
                    </li>
                    <li>
                        <a href="#page-ttl-a06">老年看護学実習・精神看護学実習受け入れ教育機関</a>
                    </li>
                    <li>
                        <a href="#page-ttl-a07">当院の看護職員の負担軽減及び処遇の改善に対する取り組み</a>
                    </li>
                </ul>
                <p class="text-right mb20 mb10-sp">看護部長　日向 明美（認定看護管理者）</p>
            </div>
            <div class="procedure-con">
                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="0">看護部長挨拶</h3>
                    <div class="procedure-detail-box accor" key="0" style="display: block;">
                        <p>　当院は昭和23年に開院した、280床を有する精神科単科の病院です。<br>
                            　現在、日本は既に少子超高齢化社会に突入しており、それに伴い、疾病構造も変化しています。<br>
                            この状況により、今後さらに「こころ」と「からだ」を病む人が増加してくることが推測されます。<br>
                            看護・介護の対象は「人間」です。人間の「こころ」と「からだ」の双方に対して、深い洞察力や共感力、看護・介護の知識・技術を駆使することで、患者様の「その人らしく生きる力」を引き出し、患者様の可能性を広げることができます。<br>
                            　中江病院のミッションは、「こころ」と「からだ」を病む方々に寄り添い、その人の持てる力を引き出し、社会の中でひとりの人間として尊厳を保って生きていけるように看護・介護を提供することです。<br>
                            　患者様とそのご家族様が当院を選んで良かったと思っていただけるよう、日々自己研鑽をして参ります。それと同時に、当院で活躍する職員が生き生きと働ける環境を整備して参ります。<br>
                        </p>
                    </div>
                </div>

                <div class=" mb40 mb0-sp">
                    <!-- <h3 class="procedure-ttl accor-ttl" key="1">精神科看護の特色</h3> -->
                    <div class="accor" key="1" style="display: block;">
                        <div class="mb50 mb30-sp">
                            <h4 id="page-ttl-a01" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">精神科看護の特色</h4>
                            <p>　日本精神科看護協会では「精神科看護とは、精神的健康について援助を必要としている人々に対し、個人の尊厳と権利擁護を基本理念として、専門的知識と技術を用い、自律性の回復を通して、その人らしい生活ができるように支援すること」と示されています。<br>
                                　近年では、精神科医療分野の治療も進歩してきました。今、最も大切なことは、精神に病を抱えた人に関わる周囲の人たちの理解と支援です。<br>
                                　中江病院は、一人の人間として患者様の人権を尊重し、意思決定を支え、倫理的配慮を意識し、質の向上に向けた関わりができるように、職員一同が日々精進しております。
                            </p>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 id="page-ttl-a02" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">看護部の理念</h4>
                            <p>
                                　患者様が安全で安心してその人らしく過ごせるよう、人としての尊厳を尊重し、思いやりのある優しく誠実な看護・介護を提供し、地域に信頼される組織を目指します。
                            </p>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 id="page-ttl-a03" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">基本方針</h4>
                            <ol class="procedure-detail ml30">
                                <li>

                                    患者様の病気や障害状況に合わせた個別性のある看護を展開し、患者様がその人らしい生活を送れるように支援し、質の高い看護・介護を提供します。又、地域医療の質向上に努めます。</li>
                                <li>

                                    事故防止や院内感染防止に努め、安全な療養環境と人間関係を提供します。</li>
                                <li>

                                    常に自己研鑚に努め、豊かで寛容な人間性を養います。</li>
                                <li>

                                    患者様にとって最良な医療を提供するために他職種と協働し、患者様とご家族を支援します。</li>
                            </ol>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">看護部の取り組み</h4>
                            <p class="fz-b">縛らない看護の実践</p>
                            <p>
                                　心優会中江病院は、組織として身体拘束をしない方針です。<br />
                                　「患者様にとって尊厳のあるケアとは何か」を常に考え、患者様の人権擁護に努めるプロセスを大切にしております。
                            </p>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 id="page-ttl-a04" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">看護体制［勤務体制］</h4>
                            <p class="">　チームナーシングと受け持ち制・機能別を併用。</p>
                            <p class="mt20">［勤務体制］　※1か月単位の変形労働</p>
                            <div class="emp-info-table">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>　　早日勤　　</td>
                                            <td> 7:45　～　16:15 </td>
                                        </tr>
                                        <tr>
                                            <td>　　中日勤</td>
                                            <td> 早番8:50　～　17:20</td>
                                        </tr>
                                        <tr>
                                            <td>　　遅日勤</td>
                                            <td>10:00　～　18:30</td>
                                        </tr>
                                        <tr>
                                            <td>　　夜　勤</td>
                                            <td>16:30　～　翌9:30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 id="page-ttl-a05" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">院内研修制度</h4>
                            <p>　新人からベテランまで、一人ひとりの習熟段階に応じてキャリア発達を組織的に支援する研修体系です。
                                年間の教育プログラムに沿って研修を行っております。</p>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 id="page-ttl-a06" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">老年看護学実習・精神看護学実習受け入れ教育機関</h4>
                            <p>
                                　看護大学 1校・看護専門学校 2校計3校
                            </p>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 id="page-ttl-a07" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">当院の看護職員の負担軽減及び処遇の改善に対する取り組み</h4>
                            <div class="file-icon-pdf ml10">
                                <a class="mr5" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20190320111457.pdf" target="_blank">平成29年度　看護職員の負担軽減及び処遇の改善に対する計画書</a>(289.4KB)<br />
                                <a class="mr5" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20190320111515.pdf" target="_blank">平成30年度　看護職員の負担軽減及び処遇の改善に対する計画書</a>(307.2KB)<br />
                                <a class="mr5" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20190320111530.pdf" target="_blank">平成31年度　看護職員の負担軽減及び処遇の改善に対する計画書</a>(89.6KB)<br />
                                <a class="mr5" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20200331175223.pdf" target="_blank">令和元年度　看護職員の負担軽減及び処遇の改善に対する計画書</a>(87.5KB)<br />
                                <a class="mr5" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20200331175145.pdf" target="_blank">令和2年度　看護職員の負担軽減及び処遇の改善に対する計画書</a> (83.1KB)
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="2">活動方針</h3>
                    <div class="mb50 mb30-sp accor" key="2" style="display: block;">
                        <ol class="procedure-detail-ol">
                            <li>挨拶を交わす。</li>
                            <li>遅刻欠勤をしない。</li>
                            <li>対応は、きちんと親切に行う。</li>
                            <li>報告・連絡・相談を徹底する。</li>
                            <li>良い人間関係をつくる努力をする。</li>
                            <li>自己の活動に責任を持つ。</li>
                            <li>勉強会等、率先して参加する。</li>
                        </ol>
                    </div>

                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="3">看護師の果たす役割と責任</h3>
                    <div class="mb50 mb30-sp accor" key="3" style="display: block;">
                        <ul class="procedure-detail">
                            <li>個々の患者の背景を十分把握し、個別的な対応や指導援助が実践できる。常に自己の看護観を組織の中でのレベルに合わせる。</li>
                            <li>利用的な関わりを通し、良い人間関係をつくり、病む人の心を開き、他の医療チームとの連携を密にして、患者及び家族に治療経過また、入院生活が不安なく生活できる様、医師に全体像を報告し、患者及び家族が納得できる様、病状・検査結果等、医師の説明の場を作る様速やかに考慮し対応していく。</li>
                            <li>看護者は必要な知識能力を高め、自己成長を促し、仕事への意欲を育てて良き社会人として豊かな人間性を促すために、継続学習や看護研究を行っていく。</li>
                        </ul>
                    </div>
                </div> -->

            </div>
        </div>
    </section>


    <section id="item02-sec" class="item02-sec item-sec-border-sp">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">訪問看護</h2>
            <div class="dep-card">
                <div class="card-head">
                    <div class="card-head-ttl text-center">
                        <span>地域生活がより充実していくように</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body-wrapper m-auto">
                        <p>退院を間近に控えた方がご家庭や地域の中で安心してより豊かな生活を送っていけるようにお手伝いしていくことが訪問看護です。主治医の指示のもと外来・病棟・相談室・デイケア・地域の社会資源と連携しながらPSW（精神保健福祉士）・看護師がご家庭を訪問し、体調や生活について相談・支援を展開しています。お困りになる事がある場合はお気軽に主治医にご相談下さい。
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb50 mb30-sp">
                <h4 id="page-ttl-a05" class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">訪問看護は何をしてくれるの？</h4>
                <p>　
                    かかりつけの医師と連絡をとり、心身の状態に応じて以下のようなケアを行います。体調・気分面に関するご相談や必要に応じた様々なサービスをご紹介したり、関係機関と綿密な連携をとり利用される方が安心して地域での生活を送れるための支援や調整をいたします。
                </p>
            </div>
        </div>
    </section>


    <section id="item03-sec" class="item03-sec item-sec-border-sp bg-gray">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">栄養部</h2>
            <div class="procedure-con">
                <div class="single-txt-line mb40 mb30-sp">
                    <p>当院は直営施設であるため、患者様の健康状態を把握し食事に反映しています。</p>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="9">スタッフ紹介</h3>
                    <div class="procedure-detail-box accor" key="9" style="display: block;">
                        <p>管理栄養士2名、栄養士1名、調理師5名、調理員6名体制で構成しています。</p>
                        <p>20代～70代と様々な世代ですが、時には母となり・娘となり良好な関係を築いています。</p>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="10">業務の紹介</h3>
                    <div class="accor" key="10" style="display: block;">
                        <div class="mb50 mb30-sp">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">給食管理</h4>
                            <ul class="procedure-detail">
                                <li>医師の指示のもと、治療の一環として患者さまの状態に応じた食事の提供を行っています。</li>
                                <li>安心・安全な食事を提供するため、厚生労働省が定める「大量調理マニュアル」に基づいて調理・盛り付けを行っています。</li>
                                <li>地元の業者様より新鮮な食材を仕入れ、手作りの食事提供を行っています。</li>
                            </ul>
                        </div>
                        <div class="mb50 mb30-sp">
                            <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">栄養管理</h4>
                            <div class="procedure-detail-box">
                                <p class="pl20 pb20">
                                    入院・入所中の栄養状態の悪化を予防できるよう。<br>
                                    定期的にアセスメントを行い栄養状態の管理を行っています。
                                </p>
                                <div class="pl20 single-txt-line mb40 mb30-sp">
                                    <p>
                                        <span class="fz-b">☆栄養食事指導・栄養食事相談</span><br>
                                        医師から治療効果を高めるために食事指導が必要と診断された方には、管理栄養士が個々の患者さんに合わせて、食事のとり方などをアドバイスしたり、日々の食生活への不安や疑問などにお答えしています。
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="single-txt-line mb40 mb30-sp">
                            <p>障害者雇用・障害者実習受け入れも積極的に行っています</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="item04-sec" class="item04-sec item-sec-border-sp">
        <div class="container m-w800">
            <h2 class="h2-ttl h2-mb">画像診断部</h2>
            <div class="procedure-con">
                <div class="single-txt-line mb40 mb30-sp">
                    <p>多種の検査機器にて診断や治療を支援しています。</p>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="11">内視鏡検査（胃カメラ、大腸カメラ）</h3>
                    <div class="procedure-detail-box accor" key="11" style="display: block;">
                        <p>
                            2022年高出力LEDハイビジョンシステム導入により、高画質での検査を行っています。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/numazaki_dept_img_01.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/numazaki_dept_img_02.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="12">Ｘ線検査（レントゲン検査、バリウム検査）</h3>
                    <div class="procedure-detail-box accor" key="12" style="display: block;">
                        <p>
                            2021年Ｘ線画像診断システム導入により、高画質と被爆線量軽減に貢献しています。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="13">Ｘ線ＣＴ検査</h3>
                    <div class="procedure-detail-box accor" key="13" style="display: block;">
                        <p>
                            マルチスライスＣＴにて多様な検査にも対応しています。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="14">ＭＲＩ検査</h3>
                    <div class="procedure-detail-box accor" key="14" style="display: block;">
                        <p>
                            圧迫感が少ないオープンタイプＭＲＩにて検査を行います。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="15">超音波検査</h3>
                    <div class="procedure-detail-box accor" key="15" style="display: block;">
                        <p>
                            放射線を使わない画像診断なのでMRIやCTでは確認できないものも確認することができます。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="16">心電図</h3>
                    <div class="procedure-detail-box accor" key="16" style="display: block;">
                        <p>
                            心臓からの微弱な電流の流れより心臓の検査をします。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="17">骨塩定量測定検査</h3>
                    <div class="procedure-detail-box accor" key="17" style="display: block;">
                        <p>
                            踵からの測定なので車イスのままでも骨粗鬆症の診断や経過観察が行えます。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="18">眼底カメラ検査</h3>
                    <div class="procedure-detail-box accor" key="18" style="display: block;">
                        <p>
                            眼の奥の血管や神経などの撮影を行います。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="19">血圧脈波検査</h3>
                    <div class="procedure-detail-box accor" key="19" style="display: block;">
                        <p>
                            手と足の血圧計測より動脈硬化を検査します。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="procedure-block mb40 mb0-sp">
                    <h3 class="procedure-ttl accor-ttl" key="20">肺年齢計スパイロメーター</h3>
                    <div class="procedure-detail-box accor" key="20" style="display: block;">
                        <p>
                            可能な限りの息の吸い込みと吹き出しから肺機能を検査します。
                        </p>
                        <div class="procedure-detail-img-flex mt30 mt15-sp">
                            <div class="procedure-detail-img-box mb15-sp">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像1">
                            </div>
                            <div class="procedure-detail-img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/department/dummy.jpg" alt="一般撮影検査画像2">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</div>

<?php
get_footer();
