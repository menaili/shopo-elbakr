
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 30,
    
    spaceBetween:  30,
    slidesPerGroup: 2,
    loop: true,
    loopFillGroupWithBlank: true,
    slidesPerView: 8,
    slidesPerGroup: 2,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next1",
      prevEl: ".swiper-button-prev1",
    },
    breakpoints:{
      0: {
        slidesPerView: 5,
      },
      520: {
        slidesPerView: 6,
      },
      1000: {
        slidesPerView: 8,
      }
    },
    
  });
  var swiper3 = new Swiper(".mySwiper3", {
    spaceBetween: 30,
    
    slidesPerGroup: 1,
    loop: true,
    breakpoints:{
      0: {
        slidesPerView: 1,
      },
      320: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      }
    },
    navigation: {
      nextEl: ".swiper-button-next2",
      prevEl: ".swiper-button-prev2",
    },
  });
  var swiper3 = new Swiper(".mySwiper4", {
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    
    navigation: {
      nextEl: ".swiper-button-next4",
      prevEl: ".swiper-button-prev4",
    },
    breakpoints:{
      0: {
        slidesPerView: 1,
      },
      320: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      }
    },
  });



  
 