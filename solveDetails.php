<?php
require 'config.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;
if( empty($id) ){
    echo "<script> alert('非法访问！');parent.location.href='index.php'; </script>";
}
else {
    $data['solve'] = $db -> query("SELECT `title`, `content` FROM `zmit_page` WHERE catid = $id") -> fetchAll();
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>解决方案详情页</title>
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
            <div class="solveBox">
                <?php if( !empty( $data['solve'] ) ) {
                    foreach( $data['solve'] as $value ) {
                        ?>

                    <p class="bigHead"><?php echo $value['title']; ?></p>
                    <div class="con">
                        <?php echo $value['content']; ?>
                    </div>
                    <?php } } ?>
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
