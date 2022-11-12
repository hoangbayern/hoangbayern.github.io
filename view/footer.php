
<section class="footer">

<div class="box-container">

    <div class="box">
        <h3> groco <i class="fas fa-shopping-basket"></i> </h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
        <div class="share">
            <a href="https://www.facebook.com/RoyalVlogss" target="_blank" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> 0987082683 </a>
        <a href="#" class="links"> <i class="fas fa-phone"></i> (+84)987082683 </a>
        <a href="#" class="links vietthuong"> <i class="fas fa-envelope"></i> hoangdm2002@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Ngọc Thị,Duy Minh,Duy Tiên,Hà Nam </a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> Trang chủ </a>
        <a href="index.php?act=sanpham" class="links"> <i class="fas fa-arrow-right"></i> Sản Phẩm </a>
        <a href="index.php?act=gioithieu" class="links"> <i class="fas fa-arrow-right"></i> Giới thiệu </a>
        <a href="index.php?act=lienhe" class="links"> <i class="fas fa-arrow-right"></i> Liên hệ </a>
        <a href="index.php?act=review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
        <a href="index.php?act=blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
    </div>

    <div class="box">
        <h3>newsletter</h3>
        <p>subscribe for latest updates</p>
        <input type="email" placeholder="your email" class="email">
        <input type="submit" value="subscribe" class="btn">
        <img src="images/payment.png" class="payment-img" alt="">
    </div>

</div>

<div class="credit"> created by <span> mr. huy hoang </span> | all rights reserved </div>

</section>
        </div>
    </div>
    <script>

        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


    </script>
</body>
</html>