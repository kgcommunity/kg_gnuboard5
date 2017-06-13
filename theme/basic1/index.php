<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<link rel="stylesheet" type="text/css" href="/css/jqbanner.css"/>
<script src="/js/jqbanner.js" type="text/javascript"></script>

<div id="jqb_object" class="main_visual">
    <div class="jqb_slides">
        <?php echo display_main('main'); ?>
    </div>

   <div class="jqb_content">
        <div class="middle">
            <?php echo display_maintext_banner('15', 'b'); ?>
        </div>
   </div>
<!--
    <div class="jqb_bar">
        <div class="jqb_info"></div>
        <div id="btn_next" class="jqb_btn jqb_btn_next"></div>
        <div id="btn_pauseplay" class="jqb_btn jqb_btn_pause"></div>
        <div id="btn_prev" class="jqb_btn jqb_btn_prev"></div>
    </div>
-->
</div>

<table width=1098 cellpadding=0 cellspacing=0 border=0 align=center>
	<tr>
		<td height=20></td>
	</tr>
	<tr>
		<td width=360 valign=top>
            <div style="float:left;width:358px;border:1px solid #eaeaea;">
                <?php echo display_banner('4', 'c'); ?>
            </div>
		</td>
		<td width=9></td>
		<td width=360 valign=top>
            <div style="float:left;width:358px;border:1px solid #eaeaea;">
                <?php echo display_banner('5', 'c'); ?>
            </div>
		</td>
		<td width=9></td>
		<td width=360 valign=top>
            <div style="float:left;width:358px;border:1px solid #eaeaea;">
                <?php echo display_banner('6', 'c'); ?>
            </div>
        </td>
	</tr>
</table>

<table width=1098 cellpadding=0 cellspacing=0 border=0 align=center>
	<tr>
		<td height=10></td>
	</tr>
	<tr>
		<td width=360 valign=top>
            <div style="float:left;width:358px;border:1px solid #eaeaea;">
                <?php echo display_banner('7', 'c'); ?>
            </div>
		</td>
		<td width=9></td>
		<td width=360 valign=top>
            <div style="float:left;width:358px;border:1px solid #eaeaea;">
                <?php echo display_banner('8', 'c'); ?>
            </div>
		</td>
		<td width=9></td>
		<td width=360 valign=top>
            <div style="float:left;width:358px;border:1px solid #eaeaea;">
                <?php echo display_banner('9', 'c'); ?>
            </div>
      	</td>
	</tr>
</table>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
