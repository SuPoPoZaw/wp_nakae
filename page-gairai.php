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

            <div class="modal-container">
                <?php
                    $args = array(
                        'post_type' => 'numazaki-doctors'
                    );
                    $wpqv = new WP_Query( $args );
                    if ( $wpqv->have_posts() ) :
                        while ( $wpqv->have_posts() ) : $wpqv->the_post();
                ?>
                <ul class="doctor-list modal">
                    <li class="doctor-list-li" id="gairai01">
                        <div class="table-ttl">
                        <h3 class="procedure-ttl accor-ttl">外来担当医勤務表</h3>
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
                <div class="btn-container">
                    <div id="close-btn" class="gairai-btn-dec list-close-btn">閉じる</div>
                </div>
            </div>

            <div class="intro-outdor-doctor">
            <h3 class="procedure-ttl accor-ttl" id="gairai02">外来担当医のご紹介</h3>
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
<section class="outpatient" id="gairai-sec05">
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
            <div class="mb50">
                <p class="pb15">完全予約制となっておりますので、事前に<span class="font-blue">代表電話（011-716-7181）</span>にてご予約ください。</p>
                <p class="pb15">※問診票を事前にダウンロードしていただき、記入して当日お持ちいただくと、診察までをスムーズに行うことができます。</p>
                <div class="file-icon-pdf">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/pdf/20181010100746.pdf" target="_blank">もの忘れ外来問診票  </a>(677.4KB)
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
            <h3 class="gairai-procedure-ttl" id="out-patient02">診察の流れ</h3>
            <div class="examination-flow">
                <ol>
                    <li>完全予約制のため、事前にご連絡ください。</li>
                    <li>保険証をお持ちの方は必ず提示してください。資格があっても確認が取れない場合は自費診療となります。</li>
                    <li>現在、心療内科・精神科へ通院中の方は通院先の医療機関から紹介状を必ずお持ち願います。</li>
                    <li>外来受付後、外来にて血圧などのバイタルの取らせていただきます。</li>
                    <li>その後、現在の状態をより把握するため、診察前に事前の問診を取らせていただき、医師による診察を受けていただきます。</li>
                    <li>診察後、外来受付窓口にて次回予約をしていただいてから会計となります。なお、お薬は院外薬局をご利用いただいております。※ お支払いにクレジットカードはご利用になれません。</li>
                </ol>
            </div>
            <p class="hint-txt pc">※ お支払いは現金のみです。クレジットカードやQRコード決済はご利用になれません。</p>
        </div>
    </div>
</section>

<?php
get_footer();
