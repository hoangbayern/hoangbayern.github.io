<?php 
         if(is_array($suadm)){
            extract($suadm);
         }
?>

<section class="home">
<div class="box-container">
         <h1 class="heading"> Cập nhập <span>danh mục</span></h1>
            
                <form action="index.php?act=updatedm" method="post">
                    <div class="box">
                       <span> Mã loại: <br> </span>
                        <input type="text" name="maloai" class="txt" disabled>
                    </div>
                    <div class="box">
                       <span> Tên loại: <br> </span>
                        <input type="text" name="tenloai" class="txt" value="<?php if (isset($name)&&($name!="")) {
                            echo $name;
                        } ?>">
                    </div>
                    <div class="box">
                        <input type="hidden" name="id" value="<?php if (isset($id_danhmuc)&&($id_danhmuc>0)) {
                            echo $id_danhmuc;
                        } ?>">
                        <input type="submit" name="capnhap" value="Cập nhập" class="btn">
                        <input type="reset" value="Nhập lại" class="btn">
                       <a href="index.php?act=listdanhmuc"> <input type="button" class="btn" value="Danh sách"> </a>
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
</html>