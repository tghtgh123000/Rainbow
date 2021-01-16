<?php
header("content-type:text/html;charset=utf-8");
error_reporting(E_ALL & ~E_NOTICE);

//获取单号最后一条物流
use Rainbow\Rainbow;

require_once(__DIR__ . '/Autoload.php');
require_once(__DIR__ . '/Env.php');

//项目目录
$dir = 'E:\ext\www\http\erp\admin\azazie_whs_management\classService\\';
//语言包目录
$langpackdir = 'E:\ext\www\http\erp\admin\azazie_whs_management\classService\\';
//替换方法
define("METHOD", "(new \\translate\\Translate())->translate");

$app = new Rainbow($dir, $langpackdir);
$app->langpackfilename = 'zh-cn';
if ($app->run()) {
    echo "success";
} else {
    echo "fail";
}