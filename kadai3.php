<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>(課題番号2-3)九九一覧表</title>
</head>

<body>
<?PHP
echo "<table border=1>";
echo "<tr><td>　</td>";
for($j = 1; $j < 10 ; $j++){
    echo "<td width=20><b>$j</b> </td>";
}
echo "</tr>";

for($i = 1; $i < 10; $i++){
    echo "<tr><td><b>$i</b></td>";
   for($j = 1; $j < 10; $j++){
        $result = $i * $j;
        echo "<td>$result</td>";
   }
   echo "</tr>";
}
echo "</table>";
?>
</body>
</html>