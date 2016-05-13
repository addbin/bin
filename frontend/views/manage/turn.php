<?php
/**
 * Created by PhpStorm.
 * User: shareworks
 * Date: 16/5/12
 * Time: 上午11:23
 */

session_start();
//var_dump($_SESSION['username']) ;
if(!isset($_SESSION['username'])){

    echo '<p style="font-size:24pt;color:blue;text-align:left">You should login firstly<p>';
    //header("Location:http://localhost/advanced/frontend/web/index.php?r=user/login");
    //return $this->redirect(['user/login']);
    $url="index.php?r=user/login";
    echo "<a href=$url >Login Now</a>";
    die;
}






