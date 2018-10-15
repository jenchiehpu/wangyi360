<?php include('module/before_body.php'); ?>
<?php include('module/header.php'); ?>

    <div class='container'>
        <main>
            <ul class='list_item'>
                <?php foreach($wy_post_arr as $items){ ?>
                <li>
                    <a href="/post/<?php echo $items['post_no']; ?>">
                        <div class='list_item_desc'>
                            <h3><?php echo $items['post_title']; ?></h3>
                            <p><?php echo $items['post_header']; ?></p>
                            <span class='from'><?php echo $items['column_name']; ?></span><span class='date'><?php echo $items['post_date']; ?></span>
                        </div>
                    </a>
                </li>
                <?php } ?>

            </ul>
        </main>
    </div>
<?php include('module/footer.php'); ?>
<?php include('module/after_body.php'); ?>
