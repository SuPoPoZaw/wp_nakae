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

<div class="panels dept-border">
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
                                <p class="goto-description">薬剤部</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="goto" href="#item03-sec">
                            <div class="goto-left-side">
                                <p class="goto-description">栄養部</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="goto" href="#item04-sec">
                            <div class="goto-left-side">
                                <p class="goto-description">画像診断部</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="item01-sec" class="item01-sec item-sec-border-sp bg-gray">
            <div class="container m-w800">
                <h2 class="h2-ttl h2-mb">看護部</h2>
                <div class="procedure-con">
                    <div class="procedure-block mb40 mb0-sp">
                        <h3 class="procedure-ttl accor-ttl" key="0">看護部の理念</h3>
                        <div class="procedure-detail-box accor" key="0" style="display: block;">
                            <p>
                            専門職業人としての責任と自覚を持ち、全人的看護サービスを提供する。
                            </p>
                        </div>
                    </div>

                    <div class="procedure-block mb40 mb0-sp">
                        <h3 class="procedure-ttl accor-ttl" key="1">目標</h3>
                        <div class="accor" key="1" style="display: block;">
                            <div class="mb50 mb30-sp">
                                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">①基本的人権を尊重する</h4>
                                <ul class="procedure-detail">
                                    <li>相手の立場に立って十分な説明をし、納得出来る看護を提供する。</li>
                                </ul> 
                            </div>
                            <div class="mb50 mb30-sp">
                                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">②看護サービスの向上</h4>
                                <ul class="procedure-detail">
                                    <li>日々の看護実践を評価し、科学的な看護を提供する。</li>
                                </ul> 
                            </div>   
                            <div class="mb50 mb30-sp">
                                <h4 class="bg-light-indigo bd-rounded-5px mb15 pl20 fz-20 fz-18-sp leading-2">③自己研鑽する</h4>
                                <ul class="procedure-detail">
                                    <li>積極的に研修に参加し、自己啓発に努め看護観を高めて、具体的な手助けを実践し記録する。接遇の向上、快い対応、言葉使いをする。</li>
                                    <li>研究心をもって、個人的なケアを工夫する。</li>
                                    <li>患者様の安全を確保し、信頼を得る。</li>
                                </ul> 
                            </div>   
                            <div class="single-txt-line mb40 mb30-sp">
                                <p>
                                    ※患者様が満足を感じられる看護提供を常に意識し、２４時間の質の低下させる事なく継続して行く努力を怠ってはならない。<br>
                                    ※看護が社会情勢や医療の仕組み、進歩に合わせて検証しながら生かされていくこと。<br>
                                    そして、日常の臨床現場で全スタッフが教え、教えられる教育的風土づくりの大切さを知る。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="procedure-block mb40 mb0-sp">
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
                    </div>

                </div>
            </div>
        </section>


        <section id="item02-sec" class="item02-sec item-sec-border-sp">
            <div class="container m-w800">
                <h2 class="h2-ttl h2-mb">薬剤部</h2>
                <div class="procedure-con">
                    <div class="single-txt-line mb40 mb30-sp">
                        <p>
                            最近では、少なくなりました院内処方を中心に外来患者さんに対応しております。<br>
                            服用してみての薬剤の効果の有無、希望薬、必要だと思われる薬など患者さまより直接、様々なお話を伺うことが可能です。<br>
                            これらの情報を直ちに医師へフィードバック出来るという利点を生かしながら業務に当たっています。
                        </p>
                    </div>

                    <div class="procedure-block mb40 mb0-sp">
                        <h3 class="procedure-ttl accor-ttl" key="4">外来調剤・入院調剤</h3>
                            <ul class="procedure-detail accor" key="4" style="display: block;">
                                <li>外来調剤：当院では、院内処方で外来患者さまを対応しております。</li>
                                <li>入院調剤：誤りのない薬剤の調剤供給を心掛けております。</li>
                            </ul> 
                    </div>

                    <div class="procedure-block mb40 mb0-sp">
                        <h3 class="procedure-ttl accor-ttl" key="5">注射薬業務</h3>
                        <div class="procedure-detail-box accor" key="5" style="display: block;">
                            <p>注射薬は、請求分を直接ナースステーションへ供給しております。</p>
                        </div>
                    </div>

                    <div class="procedure-block mb40 mb0-sp">
                        <h3 class="procedure-ttl accor-ttl" key="6">薬剤管理指導業務</h3>
                        <div class="procedure-detail-box accor" key="6" style="display: block;">
                            <p>特に医師の目の届かない事柄についても薬剤投与（有無も含め）に反映出来るよう努めています。</p>
                        </div>
                    </div>

                    <div class="procedure-block mb40 mb0-sp">
                        <h3 class="procedure-ttl accor-ttl" key="7">医薬品の発注・在庫管理</h3>
                        <div class="procedure-detail-box accor" key="7" style="display: block;">
                            <p>需要と供給のバランスをとる様心掛けてしております。</p>
                        </div>
                    </div>

                    <div class="procedure-block mb40 mb0-sp">
                        <h3 class="procedure-ttl accor-ttl" key="8">医薬品安全使用の収集及び提供</h3>
                        <div class="procedure-detail-box accor" key="8" style="display: block;">
                            <p>医薬品の安全性情報や添付文書の改訂内容、その他医薬に関する情報を随時提供しております。</p>
                        </div>
                    </div>

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
