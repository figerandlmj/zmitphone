<?php
require 'config.php';
$data['zmit'] = $db -> query("SELECT `id`, `title`, `inputtime` FROM `zmit_news` WHERE catid = 13 ORDER BY listorder,id desc  LIMIT 4") -> fetchAll();
$data['trade'] = $db -> query("SELECT `id`, `title`, `inputtime` FROM `zmit_news` WHERE catid = 14 ORDER BY listorder,id desc LIMIT 4") -> fetchAll();
$data['after_sale'] = $db -> query("SELECT `id`, `title`, `inputtime` FROM `zmit_news` WHERE catid = 183 ORDER BY listorder,id desc  LIMIT 4") -> fetchAll();
$data['technology'] = $db -> query("SELECT `id`, `title`, `inputtime` FROM `zmit_news` WHERE catid = 16 ORDER BY listorder,id desc  LIMIT 4") -> fetchAll();
$data['website'] = $db -> query("SELECT `id`, `title`, `inputtime` FROM `zmit_news` WHERE catid = 17 ORDER BY listorder,id desc  LIMIT 4") -> fetchAll();
$data['pre_sale']= $db -> query("SELECT `id`, `title`, `inputtime` FROM `zmit_news` WHERE catid = 15 ORDER BY listorder,id desc  LIMIT 4") -> fetchAll();
$data['video']= $db -> query("SELECT `id`, `title`, `inputtime` FROM `zmit_news` WHERE catid = 182 ORDER BY listorder,id desc LIMIT 4") -> fetchAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>新闻页面</title>
    <meta name="viewport" content="width=720,user-scalable=0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/list.css">
    <link rel="stylesheet" type="text/css" href="css/read.css">
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
                <a class="ml24" href="new_list.php?id=0">所有新闻</a>
                <a class="successNavSel" href="new_list.php?id=13">中梦资讯</a>
                <a href="new_list.php?id=182">中梦视频</a>
                <a href="new_list.php?id=14">行业新闻</a>
                <a class="ml24" href="new_list.php?id=15">售前问题</a>
                <a href="new_list.php?id=183">售后问题</a>
                <a href="new_list.php?id=16">技术文档</a>
                <a href="new_list.php?id=17">建站须知</a>
            </div>

            <div class="newBox" id="zmit_news">
                <div class="head">
                    <div class="bigWord">中梦资讯</div>
                    <div class="smallWord">关注中梦最新动态，了解中梦技术积淀</div>
                    <div class="border"></div>
                </div>
                <?php if( !empty( $data['zmit'] ) ) {
                foreach( $data['zmit'] as $value ) {
                ?>
                <a class="newsList" href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=13">
                    <span class="icon1"></span>
                    <?php echo $value['title']; ?>

                </a>
                <?php } } ?>
                <div class="last"></div>
                <a class="newMore" href="javascript:LookMore(13)">查看更多→</a>
            </div>

            <div class="newBox" id="zmit_video">
                <div class="head">
                    <div class="bigWord">中梦视频</div>
                    <div class="smallWord">树立企业理念，传播中梦文化</div>
                    <div class="border"></div>
                </div>
                <?php if( !empty( $data['video'] ) ) {
                    foreach( $data['video'] as $value ) {
                        ?>
                        <a class="newsList" href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=182">
                            <span class="icon2"></span>
                            <?php echo $value['title']; ?>

                        </a>
                    <?php } } ?>
                <div class="last"></div>
                <a class="newMore" href="javascript:LookMore(182)">查看更多→</a>
            </div>

            <div class="newBox" id="zmit_trade">
                <div class="head">
                    <div class="bigWord">行业新闻</div>
                    <div class="smallWord">洞悉行业前沿资讯，传播行业最新理念</div>
                    <div class="border"></div>
                </div>
                <?php if( !empty( $data['trade'] ) ) {
                foreach( $data['trade'] as $value ) {
                ?>
                <a href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=14" class="newsList">
                    <?php echo $value['title']; ?>

                </a>
                <?php } } ?>
                <div class="last"></div>
                <a class="newMore" href="javascript:LookMore(14)">查看更多→</a>
            </div>

            <div class="newBox" id="zmit_pre_sale">
                <div class="head">
                    <div class="bigWord">售前问题</div>
                    <div class="smallWord">售前资讯预览，一解百惑</div>
                    <div class="border"></div>
                </div>
                <?php if( !empty( $data['pre_sale'] ) ) {
                    foreach( $data['pre_sale'] as $value ) {
                        ?>
                        <a href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=15" class="newsList">
                            <?php echo $value['title']; ?>

                        </a>
                    <?php } } ?>
                <div class="last"></div>
                <a class="newMore" href="javascript:LookMore(15)">查看更多→</a>
            </div>

            <div class="newBox" id="zmit_after_sale">
                <div class="head">
                    <div class="bigWord">售后问题</div>
                    <div class="smallWord">售后业务追踪，一览无忧</div>
                    <div class="border"></div>
                </div>
                <?php if( !empty( $data['after_sale'] ) ) {
                    foreach( $data['after_sale'] as $value ) {
                        ?>
                        <a href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=183" class="newsList">
                            <?php echo $value['title']; ?>

                        </a>
                    <?php } } ?>
                <div class="last"></div>
                <a class="newMore" href="javascript:LookMore(183)">查看更多→</a>
            </div>

            <div class="newBox" id="zmit_technology">
                <div class="head">
                    <div class="bigWord">技术文档</div>
                    <div class="smallWord">中梦业务最新最常用的技术资料</div>
                    <div class="border"></div>
                </div>
                <?php if( !empty( $data['technology'] ) ) {
                    foreach( $data['technology'] as $value ) {
                        ?>
                        <a href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=16" class="newsList">
                            <?php echo $value['title']; ?>

                        </a>
                    <?php } } ?>
                <div class="last"></div>
                <a class="newMore" href="javascript:LookMore(16)">查看更多→</a>
            </div>

            <div class="newBox" id="zmit_website">
                <div class="head">
                    <div class="bigWord">建站须知</div>
                    <div class="smallWord">了解建站必备知识，让网站建设更完美</div>
                    <div class="border"></div>
                </div>
                <?php if( !empty( $data['website'] ) ) {
                    foreach( $data['website'] as $value ) {
                        ?>
                        <a href="newDetails.php?id=<?php echo $value['id'];?>&cat_id=17" class="newsList">
                            <?php echo $value['title']; ?>

                        </a>
                    <?php } } ?>
                <div class="last"></div>
                <a class="newMore" href="javascript:LookMore(17)">查看更多→</a>
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
    var picList = [
        {
            width: 540,
            height: 431,
            content: "images/software.png",
        },
        {
            width: 540,
            height: 431,
            content: "images/software2.png",
        },
        {
            width: 540,
            height: 431,
            content: "images/software2.png",
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


    function LookMore(id){
        if(id==13){

            var news_num = $("#zmit_news .newsList").length;
            console.log(news_num);
            $.post("ajaxNewsMore.php", {id:id,news_num:news_num,allnews:false}, function(result){
                $("#zmit_news .last").before(result);
            })
        }
        if(id==182){

            var news_num = $("#zmit_video .newsList").length;
            console.log(news_num);
            $.post("ajaxNewsMore.php", {id:id,news_num:news_num,allnews:false}, function(result){
                $("#zmit_video .last").before(result);
            })
        }
        if(id==14){

            var news_num = $("#zmit_trade .newsList").length;
            console.log(news_num);
            $.post("ajaxNewsMore.php", {id:id,news_num:news_num,allnews:false}, function(result){
                $("#zmit_trade .last").before(result);
            })
        }
        if(id==15){

            var news_num = $("#zmit_pre_sale .newsList").length;
            console.log(news_num);
            $.post("ajaxNewsMore.php", {id:id,news_num:news_num,allnews:false}, function(result){
                $("#zmit_pre_sale .last").before(result);
            })
        }
        if(id==183){

            var news_num = $("#zmit_after_sale .newsList").length;
            console.log(news_num);
            $.post("ajaxNewsMore.php", {id:id,news_num:news_num,allnews:false}, function(result){
                $("#zmit_after_sale .last").before(result);
            })
        }
        if(id==16){

            var news_num = $("#zmit_technology .newsList").length;
            console.log(news_num);
            $.post("ajaxNewsMore.php", {id:id,news_num:news_num,allnews:false}, function(result){
                $("#zmit_technology .last").before(result);
            })
        }
        if(id==17){

            var news_num = $("#zmit_website .newsList").length;
            console.log(news_num);
            $.post("ajaxNewsMore.php", {id:id,news_num:news_num,allnews:false}, function(result){
                $("#zmit_website .last").before(result);
            })
        }

    }
</script>
