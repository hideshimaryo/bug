<?php get_header(); ?>
    <main>
      <div class="page-contact_bg page-top-view">
        <p class="page-title">お問い合わせ</p>
      </div>
      <div class="Breadcrumb">
        TOPページ  >  お問い合わせ
      </div>

      <div class="page-cont section-padding">
        <ul>
        <li class="page-contact page-box page-contact_title">
          <h2 class="page-heading page-heading_contact">
            お問い合わせ
          </h2>
          <p>
            お問い合わせはこちらのフォームから受け付けております。
            </p>
            
            <div class="Form">
              <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お名前</p>
                <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required opacity"></span>電話番号</p>
                <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                <textarea class="Form-Item-Textarea"></textarea>
              </div>
              <p class="privacy-policy">
                <a href="/privacy-policy.html">「個人情報の取り扱いについて」</a>をご確認の上、確認ボタンを押してください。
              </p>
              <div class="agree">
                <input type="checkbox" id="agree" />
                <label for="agree">個人情報保護方針に同意する</label>
              </div>
              <input type="submit" class="Form-Btn submit-btn" id="submit-btn" disabled value="送信する">
            </div>
        </li>

      </ul>
      </div>
    </main>
    <?php get_footer(); ?>