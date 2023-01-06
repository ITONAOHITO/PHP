<?php
require_once("pdo.php");
require_once("getData.php");

$get = new getData();
$getUserData = $get->getUserData();

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
            <h1>ようこそ<?php echo $getUserData["last_name"].$getUserData["first_name"]; ?>さん</h1>
            <h1>最終ログイン日時：<?php echo $getUserData["last_login"]; ?></h1>
        </div>
    </header>
    <div class="data">
        <table>
            <tr class="detaName" bgcolor="#87ceeb">
                <th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th>
            </tr>
            <?php foreach ($get->getPostData() as $row) : ?>
            <tr bgcolor="#e0ffff">
               <td><?php echo $row["id"]; ?></td>
               <td><?php echo $row["title"] ?></td>
               <td>
                <?php
                    if ($row["category_no"] == 1) {
                        echo "食事";
                    }   else if ($row["category_no"] == 2) {
                        echo "旅行";
                    }   else {
                        echo "その他";
                    }
                    ?>
                </td>
               <td><?php echo $row["comment"] ?></td>
               <td><?php echo $row["created"] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <footer id="footer">
        <span>Y&I group.inc</span>
    </footer>
</body>
</html>