jQuery(document).ready(function ($) {
  $(".navbar-toggler").on("click", function () {
    $(this).toggleClass("active");
    $(".navigation-main").toggleClass("active");
  });

  $(".block-hero .scroll-down").on("click", function (e) {
    e.preventDefault();
    var nextSection = $(".block-hero").next();
    $("html, body").animate({ scrollTop: nextSection.offset().top - $(".header").outerHeight() }, 500);
  });

  if ($(".cp-image-slider").length) {
    const swiperImg = new Swiper(".cp-image-slider .swiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: ".cp-image-slider .swiper-pagination",
        clickable: true,
      },
    });
  }

  if ($(".cp-slider-two-items").length) {
    document.querySelectorAll(".cp-slider-two-items").forEach((slider) => {
      const swiper2 = new Swiper(slider.querySelector(".swiper"), {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 40,
        navigation: {
          nextEl: slider.querySelector(".swiper-button-next"),
          prevEl: slider.querySelector(".swiper-button-prev"),
        },
        pagination: {
          el: slider.querySelector(".swiper-pagination"),
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
      });
    });
  }

  if ($(".cp-slider-three-items").length) {
    document.querySelectorAll(".cp-slider-three-items").forEach((slider) => {
      const swiper3 = new Swiper(slider.querySelector(".swiper"), {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 40,
        navigation: {
          nextEl: slider.querySelector(".swiper-button-next"),
          prevEl: slider.querySelector(".swiper-button-prev"),
        },
        pagination: {
          el: slider.querySelector(".swiper-pagination"),
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
            allowTouchMove: false,
          },
        },
      });
    });
  }

  if ($(".cp-slider-four-items").length) {
    document.querySelectorAll(".cp-slider-four-items").forEach((slider) => {
      const swiper3 = new Swiper(slider.querySelector(".swiper"), {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 40,
        navigation: {
          nextEl: slider.querySelector(".swiper-button-next"),
          prevEl: slider.querySelector(".swiper-button-prev"),
        },
        pagination: {
          el: slider.querySelector(".swiper-pagination"),
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 3,
            spaceBetween: 18,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 18,
            allowTouchMove: false,
          },
        },
      });
    });
  }

  if ($(".project-slider").length) {
    var swiperThumb = new Swiper(".swiper1", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 3,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        768: {
          slidesPerView: 4,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
    });
    var swiperMain = new Swiper(".swiper2", {
      loop: true,
      spaceBetween: 40,
      navigation: {
        nextEl: ".project-slider-main .swiper-button-next",
        prevEl: ".project-slider-main .swiper-button-prev",
      },
      thumbs: {
        swiper: swiperThumb,
      },
    });
  }

  $("#containerImg").twentytwenty({
    default_offset_pct: 0.5,
    before_label: "BEFORE",
    after_label: "AFTER",
  });
});
