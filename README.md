# WordPress開発のスターターテンプレート

## 使用技術

- [Vite](https://ja.vitejs.dev/)
- SCSS
- ECMAScript2018(ES9)
- [Local](https://localwp.com/)

## 環境

Nodeのバージョンは16.0.0以上が必要です。

## 依存関係のインストール

`npm install`コマンドを実行する。

## 環境構築手順

### Localのプロジェクト作成〜開発サーバー起動

1. [Local](https://localwp.com/)でプロジェクトを作成し、サーバーを立ち上げます。(Localの使用方法は[こちら](https://komaricote.com/wordpress/wp-local-environment/))
2. 作成したプロジェクトの`/wp-content/themes/`配下に本ファイル一式をコピーします。（WordPress側のテーマアップロードでも可能。）
3. `npm run dev`コマンドを実行します。

### ディレクトリ構造

フォーマッターはPrettierを導入済み。
ESLintやStylelintなどのLinter、画像圧縮のプラグイン等は入っていないので必要に応じて適宜インストールする。

```
project-name
├── README.md
├── assets
│   ├── images
│   ├── scripts
│   └── styles
├── footer.php
├── functions.php
├── header.php
├── index.php
├── main.js
├── main.scss
├── package-lock.json
├── package.json
├── postcss.config.js
├── screenshot.png
├── style.css
└── vite.config.js
```

### SCSSの利用

CSSファイルでパスを指定するときは次の様に変数を用いる必要があります。
`$base-dir`は`vite.config.js`内で定義しています。

例：

```
background: url( $base-dir + 'assets/images/dummy.jpg' );
```

開発時のパス
`$base-dir: '/'`

本番環境のパス
`$base-dir: '/dist/'`

## 設定

### 開発モードの変更

functions.phpにて以下のように設定します。

- 開発モードオン：`define( "IS_VITE_DEVELOPMENT", true );`
- 開発モードオフ：`define( "IS_VITE_DEVELOPMENT", false );`

開発モードでは、`main.js`がSCSSファイルを読み込みます。

開発モードがオフの場合、distディレクトリ内のmain.cssが読み込まれます。SCSSファイルは使用されません。

## ビルド（サーバーへデプロイするコードを生成）

`npm run build`

- `npm run build`コマンドを実行します。
- `dist/`のファイルをサーバーへデプロイします。

## コーディング時の注意点
