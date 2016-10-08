<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>新闻列表页面</title>
    <meta name="viewport" content="width=720,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/list.css">
    <link rel="stylesheet" type="text/css" href="css/read.css">
    <?php
    require 'config.php';
    $id=isset($_GET['id']) ? $_GET['id'] : 0;

    if( $id==0 ){
        $data=$db->query("SELECT zn.title,zn.inputtime,zh.views,zn.id
FROM  `zmit_news` zn
LEFT JOIN zmit_hits zh ON zn.id = SUBSTRING( zh.hitsid, 5 ) WHERE zh.hitsid LIKE '%C-1-%' ORDER BY zn.listorder,zn.id DESC LIMIT 8")->fetchAll();
    }
    else {
//        echo $id;
        $data=$db->query("SELECT zn.title,zn.inputtime,zh.views,zn.id
FROM  `zmit_news` zn
LEFT JOIN zmit_hits zh ON zn.id = SUBSTRING( zh.hitsid, 5 ) WHERE zh.hitsid LIKE '%C-1-%'AND zn.catid=$id ORDER BY zn.listorder,zn.id DESC LIMIT 8")->fetchAll();

//        $data = $db->query("SELECT `id`, `inputtime`, `title` FROM `zmit_news` WHERE catid =$id ORDER BY listorder,id desc LIMIT 8")->fetchAll();

    }
    ?>
</head>
<body>
<div class="allBox">
    <div class="leftNav" style="z-index: 9999">
        <div class="empty"></div>
        <a class="leftNavList" href="index.php">
            <span class="navIcon leftNavIcon1"></span>
            中梦首页
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="app.php">
            <span class="navIcon leftNavIcon2"></span>
            手机APP
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="weChat.php">
            <span class="navIcon leftNavIcon3"></span>
            微信开发
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="web.php">
            <span class="navIcon leftNavIcon4"></span>
            网站建设
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="software.php">
            <span class="navIcon leftNavIcon5"></span>
            软件开发
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="seo.php">
            <span class="navIcon leftNavIcon6"></span>
            网络推广
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="about.html">
            <span class="navIcon leftNavIcon7"></span>
            关于中梦
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="success_list.php">
            <span class="navIcon leftNavIcon8"></span>
            成功案例
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="new.php">
            <span class="navIcon leftNavIcon9"></span>
            新闻动态
        </a>
        <div class="leftNavLine"></div>
        <a class="leftNavList" href="contact.php">
            <span class="navIcon leftNavIcon10"></span>
            联系我们
        </a>
        <div class="leftNavLine"></div>
    </div>
    <div class="main">
        <div class="header">
            <div class="navBtn" ></div>
            <img class="logo" src="images/logo.png">
            <a class="phoneBtn" href="tel:0553-4925555"></a>
        </div>
        <div class="mainCon" id="mainCon" style="background:#f9f9f9">
            <div class="listBanner">
                <p class="bigWord">新闻动态</p>
                <p class="smallWord">关注互联网点滴变化 </p>
            </div>

            <div class="successNav">
                <?php if($id==0){
                    echo "<a class='ml24 successNavSel' href='new_list.php?id=0'>所有新闻</a>";
                }else{
                    echo "<a class='ml24 ' href='new_list.php?id=0'>所有新闻</a>";
                }
                if($id==13){
                    echo "<a class='successNavSel' href='new_list.php?id=13'>中梦资讯</a>";
                }else{
                    echo "<a  href='new_list.php?id=13'>中梦资讯</a>";

                }
                if($id==182){
                    echo "<a class='successNavSel' href='new_list.php?id=182'>中梦视频</a>";
                }else{
                    echo "<a  href='new_list.php?id=182'>中梦视频</a>";

                }
                if($id==14){
                    echo "<a class=' successNavSel' href='new_list.php?id=14'>行业新闻</a>";
                }else{
                    echo "<a  href='new_list.php?id=14'>行业新闻</a>";

                }
                if($id==15){
                    echo "<a class='ml24 successNavSel' href='new_list.php?id=15'>售前问题</a>";
                }else{
                    echo "<a class='ml24' href='new_list.php?id=15'>售前问题</a>";

                }
                if($id==183){
                    echo "<a class=' successNavSel' href='new_list.php?id=183'>售后问题</a>";
                }else{
                    echo "<a  href='new_list.php?id=183'>售后问题</a>";

                }
                if($id==16){
                    echo "<a class=' successNavSel' href='new_list.php?id=16'>技术文档</a>";
                }else{
                    echo "<a  href='new_list.php?id=16'>技术文档</a>";

                }
                if($id==17){
                    echo "<a class='successNavSel' href='new_list.php?id=17'>建站须知</a>";
                }else{
                    echo "<a  href='new_list.php?id=17'>建站须知</a>";

                }

                ?>

            </div>
            <div class="loadnews">


            <?php if( !empty( $data ) ) {
                foreach( $data as $value ) {
//var_dump($value);
                     ?>

                    <a href="newDetails.php?id=<?php echo $value['id']; ?>&cat_id=<?php echo $id; ?>" class="newListBox">
                        <p class="head"><?php echo $value['title']; ?></p>
                        <p class="dateTime">发布日期：<?php echo date('Y-m-d',$value['inputtime']); ?></p>
                        <p class="views">浏览：<?php echo $value['views']; ?></p>
                    </a>
                    <div class="newListBoxLine"></div>

                <?php } } ?>
            </div>
            <div class="last"></div>
            <a class="newListMore"  href="javascript:LookMore(<?php echo $id?>)">查看更多</a>

            <div class="foot">
                <p style="padding-top:30px; margin-top:0px;">Copyright © 2014-2015 中梦科技   All Right Reserved</p>
                <p>皖ICP备14003592号</p>
            </div>
        </div>
    </div>
</div>


</body>
<script type="text/javascript" src="js/zepto.min.js"></script>
<script type="text/javascript" src="js/list.js"></script>
<script src="js/islider.js"></script>
<script src="js/plugins/islider_desktop.js"></script>
<script>


    function LookMore(id){
        var news_num = $(".newListBox").length;
        console.log(news_num);
        $.post("ajaxNewsMoreList.php", {id:id,news_num:news_num}, function(result){
            $(".last").before(result);
        })
    }
</script>
