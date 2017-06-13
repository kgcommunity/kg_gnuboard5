<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>
<style type="text/css">
body	{background:#414141}
</style>
</style>
<div id="ft" style="padding:0px;margin:0px;text-align:center;">
    <div id="ft_copy">
      <?php echo display_banner('23', 'c'); ?>
      <!--  Copyright &copy; <b><?php echo $domain; ?></b> All rights reserved.<br>
      <span style="letter-spacing:-1px;">상호명 : 공간산업개발  주소 : 울산 남구 야음동 852-24 2층 대표번호 : 010-8563-5805</span>-->
    </div>
</div>



<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>