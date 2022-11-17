<?php
$numbers = [4,23,7,77,8];

// 要素の数を数える
echo count($numbers);

// 要素の並べ替え
echo '<br>';
sort($numbers);
var_dump($numbers);

// 配列に中にある要素が存在しているか
echo '<br>';
in_array(9, $numbers);
var_dump(in_array(9,$numbers));

echo '<br>';

if (in_array(74, $numbers)) {
    echo "該当ナンバーが存在します。";
}   else {
    echo "該当ナンバーはありません。";
}

// 配列を結合して文字列に変換
echo '<br>';

var_dump(implode("・", $numbers));
$implode = implode("・", $numbers);
var_dump($implode);

// 文字列を指定の区切りで区切りで配列にする

$numbers2 = "300/33/33/2//1/3/24/4/2//4";
echo '<br>';
explode("/",$numbers2);
var_dump(explode("/",$numbers2));


?>