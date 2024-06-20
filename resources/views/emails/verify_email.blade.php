@component('mail::message')
# ご登録ありがとうございます

この度はご登録いただき、ありがとうございます。<br>
ログインするには、以下のボタンをクリックしてください。

@component('mail::button', ['url' => $verify_url])
ログインする
@endcomponent

※こちらのメールは送信専用のメールアドレスより送信しております。恐れ入りますが、直接ご返信しないようお願いいたします。

{{ config('app.name') }}
@endcomponent