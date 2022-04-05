<?php
class DB{
    public $con;
    protected $servername='localhost';
    protected $username ='root';
    protected $password ="";
    protected $dbname="webtruyen1";
    private $result =Null;
    function __construct(){
        $this->con = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->con,$this->dbname);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
    /*
    // thực thi câu lệnh truy vấn :
    public function execute($sql)
    {
        $this->result = $this->con->query($sql);
        return $this->result;
    }
    //Phương thức lấy dữ liệu:
    public function getData()
    {
        $this->execute($sql);
        if($this->result){
            
            $database = myslqi_fetch_array($this->result);
        }
        else{
            $database=0;
        }
        return $database;
    }
    //Phương thức lấy toàn bộ dữ liệu
    public function getAllData($table,$sql)
    {
        $this->execute($sql);
       
            while($database1=$this->getData())
            {
                $database[] =$database1;
            }
        return $database;
    }
    // Phương thức đếm số bản ghi:
    public function num_rows(){
        if($this->result){
            $num = mysqli_num_rows($this->reult);
        }
        else{
            $num =0;
        }
        return $num;
    }*/
}
?>