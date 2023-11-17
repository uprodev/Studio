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
      spaceBetween: 15,
      slidesPerView: 2,
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
        nextEl: ".swiper2 .swiper-button-next",
        prevEl: ".swiper2 .swiper-button-prev",
      },
      thumbs: {
        swiper: swiperThumb,
      },
    });
  }

  $("#containerImg").twentytwenty({
    default_offset_pct: 0.5, // How much of the before image is visible when the page loads
    before_label: "BEFORE", // Set a custom before label
    after_label: "AFTER", // Set a custom after label
    // no_overlay: true, //Do not show the overlay with before and after
    // move_slider_on_hover: true, // Move slider on mouse hover?
    // move_with_handle_only: true, // Allow a user to swipe anywhere on the image to control slider movement.
    // click_to_move: false, // Allow a user to click (or tap) anywhere on the image to move the slider to that location.
  });
});
