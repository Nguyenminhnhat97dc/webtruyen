<?php
 class DeCuModel extends DB{
   
    public function BtvDeCu(){
        //Lay DS truyện trừ 3 slide
        $sql = "SELECT  btvdecu.IdTruyen,DiemBTVDeCu,TenTruyen,HinhAnh,GioiThieu,LuotXem,TenFoder From btvdecu,truyen,chuongtruyen Where btvdecu.IdTruyen=truyen.IdTruyen and truyen.IdTruyen=chuongtruyen.IdTruyen
        GROUP by truyen.IdTruyen
        ORDER BY DiemBTVDeCu ASC LiMit 4";
        $rows = mysqli_query($this->con,$sql);
        $mang = array();
        while($row=mysqli_fetch_array($rows)){
            $mang[] =$row;
        }
        return json_decode(json_encode($mang));
       // return $rows;
    }
    public function Slide(){
        $sql = "SELECT  btvdecu.IdTruyen,DiemBTVDeCu,TenTruyen,HinhAnh,GioiThieu,LuotXem,TenFoder From btvdecu,truyen,chuongtruyen Where btvdecu.IdTruyen=truyen.IdTruyen and truyen.IdTruyen=chuongtruyen.IdTruyen
        GROUP by truyen.IdTruyen
        ORDER BY DiemBTVDeCu DESC LiMit 3";
        $rows = mysqli_query($this->con,$sql);
        $mang = array();
        while($row=mysqli_fetch_array($rows)){
            $mang[] =$row;
        }
        return json_decode(json_encode($mang));
       // return $rows;
    }
    public function ViewDeCu(){
        $sql = "SELECT  * From truyen 
                ORDER BY LuotXem DESC LIMIT 10";
        $rows = mysqli_query($this->con,$sql);
        $mang = array();
        while($row=mysqli_fetch_array($rows)){
            $mang[] =$row;
        }
        return json_decode(json_encode($mang));
       // return $rows;
    }
 }
?>