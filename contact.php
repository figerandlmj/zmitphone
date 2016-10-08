<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta name="viewport" content="width=720,user-scalable=0" charset="utf-8">
    <meta name="layoutmode" content="standard" />
    <?php
    require 'config.php';
    $data = $db -> query("SELECT * FROM `zmit_site` WHERE siteid = 1")->fetch();
    ?>
    <meta name="keywords" content="<?php echo $data['keywords']; ?>" />
    <meta name="description" content="<?php echo $data['description']; ?>" />
    <title><?php echo $data['site_title']; ?></title>
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
<div class="allBox" style="min-height: 0;">
    <div class="leftNav">
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
    <div class="main" style="min-height: 0;">
        <div class="header">
            <div class="navBtn"></div>
            <img class="logo" src="images/logo.png">
            <a class="phoneBtn" href="tel:0553-4925555"></a>
        </div>
        <div class="mainCon" id="mainCon" style="min-height: 0;">
            <!-- banner -->
            
            
            

            <!-- contact -->
            <div class="contactHead" id="contactHead">
                <p class="bigWord">联系我们</p>
                <p class="smallWord">请拨打我们的联系电话，让我们为您提供最真诚的服务</p>
                <div class="line"></div>
            </div>
            <div class="contactList">
                <span>0553-3901828</span>
                <div class="contactTelIcon"></div>
            </div>
            <div class="contactList">
                <span>181 3030 1234</span>
                <div class="contactPhoneIcon"></div>
            </div>
            <div class="contactList">
                <span>123456789</span>
                <div class="contactQQIcon"></div>
            </div>
            <div class="contactList " style="width:605px; font-size:34px;">
                <span>芜湖市高新区青年创业园4号楼20层</span>
                <div class="contactadressIcon"></div>
            </div>
            <div class="foot">
                <p style="padding-top:30px; margin-top:0px;">Copyright © 2014-2015 中梦科技   All Right Reserved</p>
                <p>皖ICP备14003592号</p>
            </div>
        </div>
    </div>
</div>


</body>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script> -->
<script type="text/javascript" src="js/zepto.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src='js/hhSwipe.js' type="text/javascript"></script>
<script type="text/javascript">
    // $(function(){
    //     $()
    // })
</script>
