<?php

include 'MateTool.php';


    $fileName = __DIR__.'/db/qqwry.dat';// 纯真数据库
    $Mate = new MateTool($fileName);

//读纯真ip数据
$IP1 = '202.101.42.247';//火速

$IP2 = '202.96.128.68';//广州
//$IP2 = '220.181.163.22';//北京

$IP3 = '74.200.250.146';//美国

$IP1 = pack('N', intval(ip2long($IP1)));
$IP2 = pack('N', intval(ip2long($IP2)));
$IP3 = pack('N', intval(ip2long($IP3)));

    $result1 = $Mate->mateIpToCountry($IP1);
    var_dump($result1);
    echo '开始'.$Mate->classStartTime.'<br>';
    echo '开始时间'.$Mate->startTime.'<br>';
    echo '结束时间'.$Mate->endTime.'<br>';
    var_dump($Mate->time);
    echo "<hr>";
/*
    $result2 = $Mate->mateIpToCountry($IP2);
    //var_dump($IP2);
    var_dump($result2);
    echo '开始'.$Mate->classStartTime.'<br>';
    echo '开始时间'.$Mate->startTime.'<br>';
    echo '结束时间'.$Mate->endTime.'<br>';
    var_dump($Mate->time);
    echo "<hr>";

    $result3 = $Mate->mateIpToCountry($IP3);
    //var_dump($IP3);
    var_dump($result3);
    echo '开始'.$Mate->classStartTime.'<br>';
    echo '开始时间'.$Mate->startTime.'<br>';
    echo '结束时间'.$Mate->endTime.'<br>';
    var_dump($Mate->time);
    echo "<hr>";
*/
?>