<?php

// POSTで受け取る
$name = $_POST["name"] ?? "";
$company = $_POST["company"] ?? "";
$email = $_POST["email"] ?? "";
$age = $_POST["age"] ?? "";
$message = $_POST["message"] ?? "";

// エラー配列
$errors = [];

// 未入力チェック
if ($name === "") {
    $errors[] = "お名前が未入力です";
}

if ($company === "") {
    $errors[] = "会社名が未入力です";
}

if ($email === "") {
    $errors[] = "メールアドレスが未入力です";
}

if ($age === "") {
    $errors[] = "年齢が未入力です";
}

if ($message === "") {
    $errors[] = "お問い合わせ内容が未入力です";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム-確認画面</title>
    <style>
        table {
            border: 3px solid black; /* c */
            border-collapse: collapse;
        }
        td {
            border: 3px solid black;
            padding: 5px;
        }
        body{
            margin:0;
            background:#f5f5f5;
        }

        /* 全体 */
        .wrapper{
            width:900px;
            margin:30px auto;
        }

        /* ヘッダー */
        header{
            background:pink;
            text-align:center;
            padding:20px;
        }

        /* 中身 */
        .container{
            display:flex;
        }

        /* 左メニュー */
        nav{
            width:250px;
            background:#7fffd4;
            padding:20px;
        }

        /* 右側 */
        main{
            flex:1;
            background:#f5e6c8;
            padding:40px;
        }

        td{
            border:2px solid black;
            padding:10px;
        }

        input[type="text"]{
            width:250px;
        }

        textarea{
            width:250px;
            height:100px;
        }

        /* ボタン */
        .btn-area{
            text-align:center;
            margin-top:20px;
        }

        footer{
            height:80px;
            background:#ddd;
        }

        .btn {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: 20px;
        }

        .btn input,
        .btn button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <h2>お問い合わせフォーム - 確認画面</h2>
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
                <?php if (!empty($errors)): ?>
                        <ul style="color:red;">
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <button onclick="history.back()">戻る</button>
                <?php else: ?>
            <table>
                <tr>
                    <td>お名前</td>
                    <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td>会社名</td>
                    <td><?php echo htmlspecialchars($company, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <tr>
                    <td>お問い合わせ内容</td>
                    <td><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            </table>
            <form action="send.php" method="post">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="company" value="<?php echo htmlspecialchars($company, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="btn">
                    <input type="submit" value="送信">
                    <input type="button" value="戻る" onclick="history.back()">
                </div>
            </form>
        <?php endif; ?>
            </main>    
        </div>
    </div>
</body>
</html>