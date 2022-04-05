<?php
 class SreachModel extends DB{
   public function Sreach($TenTruyen){
        $sql = "SELECT Idtruyen FROM truyen where TenTruyen='$TenTruyen'";
        $rows = mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($rows)>0){
            while($row=mysqli_fetch_array($rows)){
                $mang[] =$row;
               }
            $bala = json_decode(json_encode($mang));
            foreach ($bala as $bt)
            $kq=$bt->Idtruyen;
        }
        return $kq;
    }  
 }
?>