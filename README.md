# advance-test
お問い合わせフォーム。入力画面があり、入力後確認画面にとび送信できる。
![image](https://github.com/Hanako-Kawai/advance-test/assets/126745761/48742efa-60ea-40f9-8482-140249ecbf4c)

#作成した目的
お客様が問い合わせできるようにするため。

#アプリケーションURL

#機能一覧
・お問い合わせフォーム入力機能
・入力エラーメッセージ機能
・確認画面での修正機能
・サンクスページ

＃使用技術
Laravel Framework 8.83.27

#コメント
全然最後まで終わらせられませんでした。。
一番困った部分、いろいろ試したけど解決出来ていない部分が２点あります。

１点目：名前の欄の入力テキストボックスは姓と名で２つに分かれているけど、データは１つのデータ「fullname」として保存する必要がある。Javascriptなども使用してconfirmからstoreにデータを渡すときに、first-nameとlast-nameを１つのfullnameデータとして渡す記述をしたが、なぜかlast-nameしか保存されてません。

２点目：「confirm.blade.php」のform methodは正しくPOSTになっているのに、GETメソッドを送っているから次のStore処理が出来ません。とエラーが出ます。実際のエラーメッセージ→The GET method is not supported for this route. Supported methods: POST.
