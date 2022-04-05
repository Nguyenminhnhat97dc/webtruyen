<?php
 class Ajax extends Controller{
    public $SreachModel;
    public $pageModel;
    public function __construct(){
         $this->SreachModel =$this->model("SreachModel");
         $this->pageModel =$this->model("TruyenModel");
    }
    public function sreach(){     
        $tentruyen = $_POST["tentruyen"];
        $a ="master2&id=".$this->SreachModel->Sreach($tentruyen)."";
        echo $this->SreachModel->Sreach($tentruyen);      
    }
    public function page(){     
        $page = $_POST["page"];
        $id =$_POST["id"];
        $bala = $this->pageModel->abala($id,$page);
        $bala = $this->pageModel->ThongTinTruyen($id);
        foreach ($bala as $bt);
        $bala1 = $this->pageModel->abala($id,$page);
        foreach ($bala1 as $bt1);
        $teo = $this->model("TruyenModel");
       $this->viewblocks("TablePanigation",[               
        "TenTruyen"=>$bt->TenTruyen,
        "TacGia"=>$bt->TacGia,
        "TrangThai"=>$bt->TrangThai,
        "TheLoai"=>$bt->TenLoai,
        "LuotXem"=>$bt->LuotXem,
        "GioiThieu"=>$bt->GioiThieu,
        "HinhAnh"=>$bt->HinhAnh,
      //  "ThongTinChuong"=>$teo->ChuongTruyen($idtruyen),
        "ThongTinChuong"=>$this->pageModel->abala($id,$page),
        "TenFoder"=>$bt1->TenFoder,
        "id"=>$id,
        "page"=>$page,
      ]);
    }
    public function DsTruyen(){
      $teo = $this->model("TruyenModel");
      $idtruyen =$_POST["id"];
      $this->viewblocks("DanhSachChuong",[
        "idtruyen"=>$idtruyen,
        "ThongTinChuong"=>$teo->ChuongTruyen($idtruyen),
      ]);
    }
    function master2(){
      //Model
      $teo = $this->model("TruyenModel");
      $idtruyen= $_POST["id"];
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
 }
?>