<?php
class App{
    // http://localhost/BaiTap/live/Home/SayHi/1/2/3
    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[0];
    function __construct(){
        // Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 ) 
        $arr = $this->UrlProcess();
        //Xu li controller
        if(file_exists("./MVC/controllers/".$arr[0].".php")){
            $this->controller =$arr[0];
            require_once "./MVC/controllers/".$arr[0].".php";
         //Huy controller    
            unset($arr[0]);
        }
        else
        {
            require_once "./MVC/controllers/". $this->controller.".php";
        }
       // require_once "./MVC/controllers/". $this->controller.".php";
        $this->controller = new $this->controller;
        // Xu li Action
        if(isset($arr[1])){
            //kiem tra function (tenlop,tenfunction)
            if (method_exists($this->controller,$arr[1])  ){
                $this->action =$arr[1];                
            }
            unset($arr[1]);
        }
        // Xu li Params
        // New $arr ton tai thi gan cha tri va nguoc lai
        $this->params = $arr?array_values($arr):[];
        
       // echo $this->controller."<br/>";
       // echo $this->action."<br/>";
       // print_r($this->params);
       call_user_func_array([$this->controller, $this->action], $this->params );
    }
    
    //function UrlProcess() Xu ly thanh dia chi
    function UrlProcess(){
        // Home/SayHi/1/2/3
        if(isset($_GET["url"])){
          return  explode("/",filter_var(trim($_GET["url"],"/")));           
        }
        
    }
}
?>