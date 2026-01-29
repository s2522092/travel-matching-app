<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
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
        h1 { font-size: 1.4rem; margin-top: 0; margin-bottom: 16px; }
        label { display:block; font-size:0.85rem; margin-bottom:4px; }
        input {
        width: 100%;
        padding: 8px 10px;
        margin-bottom: 12px;
        box-sizing: border-box;
        }
        button {
        width: 100%;
        padding: 8px;
        border:none;
        border-radius:4px;
        background:#007aff;
        color:#fff;
        cursor:pointer;
        }
        button:hover { background:#005ec2; }
        .link {
        margin-top: 12px;
        font-size: 0.85rem;
        text-align: center;
        }
        a { color:#007aff; text-decoration:none; }
    </style>
    </head>
    <body>
    <div class="container">
        <h1>ログイン</h1>
        <form id="login-form">
        <label>ユーザー名</label>
        <input type="text" name="username" required>
        <label>パスワード</label>
        <input type="password" name="password" required>
        <button type="submit">ログイン</button>
        </form>
        <div class="link">
        はじめての方は <a href="signup.php">新規登録</a>
        </div>
    </div>

    <script>
        const loginForm = document.getElementById('login-form');
        loginForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const fd = new FormData(loginForm);
        const username = fd.get('username');
        const password = fd.get('password');
        const saved = localStorage.getItem('demoUser');
        if (!saved) {
            alert('先に新規登録してください。');
            return;
        }
        const user = JSON.parse(saved);
        if (user.username === username && user.password === password) {
            localStorage.setItem('loggedInUser', username);
            window.location.href = 'matching.php';
        } else {
            alert('ユーザー名またはパスワードが違います。');
        }
        });
    </script>
</body>
</html>