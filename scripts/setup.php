<?php
require_once 'db_connect.php';

try {
    // 1. テーブルを作る（spotsという名前の表を作る）
    $sql_create = "CREATE TABLE IF NOT EXISTS spots (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        score_nature INTEGER,
        score_activity INTEGER,
        score_relax INTEGER,
        description TEXT
    )";
    $pdo->exec($sql_create);

    // 2. データが空っぽなら、テストデータを入れる
    $count = $pdo->query("SELECT COUNT(*) FROM spots")->fetchColumn();
    
    if ($count == 0) {
        $sql_insert = "INSERT INTO spots (name, score_nature, score_activity, score_relax, description) VALUES
        ('静寂の森キャンプ場', 5, 4, 5, '大自然の中で焚き火を楽しめる'),
        ('原宿ショッピング', 1, 5, 1, '最新トレンドの発信地'),
        ('古都の寺院巡り', 4, 2, 5, '歴史を感じて心を整える'),
        ('南国のビーチリゾート', 5, 3, 5, '青い海と白い砂浜でリラックス'),
        ('秋葉原電気街', 1, 4, 1, 'サブカルチャーとテクノロジーの聖地')";
        
        $pdo->exec($sql_insert);
        echo "<h1>成功！</h1><p>データベースの準備が完了しました。</p>";
    } else {
        echo "<h1>OK!</h1><p>データベースは既に準備されています。</p>";
    }

} catch (PDOException $e) {
    echo "エラーが発生しました: " . $e->getMessage();
}
?>