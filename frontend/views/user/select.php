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
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
            <form action="#" method="post">
                <table class="search-tab">
                    <tr>
                        <!--<th width="120">选择分类:</th>
                        <td>
                            <select name="search-sort" id="">
                                <option value="class00">全部</option>
                                <option value="class01">运动健身</option>
                                <option value="class02">旅游</option>
                                <option value="class03">文学艺术</option>
                                <option value="class04">演讲</option>
                                <option value="class05">经济</option>
                                <option value="class06">电影</option>
                                <option value="class07">科技</option>
                                <option value="class08">美食</option>
                            </select>
                        </td>-->
                        <th width="70">关键字:</th>
                        <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                        <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a href="insert.html"><i class="icon-font"></i>新增用户</a>
                    <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>删除</a>
                    <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th class="tc" width="5%"></th>
                        <th>用户ID</th>
                        <th>用户名称</th>
                        <!--<th>课程名称</th>
                        <th>操作</th>-->
                    </tr>
                    <tr>
                        <td class="tc"><input name="id[]" value="" type="checkbox"></td>
                        <td>01</td>  <!--标签ID-->
                        <th>文学艺术</th> <!--标签名称-->
                        <td><a target="_blank" href="中国传统人生智慧.html">中国传统人生智慧</a> <!--课程名称-->
                        </td>
                        <td>
                            <a class="link-update" href="#">修改</a>
                            <a class="link-del" href="#">删除</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="tc"><input name="id[]" value="" type="checkbox"></td>
                        <td>08</td>  <!--标签ID-->
                        <td>科技</td> <!--标签名称-->
                        <td><a target="_blank" href="科学究竟是什么.html">科学究竟是什么</a>
                        </td>
                        <td>
                            <a class="link-update" href="#">修改</a>
                            <a class="link-del" href="#">删除</a>
                        </td>
                    </tr>
                </table>
                <div class="list-page">
                    2  条 1/1 页
                </div>
            </div>
        </form>
    </div>
</div>
    </body>
</html>
