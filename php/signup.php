<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規登録</title>
    <style>
        body {
        font-family: system-ui, sans-serif;
        margin: 0;
        padding: 20px;
        background: #f5f5f5;
        }
        .container {
        max-width: 400px;
        margin: 40px auto;
        background: #fff;
        padding: 24px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        h1 { font-size:1.4rem; margin-top:0; margin-bottom:16px; }
        label { display:block; font-size:0.85rem; margin-bottom:4px; }
        input {
        width:100%;
        padding:8px 10px;
        margin-bottom:12px;
        box-sizing:border-box;
        }
        button {
        width:100%;
        padding:8px;
        border:none;
        border-radius:4px;
        background:#007aff;
        color:#fff;
        cursor:pointer;
        }
        button:hover { background:#005ec2; }
        .link {
        margin-top:12px;
        font-size:0.85rem;
        text-align:center;
        }
        a { color:#007aff; text-decoration:none; }
    </style>
    </head>
    <body>
    <div class="container">
        <h1>新規登録</h1>
        <form id="signup-form">
        <label>ユーザー名</label>
        <input type="text" name="username" required>
        <label>パスワード</label>
        <input type="password" name="password" required>
        <button type="submit">登録</button>
        </form>
        <div class="link">
        すでにアカウントをお持ちの方は <a href="login.html">ログイン</a>
        </div>
    </div>

    <script>
        const signupForm = document.getElementById('signup-form');
        signupForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const fd = new FormData(signupForm);
        const user = {
            username: fd.get('username'),
            password: fd.get('password')
        };
        localStorage.setItem('demoUser', JSON.stringify(user));
        alert('登録しました。ログインしてください。');
        window.location.href = 'login.php';
        });
    </script>
</body>
</html>