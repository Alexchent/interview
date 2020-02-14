#!/usr/local/bin/php -q
<?php
//php stdin.php 

echo "你好！你叫什么名字：\n";
$strName = fread(STDIN, 100);
echo '欢迎你'.$strName."\n";


?>
