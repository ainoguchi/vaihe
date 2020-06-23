<?php
/*
Template Name: GALLERY
*/
?>

<?php get_header();?>

<main>
    <div class="hero_s bg_gallery mb-15">
        <div class="hero_s_text">
            <h1 class="hero_text">Gallery</h1>
            <p class="hero_text_ja">撮影・制作物一覧</p>
        </div>
    </div>

    <div class="contents" id="photo">
        <div class="container">
            <div class="col-md-12 effect-fade">
                <h2 class="headline_el">撮影写真一覧</h2>
                <p class="headline_el_en">photographing</p>
                <dl class="headline_text">
                    <dd>ミラーレス一眼で撮影しました。Webサイトの画像素材として使用する際には、Photoshopで画像を補正やトリミング等を行います。</dd>
                </dl>
            </div>
        </div>
        <div class="contents_el col-md-12 effect-fade">
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_01.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_01.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">01</span></h3>
            </div>
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_02.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_02.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">02</span></h3>
            </div>
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_03.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_03.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">03</span></h3>
            </div>
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_04.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_04.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">04</span></h3>
            </div>
        </div>
        <div class="contents_el col-md-12 effect-fade">
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_05.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_05.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">05</span></h3>
            </div>
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_06.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_06.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">06</span></h3>
            </div>
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_07.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_07.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">07</span></h3>
            </div>
            <div class="col-md-3 float-md-left">
                <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_08.jpg" data-lity="data-lity">
                    <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/photo_08.jpg" alt="" class="contents_el_boxB">
                </a>
                <h3 class="headline_el_p">Photo <span class="headline_red">08</span></h3>
            </div>
        </div>
    </div>

    <div class="contents contents_gray mb-0" id="video">
        <div class="container">
            <div class="col-md-12 effect-fade">
                <h2 class="headline_el">制作動画一覧</h2>
                <p class="headline_el_en">Video production</p>
                <dl class="headline_text">
                    <dd>動画の素材は、写真と同様にミラーレス一眼で撮影しています。動画編集ソフトで色彩補正やエフェクト等を加えています。</dd>
                </dl>
            </div>
            <div class="contents_el effect-fade">
                <div class="col-md-6 float-md-left mr-auto ml-auto">
                    <a href="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/view_pc.mp4" data-lity="data-lity">
                        <img src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/img/making.jpg" alt="" class="contents_el_boxB">
                    </a>
                    <h3 class="headline_el_p">Movie <span class="headline_red">01</span></h3>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer();?>