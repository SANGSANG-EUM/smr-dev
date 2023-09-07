// [plugin-Swiper] 메인 비주얼 슬라이더
const mainVisualSwiper = new Swiper('.main-visual-sl', {
  // draggable: true,
  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false
  // },
  // pagination: {
  //   el: ".main-visual-sl .swiper-pagination",
  //   type: "progressbar",
  // }
});

// [plugin-Swiper] 메인 공지사항 슬라이더
const mainNoticeSwiper = new Swiper('.main-notice-sl', {
  slidesPerView: 4,
  spaceBetween: 27,
  draggable: true,
  navigation: {
    nextEl: ".main-notice-sl .swiper-button-next",
    prevEl: ".main-notice-sl .swiper-button-prev",
  },
  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false
  // },
});

// [plugin-Swiper] 메인 미디어 슬라이더
const mainMediaSwiper = new Swiper('.main-media-sl', {
  slidesPerView: 4,
  spaceBetween: 27,
  draggable: true,
  navigation: {
    nextEl: ".main-media-sl .swiper-button-next",
    prevEl: ".main-media-sl .swiper-button-prev",
  },
  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false
  // },
});

$(document).ready(function(){
  // [plugin-Match Height]
  if($(".match-height").length > 0){
    $(".match-height > *").matchHeight();
  }

  // [plugin-NiceSelect]
  if($(".nc-sel").length > 0){
    const $ncSelect = $(".nc-sel");

    $ncSelect.each(function(){
      $(this).niceSelect();
    })
  }

  // [plugin-AOS]
  AOS.init();

  // GNB 마우스오버
  const header = $("#header");
  const gnbMenu = $("#hd_gnb");
  const subNav = $("#sub_nav");
  const headerLogo = $("#hd_logo");
  const headerUtil = $("#hd_util");

  gnbMenu.on('mouseover', function (){
    subNav.slideDown(200).find('.sub_nav-depth1').matchHeight();
  });

  header.on('mouseleave', function (){
    subNav.slideUp(200);
  });

  headerLogo.on('mouseover', function (){
    subNav.slideUp(200);
  });

  headerUtil.on('mouseover', function (){
    subNav.slideUp(200);
  });

  $("#main-visual").removeClass('load-style');
}); //End Document