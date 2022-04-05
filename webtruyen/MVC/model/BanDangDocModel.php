<?php
 class BanDangDocModel extends DB{
   public function RanDom(){
        $sql = "SELECT * FROM truyen 
        ORDER BY RAND ( ) 
        LIMIT 6";
        $rows = mysqli_query($this->con,$sql);
        $mang = array();
        while($row=mysqli_fetch_array($rows)){
        $mang[] =$row;
        }
        return json_decode(json_encode($mang));
    }  
 }
?>