<!-- ループx条件分岐 -->
<?php

// $diceNum = mt_rand(1, 6);
$num = 0;
while ($sum <= 40) {
        $num++;        
        echo $num."回目=".$diceNum = mt_rand(1, 6).'<br>';
        $sum += $diceNum;
    }
    echo '<br>';
    echo "合計".$num."回でゴールしました"; 
?>



<!-- 関数x条件分岐 -->
<?php
echo '<br><br>';

date_default_timezone_set('Asia/Tokyo');
$Date = intval(date("H"));

if ($Date >= 4 && $Date <= 11) {
    echo "今".$Date."時台です";
    echo '<br>';
    echo "おはようございます";
}   elseif ($Date >= 12 && $Date <= 16) {
    echo "今".$Date."時台です";
    echo '<br>';
    echo "こんにちは";
}   else {
    echo "今".$Date."時台です";
    echo '<br>';
    echo "こんばんは";
}




?>