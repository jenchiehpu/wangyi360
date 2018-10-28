<?php
try{
    require_once 'connectWangyi360.php';
    $related_arr = [];
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
    $sql = 'select * from wy_post where tag_no = :tag_no and post_status = 1 limit 3';
    $pdoPrepare = $pdo->prepare($sql);
    $pdoPrepare->bindValue(':tag_no', $items['tag_no']);
    $pdoPrepare->execute();
    $n=0;
    while($related_article = $pdoPrepare->fetch()){
        array_push($related_arr, $related_article);

    }

}catch (PDOException $e) {
    echo "錯誤原因: ", $e->getMessage(), "<br>";
    echo "錯誤行號: ", $e->getLine(), "<br>";
}

$meta_title = $items['post_title'];
$script = 'post';
include('../view/post.php');