


<section class="home">
<div class="box-container">
<h1 class="heading"> Thêm mới <span>danh mục</span></h1>
                <form action="index.php?act=addlh" method="post">
                <div class="box">
     <span> <label for="formGroupExampleInput">Mã loại:</label> </span>
    <input type="text" class="txt" id="formGroupExampleInput" name="maloai" disabled placeholder="Mã loại">
  </div>
  <div class="box">
    <span> <label for="formGroupExampleInput2">Tên danh mục:</label> </span>
    <input type="text" class="txt" id="formGroupExampleInput2" name="tenloai" placeholder="Tên loại">
  </div>

                    <!-- <div class="row mbcontent">
                        Mã loại: <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mbcontent">
                        Tên loại: <br>
                        <input type="text" name="tenloai">
                    </div> -->
                    <div class="mbcontent">
                        <input type="submit" name="themmoi" value="Thêm mới"  class="btn btn-dark">
                        <input type="reset" value="Nhập lại"  class="btn btn-dark">
                       <a href="index.php?act=listdanhmuc"> <input type="button" value="Danh sách"  class="btn btn-dark"> </a>
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