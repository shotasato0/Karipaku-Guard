![画像１](/Users/satoushouta/Documents/Karipaku-Guard/public/images/topimage.png)

# サービスの URL

無料で使うことができます。  
[https://karipaku-guard.jp/](https://karipaku-guard.jp/)

## なぜ開発したか

こちらのアプリは、友人や家族、職場の方々から借りたアイテムを管理し、返済期限を把握するためのツールとなっております。  
思いついたきっかけは、他県に住んでいる兄妹に NintendoSwitch とソフトを貸したところ、そのまま返ってこなかったという出来事からでした。

私がこのアプリを作成するにあたってどうしても取り入れたかった要素は、"信頼度を視覚的な指標で表現する"ことでした。  
これにより、誰から借りた物を優先的に注意すべきかが一目で分かるようになっています。

初めての本格的な個人開発として、シンプルで直感的な UI に重点を置いて作成しました。

## アプリケーションのイメージ

## 機能一覧

<style>
  .centered-table th {
    text-align: center;
  }
</style>

<table class="centered-table" style="width: 100%;">

<thead>
<tr>
  <th align="center">トップ画面</th>
  <th align="center">新規登録</th>
</tr>
</thead>
<tbody>
<tr>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_top.png" width="200"></td>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_register.png" width="200"></td>
</tr>
<tr>
  <td>シンプルで直感的なUIを心掛けました。</td>
  <td>新規登録画面とメールでのパスワード認証による2段階認証を実装しました。</td>
</tr>
</tbody>

<thead>
<tr>
  <th align="center">ログイン画面</th>
  <th align="center">貸し主一覧表示画面</th>
</tr>
</thead>
<tbody>
<tr>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_login.png" width="200"></td>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_list.png" width="200"></td>
</tr>
<tr>
  <td>メールアドレスとパスワードでの認証機能を実装しました。</td>
  <td>登録している貸し主名、借りた物、借りた日付、返却期限、返却期限が近づいていることを知らせる信頼度アイコンが表示されます。</td>
</tr>
</tbody>

<thead>
<tr>
  <th align="center">新規追加画面</th>
  <th align="center">編集画面</th>
</tr>
</thead>
<tbody>
<tr>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_new_addition.png" width="200"></td>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_edit_registrant.png" width="200"></td>
</tr>
<tr>
  <td>新たな貸し主と、その借りた物、借りた日と返却期限を登録することができます。</td>
  <td>貸し主名、借りた物、借りた日付、返却期限を編集できます。</td>
</tr>
</tbody>

<thead>
<tr>
  <th align="center">貸し主情報の詳細画面</th>
  <th align="center">検索画面</th>
</tr>
</thead>
<tbody>
<tr>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_lender_details.png" width="200"></td>
  <td align="center"><img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_search.png" width="200"></td>
</tr>
<tr>
  <td>貸し主の詳細な情報を見ることができます。初めは未登録になっていますが、編集ボタンから情報の編集や登録を行うことができます。</td>
  <td>登録された貸し主名や借りた物に関連するキーワードを入力することで、該当する情報を簡単に検索し表示することが可能です。（日付では検索することができませんので、あらかじめご了承ください）</td>
</tr>
</tbody>

</table>

## 使用技術

以下の技術を使用しています。
<table style="width: 100%;">
<thead>
<tr>
  <th style="width: 20%;">カテゴリー</th>
  <th style="width: 80%;">テクノロジースタック</th>
</tr>
</thead>
<tbody>
<tr>
  <td>フロントエンド</td>
  <td>tailwindcss, JavaScript</td>
</tr>
<tr>
  <td>バックエンド</td>
  <td>Laravel, PHP, Node.js</td>
</tr>
<tr>
  <td>データベース</td>
  <td>MySQL</td>
</tr>
<tr>
  <td>コンテナサービス</td>
  <td>Docker</td>
</tr>
<tr>
  <td>依存関係管理ツール</td>
  <td>Composer</td>
</tr>
<tr>
  <td>パッケージマネージャー</td>
  <td>npm, Homebrew</td>
</tr>
<tr>
  <td>ビルドツール/ハンドラー</td>
  <td>Vite</td>
</tr>
<tr>
  <td>インフラストラクチャー</td>
  <td>XSERVER</td>
</tr>
<tr>
  <td>デザイン</td>
  <td>Figma, ChatGPT（イラスト生成）</td>
</tr>
<tr>
  <td>その他</td>
  <td>GitHub, Git, Sourcetree</td>
</tr>
</tbody>
</table>

## ER図
![画像 2 ](/Users/satoushouta/Documents/Karipaku-Guard/er-diagram.png)