jQuery(document).ready(function ($) {
  $(".navigation-main li").each(function () {
    if ($(this).find("ul").length) {
      $(this).addClass("parent");
    }
  });

  $(".navigation-main .parent a").on("click", function (e) {
    if ($(window).width() >= 1024) {
      return;
    }

    var $li = $(this).parent("li");
    if (!$li.hasClass("opened")) {
      e.preventDefault();
      $li.addClass("opened").find("ul").slideDown(200);
    }
  });

  $(".navbar-toggler").on("click", function () {
    $(this).toggleClass("active");
    $(".navigation-main").toggleClass("active");
    $(".navigation-main .opened").removeClass("opened").find("ul").slideUp(200);
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
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
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

  var $gridModule = $(".filter-grid").isotope({
    itemSelector: ".filter-grid .grid-item",
    layoutMode: "fitRows",
    fitRows: {
      equalheight: true,
    },
  });
  $(".cp-filter button").on("click", function () {
    $(".cp-filter button.active").removeClass("active");
    $(this).addClass("active");
    var filterValue = $(this).attr("data-filter");
    $gridModule.isotope({ filter: filterValue });
  });

  function getUrlVars() {
    var vars = [],
      hash;
    if (window.location.href.indexOf("?") !== -1) {
      var hashes = window.location.href.slice(window.location.href.indexOf("?") + 1).split("&");
      for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split("=");
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
      }
    }
    return vars;
  }

  var filters = getUrlVars();
  if (filters.length > 0) {
    var $fl = getUrlVars()["filter"];
    $gridModule.isotope({ filter: $fl });
    $(".cp-filter button.active").removeClass("active");
    $('.cp-filter button[data-filter="' + $fl + '"]').addClass("active");
  } else {
    if ($(".cp-filter").length) {
      $gridModule.isotope({ filter: ".all" });
    }
  }

  var $rowModule = $(".filter-rows").isotope({
    itemSelector: ".filter-rows .item",
    layoutMode: "vertical",
  });
  $(".cp-filter-blog button").on("click", function () {
    $(".cp-filter-blog button.active").removeClass("active");
    $(this).addClass("active");
    var filterValue = $(this).attr("data-filter");
    $rowModule.isotope({ filter: filterValue });
  });
});

function initMap() {
  if (document.getElementById("map")) {
    var mapContainer = document.getElementById("map");
    var mapCenter = {
      lat: parseFloat(mapContainer.getAttribute("data-lat")),
      lng: parseFloat(mapContainer.getAttribute("data-lng")),
    };
    map = new google.maps.Map(document.getElementById("map"), {
      center: mapCenter,
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: true,
    });
    const marker = new google.maps.Marker({
      map: map,
      position: mapCenter,
    });
  }
}
