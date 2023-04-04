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
<section class="page-anchor pt80 pb100 pt60-sp pb60-sp">
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
<section class="daycare-section bg-gray" id="daycare">
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
        
    </div>
</section>
<?php
get_footer();