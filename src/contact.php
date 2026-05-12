<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム-入力画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <header>
        <h1>お問い合わせフォーム-入力画面</h1>
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
            <form action="confirm.php" method="post" onsubmit="return checkForm()">
                <table>
                    <tr>
                        <td>お名前</td>
                        <td>
                            <input type="text" name="name" id="name">
                        </td>
                    </tr>
                    <tr>
                        <td>会社名</td>
                        <td>
                            <input type="text" name="company" id="companyName">
                        </td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>
                            <input type="text" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>年齢</td>
                        <td>
                            <input type="text" name="age" id="age"> 
                        </td>
                    </tr>
                    <tr>
                        <td>お問い合わせ内容</td>
                        <td>
                            <textarea name="message" id="message"></textarea>
                        </td>
                    </tr>
                </table>
                <div class="btn-area">
                    <input type="submit" value="送信">
                    <input type="button" value="戻る" onclick="history.back()">
                </div>
            </form>
        </main>
    </div>
    <footer id="footer">
        <button id="colorBtn">押してみてね！</button>
    </footer>
</div>
    <script src="style.js"></script>
</body>
</html>