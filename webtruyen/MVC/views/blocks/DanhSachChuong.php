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
                                <?php include "Formatdate.php"; foreach($data["ThongTinChuong"] as $bt){ ?>
                                    <tr class="text-secondary" >
                                        <td class="table-links"><a class="text-dark font-weight-bold" href="DocTruyen&idtruyen=<?php echo $bt->IdTruyen?>&idchuong=<?php echo $bt->IdChuong?>"><?php echo $bt->IdChuong?></a></td>
                                        <td class="table-links"><a class="text-dark font-weight-bold" href=""><?php echo formatDate($bt->NgayDang)?></a></td>
                                        <td class="table-links"><a class="text-dark font-weight-bold" href=""><?php echo $bt->LuotXemChuong?></a></td>
                                        <td class="table-links"><a class="text-dark font-weight-bold" href=""><?php echo $bt->NguoiDang?></a></td>
                                    </tr>
                                <?php }?> 
                                </tbody>
                            </table>                                    
                        </div>
               </div>
            </div>
            