<?php
//extends Controller ke thua  lop controller trong core
class Home extends Controller{
   /* public function __construct(){
        $this->CategoryModel = $this->model("CategoryModel");
    }*/
    function SayHi(){
        //Model
        $teo = $this->model("DeCuModel");
        $teo1 =$this->model("BanDangDocModel");
        $teo2 =$this->model("TruyenMoiCapNhapModel");
        //View
        //$this->view("aodep",[key=>value]) key la ten bien va value la gia tri
        $this->viewblocks("master",[
            "BTV"=>$teo->BtvDeCu(),
            "View"=>$teo->ViewDeCu(),
            "Silde"=>$teo->Slide(),
            "BDD"=>$teo1->RanDom(),
            "TMCN"=>$teo2->TruyenMoiCapNhap(),
            ]);
    }
    function master2(){
        //Model
        $teo = $this->model("TruyenModel");
        $idtruyen= $_GET["id"];
        $page=1;
        if(isset($_GET["page"])){
            $page=$_GET["page"];
        }
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
    function DocTruyen(){
        $teo = $this->model("DocTruyenModel");
        $idchuong=$_GET["idchuong"];
        $idtruyen=$_GET["idtruyen"];
        $bala = $teo->NoiDungChuongTruyen($idchuong,$idtruyen);
        foreach ($bala as $bt);
        $bala1 =$teo->TongChuongTruyen($idtruyen);
        foreach ($bala1 as $bt1);
        $this->viewblocks("DocTruyen",[  
            "IdTruyen"=>$bt->IdTruyen,      
            "TenTruyen"=>$bt->TenTruyen,
            "IdChuong"=>$bt->IdChuong,
            "TenChuong"=>$bt->TenChuong,
            "TenFoder"=>$bt->TenFoder,
            "TongChuong"=>$bt1->TongChuong,
          ]);
    }
}
?>