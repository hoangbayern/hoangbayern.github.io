


<section class="home">
        <div class="box-container">
        <h1 class="heading"> Chi tiết <span>điện thoại</span></h1>
         <?php 
            extract($onesp);
        ?>
                    <div class="boxtitle"><?php echo $name; ?></div>
                    <div class="box">
                        <?php 
                            extract($onesp);
                            $img = "upload/".$img;
                             echo '
                             <div class="imgct"> <img src="'.$img.'" alt="" height="300px"></div>
                             <p>Price:'.$price.'</p>   
                                                       
                             ';
                             echo $mota;
                        ?>
           
            
            <h1 class="heading"> Sản phẩm <span>cùng loại</span></h1>
                    <div class="box">

                         <?php 
                                foreach ($spcungloai as $sp_cungloai) {
                                    extract($sp_cungloai);
                                    $linksp = "index.php?act=sanphamct&idsp=".$id_sanpham;
                                    $img = "upload/".$img;
                                    echo '
                                             <li>
                                                  <a href="'.$linksp.'"><img src="'.$img.'" height="50px"></a>
                                                  <a href="'.$linksp.'">'.$name.'</a>
                                             </li>
                                    ';
                                }
                         ?>

                     </div>
            </div>
            <div class="row mb">
                    <div class="boxtitle">Bình luận</div>
                    <div class="boxcontent row">
                     </div>
            </div>
             
        
                            </div>
</section>