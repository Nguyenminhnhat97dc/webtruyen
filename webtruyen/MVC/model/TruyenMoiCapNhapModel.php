<?php
 class TruyenMoiCapNhapModel extends DB{
     function TruyenMoiCapNhap(){
        $sql = "SELECT chuongtruyen.IdTruyen,truyen.TenTruyen,truyen.TacGia,truyen.HinhAnh,chuongtruyen.IdChuong,chuongtruyen.NguoiDang  FROM truyen,chuongtruyen
        where truyen.Idtruyen=chuongtruyen.Idtruyen 
        GROUP BY truyen.IdTruyen,chuongtruyen.IdTruyen
        ORDER BY chuongtruyen.NgayDang DESC LIMIT 7";
        $rows = mysqli_query($this->con,$sql);
        $mang = array();
        while($row=mysqli_fetch_array($rows)){
        $mang[] =$row;
        }
        return json_decode(json_encode($mang));
     }
 }
?>