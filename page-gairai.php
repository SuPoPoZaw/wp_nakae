<?php
/*
template name:gairai
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">外来のご案内</h2>
            <span class="sub-mv-txt">Outpatient care Information</span>
        </div>
    </div>
</section>
<section class="page-anchor mt80 mt45-sp mb90 mb35-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#gairai-sec01">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item01.png" alt="診療科目" /></div>
                        <p class="goto-description">診療科目</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec02">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item02.png" alt="診療時間" /></div>
                        <p class="goto-description">診療時間</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec03">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item03.png" alt="外来担当医表" /></div>
                        <p class="goto-description">外来担当医表</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec04">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item04.png" alt="外来担当医ご紹介" /></div>
                        <p class="goto-description">初めて受診される方</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#gairai-sec05">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/gairai/item05.png" alt="外来について" /></div>
                        <p class="goto-description">光トポグラフィー検査</p>
                    </div>
                </a>
            </li>
            <li>
        </ul>
    </div>
</section>
<section class="gairai-info-section bg-gray" id="gairai-sec01">
    <div class="container">
        <div class="information">
            <h2 class="h2-ttl h2-mb">診療科目</h2>
            <div class="medical-department">
                <ul>
                    <li>精神科</li>
                    <li>心療内科</li>
                    <li>内科</li>
                </ul>
                <div class="medical-dep-img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/diagnosis_img_02.jpg" alt="診断の画像">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="consult-time-section" id="gairai-sec02">
    <div class="container">
        <hr class="consult-hr-sp sp" />
        <div class="m-w800 margin-sp">
            <div class="consult-time">
                <h2 class="h2-ttl h2-mb" id="consult-time-section">診療時間</h2>
                <div class="consult-time-table">
                    <table class="gairai-consult-table">
                        <thead>
                            <tr>
                                <td class="text-left pl0 pr0">診療時間</td>
                                <td>月</td>
                                <td>火</td>
                                <td>水</td>
                                <td>木</td>
                                <td>金</td>
                                <td>土</td>
                                <td><span class="pc">日</span><span class="sp">日祝</span></td>
                                <td class="pl0 pr0 pc">祝祭日</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left pl0 pr0">9:00-11:30</td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <!-- <td class="pd1"><span class="icon-triangle"></span></td> -->
                                <td class="pl0 pr0">-</td>
                                <td class="pl0 pr0 pc">-</td>
                            </tr>
                            <tr>
                                <td class="text-left pl0 pr0">13:30-16:00</td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td><i class="circle m-auto"></i></td>
                                <td class="pd1"><span class="icon-triangle"></span></td>
                                <td class="pd1"><span class="icon-triangle"></span></td>
                                <td class="pl0 pr0">-</td>
                                <td class="pl0 pr0 pc">-</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="consult-time-txt">
                        <p class="common-txt-po"><span>※</span>土曜外来日については、病院HPの「お知らせ」をご覧ください。</p>
                    </div>
                </div>
                <div class="gairai-com-btn">
                    <a href="<?php echo home_url() . '/news'; ?>" class="gairai-btn-dec">お知らせページを開く</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doctor-table bg-gray" id="gairai-sec03">
    <div class="container">
        <div class="m-w800">
            <h2 class="h2-ttl h2-mb">外来担当医表</h2>
            <p class="fz-20 fz-18-sp mb40 mb30-sp">このページでは次の情報をご案内しています。</p>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li">
                    <li>
                        <a href="#gairai01">外来担当医勤務表</a>
                    </li>
                    <li>
                        <a href="#gairai02">外来担当医のご紹介</a>
                    </li>
                </ul>
            </div>

            <div class="doctor-list-container">
                <?php
                    $args = array(
                        'post_type' => 'numazaki-doctors'
                    );
                    $wpqv = new WP_Query( $args );
                    if ( $wpqv->have_posts() ) :
                        while ( $wpqv->have_posts() ) : $wpqv->the_post();
                ?>
                <ul class="doctor-list">
                    <li class="doctor-list-li" id="gairai01">
                        <div class="table-ttl">
                        <h3 class="procedure-ttl">外来担当医勤務表</h3>
                        </div>
                        <table class="table-dec">
                            <tr class="table-tr">
                                <th class="table-th"></th>
                                <th class="table-th">月</th>
                                <th class="table-th">火</th>
                                <th class="table-th">水</th>
                                <th class="table-th">木</th>
                                <th class="table-th">金</th>
                                <th class="table-th">土</th>
                            </tr>
                            <!-- ループ処理 1回目だけthを表示させるためにcounterを使用 -->
                            <?php $snd_doctors = SCF::get('snd_doctors');?>
                            <?php if(!empty($snd_doctors[0]['snd_sei'])):?>
                            <?php
                                $counter = 0;
                                foreach ($snd_doctors as $fields ) {
                                    $counter++;
                            ?>
                            <tr class="table-tr">
                                <!-- ループの1回目のみthを表示 -->
                                <?php if($counter==1):?>
                                <th rowspan="10" class="single-th">午前</th>
                                <?php endif; ?>
                                <!-- thの件ここまで -->
                                <!-- 診療科目ごとの表示非表示のif -->
                                <?php if ($fields['snd_naika'] == '表示') : ?>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    -
                                </td>
                                <?php else: ?>
                                <?php endif; ?>
                                <!-- 表示非常時のifここまで -->
                            </tr>
                            <?php } ?>
                            <?php else: ?>
                            <?php endif; ?>
                            <!-- ループここまで -->
                        </table>
                        <table class="table-dec">
                            <tr class="table-tr">
                                <th class="table-th"></th>
                                <th class="table-th">月</th>
                                <th class="table-th">火</th>
                                <th class="table-th">水</th>
                                <th class="table-th">木</th>
                                <th class="table-th">金</th>
                                <th class="table-th">土</th>
                            </tr>
                            <!-- ループ処理 1回目だけthを表示させるためにcounterを使用 -->
                            <?php $snd_doctors = SCF::get('snd_doctors');?>
                            <?php if(!empty($snd_doctors[0]['snd_sei'])):?>
                            <?php
                                $counter = 0;
                                foreach ($snd_doctors as $fields ) {
                                    $counter++;
                            ?>
                            <tr class="table-tr">
                                <!-- ループの1回目のみthを表示 -->
                                <?php if($counter==1):?>
                                <th rowspan="10" class="single-th">午後</th>
                                <?php endif; ?>
                                <!-- thの件ここまで -->
                                <!-- 診療科目ごとの表示非表示のif -->
                                <?php if ($fields['snd_naika'] == '表示') : ?>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    <?php echo $fields['snd_sei']; ?>
                                </td>
                                <td class="table-td">
                                    -
                                </td>
                                <?php else: ?>
                                <?php endif; ?>
                                <!-- 表示非常時のifここまで -->
                            </tr>
                            <?php } ?>
                            <?php else: ?>
                            <?php endif; ?>
                            <!-- ループここまで -->
                        </table>
                    </li>
                </ul>
                <?php  endwhile;endif;wp_reset_postdata();?>
                <!-- <div class="btn-container">
                    <div id="close-btn" class="gairai-btn-dec list-close-btn">閉じる</div>
                </div> -->
            </div>

            <div class="intro-outdor-doctor">
            <h3 class="procedure-ttl" id="gairai02">外来担当医のご紹介</h3>
                <ul class="intro-dr-block">
                    <li class="intro-dtr-block-li">
                        <?php
                            $args = array(
                                'post_type' => 'numazaki-doctors'

                            );
                            $wpqv = new WP_Query( $args );
                            if ( $wpqv->have_posts() ) :
                                while ( $wpqv->have_posts() ) : $wpqv->the_post();
                        ?>
                        <ul class="outer-flex">
                            <!-- ループ処理 -->
                            <?php $snd_doctors = SCF::get('snd_doctors');?>
                            <?php foreach ($snd_doctors as $fields ) { ?>
                            <li class="outer-flex-li-01">
                                <div class="outer-flex-li-sty">
                                    <p class="outer-txt01"><?php echo $fields['snd_position']; ?></p>
                                    <p class="outer-ttl01"><?php echo $fields['snd_sei']; ?>　<?php echo $fields['snd_mei']; ?></p>
                                    <div class="outer-para01">
                                        <p class="fz-b">専門分野</p>
                                        <p><?php echo $fields['snd_senmon']; ?></p>
                                    </div>
                                    <div class="outer-para02">
                                        <p class="fz-b">資格・略歴</p>
                                        <p><?php echo $fields['snd_shikaku']; ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                            <!-- ループここまで -->
                        </ul>
                        <?php  endwhile;endif;wp_reset_postdata();?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="outpatient" id="gairai-sec04">
    <div class="container">
        <div class="m-w800 margin-sp">
            <h2 class="h2-ttl h2-mb">初めて受診される方</h2>
            <p class="fz-20 fz-18-sp mb40 mb30-sp">このページでは次の情報をご案内しています。</p>
            <div class="recruit-info-gp">
                <ul class="recruit-info-li mb50">
                    <li>
                        <a href="#out-patient01">初めて受診される患者さまへ</a>
                    </li>
                    <li>
                        <a href="#out-patient02">診察の流れ</a>
                    </li>
                </ul>
            </div>

            <h3 class="gairai-procedure-ttl" id="out-patient01">初めて受診される患者さまへ</h3>
            <div class="mb70">
                <p class="pb15">完全予約制となっておりますので、事前に<span class="font-blue">代表電話（011-716-7181）</span>にてご予約ください。</p>
                <p class="pb15">※問診票を事前にダウンロードしていただき、記入して当日お持ちいただくと、診察までをスムーズに行うことができます。</p>
                <div class="file-icon-pdf">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/pdf/20181010100746.pdf" target="_blank">もの忘れ外来問診票  </a>（677.4KB）
                </div>

                <div class="fst-visitor-img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/common/firsttime-patient01.jpg" alt="初めて受診される患者さまへの画像">
                </div>
            </div>
            <!-- <div class="gairai-com-btn gairai-btn-margin">
                <a href="tel:0166-23-2090" class="gairai-btn-dec sp">電話をする</a>
            </div>
            <p class="pb30">※問診票を事前にダウンロードしていただき、記入して当日お持ちいただくと、診察までをスムーズに行うことができます。</p> -->
            <?php $monshin_jizen = scf::get('monshin_jizen'); ?>
            <?php if (!empty($monshin_jizen)) { ?>
                <div class="gairai-com-btn gairai-btn-margin">
                    <a href="<?php echo $monshin_jizen; ?>" class="gairai-btn-dec">問診票事前ダウンロードはこちら</a>
                </div>
            <?php } ?>
            <div class="examination-flow-container">
                <h3 class="gairai-procedure-ttl" id="out-patient02">診察の流れ</h3>
                <div class="examination-flow">
                    <ol>
                        <li>完全予約制のため、事前にご連絡ください。</li>
                        <li>保険証をお持ちの方は必ず提示してください。資格があっても確認が取れない場合は自費診療となります。</li>
                        <li>現在、心療内科・精神科へ通院中の方は通院先の医療機関から紹介状を必ずお持ち願います。</li>
                        <li>外来受付後、外来にて血圧などのバイタルの取らせていただきます。</li>
                        <li>その後、現在の状態をより把握するため、診察前に事前の問診を取らせていただき、医師による診察を受けていただきます。</li>
                        <li>診察後、外来受付窓口にて次回予約をしていただいてから会計となります。なお、お薬は院外薬局をご利用いただいております。<span>※ お支払いにクレジットカードはご利用になれません。</span></li>
                    </ol>
                </div>

                <h4 class="pro-sub-ttl">マイナ保険証について</h4>
                <p class="pb15">当院はオンライン資格確認を行う体制を有しており、マイナ保険証をご提示された患者様に対して、受診歴、薬剤情報、特定健診情報その他必要な診療情報を取得・活用して診療等を行っております。</p>
                <p class="pb40">診療情報を取得・活用することにより、質の高い医療の提供に努めておりますので、正確な情報を取得・活用するため、マイナ保険証の利用にご協力をお願いいたします。</p>
                <p class="pb15">◆医療情報・システム基盤整備体制充実加算（初診時）</p>
                <div class="pb30">　加算１：４点　　加算２：２点（マイナ保険証を利用した場合）</div>
            </div>
        </div>
    </div>
</section>
<section class="optical-inspection bg-gray" id="gairai-sec05">
    <div class="container">
        <div class="m-w800 margin-sp">
            <h2 class="h2-ttl h2-mb">光トポグラフィー検査</h2>
            <h3 class="gairai-procedure-ttl">光トポグラフィー検査のご案内<span>Near-infrared spectroscopy : NIRS</span></h3>
            <p class="center-txt mb30">2017年6月より，当院にて光トポグラフィー検査を実施できるようになりました。</p>
            <div class="mb30">
                <h5 class="h5-ttl pb20">光トポグラフィー検査（NIRS）とは</h5>
                <p>　近赤外光を用いて頭皮上から非侵襲的に脳機能を測定する「光機能画像法」の原理を応用した装置のことを指します。</p>
                <p>　光トポグラフィーにより，脳の血流の変化を測定することで，現在の症状の根底にあるものが，“うつ病”なのか，“統合失調症”なのか，“双極性障害（躁うつ病）”なのかといった精神疾患の鑑別診断補助のための検査です。</p>
            </div>
            <div class="mb30">
                <h5 class="h5-ttl">当院で使用している検査機材</h5>
                <p>当院では，（株）島津製作所の近赤外光イメージング装置「SPEEDNIRS」を使用しています。
                一般的な光トポグラフィー検査では7組19チャンネルの装置が使用されることが多いですが，当院では拡張タイプの14組42チャンネルの装置を使用しています。そのため，より広い範囲の計測が可能となっています。</p>
            </div>
            <div class="mb30">
                <div class="h5-ttl">１．検査の主たる目的</div>
                <p>この検査は，大うつ病性障害，双極性障害（躁うつ病），統合失調症圏の鑑別診断補助として有用な検査となります。これまでの問診や自記式質問紙等による診断に加え，本検査の検査結果を加えることで，より確かな診断に近づこうとするもので，約7~8割の精度で示されると言われています。</p>
            </div>
            <div class="mb30">
                <div class="h5-ttl">２．安全性について</div>
                <p>本検査では，装置を頭部に当て，近赤外光を用いて脳を働かせる課題を行う際の脳の血液量変化を測定し，脳機能の状態を検討します。<br>
                用いられる近赤外光は曇りの日より弱い光であり，安全性は広く認められおり危険性の報告はありません。保険診療で認められている「光トポグラフィー検査」を応用した検査となりますので，ご安心して検査を受けていただけます。
                </p>
            </div>
            <div class="mb30">
                <div class="h5-ttl">３．検査を受けるメリットとデメリット</div>
                <p>数値化された客観的データにもとづいて，問診による診断が確実なものかどうかについての示唆が得られ，診断の正確性を高めることができます。うつ病，躁うつ病，統合失調症では，それぞれ治療方針（特に薬の処方）が異なるため，より正確な診断がとても重要となります。<br>
                しかしながら，本検査の結果のみで診断がつくことや病気を証明することはできません。あくまで診断補助する一つの手段であり，問診やその他の検査（心理検査等）と同時に実施し，診断の精度を上げることが限界点となります。
                </p>
            </div>
            <div class="mb30">
                <div class="h5-ttl">４．費用について</div>
                <p>検査費用は，13,000円（＋消費税）です。当院での光トポグラフィー検査は，保険診療の適応外となりますので，検査費用は自費となります。<br>
                ※ 検査費用には，問診，心理検査，自律神経機能検査，結果のご報告の一連の費用が含まれます。
                </p>
            </div>
            <div class="mb30">
                <div class="h5-ttl">５．検査予約について</div>
                <p>完全予約制となります。（平日 9:00~15:30）</p>
                <p>※ 他院通院中の方は，主治医の先生からの紹介状が必要となります。</p>
            </div>
            <div class="mb30">
                <div class="h5-ttl">1 実施される検査の内容について</div>
                <p>光トポグラフィー検査では，診断の精度を向上させるため，本検査以外に①問診，②心理検査，③自律神経機能検査を含めた一連のパッケージで実施されます。問診を含め，検査に要する時間は60～90分程度です。</p>
            </div>
            <div class="mb30">
                <div class="h5-ttl">Q 検査実施までの流れ</div>
                <ol>
                    <li><span>お電話にて，検査の日時をご予約ください。（平日 9:00~12:00 / 13:00~15:30）</span></li>
                    <li><span>当日，検査前にこれまでの病歴や生活歴等についての問診がございます。その後，本検査の適応基準に該当するかどうかの判断をさせていただきます。適応基準を満たさないと判断された場合には，お断りする場合もございますので，ご承知おきください。</span></li>
                    <li><span>問診後より，一連の検査を実施したします。その際に，本検査と合わせて自記式の質問紙及び自律神経機能検査を実施いたします。</span></li>
                    <li><span>検査終了後，2週間程度で検査結果のご報告をさせていただきます。検査終了後に，結果報告日のご予約をお願い致します。また，郵送にて文書によるご報告も可能ですので，検査後に担当者にご相談ください。</span></li>
                </ol>
            </div>
            <div class="mb50">
                <div class="card m-auto">
                    <div class="card-head">
                        <div class="card-head-ttl text-center">
                                <span>検査のご予約・お問い合わせ</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body-wrapper m-auto">
                            <p><span>011-716-7181（代表）</span><span>担当者：心理室　北田　</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
