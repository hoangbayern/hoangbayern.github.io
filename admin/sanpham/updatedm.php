<?php 
         if(is_array($suasp)){
            extract($suasp);
         }
         $hinhpath = "../upload/".$img;
              if(is_file($hinhpath)){
                    $img = "<img src='".$hinhpath."' height='80px'>";
                  }
                  else{
                    $img = "no photo";
                      }
?>


<section class="home">
     <div class="box-container">
     <h1 class="heading"> Cập nhập <span>sản phẩm</span></h1>
            <div class="box">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                 <div class="row mbcontent">
                       <span>Danh mục: <br> </span>
                        <select name="iddm">
                        <?php 
                                 foreach ($listdanhmuc as $danhmuc) {
                                    
                                   echo '
                                    <option value="'.$danhmuc['id_danhmuc'].'">'.$danhmuc['name'].'</option>
                                    ';    
                                  
                                 }
                            ?>
                        </select>
                    </div>
                <div class="box">
                        <span>Mã sản phẩm: </span> <br>
                        <input type="text" name="masanpham" class="txt" disabled>
                    </div>
                    <div class="box">
                       <span> Tên sản phẩm: </span> <br>
                        <input type="text" name="tensanpham" class="txt" value="<?php if (isset($name)&&($name!="")) {
                            echo $name;
                        } ?>">
                    </div>
                    <div class="box">
                       <span> Hình ảnh sản phẩm: </span> <br>
                        <input type="file" name="imgsanpham" class="txt">
                        <span> <?php
                            echo $img;
                         ?> </span>
                    </div>
                    <div class="box">
                        <span> Giá sản phẩm: </span> <br>
                        <input type="text" name="pricesanpham" class="txt" value="<?php if (isset($price)&&($price!=0)) {
                            echo $price;
                        } ?>">
                    </div>
                    <div class="box">
                       <span> Mô tả sản phẩm: </span> <br> 
                        <textarea name="dessanpham" id="editor" cols="60" rows="10"><?php if (isset($mota)&&($mota!="")) {
                            echo $mota;
                        } ?></textarea>
                    </div>
                    
                    <div class="box">
                        <input type="hidden" name="id" value="<?php echo $id_sanpham; ?>">
                        <input type="submit" name="capnhap" value="Cập nhập" class="btn">
                        <input type="reset" value="Nhập lại" class="btn">
                       <a href="index.php?act=listsanpham"> <input type="button" value="Danh sách" class="btn"> </a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao!=0)){
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
                </div>
                </section>
</body>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
                        CKEDITOR.replace( 'editor' );
                </script>
</html>