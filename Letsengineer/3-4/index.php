<?php
require_once("pdo.php");
require_once("getData.php");


function getUserName () {
    $get = new getData();
    $getUserData = $get->getUserData();
    return  "ようこそ　".$getUserData["last_name"].$getUserData["first_name"]."　さん";
}

function getUserLoginTime () {
    $get = new getData();
    $getUserData = $get->getUserData();
    return "最終ログイン日時：".$getUserData["last_login"];
}

// function getUserPostData () {
    $get = new getData();
    $getPostData = $get->getPostData();
    // return ;
    
    // if ($getPostData["category_no"] === 1) {
    //     echo "食事";
    // }   else if ($getPostData["category_no"] === 2) {
    //     echo "旅行";
    // }   else {
    //     echo "その他";
    // }
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="header">
        <img class="img" src="1599315827_logo.png" alt="イメージ">
        <div class="userInfo">
            <h1><?php echo getUserName(); ?></h1>
            <h1><?php echo getUserLoginTime(); ?></h1>
        </div>
    </header>
    <div>
        <table >
            <tr class="detaName" bgcolor="#87ceeb">
                <th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th>
            </tr>
            <tr bgcolor="#e0ffff">
                <?php while ($getPostData) {
                    echo '<td>'.$getPostData["id"].'</td>';
                } ?>
            </tr>
        </table>
    </div>
    <footer id="footer">
        <span>Y&I group.inc</span>
    </footer>
</body>
</html>