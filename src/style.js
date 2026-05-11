function checkForm() {

    // 入力値を取得
    const name = document.getElementById("name").value;
    const companyName = document.getElementById("companyName").value;
    const email = document.getElementById("email").value;
    const age = document.getElementById("age").value;
    const message = document.getElementById("message").value;

    // 未入力チェック
    if (
        name === "" ||
        companyName === "" ||
        email === "" ||
        age === "" ||
        message === ""
    ) {

        // エラーメッセージ
        alert("必須項目が未入力です。入力内容をご確認ください。");

        // 送信キャンセル
        return false;
    }

    // 確認メッセージ
    const result = confirm(
        "下記の内容を本当に送信しますか？\n\n" +
        "お名前 ➡ " + name + "\n" +
        "会社名 ➡ " + companyName + "\n" +
        "メールアドレス ➡ " + email + "\n" +
        "年齢 ➡ " + age + "\n" +
        "お問い合わせ内容 ➡ " + message
    );

    // OKなら送信
    return result;
}


// ボタン取得
const button = document.querySelector("#colorBtn");

// footer取得
const footer = document.querySelector("#footer");

// 色配列
const colors = ["blue", "red", "yellow", "gray"];

// 現在番号
let currentIndex = 0;

// クリックイベント
button.addEventListener("click", function () {

    // 背景色変更
    footer.style.backgroundColor = colors[currentIndex];

    // 次の色へ
    currentIndex++;

    // 最後まで行ったら戻る
    if (currentIndex >= colors.length) {
        currentIndex = 0;
    }

});