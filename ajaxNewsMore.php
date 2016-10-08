<?php

require 'config.php';

$id = isset($_POST['id']) ? $_POST['id'] : 0;
//$limit = isset($_POST['news_num']) ? $_POST['news_num'] : 0;
$limit=$_POST['news_num'];
$allnews=$_POST['allnews'];
if( $id == 0){
    if($allnews){
        $alldata = $db -> query("SELECT `id`,`title` FROM `zmit_news` ORDER BY listorder,id desc LIMIT $limit,4") -> fetchAll();
        if(!empty($alldata)){
            foreach($alldata as $value){
                echo "<a class='newsList' href='newDetails.php?id={$value['id']}'>{$value['title']}</a>";
            }

        }
    }else{
        echo "<script> alert('非法访问！');parent.location.href='index.php'; </script>";
    }


}
else {
    $moredata = $db -> query("SELECT `id`,`title` FROM `zmit_news` WHERE catid =  $id  ORDER BY listorder,id desc LIMIT $limit,4") -> fetchAll();
    ?>
    <?php if( !empty( $moredata ) ) {
        foreach( $moredata as $value ) {
            if($id==13){//加载中梦新闻，这里单独写出来，中梦新闻有小图标
            ?>

            <a class="newsList" href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=<?php echo $id;?>">
                <span class="icon1"></span>
                <?php echo $value['title']; ?>

            </a>

        <?php
            }
            if($id==182){//加载视频，这里单独写出来，视频有小图标
                ?>

                <a class="newsList" href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=<?php echo $id;?>">
                    <span class="icon2"></span>
                    <?php echo $value['title']; ?>

                </a>

                <?php
            }
           if($id!=13&&$id!=182){
                ?>

                <a class="newsList" href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=<?php echo $id;?>">
<!--                    <span class="icon1"></span>-->
                    <?php echo $value['title']; ?>

                </a>

                <?php
            }
        }
    }
    ?>
<?php
}
?>
<!--//$json = json_encode($moredata);-->
<!--//exit($json);-->