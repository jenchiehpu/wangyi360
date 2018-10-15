<?php
try{
    require_once 'connectWangyi360.php';

    $sql = 'select * from wy_post where post_no = :post_no;';
    $pdoPrepare = $pdo->prepare($sql);
    $pdoPrepare->bindValue(':post_no', $_GET['no']);
    $pdoPrepare->execute();
    $items = $pdoPrepare->fetch();
    $sql = 'select * from wy_column where column_no = :column_no;';
    $pdoPrepare = $pdo->prepare($sql);
    $pdoPrepare->bindValue(':column_no', $items['column_no']);
    $pdoPrepare->execute();
    $column = $pdoPrepare->fetch();

}catch (PDOException $e) {
    echo "錯誤原因: ", $e->getMessage(), "<br>";
    echo "錯誤行號: ", $e->getLine(), "<br>";
}

$meta_title = $items['post_title'];
$script = 'post';
include('../view/post.php');