<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/6/5
 * Time: 11:25
 */
namespace Dir;

class Dir
{
    public $path;
    private $files = [];
    
    public function __construct()
    {
        $this->path = dirname(__FILE__);
    }
    
    public function path($path = ''){
        if($path){
            $this->path = realpath($path);
        }
        return $this;
    }
    
    //取出某个 路径下面的所有文件
    public function gets(){
        //为一个目录
        $this->getPathFiles($this->path);
        return $this->files;
    }
    
    public function getPathFiles($path){
        if(is_dir($path)){
            $dh = opendir($path);
            if($dh){
                while (false !== ($file = readdir($dh))) {
                    $newPath = $path.'./'.$file;
                    if(is_file($newPath)){
                        $this->files[]  = $newPath ;
                    }
                    if(is_dir($newPath)){
                        if(($file != '.') && ($file != '..')){
                            $this->getPathFiles($newPath);
                        }
                    }
                }
                //var_dump($file);
            }
            closedir($dh);
        }
    }
    
    
}