<?php

use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);
if(!isset($_SESSION['username'])){

    echo '<p style="font-size:24pt;color:blue;text-align:left">You should login firstly<p>';
    $url="index.php?r=user/login";
    echo "<a href=$url >Login Now</a>";
    die;
}
?>

<!doctype html>
<html>
<head>
    <title>User Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
    <?Html::cssFile('@web/css/bootstrap.css')?>
</head>
<body>
<div class="container-fluid clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <?php echo 'User:';?>
            <?php echo $_SESSION['username'];?>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <ul class="sub-menu">
                        <li><a href="<?=Url::to(['/manage/index']) ?>" style="color: #3278b3 " ><i class="icon-font">&#xe008;</i>User Query</a></li>
                        <li><a href="<?=Url::to(['/test-case/index']) ?>" style="color: #3278b3 " ><i class="icon-font">&#xe005;</i>Test-Case Query</a></li>
                        <li><a href="<?=Url::to(['/user/quit']) ?>" style="color: #3278b3 " ><i class="icon-font">&#xe006;</i>Quit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?=Url::to(['/user/nav']) ?>" >Home Page</a><span class="crumb-step">&gt;</span>
            </div>
    </div>
    <div >

        <h1 style="text-align:left; font-size:24px" > Welcome to Test-Case System</h1>
    </div>

</div>
</body>
</html>