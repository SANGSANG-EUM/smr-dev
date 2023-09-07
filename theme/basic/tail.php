<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
</div><!-- header.php : #contents_dom -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 푸터 시작 { -->
<div id="footer" class="cf">
  <div class="container">
    <div class="wrapper">
      <div class="ft-lt">
        <a href="/" class="ft-logo">
          <img src="/source/img/logo_gray.png" alt="">
        </a>
        <p class="ft-addr">(34126) 대전광역시 유성구 엑스포로 1, 사이언스센터 13층</p>
        <p class="ft-copy">Copyrightⓒ 2023 혁신형소형모듈원자로기술개발사업단. All Rights Reserved.</p>
      </div>
      <div class="ft-rt">
        <div class="rel-site">
          <a href="https://www.msit.go.kr/index.do" target="_blank" class="rel-site-list">
            <img src="/source/img/rel-site1.png" alt="과학기술정보통신부">
          </a>
          <a href="https://www.motie.go.kr/www/main.do" target="_blank" class="rel-site-list">
            <img src="/source/img/rel-site2.png" alt="산업통산자원부">
          </a>
          <a href="https://www.iris.go.kr/main.do" target="_blank" class="rel-site-list">
            <img src="/source/img/rel-site3.png" alt="범부처통합연구지원시스템">
          </a>
        </div>
        <div class="fnb">
          <a href="" class="fnb-btn">개인정보처리방침</a>
          <a href="" class="fnb-btn">이용약관</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");