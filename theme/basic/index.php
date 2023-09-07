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
  <div id="main-visual" class="main_sec load-style">
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
  <div id="main-notice" class="main_sec">
    <div class="container">
      <div class="wrapper">
        <div class="main-notice-sl">
          <div class="swiper-wrapper">
            <a href="" class="swiper-slide">
              <div class="block">
                <span class="category">공지사항</span>
                <span class="date"><i></i>2023-08-10</span>
              </div>
              <div class="block2">
                <div class="block2_in">
                  <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다. 게시판 제목이 들어가는 영역입니다. 게시판 제목이 들어가는 영역입니다.</p>
                </div>
              </div>
            </a>
            <a href="" class="swiper-slide">
              <div class="block">
                <span class="category">공지사항</span>
                <span class="date"><i></i>2023-08-10</span>
              </div>
              <div class="block2">
                <div class="block2_in">
                  <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                </div>
              </div>
            </a>
            <a href="" class="swiper-slide">
              <div class="block">
                <span class="category">공지사항</span>
                <span class="date"><i></i>2023-08-10</span>
              </div>
              <div class="block2">
                <div class="block2_in">
                  <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                </div>
              </div>
            </a>
            <a href="" class="swiper-slide">
              <div class="block">
                <span class="category">공지사항</span>
                <span class="date"><i></i>2023-08-10</span>
              </div>
              <div class="block2">
                <div class="block2_in">
                  <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                </div>
              </div>
            </a>
            <a href="" class="swiper-slide">
              <div class="block">
                <span class="category">공지사항</span>
                <span class="date"><i></i>2023-08-10</span>
              </div>
              <div class="block2">
                <div class="block2_in">
                  <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-navigation">
            <div class="swiper-button-arrow swiper-button-prev"><img src="/source/img/half-arrow-left-gray1.png" alt="">PREV</div>
            <div class="swiper-button-arrow swiper-button-next">NEXT<img src="/source/img/half-arrow-right-gray1.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="main-qkmenu" class="main_sec">
    <div class="container">
      <div class="wrapper">
        <div class="main-qkmenu-ct">
          <a href="" class="main-qkmenu-list">
            <div class="main-qkmenu-icon">
              <img src="/source/img/main-qkmenu-icon1.png" alt="">
            </div>
            <p class="main-qkmenu-text">사업추진체계</p>
          </a>
          <a href="" class="main-qkmenu-list">
            <div class="main-qkmenu-icon">
              <img src="/source/img/main-qkmenu-icon2.png" alt="">
            </div>
            <p class="main-qkmenu-text">조직도</p>
          </a>
          <a href="" class="main-qkmenu-list">
            <div class="main-qkmenu-icon">
              <img src="/source/img/main-qkmenu-icon3.png" alt="">
            </div>
            <p class="main-qkmenu-text">Innovation</p>
          </a>
          <a href="" class="main-qkmenu-list">
            <div class="main-qkmenu-icon">
              <img src="/source/img/main-qkmenu-icon4.png" alt="">
            </div>
            <p class="main-qkmenu-text">Safety</p>
          </a>
          <a href="" class="main-qkmenu-list">
            <div class="main-qkmenu-icon">
              <img src="/source/img/main-qkmenu-icon5.png" alt="">
            </div>
            <p class="main-qkmenu-text">Decarbonization</p>
          </a>
          <a href="" class="main-qkmenu-list">
            <div class="main-qkmenu-icon">
              <img src="/source/img/main-qkmenu-icon6.png" alt="">
            </div>
            <p class="main-qkmenu-text">SMR관련자료</p>
          </a>
          <a href="" class="main-qkmenu-list">
            <div class="main-qkmenu-icon">
              <img src="/source/img/main-qkmenu-icon7.png" alt="">
            </div>
            <p class="main-qkmenu-text">FAQ</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div id="main-media" class="main_sec">
    <div class="container">
      <div class="wrapper">
        <div class="main-media-ct">
          <div class="main-media-top">
            <p class="title">Media Room</p>
            <div class="tab">
              <button type="button" class="tab-btn active">전체보기</button>
              <button type="button" class="tab-btn">사업단 소식</button>
              <button type="button" class="tab-btn">i-SMR 보도자료</button>
              <button type="button" class="tab-btn">SMR 뉴스레터</button>
            </div>
          </div>
          <div class="main-media-sl">
            <div class="swiper-wrapper">
              <a href="" class="swiper-slide"></a>
              <a href="" class="swiper-slide"></a>
              <a href="" class="swiper-slide"></a>
              <a href="" class="swiper-slide"></a>
              <a href="" class="swiper-slide"></a>
            </div>
            <div class="main-media-bot">
              <div class="swiper-navigation">
                <div class="swiper-button-arrow swiper-button-prev"><img src="/source/img/half-arrow-left-gray2.png" alt="">PREV</div>
                <div class="swiper-button-arrow swiper-button-next">NEXT<img src="/source/img/half-arrow-right-gray2.png" alt=""></div>
              </div>
              <a href="" class="main-media-more">LEARN MORE<img src="/source/img/round-arrow-right2.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');