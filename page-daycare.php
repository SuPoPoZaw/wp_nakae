<?php
/*
template name:daycare
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">デイケア・ショートケア</h2>
            <span class="sub-mv-txt">Day care/Short care</span>
        </div>
    </div>
</section>
<section class="page-anchor mt80 mt45-sp mb90 mb45-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#daycare">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/daycare/item_01.png" alt="デイケア・ショートケア" /></div>
                        <p class="goto-description">デイケア・ショートケア</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="daycare-section bg-gray pt80 pt45-sp pb90 pb45-sp" id="daycare">
    <div class="container m-w800">
        <h2 class="h2-ttl h2-mb">
            <span>デイケア・ショートケア</span>
        </h2>
        <p class="fz-20 fz-18-sp mb40 mb30-sp">このページでは次の情報をご案内しています。</p>
        <div class="recruit-info-gp">
            <ul class="recruit-info-li">
                <li>
                    <a href="#daycare_item01">このような方におすすめします</a>
                </li>
                <li>
                    <a href="#daycare_item02">タイムスケジュール</a>
                </li>
                <li>
                    <a href="#daycare_item03">年間行事</a>
                </li>
                <li>
                    <a href="#daycare_item04">デイケア プログラム</a>
                </li>
                <li>
                    <a href="#daycare_item05">スタッフ</a>
                </li>
                <li>
                    <a href="#daycare_item06">通所費用について</a>
                </li>
                <li>
                    <a href="#daycare_item07">お申込み・お問い合わせ</a>
                </li>
            </ul>
        </div>
        <div class="rec-people-container mt20 mb20" id="daycare_item01">
            <h3 class="procedure-ttl">このような方におすすめします</h3>
            <div class="nakae">
                <ul>
                    <li>生活にメリハリを持たせ、生活リズムを整えたい。</li>
                    <li>家に閉じこもりがちで話し相手や友人が欲しい。</li>
                    <li>家から出るきっかけを増やしたい。</li>
                    <li>人との付き合い方が上手になりたい。</li>
                    <li>同じ病気の人と意見交換がしたい。</li>
                    <li>自分の病気のことをもっと知りたい。</li>
                    <li>相談相手が欲しい。</li>
                    <li>社会復帰への第一歩を踏み出したい。</li>
                    <li>一人暮らしに自信がなく、不安である。</li>
                    <li>１日３食、バランスの良い食事がしたい。</li>
                    <li>服薬管理が出来るか心配である。</li>
                </ul>
            </div>
            <div class="img-container">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/daycare/daycare_img_02.jpg" alt="イメージ">
            </div>
        </div>
        <div class="time-schedule-container" id="daycare_item02">
            <h3 class="procedure-ttl">タイムスケジュール</h3>
            <div class="mb30">
                <h5 class="page-title_a5">ショートケア（3時間）※昼食は含まれません。</h5>
                <p class="p-taxt_a5">実施日：月～金・土曜日(月2回)（日祝休）</p>
                <div class="time-schedule-table">
                    <table>
                        <tbody>
                            <tr>
                                <th scope="row" width="20%" style="text-align:center;">午前の部</th>
                                <td style="text-align:center;">9：30～ </td>
                                <th scope="row" width="20%" style="text-align:center;">午前の部</th>
                                <td style="text-align:center;">12：30～</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mb30">
                <h5 class="page-title_a5">デイケア（6時間）</h5>
                <p class="p-taxt_a5">実施日：月～金・土曜日(月2回)（日祝休）</p>
                <div class="time-schedule-table">
                    <table>
                        <tbody>
                            <tr>
                                <th width="30%">9:30～</th>
                                <td>出欠確認</td>
                            </tr>
                            <tr>
                                <th width="30%">10:00～11:40</th>
                                <td>午前の活動</td>
                            </tr>
                            <tr>
                                <th width="30%">11:55～13:15</th>
                                <td>昼食・昼休み</td>
                            </tr>
                            <tr>
                                <th width="30%">13:15～15:00</th>
                                <td>午後の活動</td>
                            </tr>
                            <tr>
                                <th width="30%">15:30</th>
                                <td>解散</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="annual-events" id="daycare_item03">
            <h3 class="procedure-ttl">年間行事</h3>
            <div class="nakae">
                <ul>
                    <li>1月　新年会</li>
                    <li>3月　札家連卓球大会へ出場</li>
                    <li>8月　納涼祭・北家連卓球大会へ出場</li>
                    <li>9月　バス遠足</li>
                    <li>12月　Memory Party（クリスマス会＆忘年会）</li>
                </ul>
            </div>
        </div>
        <div class="daycare-program-container mb30" id="daycare_item04">
            <h3 class="procedure-ttl">デイケア プログラム</h3>
            <div class="daycar-img-one mb20">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/daycare/daycare_img_04.png" alt="広義の治療プログラム">
            </div>
            <div class="daycar-img">
                <a href="<?php bloginfo('template_directory'); ?>/assets/img/daycare/daycare_img_03.jpg" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/daycare/daycare_img_05.jpg" alt="広義の治療プログラム">
                </a>
            </div>
        </div>
        <div class="staff-container mb30" id="daycare_item05">
            <h3 class="procedure-ttl">スタッフ</h3>
            <p>医師、看護師、精神保健福祉士、作業療法士、臨床心理士等が協力して在宅生活をサポートします。</p>
        </div>
        <div class="commuting-expenses mb30" id="daycare_item06">
            <h3 class="procedure-ttl">通所費用について</h3>
            <div class="expense-table mb15">
                <div style="text-align:right;"><span style="font-size:80%">平成29年12月1日～</span></div>
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2">保険の種類</th>
                            <th rowspan="2">利用サービス</th>
                            <th colspan="2">自立支援医療</th>
                        </tr>
                        <tr>
                            <th>利用あり（1割負担）</th>
                            <th>利用なし（3割負担）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="4">国民健康保険<br>社会保険</td>
                            <td rowspan="2">ショートケア</td>
                            <td>400円（410円）</td>
                            <td>1,210円（1,230円）</td>
                        </tr>
                        <tr>
                            <td>※早期加算：20円</td>
                            <td>※早期加算：60円</td>
                        </tr>
                        <tr>
                            <td rowspan="2">デイケア</td>
                            <td>770円（780円）</td>
                            <td>2,320円（2,340円）</td>
                        </tr>
                        <tr>
                            <td>※早期加算：50円</td>
                            <td>※早期加算：150円</td>
                        </tr>
                        <tr>
                            <td rowspan="2">生活保護</td>
                            <td>ショートケア</td>
                            <td colspan="2" rowspan="2">0円</td>
                        </tr>
                        <tr>
                            <td>デイケア</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="font-blue">
                ※平成22年4月1日より、通常料金に加え、入所1年以内の方は「早期加算」として※の料金が加算されます。<br>
                ※ （ ）内の金額は、月初めに冬期暖房費として調整があります。期間は11月～4月迄。
            </p>
        </div>
        <div class="daycare-inquiries" id="daycare_item07">
            <h3 class="procedure-ttl">お申込み・お問い合わせ</h3>
            <p>まずは主治医までご相談下さい。随時、見学・試験参加も受け付けています。</p>
            <p class="pg-btn fz-bold">デイケア直通　電話 (011)716-1495</p>
        </div>
    </div>
</section>
<?php
get_footer();
