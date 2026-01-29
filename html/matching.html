<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>旅先での「ちょうどいい過ごし方」を探す</title>
    <style>
        *{box-sizing:border-box;}body{font-family:-apple-system,BlinkMacSystemFont,"Helvetica Neue","Segoe UI",sans-serif;margin:0;background:#f5f5f7;color:#333;}
        .wrap{max-width:900px;margin:32px auto 40px;padding:0 16px;}
        .card{background:#fff;border-radius:12px;box-shadow:0 8px 24px rgba(15,23,42,.08);padding:24px 22px 26px;}
        h1{font-size:22px;margin:0 0 6px;}
        .lead{font-size:13px;color:#666;margin-bottom:18px;}
        fieldset{border:1px solid #e2e4ea;border-radius:10px;padding:14px 14px 10px;margin-bottom:14px;}
        legend{padding:0 6px;font-size:13px;font-weight:600;color:#374151;}
        label{font-size:13px;display:block;padding:4px 0;cursor:pointer;}
        input[type="radio"],input[type="checkbox"]{margin-right:6px;accent-color:#2563eb;}
        .note{font-size:11px;color:#888;margin-top:4px;}
        button{border:none;border-radius:999px;padding:9px 22px;background:linear-gradient(135deg,#2563eb,#4f46e5);color:#fff;font-size:13px;font-weight:600;cursor:pointer;box-shadow:0 6px 16px rgba(37,99,235,.35);transition:.15s transform,.15s box-shadow,.15s opacity;}
        button:hover{transform:translateY(-1px);box-shadow:0 10px 24px rgba(37,99,235,.45);}
        button:active{transform:translateY(0);box-shadow:0 4px 10px rgba(37,99,235,.3);opacity:.9;}
        #result{margin-top:20px;}
        .result-title{font-size:15px;font-weight:600;margin-bottom:10px;}
        .plan{background:#f9fafb;border-radius:10px;padding:12px 12px 10px;border:1px solid #e5e7eb;margin-bottom:10px;}
        .plan h3{margin:0 0 4px;font-size:14px;color:#111827;}
        .plan p{margin:0 0 6px;font-size:13px;}
        .links strong{font-size:12px;color:#4b5563;}
        .links ul{margin:4px 0 2px 18px;padding:0;}
        .links li{font-size:12px;margin-bottom:2px;}
        .links a{color:#2563eb;text-decoration:none;}
        .links a:hover{text-decoration:underline;}
        .badge{display:inline-block;font-size:10px;padding:2px 6px;border-radius:999px;background:#e0ecff;color:#1d4ed8;margin-bottom:4px;}
        .match-note{font-size:11px;color:#6b7280;margin-top:2px;}
        .empty{font-size:13px;color:#6b7280;padding:8px 10px;background:#fef2f2;border-radius:8px;border:1px solid #fecaca;}
    </style>
</head>
<body>
<div class="wrap">
    <div class="card">
        <h1>旅先での「ちょうどいい過ごし方」を探す</h1>
        <p class="lead">いまの気分に合わせて、観光地の合間に挟みやすい“寄り道セット”を提案します。</p>

        <form id="matchForm">
        <fieldset>
            <legend>1. あなたに近いもの</legend>
            <label><input type="radio" name="userType" value="高校生" required> 高校生</label>
            <label><input type="radio" name="userType" value="大学生"> 大学生</label>
            <label><input type="radio" name="userType" value="若手社会人"> 若手社会人</label>
            <label><input type="radio" name="userType" value="一人行動が多い人"> 一人旅・一人行動が多い</label>
            <label><input type="radio" name="userType" value="最近引っ越してきた人"> 旅先に長めに滞在している</label>
            <label><input type="radio" name="userType" value="地元に住んでいる人"> 何度も同じ街に来ている</label>
        </fieldset>

        <fieldset>
            <legend>2. いまの気分</legend>
            <label><input type="checkbox" name="mood" value="なんとなく帰りたくない"> なんとなく宿に帰りたくない</label>
            <label><input type="checkbox" name="mood" value="予定がなくて焦っている"> このあと何をするか決まっていなくて焦る</label>
            <label><input type="checkbox" name="mood" value="一人でいたいけど家は嫌"> 一人でいたいけど宿にこもるのは嫌</label>
            <label><input type="checkbox" name="mood" value="次の予定まで少し時間が空いた"> 次の予定まで少し時間が空いた</label>
            <label><input type="checkbox" name="mood" value="頭が疲れていて何も考えたくない"> 頭が疲れていて何も考えたくない</label>
            <label><input type="checkbox" name="mood" value="体は疲れているけど寝るには早い"> 体は疲れているけど寝るには早い</label>
            <label><input type="checkbox" name="mood" value="静かすぎるのも賑やかすぎるのも嫌"> 静かすぎるのも賑やかすぎるのも嫌</label>
            <label><input type="checkbox" name="mood" value="お金を使わずに気分転換したい"> お金をあまり使わずに気分転換したい</label>
            <label><input type="checkbox" name="mood" value="地元っぽい場所を知りたい"> 観光地じゃない“地元っぽい場所”を知りたい</label>
            <label><input type="checkbox" name="mood" value="今日は誰にも会いたくない"> 今日は誰にも会いたくない</label>
            <p class="note">選んだキーワードに近い“過ごし方セット”を表示します。</p>
        </fieldset>

        <button type="submit">この条件でさがす</button>
        </form>

        <div id="result"></div>
    </div>
</div>

<script>
    let plans = [];

    fetch('experiences.json')
        .then(res => res.json())
        .then(data => { plans = data.experiences || []; })
        .catch(() => { plans = []; });

    document.getElementById('matchForm').addEventListener('submit', function(e){
        e.preventDefault();
        const userType = this.userType.value;
        const selectedMoods = Array.from(
            this.querySelectorAll('input[name="mood"]:checked')
        ).map(i => i.value);
        const resultDiv = document.getElementById('result');

    if (!selectedMoods.length) {
        resultDiv.innerHTML = '<div class="empty">いまの気分を少なくとも1つ選んでください。</div>';
        return;
    }
    if (!plans.length) {
        resultDiv.innerHTML = '<div class="empty">プラン情報の読み込みに失敗しました。時間をおいて再度お試しください。</div>';
        return;
    }

    const candidates = plans.filter(p => p.userTypes.includes(userType));
    const scored = candidates
        .map(p => {
            const matched = p.moods.filter(m => selectedMoods.includes(m));
            return { plan: p, score: matched.length, matched };
        })
        .filter(o => o.score > 0)
        .sort((a, b) => b.score - a.score)
        .slice(0, 3);

    if (!scored.length) {
        resultDiv.innerHTML = '<div class="empty">ぴったりのプランは見つかりませんでした。気分の選び方を少し変えてみてください。</div>';
        return;
    }

    let html = '<div class="result-title">あなたに近そうなプラン</div>';
    scored.forEach(({plan, matched}) => {
        html += `
        <div class="plan">
            <div class="badge">${userType}</div>
            <h3>${plan.title}</h3>
            <p>${plan.description}</p>
            <div class="links">
            <strong>参考サイト：</strong>
            <ul>
                ${plan.links.map(l =>
                `<li><a href="${l.url}" target="_blank" rel="noopener noreferrer">${l.label}</a></li>`
                ).join('')}
            </ul>
            </div>
            <p class="match-note">反映された気分：${matched.join('／')}</p>
        </div>`;
    });
    resultDiv.innerHTML = html;
    });
</script>
</body>
</html>