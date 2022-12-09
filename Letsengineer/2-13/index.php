<?php
// 切り上げ

$num = 80.2;
echo ceil($num);

// <!-- 切り捨て -->
echo '<br>';
echo floor($num);

// <!-- 四捨五入 -->
echo '<br>';
echo round($num);

// <!-- 円周率 直径 -->
echo '<br>';
function circleAround($R){
    return $R*pi();
}
echo circleAround(5);

// <!-- 乱数 -->
echo '<br>';
echo mt_rand(1,50);

// <!-- 文字列の長さ -->
echo '<br>';

$string = "文字列";
echo strlen($string)."→".mb_strlen($string);

// <!-- 検索 -->
echo '<br>';
$string2 = "文字列２";
echo strpos($string2, "列");
echo '<br>';
echo mb_strpos($string2, "列"); 
    
// <!-- 文字列の切り取り -->
echo '<br>';
echo substr($string, 1, 1);
echo '<br>';
echo mb_substr($string, 1, 2);

// <!-- 置換 -->
echo '<br>';
echo str_replace("文", "列", $string);

// <!-- フォーマット化した文字列を出力 -->
echo '<br>';
$name = "太郎";
$years = 22;
printf("%sの年齢は%d歳です。", $name, $years);


// <!-- 変数に代入できるprintf -->
echo '<br>';
echo sprintf("%sの年齢は%d歳です。", $name, $years);
echo '<br>';
$introduce = sprintf("%sの年齢は%d歳です。", $name, $years);
echo $introduce;
?>