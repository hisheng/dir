<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/6/5
 * Time: 11:40
 */
require './../vendor/autoload.php';
$dir = new \Dir\Dir();

$files = $dir->path("D:/zimu/srts/unsaved")->gets();
var_dump($files);

foreach ($files as $file){
    var_dump(file_get_contents($file));
}