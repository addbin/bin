<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
require("turn.php");
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Management System</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css"/>
    <script type="text/javascript" src="../assets/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand"></a></h1>
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
                    <ul class="sub-menu">
                        <li><a href="index.php?r=manage/show"><i class="icon-font">&#xe008;</i>User Query</a></li>
<!--                        <li><a href="index.php?r=user/create"><i class="icon-font">&#xe005;</i>Create User</a></li>-->
                        <li><a href="index.php?r=user/quit"><i class="icon-font">&#xe006;</i>Quit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <!--/main-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php?r=user/nav">Home Page</a><span class="crumb-step">&gt;</span><span class="crumb-name">User Query</span></div>
        </div>


        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="user-index">

                    <p>
                        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'username',
                            'password',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </form>
        </div>
    </div>

</body>
</html>



