<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/6/5
 * Time: 11:40
 */
require './../vendor/autoload.php';
$dir = new \Dir\Dir();

$files = $dir->path()->gets();
var_dump($files);