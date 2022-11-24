<link rel="stylesheet" href="CSS/answer.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name2 = $_POST['hidden_name'];
$portNum2 = $_POST['portNum'];
$webLang2 = $_POST['webLang'];
$mysqlCmd2 = $_POST['mysqlCmd'];

$pn_T = $_POST['pn_T'];
$wl_T = $_POST['wl_T'];
$mc_T = $_POST['mc_T'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function getAnswer ($portNum2, $pn_T) {
    if ($portNum2 == $pn_T) {
        echo "正解！" ;
    } else {
        echo "残念！";
    }
}

?>

<div class="back">
    <div class="name color">
    <p><?php echo $name2;?>さんの結果は・・・？</p>
    <br>
    </div>

    <p class="color">①の答え</p>
    <br>
    <!--作成した関数を呼び出して結果を表示-->
    <div class="reaction color">
        <?php
        getAnswer ($portNum2,$pn_T); 
        ?>
    </div>
    <br>
    <p class="color">②の答え</p>
    <br>
    <!--作成した関数を呼び出して結果を表示-->
    <div class="reaction color">
        <?php
        getAnswer ($webLang2, $wl_T); 
        ?>
    </div>
    <br>
    
    <p class="color">③の答え</p>
    <br>
    <!--作成した関数を呼び出して結果を表示-->
    <div class="reaction color">
        <?php
        getAnswer ($mysqlCmd2, $mc_T); 
        ?>
    </div>
    <br>
</div>

