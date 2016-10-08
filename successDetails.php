<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>成功案例详情页</title>
    <meta name="viewport" content="width=720,user-scalable=0" charset="utf-8">
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
            $data = $db->query("SELECT n.id, n.title, n.inputtime,d.pictureurls, d.content FROM `zmit_picture` n LEFT JOIN `zmit_picture_data` d ON n.id = d.id  WHERE n.id = $id")->fetch();
            $isempty=$data['id'];
            if(empty($isempty)){
                echo "<script> alert('没有了！');window.history.back();</script>";
                return false;
            }
        }
        if(!empty($catid)){
            //$data['news_after']=$db->query("SELECT n.title, n.inputtime, d.content FROM `zmit_news` n LEFT JOIN `zmit_news_data` d ON n.id = d.id  WHERE n.id > " . $id ."order by n.id asc limit 0,1") -> fetch();
            $data = $db->query("SELECT n.id, n.title, n.inputtime,d.pictureurls, d.content FROM `zmit_picture` n LEFT JOIN `zmit_picture_data` d ON n.id = d.id  WHERE n.id = $id AND n.catid=$catid")->fetch();
            $isempty=$data['id'];
            if(empty($isempty)){
                echo "<script> alert('没有了！');window.history.back();</script>";
                return false;
            }
        }

    }
    ?>
    <link rel="stylesheet" type="text/css" href="css/list.css">
    <link rel="stylesheet" type="text/css" href="css/read.css">
    <style type="text/css">

    </style>
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
        <div class="mainCon" id="mainCon" style="background:#f9f9f9;">
            <div class="tapBox " style="height:685px; border-bottom:1px solid #c8c7c7;">
                <div id="iSlider-effect-wrapper" class="fl" style="height:623px; margin-top:30px;">
                    <div id="animation-effect" class="iSlider-effect" style="height:623px;"></div>
                </div>
            </div>

            <div class="details">
                <?php
                define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
                include ("global.func.php");
                $arr=string2array($data['pictureurls']);
//                var_dump($arr);
                for($i=0;$i<count($arr);$i++)
                {
                    $arr[$i]['url']."<br>";

                }
                ?>
                <p class="head"><?php echo $data['title']; ?></p>

                <p class="time">上线时间：<?php echo date('Y-m-d',$data['inputtime']); ?></p>

                <p class="con"><?php  echo $data['content'];?></p>
<!--                <img src="images/weChat.png">-->
            </div>
            <div class="last"></div>
            <div class="changePage">
                <a href="successDetails_pre.php?id_pre=<?php echo $data['id']?>&cat_id=<?php echo $catid?>" class="changePageList">
                    上一案例
                </a>
                <?php

                    echo " <a href='success_list.php?id=$catid' class='changePageList'>
                            返回列表
                           </a>";

                ?>
                <a href="successDetails_after.php?id_after=<?php echo $data['id']?>&cat_id=<?php echo $catid?>" class="changePageList">
                    下一案例
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
<script src="js/islider_banner.js"></script>
<script src="js/plugins/islider_desktop.js"></script>
<script>
$(function(){

    var pic_num=<?php echo $i ?>;
    console.log(pic_num);
    var picList = [
        {
            width: 609,
            height: 623,
            content: "<?php  echo $arr[0]['url']; ?>",
        },
        {
            width: 609,
            height: 623,
            content: "<?php  echo $arr[0]['url']; ?>",
        },
        {
            width: 609,
            height: 623,
            content: "<?php  echo $arr[0]['url']; ?>",
        },
    ];


    //all animation effect
    var islider1 = new iSlider({
        data: picList,
        dom: document.getElementById("animation-effect"),
        duration: 2000,
        animateType: 'depth',
        isAutoplay: true,
        isLooping: true,
        // isVertical: true, 是否垂直滚动
    });
    islider1.bindMouse();
})
function PreCase(catid,id){
//    console.log(case_num);
    $.post("ajaxpreCase.php", {id:id,catid:catid} , function(result){
        $('.details').hide();
        $(".last").before(result);
    })
}
</script>
