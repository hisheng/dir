<?php
/**
 * Created by PhpStorm.
 * User: hisheng
 * Date: 2017/6/5
 * Time: 19:11
 */
namespace Dir;

class File
{
    public $file;
    
    public function input($file){
        if ($_FILES[$file]["error"] == UPLOAD_ERR_OK) {
            $this->file = $_FILES[$file];
        }
        return $this;
    }
    
    public function moveTo($toName){
        if($this->file){
            move_uploaded_file($this->file['tmp_name'], $toName);
        }
    }
}