<?php

if(!isset($_SESSION['username'])){

//    echo 'You should login firstly';
//    header("Location:http://localhost/advanced/frontend/web/index.php?r=user/login");
    echo '<p style="font-size:24pt;color:blue;text-align:left">You should login firstly<p>';
    //return $this->redirect(['user/login']);
    $url="index.php?r=user/login";
    echo "<a href=$url >Login Now</a>";
    die;
}
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Management System</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css"/>
    <script type="text/javascript" src="../assets/js/libs/modernizr.min.js"></script>
</head>
<body>

<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">Back-stage Management</a></h1>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <?php echo 'User:';?>
            <?php echo $_SESSION['username'];?>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <!--<a href="#"><i class="icon-font">&#xe003;</i></a>-->
                    <ul >
                        <li><a href="index.php?r=manage/index"><i class="icon-font">&#xe008;</i>User Query</a></li>
<!--                        <li><a href="index.php?r=user/create"><i class="icon-font">&#xe005;</i>Create User</a></li>-->
                        <li><a href="index.php?r=user/quit"><i class="icon-font">&#xe006;</i>Quit</a></li>
                    </ul>
                </li>
               <!-- <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>-->
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <!--/main-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="index.php?r=user/nav">Home Page</a><span class="crumb-step">&gt;</span>
            </div>
    </div>
    <div height="300px">
        <p align="center"> Welcome</p>
    </div>

</div>
</body>
</html>