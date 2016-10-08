
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>新闻详情页页面</title>
    <meta name="viewport" content="width=720,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/list.css">
    <link rel="stylesheet" type="text/css" href="css/read.css">
    <?php
    require 'config.php';

    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $catid=isset($_GET['cat_id']) ? $_GET['cat_id'] : 0;
    if( empty($id) ){

        echo "<script> alert('非法访问！');parent.location.href='index.php'; </script>";
    }
    else {
        if(empty($catid)){
//    echo "catid为0";
            $data = $db->query("SELECT n.id, n.title, n.inputtime, d.content FROM `zmit_news` n LEFT JOIN `zmit_news_data` d ON n.id = d.id  WHERE n.id = $id")->fetch();
            $isempty=$data['id'];
            if(empty($isempty)){
                echo "<script> alert('没有了！');window.history.back();</script>";
                return false;
            }
            $hitid="c-1-".$data['id'];
            $hit=$db->query("SELECT views FROM `zmit_hits`WHERE hitsid='$hitid'")->fetch();
        }
        if(!empty($catid)){
            //$data['news_after']=$db->query("SELECT n.title, n.inputtime, d.content FROM `zmit_news` n LEFT JOIN `zmit_news_data` d ON n.id = d.id  WHERE n.id > " . $id ."order by n.id asc limit 0,1") -> fetch();
            $data = $db->query("SELECT n.id, n.title, n.inputtime, d.content FROM `zmit_news` n LEFT JOIN `zmit_news_data` d ON n.id = d.id  WHERE n.id = $id AND n.catid=$catid")->fetch();
            $isempty=$data['id'];
            if(empty($isempty)){
                echo "<script> alert('没有了！');window.history.back();</script>";
                return false;
            }
            $hitid="c-1-".$data['id'];
            $hit=$db->query("SELECT views FROM `zmit_hits`WHERE hitsid='$hitid'")->fetch();
        }

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
            <div class="newDetails">
                <div class="newListBox" >
                    <p class="head" ><?php echo $data['title']; ?></p>
                    <p class="dateTime" >发布日期：<?php echo date('Y-m-d',$data['inputtime']); ?></p>
                    <p class="views" >浏览：<?php echo $hit['views'];?></p>
                </div>
                    <div class="con"><?php echo $data['content']; ?></div>
            </div>
            <div class="changePage">
                <a href="newDetails_pre.php?id_pre=<?php echo $data['id']?>&cat_id=<?php echo $catid?>" class="changePageList">
                    上一篇
                </a>
                <?php

                echo " <a href='new_list.php?id=$catid' class='changePageList'>
                            返回列表
                           </a>";

                ?>

                <a href="newDetails_after.php?id_after=<?php echo $data['id']?>&cat_id=<?php echo $catid?>" class="changePageList" style="border-right:none;">
                    下一篇
                </a>
            </div>
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



</script>
