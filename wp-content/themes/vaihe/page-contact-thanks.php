<?php
/*
Template Name: CONTACT-THANKS
*/
?>

<?php get_header();?>

<main>
    <div class="hero_s bg_contact">
        <div class="hero_s_text">
            <h1 class="hero_text">Contact</h1>
            <p class="hero_text_ja">お問い合わせ</p>
        </div>
    </div>

    <div class="contents bg-form">
        <div class="container">
            <div class="col-md-12 effect-fade">
                <h2 class="intro_el">C<span class="headline_red">o</span>ntact form</h2>
                <p class="intro_el_ja">お問い合わせフォーム</p>
            </div>
            <div class="thanks effect-fade">
                <h2>お問い合わせありがとうございました。</h2>
                <p>※通常１週間以内に、ご入力いただいたメールアドレス宛てに返信いたします。</p>
            </div>
            <a href="<?php echo esc_url( get_home_url() ); ?>" class="btn_home">TOPページに戻る</a>
        </div>
    </div>
</main>


<script src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/mailform-js.php"></script>


<!-- フリガナ自動入力ライブラリここから -->
<script src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/jquery.autoKana.js"></script>
<script>
	(function( $ ) {
		$.fn.autoKana( '#name_1', '#read_1', {
			katakana: false
		});
		$.fn.autoKana( '#name_2', '#read_2', {
			katakana: false
		});
	})( jQuery );
</script>
<!-- フリガナ自動入力ライブラリここまで -->


<!-- 住所自動入力ライブラリここから -->
<script src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/ajaxzip3.js"></script>
<!-- 住所自動入力ライブラリここまで -->




<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer();?>