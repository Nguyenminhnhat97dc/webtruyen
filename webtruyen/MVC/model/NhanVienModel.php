<?php
 class NhanVienModel extends DB{
   
    public function NhanVien(){
        $sql = "SELECT * From nhanvien";
        $result = mysqli_query($this->con,$sql);
        return $result;
    }
 }
?>