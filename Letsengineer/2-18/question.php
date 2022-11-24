<link rel="stylesheet" href="CSS/question.css">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$portNum = [80, 22, 20, 21];
$webLang = ["PHP", "Python", "JAVA", "HTML"];
$mysqlCmd = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$pn_T = $portNum[0];
$wl_T = $webLang[3];
$mc_T = $mysqlCmd[1];
?>

<div class="back">
    <div class="otu">
        <p class="color">お疲れ様です<?php echo $name;?>さん</p>
    </div>
    <br>
    <!--フォームの作成 通信はPOST通信で-->
    <div class="question">
        <form action="answer.php" method="post">
        <h2 class="color">①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="selection color">
            <?php 
            foreach ($portNum as $value) { ?>
                    <input type="radio" name="portNum" value="<?php echo $value;?>">
            <?php    echo $value;
            }?>
        </div>
        <h2 class="color">②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="selection color">
            <?php 
            foreach ($webLang as $value) { ?>
                    <input type="radio" name="webLang" value="<?php echo $value;?>">
            <?php    echo $value;
            }?>
        </div>
        <h2 class="color">③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="selection color">
            <?php 
            foreach ($mysqlCmd as $value) { ?>
                    <input type="radio" name="mysqlCmd" value="<?php echo $value;?>">
            <?php    echo $value;
            }?>
        </div>
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <br>
        <input type="hidden" name="hidden_name" value="<?php echo $name;?>" >
        <input type="hidden" name="pn_T" value="<?php echo $pn_T;?>">
        <input type="hidden" name="wl_T" value="<?php echo $wl_T;?>">
        <input type="hidden" name="mc_T" value="<?php echo $mc_T;?>">
        <div class="form2">
            <input type="submit" value="回答する">
        </div>
        </form>
    </div>    
</div>