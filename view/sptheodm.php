<div class="row mb">
         <div class="boxtrai mr">
         <div class="row mb">
                    <div class="boxtitle">Sản phẩm: <h1><?php echo $tendm; ?></h1></div>
                    <div class="boxcontent row">
                    <?php
                          $i=0;
                           foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id_sanpham;
                            $img = "upload/".$img;
                            if ($i==2||$i==5||$i==8) {
                              $mr = "";
                            }
                            else{
                              $mr = "mr";
                            }
                            
                            echo '
                            <div class="boxsp '.$mr.'">
                            <div class="img"><a href="'.$linksp.'"> <img src="'.$img.'" alt="" height="100%"></a></div>
                            <p>'.$price.'</p>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>  
                            ';
                            $i+=1;
                           }
                       
                    ?>
                     </div>
            </div>
            
            </div>       
         <div class="boxphai" >
               <?php  include "boxright.php"; ?>
         </div>
</div>