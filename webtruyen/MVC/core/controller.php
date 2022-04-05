<?php
class Controller{
    public function model($model){
        require_once "./MVC/model/".$model.".php";
        return new $model;
    }
    public function viewpages($view,$data=[]){
        require_once "./MVC/views/pages/".$view.".php";
    }
    public function viewblocks($view,$data=[]){
        require_once "./MVC/views/blocks/".$view.".php";
    }
    public function viewadmin(){
        require_once "./admin";
    }
}
?>