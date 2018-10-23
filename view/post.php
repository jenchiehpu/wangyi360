<?php include('module/before_body.php');?>
<?php include('module/header.php'); ?>
    <div class="container clearfix">
        <main class='article_layout box-xs-12 box-pad-9 box-lp-9'>
            <div class='row'>
                <article>
                    <h1><?php echo $items['post_title']; ?></h1>
                    <span class='article_date'><?php echo $items['post_date']; ?></span>
                    <?php if(!empty($items['post_header'])){ ?>
                    <div class='article_summary'><?php echo $items['post_header']; ?></div>
                    <?php } ?>
                    <?php echo $items['post_content']; ?>
                </article>
            </div>
        </main>
        <aside class='box-xs-12 box-pad-3 box-lp-3'>
            <div class='row'>
                <article>
                    <p>原文發佈於微信</p>
                <?php if(!empty($column['column_qrcode'])){ ?>
                    <div class='weixin_qrcode'>
                        <img src='../static/<?php echo $column['column_qrcode']; ?>' alt='<?php echo $column['column_name']; ?>QRcode'>
                    </div>
                <?php } ?>
                    <p><?php echo $column['column_name']; ?></p>
                    <p><?php echo $column['column_account']; ?></p>
                </article>
            </div>
            <?php if(!empty($related_arr)) { ?>
            <div class='row'>
                <ol class='related_article'>
                    <?php foreach($related_arr as $i){ ?>
                    <li>
                        <a href="/post/<?php echo $i['post_no']; ?>?utm_source=wangyi360&utm_medium=relate_article&utm_campaign=post<?php echo $items['post_no'];?>">
                            <h3><?php echo $i['post_title']; ?></h3>
                            <p><?php echo $i['post_header']; ?></p>
                        </a>
                    </li>
                    <?php } ?>
                </ol>
            </div>
            <?php } ?>
        </aside>
    </div>
<?php include('module/footer.php'); ?>
<?php include('module/after_body.php'); ?>
