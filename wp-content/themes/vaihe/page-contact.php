<?php
/*
Template Name: CONTACT
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
                <h2 class="intro_headline">Cont<span class="headline_red">a</span>ct form</h2>
                <p class="intro_headline_ja">お問い合わせフォーム</p>
                <dl class="headline_text">
                    <dd>お問い合わせはこちらからお願い致します。</dd>
                    <dd>通常１週間以内に、ご入力いただいたメールアドレス宛てに返信いたします。</dd>
                    <dd class="text_red">※「@vaihe.jp」からのメールが迷惑メールに振り分けられないように、メールの受信設定をお願いいたします。</dd>
                </dl>
            </div>
            <div class="col-md-12 effect-fade">
                <form action="<?php echo get_template_directory_uri(); ?>/php/mailform.php" method="post" id="mail_form">
                    <dl>
                        <dt>お名前<span>Your Name</span></dt>
                        <dd class="required"><input type="text" id="name_1" name="name_1" value="" placeholder="姓" /> <input type="text" id="name_2" name="name_2" value="" placeholder="名"  /></dd>
                        
                        <dt>ふりがな<span>Name Reading</span></dt>
                        <dd class="required"><input type="text" id="read_1" name="read_1" value="" placeholder="姓(せい)" /> <input type="text" id="read_2" name="read_2" value="" placeholder="名(めい)" /></dd>
                        
                        <dt>性別<span>Gender</span></dt>
                        <dd class="required">
                            <ul>
                                <li><label><input type="radio" class="gender" name="gender" value="男性" />男性</label></li>
                                <li><label><input type="radio" class="gender" name="gender" value="女性" />女性</label></li>
                            </ul>
                        </dd>

                        <dt>メールアドレス<span>Mail Address</span></dt>
                        <dd class="required"><input type="email" id="mail_address" name="mail_address" value="" /></dd>
                        
                        <dt>メールアドレス(確認用)<span>Mail Address Confirm</span></dt>
                        <dd class="required"><input type="email" id="mail_address_confirm" name="mail_address_confirm" value="" /></dd>

                        <dt>電話番号<span>Phone Number</span></dt>
                        <dd><input type="tel" id="phone" name="phone" value="" /></dd>

                        <dt>会社名<span>Company Name</span></dt>
                        <dd><input type="text" id="company" name="company" value="" /></dd>
                        
                        <dt>郵便番号<span>Postal</span></dt>
                        <dd><input type="text" id="postal" name="postal" value="" onkeyup="AjaxZip3.zip2addr( this,'','address','address' );" />　<a href="http://www.post.japanpost.jp/zipcode/" target="_blank">郵便番号検索</a></dd>
                        
                        <dt>住所<span>Address</span></dt>
                        <dd><input type="text" id="address" name="address" value="" /></dd>
                        
                        <dt>お問い合わせの種類<span>Inquiry Kind</span></dt>
                        <dd class="required">
                            <ul>
                                <li><label><input type="checkbox" class="kind" name="kind[]" value="サイト制作のご依頼" />サイト制作のご依頼</label></li>
                                <li><label><input type="checkbox" class="kind" name="kind[]" value="商品撮影のご依頼" />商品撮影のご依頼</label></li>
                                <li><label><input type="checkbox" class="kind" name="kind[]" value="動画制作について" />動画制作について</label></li>
                                <li><label><input type="checkbox" class="kind" name="kind[]" value="ご意見・ご要望" />ご意見・ご要望</label></li>
                                <li><label><input type="checkbox" class="kind" name="kind[]" value="交際希望" />その他</label></li>
                            </ul>
                        </dd>
                        
                        <dt>お問い合わせの内容<span>Contents</span></dt>
                        <dd class="required"><textarea id="contents" name="contents" cols="40" rows="5" placeholder="お問い合わせ内容を入力してください。"></textarea></dd>

                        <dt>本サイトを知ったきっかけを教えてください。<span>Product</span></dt>
                        <dd>
                            <select id="product" name="product">
                                <option value="">--選択してください--</option>
                                <option value="GoogleやYahoo!などの検索結果から">GoogleやYahoo!などの検索結果から</option>
                                <option value="Instagramでサイトを知った">Instagramでサイトを知った</option>
                                <option value="知人からの紹介">知人からの紹介</option>
                                <option value="その他">その他</option>
                            </select>
                        </dd>

                    </dl>
                    
                    <p id="form_submit"><input type="button" id="form_submit_button" value="送信する" /></p>
                </form>

            </div>
        </div>
    </div>
</main>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/mailform-js.php"></script>


<!-- フリガナ自動入力 -->
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

<!-- 住所自動入力 -->
<script src="<?php echo esc_url( get_home_url() ); ?>/wp-content/themes/vaihe/js/ajaxzip3.js"></script>


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer();?>