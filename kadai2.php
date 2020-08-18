<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>(課題番号2-2)ラッキーアイテム</title>
</head>

<body>
<h1>かわみつごうのホームページ</h1>


今日のラッキーアイテムはこちら！<br>
<?PHP

$array = array("穴が開いた靴下", "緑色のネクタイ", "小さい頃の写真","白いスニーカー","伊達メガネ","ストライプのシャツ","500mLのお茶");

$hoge = rand ( 0,6 ); 

echo $array[$hoge] . PHP_EOL;

?>


<h3>自己紹介</h3>
<p>初めまして川満豪といいます。</p>

<img src="okinawa.jpeg" width="30%" height="30%"><br>
<p>これは沖縄に行ったけど、五日間ずっと雨だったときの僕です。</p>

<h3>経歴</h3>

<table class="profile">
    <thead>
        <tr>
            <th>名前</th>
            <th>好きな食べ物</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <p>1998年</p>
            </td>
            <td>
                <p>千葉に生まれる</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>2014年</p>
            </td>
            <td>
                <p>小金高校入学</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>2018年</p>
            </td>
            <td>
                <p>東京理科大学入学</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>2020年</p>
            </td>
            <td>
                <p>AoKoMでインターンをはじめる</p>
            </td>
        </tr>
    </tbody>
</table>




</body>
</html>