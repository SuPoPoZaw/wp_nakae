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
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item02.png" alt="使命・運営理念" /></div>
                        <p class="goto-description">使命・運営理念</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#traffic-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item03.png" alt="病院概要" /></div>
                        <p class="goto-description">病院概要</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#floor-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item04.png" alt="施設案内" /></div>
                        <p class="goto-description">施設案内</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#floor-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item05.png" alt="院内保育所" /></div>
                        <p class="goto-description">院内保育所</p>
                    </div>
                </a>
            </li>

            <li>
                <a class="goto" href="#floor-section">
                    <div class="goto-left-side">
                        <div class="goto-icon"><img class="inline-block" src="<?php bloginfo('template_directory'); ?>/assets/img/abouts/item06.png" alt="アクセス" /></div>
                        <p class="goto-description">アクセス</p>
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
                <span>院長挨拶</span>
            </h2>
            <div class="greeting-block">
                <p class="greeting-pg">
                　平成29年4月より、中江重孝院長の後任として、新院長に就任致しました。<br>　当院は、うつ病や統合失調症をはじめ、様々な心の病、脳の病をかかえる患者様の御相談・治療を行ってまいりました。昨今、時代の変遷とともに精神科治療のニーズは大きく様変わりしようとしています。今の時代を生きる人々は、ストレス社会や高齢化などに関連して、様々なメンタルヘルスの課題に直面しており、精神科医療も多くの方が関心を持つ身近なものとなりました。具体的には、ストレス社会を反映して、うつ症状のために日常生活や社会生活に重大な影響を及ぼすことが多く見受けられます。うつ病などのこころの病は、早期発見、早期治療が非常に大切です。「こんなことくらいで行ってもいいのかな」とひとりで悩まず、「ちょっと相談してみよう」という軽いお気持ちで、お早めにご来院してください。<br>　もう一つの重要な課題としては、高齢化社会による認知症患者様の増加です。認知症の早期発見・早期治療についての要求は国民的なものとなっており、当院でも時代のニーズに合わせて、平成29年4月より「もの忘れ外来」を開設し、札幌医科大学との連携もさらに強化し、認知症診療に力を入れています。専門医による正確な診断をもとに、治療・ケア・介護のプランを立て、必要に応じて入院治療も積極的に受け入れていきます。入院中は患者様の尊厳に配慮し、安易に身体拘束(以下、拘束)をしない取り組みを行っております。2018年の国の調査では、一般病院などに入院した認知症を持つ人のうち、45％の人が拘束を受けていたことが明らかになっております。拘束は、患者様が自分や他人を傷つける恐れがある場合などに限って、精神保健指定医の判断で一時的に認められている行為と言われておりますが、歩行が不安定などの理由で安易に行われている実態が、国の調査で浮き彫りになったわけです。一方で、患者様本位のケアや小さな工夫の積み重ねで拘束を減らすことに成功した病院も出てきております。当院も職員一人一人の努力により、患者様のニーズに合わせてさまざまな工夫を凝らす取り組みを行っております。拘束をしないことで重大事故は減らすことが出来ると言われておりますが、拘束しなかった場合の小さなリスクについても御家族様にも認識して頂いたうえで、その人らしく生きるという理念を御理解いただければ幸いです。<br>　今後も、地域の皆様方の後押しを受けながら、地域の医療・介護・福祉との連携を一層進め、今までにも増して地域に密着した精神科医療に貢献していけるよう、職員一同気持ちも新たに邁進していく決意でおります。
                </p>
                <p class="greeting-name">中江病院 院長　小林　清樹</p>
            </div>
        </div>
    </div>
</section>
<section class="mission-section">
    <div class="container">
        <div class="abouts">
            <h2 class="h2-ttl">
                <span>使命・運営理念</span>
            </h2>
            <h3 class="overview-text h3-ttl">基本理念</h3>
            <div class="overview-block">
                <ol>
                    <li>患者様中心の医療を実践し、心のこもったケアをいたします。</li>
                    <li>安全と信頼の医療を提供し、地域医療の充実に努めます。</li>
                    <li>積極的に学び、知識と技術の向上に向けて努力いたします。</li>
                    <li>職員が夢とやりがいを持てる職場づくりをめざします。</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="overview-section bg-gray">
    <h2 class="h2-ttl">病院概要</h2>
</section>
<section class="traffic-section">
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
<section class="floor-section bg-gray">
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
