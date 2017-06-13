<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
</div>

<table width=100% cellpadding=0 cellspacing=0 border=0>
	<tr>
		<td height=25></td>
	</tr>
	<tr>
		<td height=1 bgcolor="222"></tD>
	</tr>
	<tr>
		<td bgcolor="1d1d1d" height=100 align=center>
        <?php echo display_banner('10', 'c'); ?>
        </td>
	</tr>
</table>
<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>