let searchForm = document.querySelector(".search-form");
    document.querySelector("#search-btn").onclick = () => {
                searchForm.classList.toggle("active");
                menuBtn.classList.remove("active");
                formUser.classList.remove("active");
                shopCart.classList.remove("active");
    }
let shopCart = document.querySelector(".shopping-cart");
    document.querySelector("#cart-btn").onclick = () => {
                shopCart.classList.toggle("active");
                menuBtn.classList.remove("active");
                loginForm.classList.remove("active");
                searchForm.classList.remove("active");
    }
 let formUser = document.querySelector(".form-user");
    document.querySelector("#login-btn").onclick = () => {
                formUser.classList.toggle("active");
                menuBtn.classList.remove("active");
                shopCart.classList.remove("active");
                searchForm.classList.remove("active");
    }
 let menuBtn = document.querySelector(".navbar");
    document.querySelector("#menu-btn").onclick = () => {
                menuBtn.classList.toggle("active");
                formUser.classList.remove("active");
                shopCart.classList.remove("active");
                searchForm.classList.remove("active");
    }
window.onscroll = () => {
    menuBtn.classList.remove("active");
    formUser.classList.remove("active");
    shopCart.classList.remove("active");
    searchForm.classList.remove("active");
}

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1020: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });

  var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1020: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });