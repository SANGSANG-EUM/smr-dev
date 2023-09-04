<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include EUM_INCLUDE_PATH.'/menus.php';
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<!-- 헤더 시작 { -->
<div id="header">
  <div class="container">
    <div class="cf inner">
      <h1 id="hd_logo">
        <a href="/">
          <img src="/source/img/logo.png" alt="">
        </a>
      </h1>

      <nav id="hd_gnb">
        <ul class="depth1">
          <?php foreach ($sb_menus as $menu) { ?>
          <li>
            <a href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></a>
          </li>
          <?php } ?>
        </ul>
      </nav>

      <div id="hd_util">
        <ul>
          <li>
            <a href="" id="hd-lang" class="hd_util-btn">Lang</a>
          </li>
          <li>
            <a href="" id="hd-inquiry" class="hd_util-btn">Inquiry</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div id="sub_nav-dim"></div>

  <div id="sub_nav">
    <div class="inner">
      <?php foreach ($sb_menus as $menu) { ?>
      <div class="sub_nav-depth1">
        <p class="depth1-name"><?php echo $menu['name'];?></p>
        <?php if ( isset($menu['sb_2menus']) ) { ?>
        <ul class="sub_nav-depth2">
          <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
          <li>
            <a href="<?php echo $menu2['link'];?>" class="depth2-name">
              <span class="text"><?php echo $menu2['name'];?></span>
            </a>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
  </div>

</div>
<!-- } 헤더 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">