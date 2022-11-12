<!-- Home -->
 <section class="home" id="home"> 
        <div class="content">
        <h3>smart phone <span>Technology</span> products for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
        <a href="index.php?act=product" class="btn">shop now</a>
        </div>
    </section>
<!-- Features -->
    <section class="features" id="features">
               <h1 class="heading"> our <span>features</span></h1>
               <div class="box-container">
                <div class="box">
                    <img src="images/Technology.png" alt="">
                    <h3>technology smart</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                    <a href="#" class="btn">read more</a>
                </div>
                <div class="box">
                    <img src="images/feature-img-2.png" alt="">
                    <h3>free delivery</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                    <a href="#" class="btn">read more</a>
                </div>
                <div class="box">
                    <img src="images/feature-img-3.png" alt="">
                    <h3>easy payments</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
                    <a href="#" class="btn">read more</a>
                </div>
               </div>
    </section>

    <!-- Products  -->
    <section class="features" id="features">
               <h1 class="heading"> our <span>products</span></h1>
               <div class="box-container">
               <?php
                                 foreach ($spnew as $sp) {
                                  extract($sp);
                                  $linksp = "index.php?act=chitiet_product&idsp=".$id_sanpham;
                                  $img = "upload/".$img;
                                  echo '
                                  <a href="'.$linksp.'">
                                  <div class="box">
                                  <img src="'.$img.'">
                                  <h3>'.$name.'</h3>
                                  <div class="price">'.$price.'<span style="text-decoration:line-through ; color: gray; font-size: 1.5rem;">15.490.000 ₫</span></div>
                                  <div class="stars">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star-half-alt"></i>
                                  </div>
                                  
                              </div>
                              </a>
                                  ';
                                 }
                    ?>
               
               </div>
    </section>

   