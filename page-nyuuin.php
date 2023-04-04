<?php
/*
template name:nyuuin
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">入院のご案内</h2>
            <span class="sub-mv-txt">Hospitalization Information</span>
        </div>
    </div>
</section>
<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#item01-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/common/item01.png" alt="入院されるとき"></div>
                        <p class="goto-description">入院されるとき</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item03-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/common/item02.png" alt="入院中の生活"></div>
                        <p class="goto-description">入院中の生活</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item04-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/common/item03.png" alt="面談・面会について"></div>
                        <p class="goto-description">面談・面会について</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item05-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/common/item04.png" alt="入院の費用"></div>
                        <p class="goto-description">入院の費用</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#item06-sec">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/common/item05.png" alt="その他事項"></div>
                        <p class="goto-description">その他事項</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="nyuuin-sec01 item01-sec bg-gray">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn hospital-comm-btn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item01-sec">入院されるとき</h2>
            <div class="hospital-content">
                <p>初めて受診される方は、来院時に問診票にご記入していただきます。<br>
                    事前に問診票をダウンロードし、ご記入したものをご持参いただくと入院までの流れをスムーズに行うことができます。<br>
                </p>
            </div>
            <div class="file-icon-pdf">
                <a class="mr5" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20181010120119.pdf" target="_blank">物忘れ問診票</a>
                (677.4KB)
            </div>
            <!--
            <?php /*
            $monshin_nyuuin_gp = SCF::get('monshin_nyuuin_gp');
            foreach ($monshin_nyuuin_gp as $fields) { */
            ?>
                <div class="hospital-comm-btn1">
                    <div class="ques-btn">
                        <a href="<?php //echo $fields['nyuuin_link']; 
                                    ?>"><?php //echo nl2br($fields['nyuuin_name']); 
                                        ?></a>
                    </div>
                </div>
            <?php //} 
            ?>
-->
        </div>
        <div class="">
            <div class="mb50 mb30-sp">
                <h3 class="h5-ttl">入院手続き</h3>
                <div class="mt20 mt10-sp">
                    <p>
                        入院時の手続きには印鑑が必要です。老人医療受給者証・重度心身障害者受給者証・母子家庭等医療費受給者証をお持ちの方は、保険証とともにお出しください。
                    </p>
                </div>
            </div>
            <div class="mb50 mb30-sp">
                <h3 class="h5-ttl">寝具</h3>
                <div class="mt20 mt10-sp">
                    <p>基準寝具を用意しておりますので、持ち込みは必要ありません。</p>
                </div>
            </div>
            <div class="mb50 mb30-sp">
                <h3 class="h5-ttl">日用生活品</h3>
                <div class="mt20 mt10-sp">
                    <p>
                        一日定額料金にて、入院中の日用生活品はすべて当院でご用意させていただいております。<br />
                        これまでご家族様にお願いしておりました必要物品の買い出しやお持込みのご足労、洗濯等のお手間が軽減されます。また、病衣・タオル類の衛生管理を徹底することで、院外から持ち込まれる感染症から患者様をお守りする目的もございます。ご理解の程お願い致します。
                        紙おむつをご使用の患者様につきましても、定額利用サービスをご利用いただいております。詳細につきましては、入院時に相談員よりご説明いたします。
                    </p>
                </div>
            </div>

            <div class="mb50 mb30-sp">
                <h3 class="h5-ttl">保証金及びお小遣い</h3>
                <div class="mt20 mt10-sp">
                    <div>
                        <p>入院のときにお預かりし、退院のときにお返ししています。受付にて手続きをお願いします。</p>
                        <div class="procedure-li">
                            <h4><span>１．</span>生活保護受給中の方</h4>
                            <p>（保証金）0円＋（お小遣い）20,000円（合計2万円）</p>
                        </div>
                        <div class="procedure-li">
                            <h4><span>２．</span>前期高齢者（70～74歳）・後期高齢者（75歳以上）・一人親・重度医療の方</h4>
                            <p>（保証金）30,000円＋（お小遣い）20,000円（合計5万円）</p>
                        </div>
                        <div class="procedure-li">
                            <h4><span>３．</span>国民健康保険、社会保険にご加入の方（1,2以外または自己負担額3割の方）</h4>
                            <p>（保証金）70,000円＋（お小遣い）20,000円（合計9万円）</p>
                        </div>
                        <p class="p-txt-b mt35"><span>※</span>2に該当する方で自己負担額が3割となっている方は、３の該当となります</p>
                    </div>
                </div>
            </div>


            <div class="mb50 mb30-sp">
                <h4 class="h5-ttl">入院のときにご用意していただくもの</h4>
                <div class="">
                    <p><strong>内服薬</strong>（他科薬も含む）</p>
                    <p class="pt10"><strong>お薬手帳</strong>（薬剤情報提供<strong>書</strong>）</p>
                    <p class="pt10"><strong>介護シューズ</strong>または<strong>運動靴等のかかとのある履物</strong> ※スリッパは不可</p>
                    <p class="pt10"><strong>電気</strong>シェーバー（T字カミソリ等の刃のついたものは持ち込めません）</p>
                    <div class="pt30">
                        <p class="p-txt-b"><span>※</span>着替え、洗面用具等につきましては、日用生活品セット（別紙）に含まれますので必要ありません</p>
                        <p class="p-txt-b"><span>※</span>オムツは、感染予防や管理棟の問題から持込みできません（定額利用サービスをご利用下さい）</p>
                        <p class="p-txt-b"><span>※</span>紛失防止のため、持ち物には全てにお名前をお書きください。</p>
                        <p class="p-txt-b"><span>※</span>スウェットやパーカー等、紐のついているものは避けるか、予め外して持参してください。</p>
                        <p class="p-txt-b"><span>※</span>持ち物の紛失や破損等、自己管理されているものに関しては、当院では一切の責任を負えませんので、ご了承ください。</p>
                    </div>
                </div>
            </div>

            <div class="mb50 mb30-sp">
                <h4 class="h5-ttl">持ち込み禁止の物品について</h4>
                <p class="mt20 mt10-sp">
                    当院では、患者さんが安心して療養生活を送っていただくために、病棟内に持ち込むことを禁止あるいは制限しているものがあります。
                </p>
            </div>

            <div class="nakae mb50 mb30-sp">
                <h4 class="pg-btn mb15">持ち込み禁止</h4>
                <ul>
                    <li>刃物類：ナイフ、カミソリ、ハサミ等</li>
                    <li>割れ物：陶器類、ガラス類</li>
                    <li>先の尖っている物：針、爪楊枝、傘、毛抜き、爪切り、フォーク、大スプーン等</li>
                    <li>火気類、可燃物：マッチ、ライター、除光液、スプレー類等</li>
                    <li>長いひも類：電気のコード類、紙袋のひも等</li>
                    <li>その他：杖、マジックペン、のり、セロテープ、ビニール袋、香水、ヒールの高いサンダル、貴</li>
                </ul>
                <p>金属等の高価な品、携帯電話、パソコン、タブレット等</p>
            </div>

            <div class="nakae mb50 mb30-sp">
                <h4 class="pg-btn mb15">主治医の許可が必要なもの</h4>
                <ul>
                    <li>ベルト、スウェットの腰ひも、パンスト、タイツスカートなど特定の衣類</li>
                    <li>ラジオやイヤフォンなどのオーディオ機器</li>
                    <li>筆記用具類</li>
                    <li>洗剤類</li>
                    <li>化粧品、コンパクト、手鏡（直径６センチメートルまで）、ムース、アクセサリー等</li>
                </ul>
                <p class="p-txt-b mt20"><span>※</span>患者さんの病状によっては、許可が下りるまで時間が掛かることがあります。</p>
            </div>

            <div class="">
                <h4 class="triangle-ttl">注意事項</h4>
                <div class="mt20 mt10-sp">
                    <div class="mb50 mb30-sp">
                        <h4 class="h5-ttl">貴重品に関して</h4>
                        <p class="mt20 mt10-sp">貴重品・貴金属は持参しないでください。ナースステーションでは預かることが出来ません。<br>また、破損・紛失・盗難に関して、当院では一切の責任を負うことが出来ません。自己責任となりますのでご了承ください。</p>
                    </div>
                    <div class="mb50 mb30-sp">
                        <h4 class="h5-ttl">持ち物の記名について</h4>
                        <p class="mt20 mt10-sp">持ち物には、全て病棟名とお名前をフルネームで記入するようにしてください。衣類には、タグ部分などの見やすい箇所に記入をお願いします。</p>
                    </div>
                    <div class="mb50 mb30-sp">
                        <h4 class="h5-ttl">食べ物・飲み物の持ち込みについて</h4>
                        <p class="mt20 mt10-sp">面会時にお持ちになる食べ物に関して、喉つまり等の危険があるため、必ず事前に病棟詰所にお越し下さい。持ち込み品の確認をさせていただきます。また、食中毒防止のため、生もの（生寿司等）に関しては、お持ち込みを禁止させていただいております。その他、傷みやすいものに関しては、お持ち帰りいただくことがありますので、ご了承ください。<br />飲み物につきましては、お持ち込み可能ですが、病棟でお預かりできる量にも限りがございますので病棟看護師にご相談ください。</p>
                        <p class="p-txt-b mt35"><span>※</span>通常、持ち込み可能なものにつきましても、患者さんの病状や食中毒などの感染症の流行時期によっては、一時制限される場合があります。ご了承ください。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nyuuin-sec02 item03-sec">
    <div class="container m-w800">
        <h2 class="h2-ttl h2-mb">入院中の生活</h2>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">食事</h3>
            <p class="mt20 mt10-sp">食事時間は（朝8：00 昼12：00 夕18：00）です。</p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">手紙</h3>
            <p class="mt20 mt10-sp">手紙の発・受信に制限はございません。</p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">電話</h3>
            <p class="mt20 mt10-sp">公衆電話は外来ロビーと各病棟にそれぞれ1台あります。<br />
                また、院内での携帯電話の使用は禁止されています。ご了承ください。
            </p>
            <p class="p-txt-b mt20"><span>※</span>詰所での小銭の両替や電話のお取り次ぎはしておりません。</p>
            <p class="p-txt-b"><span>※</span>夜間（患者さんがお休みになる時間）は緊急時以外ご遠慮ください。</p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">電気器具の使用</h3>
            <p class="mt20 mt10-sp">電気器具の使用は必ず看護師に申し出て許可を得てください。</p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">消灯</h3>
            <p class="mt20 mt10-sp">
                消灯時間は（21：00）です。<br />
                その後電灯をつけることはご遠慮ください。<br />
                起床時間は（6：50）をしております。
            </p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">外出・外泊</h3>
            <p class="mt20 mt10-sp">許可制となっておりますので、あらかじめ主治医に申し出て許可を受けてください。</p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">病棟移動とそれに伴う主治医の変更について</h3>
            <p class="mt20 mt10-sp">入院中、やむを得ない理由（インフルエンザなどの感染対策，ベッド調整等）により、入院病棟を移動させていただくことがございます。その際、病棟の移動に伴って主治医が変更となる場合があり，大変ご迷惑をおかけいたしますがご了承ください。</p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">避難</h3>
            <p class="mt20 mt10-sp">避難の際には、看護師又は職員の指示に従ってください。<br />
                病棟毎で毎月1回、病院全体で年2回消防訓練を行なっております。
            </p>
        </div>

        <div class="mb50 mb30-sp">
            <h3 class="h5-ttl">作業療法・レクリエーション等</h3>
            <p class="mt20 mt10-sp">医療スタッフが各種プログラムを組んでお手伝いさせていただいております。</p>
        </div>

        <div class="nakae mb50 mb30-sp">
            <h3 class="h5-ttl">その他</h3>
            <ul class="pl10">
                <li class=" mt20">病院敷地内は全面禁煙となっております。防災上、喫煙は固くお断りいたします。</li>
                <li class=" mt10">盗難事故を防ぐため、高額な現金（2万円以上）、貴重品を持ち込まないでください。</li>
                <li class=" mt10">他の病室、詰所、その他病院内の施設にみだりに出入りしないでください。</li>
                <li class=" mt10">院内の備品、器具類は大切にお取り扱いください。なお破損させた場合は実費を弁償していただきます。</li>
            </ul>
            <p class="mt30">その他、入院中は医師、看護師等職員の指示に従ってください。入院患者さんの財産や生命を脅かす行為を再三繰り返す場合は退院していただきます。</p>
        </div>

        <div class="file-icon-pdf">
            <a class="mr5" href="<?php bloginfo('template_directory'); ?>/assets/pdf/20200331174111.pdf" target="_blank">物忘れ問診票</a>
            (677.4KB)
        </div>

    </div>
</section>

<section class="item04-sec bg-gray">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item04-sec">面談・面会について</h2>
        </div>
        <div class="procedure-con">
            <div class="procedure-block">
                <h3 class="">主治医にお話をお聞きになりたいときは</h3>
                <div class="">
                    <p>予約制になっておりますので、あらかじめ病棟を通じて日程を確認してください。</p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="">面会</h3>
                <div class="">
                    <p>面会は原則自由ですが、病状が不安定な場合、医師が面会を制限することもございますので、あらかじめ主治医または病棟看護師にお尋ねください。</p>
                    <p class="pt25 pt15-sp">面会時間は下記の通りとなります。</p>
                    <p class="pt25 pt15-sp"><span>午前　10：30～11：30　/　午後　13：30～17：00</span>（平日・土日祝共通）</p>
                    <!-- <p class="pt25 pt15-sp">現在は都度状況に合わせての対応となります。詳しくは<a class="txt-b dis-in" href="<?php echo home_url() . '/news'; ?>">お知らせページ</a>をご確認ください。</p> -->
                    <p class="pt25 pt15-sp">ご面会につきましては、検査や作業療法など治療に関するものを優先させていただく場合もございますので、あらかじめ病棟にご確認くださるようお願いいたします。</p>
                    <p class="pt25 pt15-sp">各病棟ごとの作業療法の時間は下記の通りとなります。作業療法の時間帯のご面会は、極力避けていただきますようお願い致します。</p>
                    <div class="interview-time">
                        <div class="time-list">
                            <div class="time-block">
                                <h4>西2・西4病棟</h4>
                                <p class="block-ti">午前 9:30～12:00</p>
                            </div>
                            <div class="time-block">
                                <h4>東2・西3・西5病棟</h4>
                                <p class="block-ti">午後 13:30～15:00</p>
                            </div>
                        </div>
                        <p>※ 作業療法の開始時、終了時の時間帯は、患者様の移動のためエレベーターがご利用できません。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="item05-sec">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item05-sec">入院の費用</h2>
        </div>
        <div class="procedure-con">
            <div class="procedure-block">
                <h3 class="">支払い</h3>
                <div class="">
                    <p>
                        入院費（医療費）は1ヵ月を取りまとめ翌月15日に請求書を発送しておりますので月内に受付でお支払いください。なお医療費についてご質問等ございましたら、病院受付へお申し出ください。<br />
                        ※ 郵便書留での支払いも可能ですが、お釣りの返送はできません
                    </p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="">お小遣い</h3>
                <div class="">
                    <p>主な用途は下記のとおりで1ヵ月約2万円が目安です。</p>
                    <ul>
                        <ol>
                            １．嗜好品（ジュース・お菓子等）、果物、日用品、化粧品など
                        </ol>
                        <ol>
                            ２．洗濯代（私物：院内・院外クリーニング）、院内美容・理容、新聞代など
                        </ol>
                    </ul>
                    <p class="p-txt-b mt35"><span>※</span>金銭管理を病院に委託される場合、約定書契約が必要です。</p>
                    <p class="p-txt-b"><span>※</span>預り金手数料をお支払いいただきますが、管理の仕方により金額が異なりますので病棟でご確認ください。</p>
                    <p class="p-txt-b"><span>※</span>約定書契約の場合、個人別に毎月明細書をお渡ししています。</p>
                    <p class="p-txt-b"><span>※</span>個人別台帳を作成しており、すべてコンピュータ処理をしております。なお台帳の保管は1年間とさせていただいております。</p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="">保険証の確認</h3>
                <div class="">
                    <p>
                        健康保険証の資格等による誤請求事故防止のために毎月月初めに確認いたしますので、病院受付にご提出ください。<br />
                        また、保険証に変更があった場合は、速やかにお申し出ください。
                    </p>
                </div>
            </div>
            <!-- <div class="procedure-block">
                <h3 class="" id="table-accor" key="24">その他利用料など</h3>
                <div class="scroll-bl">
                    <div class=" scroll-wd" key="24">
                        <div class="tvset-table01 pb20">
                            <table class="tvset-table-block">
                                <tbody>
                                    <tr>
                                        <td>テレビ</td>
                                        <td>テレビカード：1枚1,000円（20時間）</td>
                                    </tr>
                                    <tr>
                                        <td>イヤホン販売</td>
                                        <td>300円（売店にて販売）</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tvset-table02">
                            <table class="table-block">
                                <tbody>
                                    <tr>
                                        <th rowspan="3">食事料<br>（一般病棟）</th>
                                        <th>年齢区分</th>
                                        <th>所得区分</th>
                                        <th>負担金額</th>
                                    </tr>
                                    <tr>
                                        <td class="table-block-col">70歳未満</td>
                                        <td>区分「ア」・「イ」・「ウ」・「エ」区分「オ」</td>
                                        <td>460円/1食<br>210円/1食</td>
                                    </tr>
                                    <tr>
                                        <td class="table-block-col">70歳以上</td>
                                        <td>現役並み所得者<br>一般<br>区分Ⅱ<br>区分Ⅱ（長期該当者）<br>区分Ⅰ</td>
                                        <td>460円/1食<br>460円/1食<br>210円/1食<br>160円/1食<br>100円/1食</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tvset-table03">
                            <table class="table-block">
                                <tbody>
                                    <tr>
                                        <th rowspan="3">介護医療院<br>サービス費<br>（基本料）</th>
                                        <th rowspan="2">要介護度</th>
                                        <th rowspan="2">基本単位</th>
                                        <th colspan="3">負担金額</th>
                                    </tr>
                                    <tr>
                                        <th class="table-block-col">基本単位</th>
                                        <th>基本単位</th>
                                        <th>基本単位</th>
                                    </tr>
                                    <tr>
                                        <td class="table-block-col">要介護1<br>要介護2<br>要介護3<br>要介護4<br>要介護5</td>
                                        <td>813単位/日<br>922単位/日<br>1,159単位/日<br>1,259単位/日<br>1,350単位/日</td>
                                        <td>813円/日<br>922円/日<br>1,159円/日<br>1,259円/日<br>1,350円/日</td>
                                        <td>1,626円/日<br>1,844円/日<br>2,318円/日<br>2,518円/日<br>2,700円/日</td>
                                        <td>2,439円/日<br>2,766円/日<br>3,477円/日<br>3,777円/日<br>4,050円/日</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tvset-table04">
                            <table class="table-block">
                                <tbody>
                                    <tr>
                                        <th rowspan="2">食費・居住費<br>（介護医療院）</th>
                                        <th>利用者負担段階</th>
                                        <th>食費</th>
                                        <th>居住費</th>
                                    </tr>
                                    <tr>
                                        <td class="table-block-col">第1段階<br>第2段階<br>第3段階①<br>第3段階②<br>第4段階</td>
                                        <td>300円/日<br>390円/日<br>650円/日<br>1,360円/日<br>1,960円/日</td>
                                        <td>多床室　0円/日<br>多床室　370円/日<br>多床室　370円/日<br>多床室　370円/日<br>多床室　377円/日</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="tb-scrollbtn js-fix01" style="">
                <img class="inline-block sp" src="<?php bloginfo('template_directory'); ?>/assets/img/nyuuin/sp-swipe.png" alt="Scroll" />
            </div>
        </div>
    </div>
</section>
<section class="item06-sec item06-sec-ow bg-gray">
    <div class="container m-w800">
        <div class="hosiptal-inn-conn">
            <h2 class="h2-ttl h2-mb h2-mb-sp" id="item06-sec">その他事項</h2>
        </div>
        <div class="procedure-con">
            <div class="procedure-block">
                <h3 class="">医療相談</h3>
                <div class="">
                    <p>
                        入・退院時、医療費の助成、年金の申請方法、手続き等ご不明な点がございましたら、1階相談室をご利用ください。（予約制）<br />
                        また、各書類（診断書など）の窓口にもなっておりますので、御用の際は相談室まで直接お申し出ください。
                    </p>
                </div>
            </div>
            <div class="procedure-block">
                <h3 class="">退院の手続き</h3>
                <div class="">
                    <p>
                        印鑑をお持ちください。入院費用（医療費）の支払いは退院時に病院受付にて済ませてください。<br />
                        入院時の保証金は領収書と引き換えにお返しします。お小遣いの精算は、退院して１週間ほどかかる場合もありますので、退院時に病棟受付にてご確認ください。
                    </p>
                </div>
            </div>
            <div class="procedure-block pb40 pb0-sp">
                <h3 class="">その他</h3>
                <div class=" procedure-other-detail">
                    <p>
                        個室や2人部屋などもございます。（差額室料が別途かかります）<br />病院の管理上、暴力団に関係する方の入院、通院及び面会等は固くお断りいたします。<br />
                        医療費・お小遣い等のお支払いが期日中になされない場合は、退院していただくこともありますのでご注意ください。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
