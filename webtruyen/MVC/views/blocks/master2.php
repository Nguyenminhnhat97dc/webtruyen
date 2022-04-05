<!DOCTYPE html>
<html>
    <head>
    <?php  
    include "Formatdate.php";
    ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Truyen project</title>
        <link rel="stylesheet" href="../public/css/truyen2css.css" type="text/css">
        <link rel="stylesheet" href="public/css/truyen2css.css">
        <link href="./public/css/truyen2css.css" rel="preload" as="script" type="">
    <!-- Bottstrap css -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
  
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!--font awesome js-->
        <script src="js/all.js"></script>
        <style type="text/css">
        
        </style>
    </head>
    <body>
       <!-- Navagition -->
       <nav class="navbar navbar-expand-md navbar-light navbar-static-top">
           <div class="container">
               <a href="../Home" class="navbar-branch">
                   <img src="../public/images/logo.png" alt="Logo" height="70">
                </a>
                <!--  -->
                
                
                <!--  -->
                   <div class=" navbar-branch nav-item collapse navbar-collapse ml-3" >
                    <li class="nav-item dropdown text-capitalize" >
                        <a class="text-success" href="" id="navbarDropdown">Thể Loại</a>
                        <div class="dropdown-content">
                        <a class="dropdown-item" href="#">tiên hiệp</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">võng du</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">huyền huyễn</a>
                        </div>
                     </li>
                   </div>
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                         <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbar">
                       <ul class="navbar-nav ml-auto text-capitalize">
                            <li calss="nav-item">
                                <div class="input-group">
                                    <input method="POST" id="sreach" type="text" class="form-control" placeholder="Tìm kiếm">
                                        
                                    <div class="input-group-append">
                                        <button id="click-sreach" class="btn btn-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li calss="nav-item">
                                <a class="nav-link" href="#">Đăng Nhập</a>
                            </li>
                            <li calss="nav-item">
                                <a class="nav-link d-block d-sm-none" href="#">Tiên Hiệp</a>
                            </li>
                            <li calss="nav-item">
                                <a class="nav-link d-block d-sm-none" href="#">Võng Du</a>
                            </li>
                            <li calss="nav-item">
                                <a class="nav-link d-block d-sm-none" href="#">huyền huyễn</a>
                            </li>
                       </ul>
                   </div>
           </div>
       </nav>
       <!--End of Navagition -->
       <main class="truyen-main">
           <section class="truyen-section">
                <div class="container">
                    <div class="row py-4 ">
                        <div class="col-10 col-xs-12 col-md-4 col-sm-10 ">
                            <img src="../public/images/<?php echo $data["HinhAnh"];?>" alt="#" width="300px" height="400px">
                        </div>
                        <div class="col-10 col-xs-12 col-md-8 col-sm-10 text-capitalize">
                            <dl>
                                <dt>Tên Truyện</dt>
                                <dd><?php echo $data["TenTruyen"]?></dd>
                                <dt><i class="fa fa-user"></i> Tác Giả</dt>
                                <dd><?php echo $data["TacGia"]?> </dd>
                                <dt><i class="fa fa-rss"></i> trạng thái</dt>
                                <dd><?php echo $data["TrangThai"]?></dd>
                                <dt><i class="fa fa-tags"></i> Thể loại</dt>
                                <dd><?php echo $data["TheLoai"]?></dd>
                                <dt><i class="fa fa-eye"></i> Lượt Xem</dt>
                                <dd><?php echo $data["LuotXem"]?></dd>
                            </dl>
                            <div class=" col-md-8 d-flex">
                                <div class=" col-3 d-flex">
                                    <a href="DocTruyen&idtruyen=<?php echo $data["id"]?>&idchuong=1" class=" btn btn-secondary  justify-content-center text-light">Đọc Truyện </a>
                                </div>
                                <div class=" col-3 d-flex">
                                    <div id="DS-Chuong" href="" class=" btn btn-secondary  justify-content-center text-light">DS Chương</div>
                                </div>
                                <div class=" col-3 d-flex">
                                    <div id="NoiDung" href="" class=" btn btn-secondary  justify-content-center text-light">Nội Dung</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
           </section>
           <!--gioi thieu ve truyen -->
           <div id="DS-Chuong-Change">
                <section  class="truyen-section bg-w">
                        <div class="container">
                            <div class="row py-4 ">
                            <div class="col-10 ">
                                <h2 class="list-title">
                                    <i class="fas fa-file-alt"></i> Nội Dung
                                </h2>
                                
                                <hr>
                                <p><?php 
                                    $file= fopen("./public/truyen/".$data["TenFoder"]."/GioiThieu","r");
                                    //Output lines until EOF is reached
                                    // EOF = end of file
                                    while( ! feof($file) ){
                                        $line = fgets($file);
                                        echo $line."<br>";
                                    }
                                ?></p>
                            </div>
                        </div>
                        </div>
                </section>
                <section class="truyen-section bg-w">
                    <div class="container">
                        <div class="row py-4 ">
                            <div class="col-12 ">
                                <h2 class="list-title">
                                    <i class="fa fa-list"></i> Chương mới cập nhập
                                </h2>
                                <hr>
                                <table id="table" class="table text-center text-capitalize">
                                    <thead>
                                        <tr>
                                        <th scope="col">Số Chương</th>
                                        <th scope="col">Cập nhập</th>
                                        <th scope="col">Lượt xem</th>
                                        <th scope="col">Người đăng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data["ThongTinChuong"] as $bt){ ?>
                                        <tr class="text-secondary" >
                                            <td class="table-links"><a class="text-dark font-weight-bold" href="DocTruyen&idtruyen=<?php echo $bt->IdTruyen?>&idchuong=<?php echo $bt->IdChuong?>"><?php echo $bt->IdChuong?></a></td>
                                            <td class="table-links"><a class="text-dark font-weight-bold" href=""><?php echo formatDate($bt->NgayDang)?></a></td>
                                            <td class="table-links"><a class="text-dark font-weight-bold" href=""><?php echo $bt->LuotXemChuong?></a></td>
                                            <td class="table-links"><a class="text-dark font-weight-bold" href=""><?php echo $bt->NguoiDang?></a></td>
                                        </tr>
                                    <?php }?> 
                                    </tbody>
                                </table>       
                                    <div id="tala1" class="btn btn-primary">1</div>
                                    <div id="tala2" class="btn btn-primary">2</div> 
                                    <div id="tala3" class="btn btn-primary">3</div>                           
                            </div>
                    </div>
                    </div>
                </section>
                <section class="truyen-section bg-w">
                    <div class="container">
                        <div class="row py-4 ">
                        <div class="col-12">
                            <h2 class="list-title">
                                <i class="fas fa-file-alt"></i> Bình Luận
                            </h2>
                            <hr>
                            <div style="height: 100px; width: 100%; border: 5px black;">
                                    <textarea id="sampletext" rows="4" cols="30" style="height: 100px; width: 100%; font-size: 24px;" ></textarea>
                            </div>
                            <div class="d-flex flex-row-reverse bd-highlight mb-3">
                                <div class="col-1 bd-highlight btn btn-secondary  justify-content-center text-light">Gửi</div>
                                
                            </div>
                        </div>
                        <div class="col-12" >
                                <div class="py-4">
                                    <div class=" author">
                                        <img src="../public/images/tien_luc.jpg" alt="tt" style="display: inline;  width: 40px;height: 40px;
                                        cursor:pointer;" id="img-review">
                                        <span class="traloi" style="  max-width: 100%; height: 20px;">Trả Lời</span>
                                    </div>
                                <div class="item review">
                                        <span class="id">Satanichia</span>
                                        <span class="thanhvien">Thành viên</span>
                                        <abbr title=""><i class="fa fa-clock"></i> 9 giờ trước</abbr>
                                        <span class="chap">chap 1</span>
                                        <div>
                                            tryen hay
                                        </div>
                                </div>
                                </div>
                                <div class="py-4">
                                <div class=" author">
                                    <img src="../public/images/van_co_de_de_than_nhan.jpg" alt="tt" style="display: inline;  width: 40px;height: 40px;
                                    cursor:pointer;" id="img-review">
                                    <span class="traloi" style="  max-width: 100%; height: 20px;">Trả Lời</span>
                                    </div>
                                    <div class="item review">
                                            <span class="id">Satani</span>
                                            <span class="thanhvien">Thành viên</span>
                                            <abbr title=""><i class="fa fa-clock"></i> 10 giờ trước</abbr>
                                            <span class="chap">chap 4</span>
                                            <div>
                                                Truyện tranh Thân Thủ Đệ Nhất
                                                <br>
                                                Kiếm được cập nhật nhanh và đầy đủ nhất tại
                                            </div>
                                    </div>
                                </div>
                                <div class="py-4">
                                    <div class=" author">
                                    <img src="../public/images/yeu_long_co_de.jpg" alt="tt" style="display: inline;  width: 40px;height: 40px;
                                    cursor:pointer;" id="img-review">
                                    <span class="traloi" style="  max-width: 100%; height: 20px;">Trả Lời</span>
                                    </div>
                                    <div class="item review">
                                            <span class="id">Teamcola</span>
                                            <span class="thanhvien">Thành viên</span>
                                            <abbr title=""><i class="fa fa-clock"></i> 1 ngày trước</abbr>
                                            <span class="chap">chap 1</span>
                                            <div>
                                                tryen hay admin nhanh cập nhập chap mới lẹ đi
                                            </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    </div>
                </section>
            </div>
       </main>
       <script src="../public/js/script.js"></script>
    </body>
</html>