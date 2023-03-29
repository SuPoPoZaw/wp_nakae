<?php
/*
template name:about
 */

get_header();
?>

<section class="sub-mv-section sub-bg">
    <div class="container">
        <div class="pc">
            <?php echo the_breadcrumb(); ?>
        </div>
        <div class="sub-mv">
            <h2 class="sub-mv-ttl">病院紹介</h2>
            <span class="sub-mv-txt">Hospital Information</span>
        </div>
    </div>
</section>
<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
    <!-- TODO section with many buttons will go here -->
    <div class="container m-w800">
        <ul class="anchor-list">
            <li>
                <a class="goto" href="#greeting-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item01.png" alt="院長挨拶" /></div>
                        <p class="goto-description">院長挨拶</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#overview-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item02.png" alt="病院概要・沿革" /></div>
                        <p class="goto-description">病院概要・沿革</p>
                    </div>
                </a>
            </li>
            <li>
                <a class="goto" href="#traffic-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item03.png" alt="交通アクセス" /></div>
                        <p class="goto-description">交通アクセス</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#floor-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item04.png" alt="フロアガイド" /></div>
                        <p class="goto-description">フロアガイド</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="greeting-section bg-gray">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="greeting-section">
                <span> 院長挨拶 </span>
            </h2>
            <div class="greeting-block">
                <p class="greeting-pg">
                    中江病院のルーツは、明治３９年北海道美瑛村に祖父 中江 重平が開院したのが始まりです。<br>大正９年旭川に移り現在の旭川厚生病院の前身となる向井病院を引き継ぎましたが、昭和１５年、医師の招集による人員不足となり上川産業組合連合へ譲渡することになり、昭和１６年に旭川市４条９丁目の旧阿部医院を買い受けて診療を始めました。<br>父 中江 修 は昭和２１年より西神楽で診療所を開設していたが、祖父の高齢のため旭川へ転居し中江医院を引継ぎその後、医院の老朽化のため昭和３４年に現在地である旭川市８条通８丁目に新築移転し、１９床の診療所として出発しました。<br>そして、昭和５４年には２３床に増床し中江病院と改称しました。<br>昭和５５年１０月、３代目院長として引継ぎ、隣地を譲受、病院を４５床に増床し新築開設しました。<br>その後、８２床に増床し、平成元年４月には、法人を設立して、医療法人修彰会 中江病院として開設。平成１１年２月、隣接部分を改築し９０床に増床したのち、平成１２年４月、介護保険法施行に伴い一般病棟４０床・介護療養型医療施設５０床に改編。現在は一般病棟４０床・平成３０年１０月に介護療養型医療施設より転換した介護医療院５０床を有しております。<br>父が恩師よりいただいた言葉「慈心妙手」を意に体し、慈非心を以て医療に妙手を振るい、祖父の追悼録にも掲載した「良き医師は先ず良き人間たれ」という言葉をモットーに国が進める地域医療体制の中核病院として入院・療養生活において長期における医療や介護が必要な方々の受け皿となり、地域に貢献し地域に開かれた病院・介護医療院として努めてまいりました。<br>今後も職員共々患者さま・入居者さま、その家族の皆さまそれぞれの立場となり「安心・安全・信頼」を得られるよう取り組みたいと思います。
                </p>
                <p class="greeting-name">中江病院　院長　中江 彰</p>
            </div>
        </div>
    </div>
</section>
<section class="overview-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="overview-section">
                <span> 病院概要・沿革 </span>
            </h2>
            <h3 class="overview-text h3-ttl">病院概要</h3>
            <div class="overview-block">
                <p class="overview-pg">
                    当院は、主に慢性疾患のご高齢の患者様を対象とした医療機関です。病状は安定しているものの継続的な療養が必要な患者様を対象にして看護とリハビリテーションを重点に置き、快適な環境の中で在宅復帰を目指していただく病院です。<br />
                    療養型病院のために、廊下の幅、患者様一人当たりの専有面積なども通常の病院より広めにしています。また機能訓練室、食堂、体の不自由な方が入浴できる施設等も完備。適性に合わせ、無理なく患者様の力を引き出す、カリキュラムを大切にしています。
                </p>
            </div>
            <h3 class="overview-text h3-ttl">施設概要</h3>
            <div class="overview-table">
                <table>
                    <tr>
                        <td>名　称</td>
                        <td>医療法人社団心優会　中江病院</td>
                    </tr>
                    <tr>
                        <td>代表者</td>
                        <td>
                            理事長　三輪 英則<br />
                            院　長　中江 彰
                        </td>
                    </tr>
                    <tr>
                        <td>開　設</td>
                        <td>昭和39年（1964年）10月</td>
                    </tr>
                    <tr>
                        <td>病床数（90床）</td>
                        <td>
                            <ul>
                                <li>一般病床：40床</li>
                                <li>2階介護医療院：50床</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>診察科</td>
                        <td>
                            <ul>
                                <li>・内科</li>
                                <li>・消化器内科</li>
                                <li>・リハビリテーション科</li>
                                <li>・血液内科</li>
                                <li>・感染症内科</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>住　所</td>
                        <td>
                            〒 070-0038 北海道 旭川市8条通8丁目43番地<br />
                            電話　0166-23-2090（代表）
                        </td>
                    </tr>
                </table>
            </div>
            <div class="history">
                <h3 class="history-text h3-ttl">沿革</h3>
                <div class="history-list">
                    <ul>
                        <li>･明治39年10月 上川郡美瑛村 中江医院として開設(無床) (初代 中江 重平)</li>
                        <li>･大正9年10月 旭川市2条9丁目 向井病院を引き継ぐ(72床)</li>
                        <li>･昭和15年12月 向井病院を上川産業組合連合会へ譲渡する(現在の旭川厚生病院)</li>
                        <li>･昭和16年 旭川市4条9丁目の旧阿部医院を譲受 移転(10床)</li>
                        <li>･昭和21年6月 上川郡神楽町西神楽市街地 中江診療所開設(2代目 中江 修)</li>
                        <li>･昭和26年 中江診療所閉鎖し旭川市4条9丁目へ移り診療を引き継ぐ</li>
                        <li>･昭和34年7月 現在の8条8丁目に移転(19床)</li>
                        <li>･昭和54年8月 中江医院を増床し中江病院として開設(23床)</li>
                        <li>･昭和55年10月 増築し45床の4階建新築病院となる(3代目 中江 彰)</li>
                        <li>･昭和61年12月 82床に増床</li>
                        <li>･平成元年4月 法人設立し､医療法人修彰会 中江病院として開設</li>
                        <li>･平成11年2月 隣接部分を改築し､90床に増床</li>
                        <li>･平成12年4月 介護保険法施行に伴い介護療養型医療施設50床･一般病棟40床に改編</li>
                        <li>･平成30年10月 介護療養型医療施設50床を介護医療院に転換</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="traffic-section bg-gray">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="traffic-section">
                <span> 交通アクセス </span>
            </h2>
            <p class="traffic-text">当院へ来院される方へのアクセス情報です。</p>
            <div class="traffic-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2880.977639158391!2d142.36635568262145!3d43.773323000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcfb2993d08f915b1!2z5rK85bSO55eF6Zmi!5e0!3m2!1sja!2sjp!4v1656323596709!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="car-block pb20">
                <h3 class="block-title h3-ttl">お車の場合</h3>
                <p class="block-txt">
                    道央自動車道・旭川鷹栖ICから国道12号方面へ約5km（約11分）。
                </p>
            </div>
            <div class="jr-block">
                <h3 class="block-title h3-ttl">JR・バスの場合</h3>
                <p class="block-txt">
                    JR旭川駅北口より旭川電気軌道・市役所前バス停にて下車。徒歩4分。八条スタルヒン通り沿いにございます。
                </p>
            </div>
            <!--<div class="bus-block">
                <p class="block-title">バスの場合</p>
                <p class="block-txt">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>-->
        </div>
    </div>
</section>
<section class="floor-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl" id="floor-section">
                <span> フロアガイド </span>
            </h2>
            <div class="hospitalization-facility">
                <h3 class="floor-title h3-ttl">入院施設</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide01.png" alt="病室" />
                        </div>
                        <p class="floor-detail-title">病室1</p>
                        <!-- <p class="floor-detail-txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>-->
                    </div>
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide02.png" alt="病室" />
                        </div>
                        <p class="floor-detail-title">病室2</p>
                        <!-- <p class="floor-detail-txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p> -->
                    </div>
                </div>
            </div>
            <div class="outpatient-facility">
                <h3 class="floor-title h3-ttl">外来施設</h3>
                <div class="floor-photo-block">
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide03.png" alt="病室" />
                        </div>
                        <p class="floor-detail-title">病室1</p>
                        <!-- <p class="floor-detail-txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p> -->
                    </div>
                    <div class="floor-list">
                        <div class="floor-photo">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide03.png" alt="病室" />
                        </div>
                        <p class="floor-detail-title">病室2</p>
                        <!-- <p class="floor-detail-txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p> -->
                    </div>
                </div>
            </div>
            <!--
            <div class="hospital-map">
                <p class="hm-title">院内マップ</p>
                <div class="hm-photo-block">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/floor_guide03.png" alt="院内マップ" />
                </div>
            </div>
        -->
        </div>
    </div>
</section>

<?php
get_footer();
