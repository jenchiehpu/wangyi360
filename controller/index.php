<?php
try {
    require_once 'connectWangyi360.php';
    $wy_post_arr = [];
    $sql = 'select * from wy_post where post_status = 1 order by post_no desc limit 10;';
    $results = $pdo->query($sql);
    while($wy_post = $results->fetch()){
        array_push($wy_post_arr, $wy_post);
    }


} catch (PDOException $e) {
    echo "錯誤原因: ", $e->getMessage(), "<br>";
    echo "錯誤行號: ", $e->getLine(), "<br>";
}
$meta_title = '老王創業日記';
$script = 'index';
include('../view/index.php');
