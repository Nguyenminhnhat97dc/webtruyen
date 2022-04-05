<?php
    class News extends Controller{
        function SayHi(){
              //Model
        $teo = $this->model("TruyenModel");
        $idtruyen= $_GET["id"];
        $page=1;
        if(isset($_GET["page"])){
            $page=$_GET["page"];
        }
      //  $text = $teo->abala($id,$page);
        $bala = $teo->ThongTinTruyen($idtruyen);
        foreach ($bala as $bt);
        $bala1 = $teo->abala($idtruyen,$page);
        foreach ($bala1 as $bt1);
        //View
        //$this->view("aodep",[key=>value]) key la ten bien va value la gia tri
        $this->viewblocks("master2",[        
          "TenTruyen"=>$bt->TenTruyen,
          "TacGia"=>$bt->TacGia,
          "TrangThai"=>$bt->TrangThai,
          "TheLoai"=>$bt->TenLoai,
          "LuotXem"=>$bt->LuotXem,
          "GioiThieu"=>$bt->GioiThieu,
          "HinhAnh"=>$bt->HinhAnh,
          "ThongTinChuong"=>$teo->abala($idtruyen,$page),
          "TenFoder"=>$bt1->TenFoder,
          "id"=>$idtruyen,
          "page"=>$teo->Panigatione($idtruyen),
        ]);
        }
    }
?>