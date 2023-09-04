<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div id="main" class="contents_wrap">
  <div id="main-visual" class="main_sec">
    <div class="container">
      <div class="main-visual-sl">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide1">
            <div class="main-visual-ct">
              <p class="main-visual-txt">Innovative Small Modular Reactor <br/>Development Agency</p>
            </div>
          </div>
          <div class="swiper-slide slide2">
            <div class="main-visual-ct">
              <p class="main-visual-txt">Innovative Small Modular Reactor <br/>Development Agency</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');