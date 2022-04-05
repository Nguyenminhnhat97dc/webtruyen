<div class="col-xs-12 col-md-8" >
                            <div class="block block-default">
                                <div class="block-header">
                                    <h2 class="title text-uppercase text-center">mới cập nhập</h2>
                                </div>
                                <div class="block-content">
                                    <ul class="list-group">                                      
                                        <li class="list-group-item list-group-item-table">
                                            <div class=" content">                                               
                                                <div class="info">
                                                <table class="table text-capitalize">
                                                    <thead>
                                                    <tr>
                                                        <th>Truyện</th>
                                                        <th>Tác Giả</th>
                                                        <th>Chương</th>
                                                        <th>Poster</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody style="font-size:14px">
                                                        <?php foreach($data["TMCN"] as $bt){ ?>
                                                            <tr>
                                                                <td><img src="./public/images/<?php echo $bt->HinhAnh?>" alt="" style="width:30px;"> <a class="text-decoration-none px-2 d-flex p-2" href="Home/master2&id=<?php echo $bt->IdTruyen?>"><?php echo $bt->TenTruyen?></a> </td>
                                                                <td ><p class="pt-2"><?php echo $bt->TacGia?></p></td>
                                                                <td style="width:100px"><p class="pt-2"><?php echo $bt->IdChuong?></p> </td>
                                                                <td ><p class="pt-2"><?php echo $bt->NguoiDang?></p></td>
                                                            </tr>
                                                        <?php }?>
                                            
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                                         
                    </div>
                </div>
            </section>