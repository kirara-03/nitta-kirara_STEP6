<?php
// POSTじゃない場合は contact.php に戻す
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

// データ受け取り
$name = $_POST["name"] ?? "";
$company = $_POST["company"] ?? "";
$email = $_POST["email"] ?? "";
$age = $_POST["age"] ?? "";
$message = $_POST["message"] ?? "";

// メール本文
$body  = "お問い合わせがありました。\n\n";
$body .= "名前 : " . $name . "\n";
$body .= "会社名 : " . $company . "\n";
$body .= "メールアドレス : " . $email . "\n";
$body .= "年齢 : " . $age . "\n";
$body .= "お問い合わせ内容 : " . $message . "\n";

// メール送信
$result = true;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 送信完了画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <header>
        <h1>お問い合わせフォーム - 送信完了画面</h1>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">トップページ</a></li>
                <li><a href="#">人気投稿</a></li>
                <li><a href="#">エンジニアおすすめ商品</a></li>
                <li><a href="#">エンジニアおすすめ記事</a></li>
                <li><a href="#">投稿ページ</a></li>
            </ul>
        </nav>
        <main>
            <?php if ($result): ?>
                <p class="message success">
                    お問い合わせが送信されました。ありがとうございます！
                </p>
            <?php else: ?>
                <p class="message error">
                    メール送信に失敗しました。
                </p>
            <?php endif; ?>
            <a href="contact.php">お問い合わせフォームに戻る</a>
        </main>
    </div>
    <footer></footer>
</div>
</body>
</html>
