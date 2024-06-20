![Karipaku Guard Top Image](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/topimage.png)

# サービスの URL

無料で使うことができます。  
[https://karipaku-guard.jp/](https://karipaku-guard.jp/)

## 開発への想い

こちらのアプリは、友人や家族、職場の方々から借りたアイテムを管理し、返済期限を把握するためのツールとなっております。  
思いついたきっかけは、他県に住んでいる兄妹に NintendoSwitch とソフトを貸したところ、そのまま返ってこなかったという出来事からでした。

私がこのアプリを作成するにあたってどうしても取り入れたかった要素は、"信頼度を視覚的な指標で表現する"ことでした。  
これにより、誰から借りた物を優先的に注意すべきかが一目で分かるようになっています。

## アプリケーションのイメージ

![アプリケーションのイメージ](https://github.com/shotasato0/Karipaku-Guard/assets/83856475/45591031-e237-466f-ad79-f77b068e7550)

## 機能一覧

### トップ画面 & 新規登録

| ![トップ画面](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_top.png) | ![新規登録](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_register.png) |
| :---: | :---: |
| シンプルで直感的なUIを心掛けました。 | 新規登録画面とメールでのパスワード認証による2段階認証を実装しました。 |

### ログイン画面 & 貸し主一覧表示画面

| ![ログイン画面](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_login.png) | ![貸し主一覧表示画面](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_list.png) |
| :---: | :---: |
| メールアドレスとパスワードでの認証機能を実装しました。 | 登録している貸し主名、借りた物、借りた日付、返却期限、返却期限が近づいていることを知らせる信頼度アイコンが表示されます。 |

### 新規追加画面 & 編集画面

| ![新規追加画面](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_new_addition.png) | ![編集画面](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_edit_registrant.png) |
| :---: | :---: |
| 新たな貸し主と、その借りた物、借りた日と返却期限を登録することができます。 | 貸し主名、借りた物、借りた日付、返却期限を編集できます。 |

### 貸し主情報の詳細画面 & 検索画面

| ![貸し主情報の詳細画面](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_lender_details.png) | ![検索画面](https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/public/images/app.view/view_search.png) |
| :---: | :---: |
| 貸し主の詳細な情報を見ることができます。初めは未登録になっていますが、編集ボタンから情報の編集や登録を行うことができます。 | 登録された貸し主名や借りた物に関連するキーワードを入力することで、該当する情報を簡単に検索し表示することが可能です。（日付では検索することができませんので、あらかじめご了承ください） |

## 使用技術

以下の技術を使用しています。

- **フロントエンド**: tailwindcss, JavaScript
- **バックエンド**: Laravel, PHP, Node.js
- **データベース**: MySQL
- **コンテナサービス**: Docker
- **依存関係管理ツール**: Composer
- **パッケージマネージャー**: npm, Homebrew
- **ビルドツール/ハンドラー**: Vite
- **インフラストラクチャー**: XSERVER
- **デザイン**: Figma, ChatGPT（イラスト生成）
- **その他**: GitHub, Git, Sourcetree

## ER 図

<img src="https://raw.githubusercontent.com/shotasato0/Karipaku-Guard/master/er-diagram.png" width="50%" height="auto">

