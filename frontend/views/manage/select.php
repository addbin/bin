<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
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
    <script type="text/javascript">
        function Sub(){
            var content=document.getElementById("t1").value;
            $.ajax({
                type:"POST",
                url:"index.php?r=manage/select",
                data:{content:content},
                //dataType:"json",
                success:function(data) {
                    //alert(data);
                }
            });
        }
    </script>
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
            <h1 style="text-align:center" >User</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <!--<a href="#"><i class="icon-font">&#xe003;</i>用户管理</a>-->
                    <ul class="sub-menu">
                        <li><a href="index.php?r=manage/show"><i class="icon-font">&#xe008;</i>User Query</a></li>
                        <li><a href="index.php?r=user/register"><i class="icon-font">&#xe005;</i>User Add</a></li>
                        <li><a href="index.php?r=user/login"><i class="icon-font">&#xe006;</i>Quit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php?r=user/nav">Home Page</a><span class="crumb-step">&gt;</span><span class="crumb-name">User Query</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="100">Keyword:</th>
                            <td><input class="common-text" placeholder="Keyword" name="keywords" value="" id="t1" type="text"></td>
                            <td><button  name="sub" value="search"  onclick="Sub()">Search</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"></th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Operation</th>
                        </tr>
                        <html>
                        <?php foreach ($users as $country): ?>
                            <tr>
                                <td class="tc"><input name="id[]" value="" type="checkbox"></td>
                                <td>
                                    <?= $country->id ?>
                                </td>
                                <td>
                                    <?= $country->username?>
                                </td>
                                <td>
                                    <a class="link-update" href="index.php">Modify</a>
                                    <a class="link-del" href="index.php?r=manage/delete&id=<?= $country->id?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        </html>
                    </table>
                    <div class="list-page">
                        <?= LinkPager::widget(['pagination' => $pagination]) ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>



