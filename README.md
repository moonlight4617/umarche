## インストール後の実施事項

画像のダミーデータは public/imagesフォルダ内に 
sample1.jpg 〜 sample6.jpg として 
保存しています。

php artisan storage:link で 
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に 
保存すると表示されます。 
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は、 
storage/app/public/shopsフォルダを作成し 
画像を保存してください。

