#!/usr/local/bin/php -q
<?php
//php testargs.php 1 2 3 4 5

echo "测试获取参数：\n";
echo $_SERVER["argc"]."\n";
echo $_SERVER["argv"][0]."\n";
echo $_SERVER["argv"][1]."\n";
echo $_SERVER["argv"][2]."\n";
echo $_SERVER["argv"][3]."\n";
echo $_SERVER["argv"][4]."\n";
echo $_SERVER["argv"][5]."\n";
?>
