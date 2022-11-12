<section class="home">
<div>
           <h1 class="heading"> Thêm mới <span>Hàng hóa</span></h1>

            <div class="box-container">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="box">
                       <span> Danh mục: </span> <br>
                        <select name="iddm">
                            <?php 
                                 foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '
                                    <option class = "txt" value="'.$id_danhmuc.'">'.$name.'</option> 
                                    ';
                                 }
                            ?>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="box">
                       <span> Mã sản phẩm: </span> <br>
                        <input type="text" name="masanpham" disabled>
                    </div>
                    <div class="box">
                       <span> Tên sản phẩm: </span> <br>
                        <input type="text" name="tensanpham" class="txt">
                    </div>
                    <div class="box">
                       <span> Hình ảnh sản phẩm:</span> <br>
                        <input type="file" name="imgsanpham" class="txt">
                    </div>
                    <div class="box">
                        <span>Giá sản phẩm:</span> <br>
                        <input type="text" name="pricesanpham" class="txt">
                    </div>
                    <div class="box">
                       <span>Mô tả sản phẩm: </span> <br>
                        <textarea name="dessanpham" cols="60" rows="10" id="editor"></textarea>
                    </div>
                    
                    <div class="mbcontent">
                        <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary">
                        <input type="reset" value="Nhập lại" class="btn btn-primary">
                       <a href="index.php?act=listsanpham"> <input type="button" value="Danh sách" class="btn btn-primary"> </a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao!=0)){
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
        </div>
                </section>
</body>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
                        CKEDITOR.replace( 'editor' );
                </script>
</html>