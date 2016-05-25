
<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use frontend\assets\AppAsset;

AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestCaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Test Case Affiliateds';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
require("turn.php");
?>


<!doctype html>
<html>
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
                        <li><a href="<?=Url::to(['/test-case/index']) ?>" style="color: #3278b3 "><i class="icon-font">&#xe005;</i>Test-Case Query</a></li>
                        <li><a href="<?=Url::to(['/user/quit']) ?>" style="color: #3278b3 " ><i class="icon-font">&#xe006;</i>Quit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?=Url::to(['/user/nav']) ?>" >Home Page</a><span class="crumb-step">&gt;</span>
                <span class="crumb-name">Test-Case-Affiliated Query</span>
            </div>
        </div>



        <div class="result-wrap">
            <form name="myform" id="myform" method="post">

                <div class="test-case-affiliated-index">

                    <p>
                        <?= Html::a('Create Test Case Affiliated', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                       // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'tca_id',
                            'case_id',

                            'label',
                            'delete',
                            'created_at',
                            'updated_at',

                            ['class' => 'frontend\widgets\ActionColumn',
                                'template' => '{view}{update}{delete}',
                                'detailViewAttributes' => [

                                    'tca_id',
                                    'case_id',

                                    'label',
                                    'delete',
                                    'created_at',
                                    'updated_at',
                                ],
                            ],
                        ],
                    ]); ?>
                </div>
            </form>
        </div>
    </div>

</body>
</html>


