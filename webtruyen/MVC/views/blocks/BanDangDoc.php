<section class="truyen-section bg-w">
                <div class="container">
                    <div class="row">                 
                        <div class="col-xs-12  col-md-4 ">
                            <div class="block block-default block-reading-list">
                                <div class="block-header">
                                    <h2 class="title text-uppercase text-center">bạn đang đọc</h2>
                                </div>
                                <div class="block-content">
                                    <ul class="list-group">
                                        <!-- start -->
                                        <?php foreach($data["BDD"] as $bt){?>
                                            <li class="abc list-group-item list-group-item-with-thumb">
                                                <div class="content ">
                                                    <img  class="img-responsive" src="./public/images/<?php echo $bt->HinhAnh?>" alt="">
                                                    <div class="info">
                                                        <h2 class="title"><a class="text-decoration-none" href="Home/master2&id=<?php echo $bt->IdTruyen?>"><?php echo $bt->TenTruyen?></a></h2>
                                                        <p>Chương 1</p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                        <!-- end -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
