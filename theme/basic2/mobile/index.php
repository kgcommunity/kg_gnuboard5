<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<script src="http://cyr.kr/tempus/jquery.flexslider.js"></script>

<style type="text/css">
/*
 * jQuery FlexSlider v2.6.0
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 and later license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 *
 */
/* ====================================================================================================================
 * FONT-FACE
 * ====================================================================================================================*/

/* ====================================================================================================================
 * RESETS
 * ====================================================================================================================*/
.flex-container a:hover,
.flex-slider a:hover {
  outline: none;
}
.slides,
.slides > li,
.flex-control-nav,
.flex-direction-nav {
  margin: 0;
  padding: 0;
  list-style: none;
}
.flex-pauseplay span {
  text-transform: capitalize;
}
/* ====================================================================================================================
 * BASE STYLES
 * ====================================================================================================================*/
.flexslider {
	width:1000px;
  margin: 0;
  padding: 0;
}
.flexslider .slides > li {
  display: none;
  -webkit-backface-visibility: hidden;
}
.flexslider .slides img {
  width: 900px;
  display: block;
  margin:auto;
  text-align:center;
}
.flexslider .slides:after {
  content: "\0020";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
html[xmlns] .flexslider .slides {
  display: block;
}
* html .flexslider .slides {
  height: 1%;
}
.no-js .flexslider .slides > li:first-child {
  display: block;
}
/* ====================================================================================================================
 * DEFAULT THEME
 * ====================================================================================================================*/
.flexslider {
  margin: 0 0 0px;

  border: 0px solid #ffffff;
  position: relative;
  zoom: 1;


}
.flexslider .slides {
	padding-top:0px;
  zoom: 1;
}
.flexslider .slides img {
  height: auto;
  -moz-user-select: none;
}
.flex-viewport {
  max-height: 609px;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
.loading .flex-viewport {
  max-height: 609px;
}
.carousel li {
  margin-right: 0px;
}
.flex-direction-nav {
  *height: 0;
}
.flex-direction-nav a {
  text-decoration: none;

  width: 40px;
  height: 80px;
  margin: -40px 0 0;
  position: absolute;
  top: 50%;
  z-index: 10;

  opacity: 0;
  cursor: pointer;
 border:0px;
}
.flex-direction-nav a:before {


}
.flex-direction-nav a.flex-next:before {

}
.flex-direction-nav .flex-prev {
background:url('http://cypass.co.kr/himgs/prev.png') no-repeat left top;
  left: 0px;
}
.flex-direction-nav .flex-next {
 background:url('http://cypass.co.kr/himgs/next.png') no-repeat left top;
  right: 0px;
  text-align: right;
}
.flexslider:hover .flex-direction-nav .flex-prev {
  opacity: 0.7;
  left: 10px;
}
.flexslider:hover .flex-direction-nav .flex-prev:hover {
  opacity: 1;
}
.flexslider:hover .flex-direction-nav .flex-next {
  opacity: 0.7;
  right: 10px;
}
.flexslider:hover .flex-direction-nav .flex-next:hover {
  opacity: 1;
}
.flex-direction-nav .flex-disabled {
  opacity: 0!important;
  filter: alpha(opacity=0);
  cursor: default;
  z-index: -1;
}
.flex-pauseplay a {
  display: block;
  width: 30px;
  height: 30px;
  position: absolute;
  bottom: 5px;
  left: 10px;
  opacity: 0;
  z-index: 10;
  overflow: hidden;
  cursor: pointer;

}
.flex-pauseplay a:before {
  font-family: "flexslider-icon";
  font-size: 20px;
  display: inline-block;
  content: '\f004';
}
.flex-pauseplay a:hover {
  opacity: 1;
}
.flex-pauseplay a.flex-play:before {
  content: '\f003';
}
.flex-control-nav {

  width: 100%;
  position: absolute;
  bottom:12px;
  text-align: center;
}
.flex-control-nav li {
  margin: 0 6px;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.flex-control-paging li a {
  width: 8px;
  height: 8px;
  display: block;
  background: #666;
  background: rgba(0, 0, 0, 0.5);
  cursor: pointer;
  text-indent: -9999px;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -o-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
}
.flex-control-paging li a:hover {
  background: #333;
  background: rgba(0, 0, 0, 0.7);
}
.flex-control-paging li a.flex-active {
  background: #000;
  background: rgba(0, 0, 0, 0.9);
  cursor: default;


}
.flex-control-thumbs {
  margin: 5px 0 0;
  position: static;
  overflow: hidden;
}
.flex-control-thumbs li {
  width: 25%;
  float: left;
  margin: 0;
}
.flex-control-thumbs img {
  width: 100%;
  height: auto;
  display: block;
  opacity: .7;
  cursor: pointer;
  -moz-user-select: none;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
.flex-control-thumbs img:hover {
  opacity: 1;
}
.flex-control-thumbs .flex-active {
  opacity: 1;
  cursor: default;
}
/* ====================================================================================================================
 * RESPONSIVE
 * ====================================================================================================================*/
@media screen and (max-width: 860px) {
  .flex-direction-nav .flex-prev {
    opacity: 1;
    left: 10px;
  }
  .flex-direction-nav .flex-next {
    opacity: 1;
    right: 10px;
  }
}




</style>

<div id="main" role="main" style="width:100%">
			  <section class="slider" style="width:100%;">
				<div class="flexslider" style="width:100%">
				  <ul class="slides">
                        <?php echo display_main('main', '_m'); ?>
						<!--<li><img src="http://cypass.co.kr/himgs/mobile/mmain01.jpg" style="width:100%;"></li>
						<li><img src="http://cypass.co.kr/himgs/mobile/mmain02.jpg" style="width:100%;"></li>
						<li><img src="http://cypass.co.kr/himgs/mobile/mmain03.jpg" style="width:100%;"></li>-->
				  </ul>
				</div>
			  </section>

			</div>


			<!-- jQuery -->



			  <!-- FlexSlider -->


			  <script type="text/javascript">

				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					randomize: "true",
						slideshowSpeed: 3000,
animationSpeed: 700,
						directionNav: "false",
						prevText:"",
						nextText:"",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>


			  <!-- Optional FlexSlider Additions -->
			  <script src="http://cypass12.cafe24.com/js/jquery.easing.js"></script>
			  <script src="http://cypass12.cafe24.com/js/jquery.mousewheel.js"></script>

<div style="width:100%;"><?php echo display_banner('17', 'b'); ?></div>

<style type="text/css">
.abtn {margin:0px;height:90px;text-align:center;width:100%;background:#263140;color:#fff;padding:7px 0px;border-bottom:1px solid #1a232f}
.aimg {width:100%;height:60px;}
.abtn a {color:#fff;}
</style>

<div class="abtn">

    <?php echo display_banner('18', 'b'); ?>
    <?php echo display_banner('19', 'b'); ?>
    <?php echo display_banner('20', 'b'); ?>
    <?php echo display_banner('21', 'b'); ?>
    <?php echo display_banner('22', 'b'); ?>
    <!--
	<div style="float:left;width:20%;text-align:center;" onclick="location.href='주소'"><div class="aimg" style="background:url('/img/icon_sms.png') no-repeat center;background-size:60%"></div><div style="margin-top:3px;letter-spacing:-1px;">문자메세지</div></div>
	<div style="float:left;width:20%;text-align:center;"><div class="aimg" style="background:url('/img/icon_blog.png') no-repeat center;background-size:60%"></div><div style="margin-top:3px;letter-spacing:-1px;">네이버 블로그</div></div>
	<div style="float:left;width:20%;text-align:center;"><div class="aimg" style="background:url('/img/icon_gree.png') no-repeat center;background-size:60%"></div><div style="margin-top:3px;letter-spacing:-1px;">대표 인사말</div></div>
	<div style="float:left;width:20%;text-align:center;"><div class="aimg" style="background:url('/img/icon_map.png') no-repeat center;background-size:60%"></div><div style="margin-top:3px;letter-spacing:-1px;">찾아오시는 길</div></div>
	<div style="float:left;width:20%;text-align:center;"><div class="aimg" style="background:url('/img/icon_notice.png') no-repeat center;background-size:60%"></div><div style="margin-top:3px;letter-spacing:-1px;">공지사항</div></div>
    -->

</div>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>