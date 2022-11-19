<?php
$textfile = "test.txt";
$contents = "Hello, world!!";

if (is_writable($textfile)) {   
    $fp = fopen($textfile, "w");
    fwrite($fp, $contents);
    fclose($fp);
    echo "done";
}   else {
    echo "unwritable";
    exit;
}

echo "<br>";

$textfile2 = "teset2.txt";

if (is_readable($textfile2)){
  $fp2 = fopen($textfile2, "r");
  while ($line = fgets($fp2)) {
    echo $line;
    echo "<br>";
  }
  fclose($fp2);
} else {
    echo "not readable";
    exit;
}

?>