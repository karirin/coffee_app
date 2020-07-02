# COFFEE APP
自分のお気に入りのカフェを他のユーザーと共有することができるアプリになっております。<br>
名前や住所はもちろんwifi、クレジットカードが使えるかなど詳細な情報まで知ることができます。

![user-image](https://user-images.githubusercontent.com/60878547/86348787-1ff00d80-bc9b-11ea-9492-b677e003b565.png)
![login-page](https://user-images.githubusercontent.com/60878547/86348949-604f8b80-bc9b-11ea-8620-0691351375c2.png)
## 制作背景
私がカフェで作業することが多く、<br>
実際に足を運ばなくてもカフェの情報がわかるものがあると便利に感じたため制作しました。

## URL
https://www.coffeeapp.work/

## 使用技術

- フロント
  - HTML
  - CSS
  - jQuery
  - bootstrap3

- バックエンド
  - Ruby 2.5.1
  - Ruby on Rails 5.1.6

- サーバー
  - Nginx 1.12.2

- DB
  - MySQL 5.7

- インフラ・開発環境等
  - AWS(ACM,EC2/ALB,ECR/ECS,RDS,Route53,VPC,S3)
  - Docker/docker-compose
  - CircleCI

- その他
  - Google API
  - Rubocop
  - RSpec

## 機能一覧
- ユーザー機能
  - ログイン&ログアウト機能(テストログイン機能有り)
  - ユーザー一覧機能、ユーザー登録（パスワード機能有り）、ユーザー削除機能
  - ユーザーマイページ機能
    - 投稿した、いいねした、フォロワーの投稿の表示機能
    - プロフィール表示機能
  - フォロー・フォロワー機能

- 投稿機能
  - 投稿確認機能、投稿詳細機能、投稿編集機能、投稿削除機能、投稿一覧機能
  - 画像投稿機能（CarrierWaveを使用）
  - 検索機能（Ransackを使用）
  - いいね機能（Ajax）

- Google map api
  - Google mapに全ての投稿を表示
  - 投稿詳細画面にGoogle mapを表示
  
- ページネーション機能（will_paginateを使用）

## クラウドアーキテクチャー
![cloud-map](https://user-images.githubusercontent.com/60878547/85970698-33cf1180-ba06-11ea-8937-bcd470e03ecd.png)
