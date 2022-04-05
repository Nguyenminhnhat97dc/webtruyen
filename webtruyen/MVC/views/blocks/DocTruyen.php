<html>
<head>
    <link rel="stylesheet" href="../public/css/Doctruyen.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">  
</head>
<body>
    <nav class="nav">
        <div class="logo">
        <a href="../Home" class="">
                   <img src="../public/images/logo.png" alt="Logo" height="70">
                </a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Projects</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <br>
    <div id="line">
        <hr>
    </div>
    <div class="container">
            <div class="container-context">
                <div class="container-context-header">
                    <a class="previous fas fa-arrow-left" href="DocTruyen&idtruyen=<?php echo $data["IdTruyen"]?>&idchuong=<?php 
                        $chuonghientai = $data["IdChuong"];  
                        if($chuonghientai==1){
                            echo $chuonghientai;
                        }
                        else
                        echo $chuonghientai-1;
                     ?>">&nbsp; chương trước</a>
                    <a class="next " href="DocTruyen&idtruyen=<?php echo $data["IdTruyen"]?>&idchuong=<?php 
                    $chuonghientai = $data["IdChuong"];
                        if($chuonghientai==$data["TongChuong"]){
                            echo $chuonghientai;
                        }
                        else
                        echo $chuonghientai+1;
                    ?>">chương sau &nbsp; <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="TenTruyen"><?php echo $data["TenTruyen"]?></div>
                <div class="Chuong">Chương <?php echo $data["IdChuong"]?>: <?php echo $data["TenChuong"]?></div>
                <div class="NoiDung-Truyen">
                    <?php 
                       //echo file_get_contents("./public/truyen/Dai_Chua_Te/1.txt");.
                       $Foder = $data["TenFoder"];                       
                       $NoiDungChuong =  $data["IdChuong"];                      
                      // $text= file_get_contents("./public/truyen/".$Foder.".$NoiDungChuong.");
                       //             $lines = explode("\n",$text);
                                    $file= fopen("./public/truyen/".$Foder."/$NoiDungChuong","r");
                                    //Output lines until EOF is reached
                                    // EOF = end of file
                                    while( ! feof($file) ){
                                        $line = fgets($file);
                                        echo $line."<br>";
                                    }
                    ?>
                </div>
            </div>
    </div>
    <br>
    <div class="footer">
            <a href="DocTruyen&idtruyen=<?php echo $data["IdTruyen"]?>&idchuong=<?php
                $chuonghientai = $data["IdChuong"];
                if($chuonghientai==1){
                    echo $chuonghientai;
                }
                else
                echo $chuonghientai-1;
            ?>" id="ChuongTruoc" class="fas fa-arrow-left">&nbsp; chương trước</a>
            <a href="DocTruyen&idtruyen=<?php echo $data["IdTruyen"]?>&idchuong=<?php
                $chuonghientai = $data["IdChuong"];
                if($chuonghientai==$data["TongChuong"]){
                    echo $chuonghientai;
                }
                else
                echo $chuonghientai+1;
            ?>" id="ChuongSau">chương sau &nbsp;<i class="fas fa-arrow-right"></i></a>
    </div>
</body>
<script src="../public/js/script.js"></script>
</html>