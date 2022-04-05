<?php
 class TruyenModel extends DB{
     function ThongTinTruyen($idtruyen){
         $sql = "SELECT * from truyen,loaitruyen where IdTruyen=$idtruyen and  truyen.IdLoaiTruyen=loaitruyen.IdLoaiTruyen";
         $rows = mysqli_query($this->con,$sql);
         $mang = array();
         while($row=mysqli_fetch_array($rows)){
         $mang[] =$row;
        }
         $bala = json_decode(json_encode($mang));
         foreach ($bala as $bt)
         return $bala;
       // return $rows;
     }
     function ChuongTruyen($id){
        $sql= "SELECT * from chuongtruyen,truyen where chuongtruyen.IdTruyen=$id and chuongtruyen.IdTruyen=truyen.IdTruyen";
        $rows = mysqli_query($this->con,$sql);
        $mang = array();
        while($row=mysqli_fetch_array($rows)){
         $mang[] =$row;
        }
        $bala = json_decode(json_encode($mang));
        foreach ($bala as $bt)
        return $bala;
     }
     function Panigatione($id){
        $limit =5;
        $page =isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page -1) * $limit;
        $sql= "SELECT count(IdChuong) AS id from chuongtruyen,truyen where chuongtruyen.IdTruyen=truyen.IdTruyen and chuongtruyen.Idtruyen=$id";
        $rows = mysqli_query($this->con,$sql);
        $mang = array();
         while($row=mysqli_fetch_array($rows)){
         $mang[] =$row;
        }
        $bala = json_decode(json_encode($mang));
        foreach ($bala as $bt) 
        $total =$bt->id;
        $pages = ceil($total/$limit);
        return $pages;
    }
    function abala($id,$page){
       $sotin1trang =5;
       settype($page, "integer");
       $from =($page -1) * $sotin1trang;
       $sql= "SELECT * from chuongtruyen,truyen where chuongtruyen.IdTruyen=$id and chuongtruyen.IdTruyen=truyen.IdTruyen
                ORDER By IdChuong DESC LIMIT $from,$sotin1trang";
       $rows = mysqli_query($this->con,$sql);
       $mang = array();
       while($row=mysqli_fetch_array($rows)){
        $mang[] =$row;
       }
       $bala = json_decode(json_encode($mang));
       foreach ($bala as $bt)
       return $bala;
    }
 }
?>