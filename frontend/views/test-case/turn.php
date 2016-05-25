<?php
/**
 * Created by PhpStorm.
 * User: shareworks
 * Date: 16/5/12
 * Time: 上午11:23
 */
use yii\helpers\Url;

session_start();

if(!isset($_SESSION['username'])){

    echo '<p style="font-size:24pt;color:blue;text-align:left">You should login firstly<p>';
    $url=Url::to(['user/login']);
    echo "<a href=$url >Login Now</a>";
    die;
}






