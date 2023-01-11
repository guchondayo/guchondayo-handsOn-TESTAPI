<?php
// 文字コード設定
//すべてのドメインからのリクエストを許可
header("Access-Control-Allow-Origin: *");

$api["status"] = "PHPで作ったWebAPIです。";

// 配列をjson形式にデコードして出力
print json_encode($api);

// 参考資料
// https://qiita.com/asami___t/items/f981b5281d4b2fa6f9bd