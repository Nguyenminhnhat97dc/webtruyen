<?php
 class DocTruyenModel extends DB{
     function NoiDungChuongTruyen($idchuong,$idtruyen){
         $sql="SELECT * from chuongtruyen,truyen where IdChuong=$idchuong and chuongtruyen.IdTruyen=$idtruyen and truyen.IdTruyen=chuongtruyen.IdTruyen";
         $rows = mysqli_query($this->con,$sql);
         $mang =array();
         while($row=mysqli_fetch_array($rows)){
            $mang[] =$row;
         }
         $bala = json_decode(json_encode($mang));
         foreach ($bala as $bt)
         return $bala;
     }
     function TongChuongTruyen($idtruyen){
        $sql="SELECT COUNT(IdChuong) AS TongChuong from chuongtruyen where IdTruyen=$idtruyen";
        $rows = mysqli_query($this->con,$sql);
        $mang =array();
        while($row=mysqli_fetch_array($rows)){
           $mang[] =$row;
        }
        $bala = json_decode(json_encode($mang));
        foreach ($bala as $bt)
        return $bala;
    }
 }
?>