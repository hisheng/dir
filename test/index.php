<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/6/5
 * Time: 11:40
 */
require './../vendor/autoload.php';
$dir = new \Dir\Dir();


//列出 本目录下 所有的一级子列表
$clilds = $dir->path("D:/zimu/srts/unsaved")->childs();
var_dump($clilds);
exit;


//取出某个 路径下面的所有文件
$files = $dir->path("D:/zimu/srts/unsaved")->gets();
var_dump($files);




foreach ($files as $file){
    var_dump(file_get_contents($file));
}