<main class="truyen-main mb-5">
           <section class="truyen-section">
                <div class="container">
                    <div class="row ">
                        <div class="abc col-xs-12 col-sm-6 col-md-4  " >
                            <div class="block">
                                <div class="block-content">
                                    <div class="text-center text-uppercase pt-2 text-secondary"><h5>Biên Tập Viên Đề Cử</h5></div>
                                    <div class="container">
                                        <div id="slider" class="carousel slide" data-ride="carousel">    
                                                 
                                            <div class="carousel-inner text-center">
                                                <?php $active="active"; foreach ($data["Silde"] as $bt) {  ?>
                                                    <div class="carousel-item <?php echo $active?>">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class=" d-flex justify-content-between py-4 px-5">
                                                                    <div class="align-self-center ">                                                                        
                                                                        <a href="Home/master2&id=<?php echo $bt->IdTruyen?>"><img  src="./public/images/<?php echo $bt->HinhAnh ?>" alt="tt" class="img-1" width="220px" height="330px" ></a>
                                                                        <h5 class="text-capitalize  primary-color text-center"><?php echo $bt->TenTruyen ?></h5>
                                                                        <p class="lead text-muted py-1"><?php echo file_get_contents("./public/truyen/".$bt->TenFoder."/GioiThieu")?></p>
                                                                    </div>                                                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php $active=""; } ?>
                                                
                                            </div>   
                                            <ol class="carousel-indicators">
                                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                                            <li data-target="#slider" data-slide-to="1"></li>
                                            <li data-target="#slider" data-slide-to="2"></li>
                                        </ol>        
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev ml-3" href="#slider" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next mr-3" href="#slider" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xs-12 col-sm-6 col-md-4 ">
                                <div class="block px-2">
                                    <div class="row row1 ">
                                            <!-- item BTV   -->
                                        <?php foreach ($data["BTV"] as $bt) { ?>
                                            <div class="col-xs-12 col-sm-6 btv-2 pt-5  ">
                                                <div class="item">
                                                        <h4 class="text-decoration-none">
                                                            <a href="Home/master2&id=<?php echo $bt->IdTruyen?>" class="text-success text-decoration-none"><?php echo $bt->TenTruyen?></a>
                                                        </h4>
                                                        <div class="view text-dark"><?php echo $bt->LuotXem?> người truy cập</div>
                                                        
                                                        <div class="abc view text-dark"><?php echo file_get_contents("./public/truyen/".$bt->TenFoder."/GioiThieu")?></div>
                                                </div>
                                            </div>
                                            
                                        <?php }?>
                                         
                                </div>
                        
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 float-right">
                            <div class="block ">
                                <div class="block-content ">
                                    <div class="text-center text-uppercase text-secondary pt-2"><h5>người đọc đề cử</h5></div>
                                    <div class="block-content align-self-center ">
                                    <?php $stt=1; foreach ($data["View"] as $bt) { ?>
                                        <div id="truyen-hot" class="px-2 " ><a class="dola text-decoration-none" href="Home/master2&id=<?php echo $bt->IdTruyen?>"><?php  echo$stt;?>: <?php echo $bt->TenTruyen;?></a>
                                        </div>
                                    <?php $stt+=1; }?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </section>