<?php

require 'config.php';
$id = $_POST['id'] ;
//$limit = isset($_POST['news_num']) ? $_POST['news_num'] : 0;
$limit=$_POST['news_num'];
if( $id == 0){

    $alldata = $db -> query("SELECT zn.title,zn.inputtime,zh.views,zn.id
FROM  `zmit_news` zn
LEFT JOIN zmit_hits zh ON zn.id = SUBSTRING( zh.hitsid, 5 ) WHERE zh.hitsid LIKE '%C-1-%' ORDER BY zn.listorder,zn.id DESC LIMIT $limit,4") -> fetchAll();
    if(!empty($alldata)){
        foreach($alldata as $value){
            echo " <a href='successDetails.php?id={$value['id']}&cat_id= $id' class='newListBox'>
                        <p class='head'>{$value['title']}</p>
                        <p class='dateTime'>发布日期：".date('Y-m-d',$value['inputtime']) ."</p>
                        <p class='views'>浏览： {$value['views']}</p>
                    </a>
                    <div class='newListBoxLine'></div>";
        }

    }



}
else{
    $moredata = $db -> query("SELECT zn.title,zn.inputtime,zh.views,zn.id
FROM  `zmit_news` zn
LEFT JOIN zmit_hits zh ON zn.id = SUBSTRING( zh.hitsid, 5 ) WHERE zh.hitsid LIKE '%C-1-%' AND zn.catid=$id ORDER BY zn.listorder,zn.id DESC LIMIT $limit,4") -> fetchAll();
    if(!empty($moredata)){
        foreach($moredata as $value){
            echo " <a href='successDetails.php?id={$value['id']}&cat_id= $id' class='newListBox'>
                        <p class='head'>{$value['title']}</p>
                        <p class='dateTime'>发布日期：".date('Y-m-d',$value['inputtime']) ."</p>
                        <p class='views'>浏览：{$value['views']}</p>
                    </a>
                    <div class='newListBoxLine'></div>";
        }

    }
}
?>
<!--//$json = json_encode($moredata);-->
<!--//exit($json);-->