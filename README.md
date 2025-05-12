[日本語](#日本語) | [English](#english)
# Play Board
<img width="1440" src="https://github.com/user-attachments/assets/d3f11d62-1288-4c8b-b796-a8955577ca88" />

#### ゲーム詳細画面
<div style="display: flex">
    <img width="400" height="400" src="https://github.com/user-attachments/assets/29d86f72-9995-41fb-9686-180201558b46" />
    <img width="400" height="400" src="https://github.com/user-attachments/assets/1871d9e7-9620-472d-b445-b9a82a891893" />
</div>

#### マッチング部屋画面
<div style="display: flex">
    <img width="400" hegiht="400" src="https://github.com/user-attachments/assets/f5936419-aa1c-4e8e-8c4e-3c4862dd35b8" />
    <img width="400" hegiht="400" src="https://github.com/user-attachments/assets/4a6e9ee6-fb5f-43ad-bb43-4a437b4b842a" />
</div>

### url
https://playboard-99fc83c9693d.herokuapp.com/

#### 日本語
## アプリ概要
　このアプリは、ボードゲーム初心者からボードゲームが好きな人まで幅広い人を対象に、自分に合ったボードゲームや新たなボードゲームを発見できるように作成しました。  
　開発のきっかけは、ボードゲームを探す際に情報が分散していてどのボードゲームが面白いのか判断に困ったという実体験です。Amazonや楽天のレビューにはボードゲーム自体の評価もありますが、配送やサービスに関するコメントも多く、必要な情報を見つけにくい状況でした。また、ボードゲームのおすすめサイトはあるものの、実際のプレイヤーたちの口コミをもとに判断したいと感じていました。  
　そこで、ユーザーのリアルな体験を集約し、ボードゲーム選びをスムーズにする口コミサイトを作成しました。このwebアプリには主に２つの機能があります。 
 
　1. **ボードゲーム一覧・評価の機能**  
 
　　ボードゲームの一覧を見ることができます。またカテゴリーで絞ってボードゲームを探したり、ボードゲームの口コミや評価を確認することができます。これにより、プレイヤーは他の人の経験を参考にしながら興味のあるゲームを選ぶことができます。  
  
　2. **マッチング部屋機能**  
 
　　ユーザーが部屋を作成し、他の参加者と一緒にどのボードゲームをプレイするか話し合うことができます。部屋内のチャット機能を活用して、日時やルールの調整を行い、スムーズにゲームを進められる場があります。

## 使用技術
- PHP 8.0.2
- Laravel 9.19
- Tailwind CSS 3.1.0
- MySQL

## 機能一覧
- 認証
  - ログイン / ログアウト
  - ユーザー登録 / 表示 (マイページ) / 更新 / 削除
  - ユーザーパスワード更新
  - パスワードリセット
- ボードゲーム 管理
  - ボードゲーム 作成 / 表示 / 更新 / 削除
  - カテゴリー 表示
  - コメント 作成 / 表示
  - 評価 作成 / 表示
  - ページネーション
- マッチング 管理
  - マッチング部屋 作成 / 表示
- 役割 管理者 / ユーザー


##### English
## App Overview
 This app is designed for a wide range of users, from board game beginners to avid enthusiasts, aiming to help them discover board games that suit their preferences or find new ones to explore. The app offers two main features:

1. **Board Game Listings and Reviews**:  
   Users can browse a comprehensive list of board games. They can filter games by category and check reviews and ratings provided by other users. This allows players to make informed choices by referencing the experiences of others.

2. **Matching Room Feature**:  
   Users can create rooms and discuss with participants which board games to play. The app also includes a chat feature within these rooms, enabling users to coordinate schedules and rules, fostering a smooth and enjoyable gaming experience.

### Background of Development  
When searching for new board games, I noticed the lack of accessible reviews and player feedback, making it difficult to judge if a game was genuinely fun. To address this issue, I created an environment where users can share their thoughts and ratings about board games. By enabling players to view detailed comments and evaluations from others, the app helps users find the games they’re most interested in playing.


## List of Technologies
- PHP 8.0.2
- Laravel 9.19
- Tailwind CSS 3.1.0
- MySQL

## Feature
- Authentication
  - Login / Logout
  - User Registration / Display (My Page) / Update / Delete
  - User Password Update
  - Password Reset  
- Board Game Management
  - Board Games Create / Display / Update / Delete
  - Categories Display
  - Comments Create / Display
  - Ratings Create / Display 
  - Pagination
- Matching Management
  - Matching Rooms Create / Display 
- Roles Administrator / User

